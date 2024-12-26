<style>
    .bg-page6 {
        background-image: url('{{ asset('images/pages/6/bg-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
        padding-bottom: 5rem;
    }

    .bg-adept-6 {
        background: linear-gradient(to left, rgba(0, 60, 86, 0.9), rgba(0, 184, 184, 0.9));
    }

    .bg-adept-6 p {
        font-size: 70px;
        color: #ffff;
    }

    .bg-adept-6 img {
        height: 5rem;
    }

    .bg-view {
        background-color: rgb(208, 208, 208);
        height: 45rem;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
    }

    .bg-view-in {
        background-color: rgb(235, 235, 235);
        height: 40rem;
        border-radius: 3%;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 5px;
        padding-top: 5px;
    }



    .card-view {
        width: 100%;
        background: white;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
    }

    .card-view:hover {
        transform: translateY(-5px);
        /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        /* เงารอบๆ เมื่อโฮเวอร์ */
        background: #f7f7f7;
        /* เปลี่ยนพื้นหลังเมื่อโฮเวอร์ */
    }

    .card-view .title {
        font-size: 2rem;
        color: #333;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* กำหนดให้แสดงเพียง 2 บรรทัด (ประมาณ 25 คำ) */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* แสดง "..." เมื่อข้อความยาวเกิน */
    }


    .card-view .date {
        font-size: 1.5rem;
        color: #555;
    }

    .card-view .content {
        font-size: 1.25rem;
        color: #777;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        /* แสดงผลเพียง 2 บรรทัด */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        /* รองรับการตัดคำในหลายบรรทัด */
    }

    .pdf-item {
        margin-bottom: 8px;
    }

    .text-primary {
        color: #007bff;
        text-decoration: none;
    }

    .text-primary:hover {
        text-decoration: underline;
    }

    .btn-viewall {
        display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        border-radius: 12px;
        margin-bottom: 10px;
        background: linear-gradient(to right, #003c56, #00b8b8);
        color: white;
        transition: transform 0.3s ease;
        /* แยก transition สำหรับ background และ transform */
    }

    .btn-viewall:hover {
        transform: scale(1.05);
    }

</style>

<main class="bg-page6">
    <div class="bg-adept-6 py-3">
        <div class="container d-flex justify-content-start align-items-center gap-3">
            <img src="{{ asset('images/pages/6/promote.png') }}" alt="promote">
            <p>ข่าวประชาสัมพันธ์</p>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center gap-4 mt-4">
        <div class="col-6 d-flex flex-column align-content-center justify-content-center bg-view">
            <div class="bg-view-in d-flex flex-column justify-content-center align-items-center gap-3 overflow-auto">
                @foreach($pressRelease as $release)
                <div class="card-view">
                    <div class="d-flex justify-content-between align-content-center">
                        <div class="title text-truncate d-flex justify-content-start align-items-center">
                            <img src="{{ asset('images/pages/6/hextacle.png') }}" alt="hextacle" width="25" height="25">
                            {{ $release->title_name }}
                        </div>
                        <div class="date pt-1">
                            <i class="fa-solid fa-calendar-days text-warning"></i>
                            {{ $release->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                    <div class="content">
                        <div class="pdf-item ms-3">
                            <i class="fa-solid fa-file-pdf text-danger"></i>
                            @if($release->pdfs->isNotEmpty())
                            <a href="{{ asset('storage/' . $release->pdfs->first()->post_pdf_file) }}" target="_blank" class="text-primary">
                                ดู PDF
                            </a>
                            @else
                            <span class="text-muted">ไม่มีไฟล์ PDF</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-between pt-5">
            <!-- ช่องรูป 4 อัน -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="image 1">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="image 2">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="image 3">
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="image 4">
                    </div>
                </div>
            </div>

            <!-- ปุ่มดูทั้งหมด -->
            <div class="d-flex justify-content-end mt-4 w-100">
                <button class="btn-viewall"><i class="fa-solid fa-play text-warning"></i> ดูทั้งหมด</button>
            </div>

        </div>

    </div>
</main>
