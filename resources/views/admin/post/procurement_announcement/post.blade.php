@extends('admin.layout.admin_layout')
@section('user_content')

<h2 class="text-center">ประกาศจัดซื้อจัดจ้าง</h2>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างประกาศจัดซื้อจัดจ้าง
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างประกาศจัดซื้อจัดจ้าง</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ProcurementCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'ประกาศจัดซื้อจัดจ้าง')->id }}">
                        <label for="date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="title_name" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="title_name" name="title_name">
                    </div>

                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br><br>
<table class="table table-bordered">
    <thead class="text-center">
        <tr>
            <th>#</th>
            <th>ประเภท</th>
            <th>วันที่</th>
            <th>ชื่อ</th>
            <th>ไฟล์ PDF</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($postDetails as $index => $postDetail)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $postDetail->postType->type_name ?? 'N/A' }}</td>
            <td>{{ $postDetail->date ?? 'N/A' }}</td>
            <td> {{ $postDetail->title_name ?? 'N/A' }} </td>
            <td>
                @foreach ($postDetail->pdfs as $pdf)
                <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">
                    {{ basename($pdf->post_pdf_file) }}
                </a><br>
                @endforeach
            </td>
            <td class="text-center">
                <form action="{{ route('ProcurementDelete', $postDetail->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">ลบ</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">ไม่พบข้อมูล</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
