<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PersonnelRank;
use App\Models\PersonnelDetail;
use App\Models\PersonnelImage;
use Illuminate\Support\Facades\Storage;

class ManagePersonnelController extends Controller
{
    //
    public function ManagePersonnel()
    {
        $personnelAgencies = PersonnelAgency::all();

        return view('admin.post.personnel.personnel', compact('personnelAgencies'));
    }

    public function agencyCreate(Request $request)
    {
        $request->validate([
            'personnel_agency_name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        PersonnelAgency::create([
            'personnel_agency_name' => $request->personnel_agency_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'สร้างหน่วยงานสำเร็จ');
    }

    public function agencyUpdate(Request $request, $id)
    {
        $request->validate([
            'personnel_agency_name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $PersonnelAgency = PersonnelAgency::findOrFail($id);

        $PersonnelAgency->update([
            'personnel_agency_name' => $request->personnel_agency_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'แก้ไขหน่วยงานสำเร็จ');
    }

    public function agencyDelete($id)
    {
        $PersonnelAgency = PersonnelAgency::findOrFail($id);
        $PersonnelAgency->delete();

        return redirect()->back()->with('success', 'โพสถูกลบแล้ว');
    }

    public function PersonnelRankDetails($id)
    {
        $PersonnelAgency = PersonnelAgency::findOrFail($id);
        $PersonnelRank = PersonnelRank::where('personnel_agency_id', $id)->get();

        return view('admin.post.personnel.personnel_rank', compact('PersonnelAgency', 'PersonnelRank'));
    }

    public function PersonnelRankCreate(Request $request, $AgencyId)
    {
        $request->validate([
            'personnel_rank_name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        PersonnelRank::create([
            'personnel_agency_id' => $AgencyId,
            'personnel_rank_name' => $request->personnel_rank_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'สร้างหน่วยงานย่อยสำเร็จ');
    }

    public function PersonnelRankUpdate(Request $request, $id)
    {
        $request->validate([
            'personnel_rank_name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        $PersonnelRank = PersonnelRank::findOrFail($id);

        $PersonnelRank->update([
            'personnel_rank_name' => $request->personnel_rank_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'แก้ไขหน่วยงานย่อยสำเร็จ');
    }

    public function PersonnelRankDelete($id)
    {
        $PersonnelRank = PersonnelRank::findOrFail($id);
        $PersonnelRank->delete();

        return redirect()->back()->with('success', 'โพสถูกลบแล้ว');
    }

    public function PersonnelDetails($id)
    {
        $PersonnelRank = PersonnelRank::findOrFail($id);
        $PersonnelDetail = PersonnelDetail::where('personnel_rank_id', $id)
            ->with('images')
            ->get();


        return view('admin.post.personnel.personnel_details', compact('PersonnelRank', 'PersonnelDetail'));
    }

    public function PersonnelDetailsCreate(Request $request, $DetailsId)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'status' => 'required|string',
            'post_photo_file' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);

        $PersonnelDetail = PersonnelDetail::create([
            'personnel_rank_id' => $DetailsId,
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        if ($request->hasFile('post_photo_file')) {
            $file = $request->file('post_photo_file');
            $filename = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('post_photo_file', $filename, 'public');

            PersonnelImage::create([
                'personnel_detail_id' => $PersonnelDetail->id,
                'post_photo_file' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'สร้างหน่วยข้อมูลบุคลากรสำเร็จ');
    }

    public function PersonnelDetailsUpdate(Request $request, $DetailsId)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'status' => 'required|string',
            'post_photo_file' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);

        $personnelDetail = PersonnelDetail::findOrFail($DetailsId);
        $personnelDetail->update([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);

        if ($request->has('remove_image')) {
            $personnelImage = PersonnelImage::where('personnel_detail_id', $DetailsId)->first();
            if ($personnelImage) {
                Storage::disk('public')->delete($personnelImage->post_photo_file);
                $personnelImage->delete();
            }
        }

        if ($request->hasFile('post_photo_file')) {
            $file = $request->file('post_photo_file');
            $filename = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('post_photo_file', $filename, 'public');

            PersonnelImage::create([
                'personnel_detail_id' => $DetailsId,
                'post_photo_file' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'แก้ไขข้อมูลบุคลากรสำเร็จ');
    }

    public function PersonnelDetailsDelete($id)
    {
        $personnelDetail = PersonnelDetail::findOrFail($id);

        $personnelImage = PersonnelImage::where('personnel_detail_id', $id)->first();
        if ($personnelImage) {
            Storage::disk('public')->delete($personnelImage->post_photo_file);
            $personnelImage->delete();
        }

        $personnelDetail->delete();

        return redirect()->back()->with('success', 'โพสถูกลบแล้ว');
    }

    // public function PersonnelInformation()
    // {
    //     $agencies = PersonnelAgency::with([
    //         'ranks.details.images'
    //     ])->get();

    //     return view('admin.post.personnel.personnel_information.personnel_information', compact('agencies'));
    // }
}
