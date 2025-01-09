<style>
    .bg-page7 {
        background-image: url('{{ asset('images/pages/7/bg-7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 90vh;
        position: relative;
        padding-bottom: 5rem;
    }

    .bg-adept-7 {
        background-image: url('{{ asset('images/pages/7/bg-header-page-7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .bg-adept-7 p {
        font-size: 70px;
        color: #ffff;
    }

    .bg-adept-7 img {
        height: 5rem;
    }

    .bg-view {
        background: linear-gradient(to top, #004867, #00c5c5);
        height: 45rem;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
    }

    .bg-view-in {
        background-color: rgb(226, 226, 226, 0.9);
        height: 41rem;
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
        font-size: 1.25rem;
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
        font-size: 1rem;
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
        font-size: 20px;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        border-radius: 12px;
        margin-bottom: 10px;
        border: 2px solid #003c56;
        /* ขอบที่สี #003c56 ในสถานะปกติ */
        color: #003c56;
        /* สีข้อความปกติ */
        background: transparent;
        /* พื้นหลังโปร่งใสในสถานะปกติ */
        transition: transform 0.3s ease, background 0.4s ease, border-color 0.3s ease, color 0.3s ease;
        /* เพิ่ม transition สำหรับ transform, background, border-color, และ color */
        letter-spacing: 1px;
    }

    .btn-viewall:hover {
        transform: scale(1.01);
        /* ขยายปุ่มน้อยขึ้นเพื่อให้ดูสมูท */
        background: linear-gradient(to right, #003c56, #00b8b8);
        /* พื้นหลังไล่สีเมื่อ hover */
        border-color: #00b8b8;
        /* เปลี่ยนสีขอบเป็น #00b8b8 เมื่อ hover */
        color: #fff;
        /* สีข้อความเป็นสีขาวเมื่อ hover */
    }

    .btn-costom-card {
        display: inline-block;
        font-size: 20px;
        padding: 4px 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 6px;
        margin-bottom: 10px;
        border: 2px solid #003c56;
        /* ขอบที่สี #003c56 ในสถานะปกติ */
        color: #003c56;
        /* สีข้อความปกติ */
        background: transparent;
        /* พื้นหลังโปร่งใสในสถานะปกติ */
        transition: transform 0.3s ease, background 0.4s ease, border-color 0.3s ease, color 0.3s ease;
        /* เพิ่ม transition สำหรับ transform, background, border-color, และ color */
    }

    .btn-costom-card:hover {
        transform: scale(1.01);
        /* ขยายปุ่มน้อยขึ้นเพื่อให้ดูสมูท */
        background: linear-gradient(to right, #003c56, #00b8b8);
        /* พื้นหลังไล่สีเมื่อ hover */
        border-color: #00b8b8;
        /* เปลี่ยนสีขอบเป็น #00b8b8 เมื่อ hover */
        color: #fff;
        /* สีข้อความเป็นสีขาวเมื่อ hover */
    }


    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.6);
        /* เพิ่มพื้นหลังเข้ม */
        width: 50px;
        height: 50px;
        border-radius: 50%;
        /* ทำให้เป็นปุ่มกลม */
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: rgba(255, 255, 255, 0.9);
        /* เพิ่มสีพื้นหลังเมื่อ hover */
    }

    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        /* จัดให้อยู่ตรงกลางแนวตั้ง */
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
    }

    .carousel-control-prev-icon::before,
    .carousel-control-next-icon::before {
        font-size: 30px;
        /* เพิ่มขนาดลูกศร */
        font-weight: bold;
    }

    .carousel-control-prev {
        left: -20px;
        /* เพิ่มระยะจากขอบซ้าย */
    }

    .carousel-control-next {
        right: -20px;
        /* เพิ่มระยะจากขอบขวา */
    }

    @media (max-width: 768px) {

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev-icon::before,
        .carousel-control-next-icon::before {
            font-size: 20px;
        }
    }

    .carousel-indicators {
        position: absolute;
        /* ตำแหน่งสัมพัทธ์กับ Carousel */
        bottom: -60px;
        /* ระยะห่างจาก Carousel */
        left: 35%;
        /* กึ่งกลางแนวนอน */
        transform: translateX(-50%);
        /* เลื่อนกลับครึ่งหนึ่งของความกว้าง */
        display: flex;
        /* เพื่อจัดปุ่มให้อยู่ในแถวเดียวกัน */
        justify-content: center;
        /* ปุ่มอยู่ตรงกลาง */
        gap: 10px;
        /* ระยะห่างระหว่างปุ่ม */
    }


    .carousel-indicators button {
        width: 25px;
        /* ขนาดปุ่ม */
        height: 25px;
        background-color: #00b8b8;
        /* สีพื้นหลัง */
    }

    .carousel-indicators .active {
        background-color: #00b8b8;
        /* สีปุ่มเมื่อ active */
    }
    .img-container {
    height: 300px; /* ความสูงที่กำหนดเท่ากัน */
    overflow: hidden; /* ตัดส่วนเกิน */
}





</style>

<main class="bg-page7 d-flex flex-column justify-content-between align-items-center w-100">
    <!-- Header: ข่าวกิจกรรม -->
    <div class="bg-adept-7 d-flex align-items-center justify-content-center py-3 w-100">
        <div class="container d-flex justify-content-start align-items-center gap-3">
            <img src="{{ asset('images/pages/7/megaphone.png') }}" alt="promote">
            <p>ข่าวกิจกรรม</p>
        </div>
    </div>

    <!-- Main Content: Carousel Section -->
    <div class="container d-flex align-items-end justify-content-center gap-4 flex-grow-1">
        <div class="d-flex flex-column align-items-end justify-content-center my-4">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    @foreach ($activity->chunk(4) as $index => $chunk)
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($activity->chunk(4) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $activitys)
                            <div class="col-md-3">
                                <div class="card">
                                    {{-- แสดงรูปภาพ --}}
                                    @if($activitys->photos->isNotEmpty())
                                    <div class="img-container w-100">
                                        <img src="{{ asset('storage/' . $activitys->photos->first()->post_photo_file) }}" class="card-img-top" alt="Activity Image">
                                    </div>
                                    @else
                                    <div class="img-container">
                                        <img src="default-image.jpg" class="card-img-top" alt="Default Image">
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 22px;">{{ Str::limit($activitys->title_name, 60) }}</h5>
                                        <p class="card-text" style="font-size: 16px;">
                                            {{ Str::limit($activitys->details, 70) }}</p>
                                        <a href="#" class="btn-costom-card w-100">ดูเพิ่มเติม <i class="fa-solid fa-square-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                
                

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- View All Button -->
    <div class="container d-flex align-items-center justify-content-center mt-5">
        <a href="" class="w-100 btn-viewall"> ดูกิจกรรมทั้งหมด <i class="fa-solid fa-circle-chevron-right"></i></a>
    </div>

</main>
<!-- ปุ่มดูทั้งหมด -->
