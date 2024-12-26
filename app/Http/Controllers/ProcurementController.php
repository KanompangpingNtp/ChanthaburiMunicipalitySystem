<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostType;
use App\Models\PostDetail;
use App\Models\PostPdf;
use Illuminate\Support\Facades\Storage;

class ProcurementController extends Controller
{
    //
    public function ProcurementHome()
    {
        $postTypes = PostType::all();

        $postTypeId = $postTypes->firstWhere('type_name', 'ประกาศจัดซื้อจัดจ้าง')->id;
        $postDetails = PostDetail::with('postType', 'pdfs')
            ->where('post_type_id', $postTypeId)
            ->get();

        return view('admin.post.procurement_announcement.post', compact('postDetails', 'postTypes'));
    }

    public function ProcurementCreate(Request $request)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'date' => 'nullable|date',
            'title_name' => 'nullable|string',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|max:10240', // ตรวจสอบขนาดไฟล์
        ]);

        $postDetail = PostDetail::create([
            'post_type_id' => $request->post_type_id,
            'date' => $request->date,
            'title_name' => $request->title_name,
        ]);

        // ตรวจสอบและอัปโหลดไฟล์ PDF
        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                if ($file->getClientOriginalExtension() !== 'pdf') {
                    return redirect()->back()->with('error', 'รองรับเฉพาะไฟล์ PDF เท่านั้น!');
                }

                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('pdf', $filename, 'public');

                PostPdf::create([
                    'post_detail_id' => $postDetail->id,
                    'post_pdf_file' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'ไฟล์ประกาศถูกเพิ่มแล้ว!');
    }

    public function ProcurementDelete($id)
    {
        // ค้นหาข้อมูล PostDetail ที่จะลบ
        $postDetail = PostDetail::findOrFail($id);

        // ลบไฟล์ PDF ที่เกี่ยวข้อง (ถ้ามี)
        $postPdfs = $postDetail->pdfs;

        foreach ($postPdfs as $pdfs) {
            // ลบไฟล์จาก storage
            if (Storage::exists('public/' . $pdfs->post_pdf_file)) {
                Storage::delete('public/' . $pdfs->post_pdf_file);
            }
        }

        $postDetail->delete();

        // ส่งกลับไปยังหน้าก่อนหน้าและแสดงข้อความสำเร็จ
        return redirect()->back()->with('success', 'โพสถูกลบแล้ว');
    }
}
