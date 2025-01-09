<style>
    .bg-page6 {
        background-image: url('{{ asset('images/pages/6/bg-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 85vh;
        position: relative;
    }

    .bg-adept-6 {
        background-image: url('{{ asset('images/pages/6/bg-header-page-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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
        font-size: 1.5rem;
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

</style>

<main class="bg-page6">
    <div class="bg-adept-6 py-3">
        <div class="container d-flex justify-content-start align-items-center gap-3">
            <img src="{{ asset('images/pages/6/megaphones.png') }}" alt="megaphones">
            <p>ข่าวประชาสัมพันธ์</p>
        </div>
    </div>
    
    <!-- Main Content: Carousel Section -->
    <div class="container d-flex align-items-end justify-content-center gap-4 flex-grow-1">
        <div class="d-flex flex-column align-items-end justify-content-center my-4">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    @foreach ($pressRelease->chunk(4) as $index => $chunk)
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($pressRelease->chunk(4) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $release)
                            <div class="col-md-3">
                                <div class="card">
                                    {{-- แสดงรูปภาพ --}}
                                    @if($release->photos->isNotEmpty())
                                    <div class="img-container w-100">
                                        <img src="{{ asset('storage/' . $release->photos->first()->post_photo_file) }}" class="card-img-top" alt="Activity Image">
                                    </div>
                                    @else
                                    <div class="img-container">
                                        <img src="default-image.jpg" class="card-img-top" alt="Default Image">
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 22px;">{{ Str::limit($release->title_name, 60) }}</h5>
                                        <p class="card-text" style="font-size: 16px;">
                                            {{ Str::limit($release->details, 70) }}</p>
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
    <div class="container d-flex align-items-center justify-content-center mt-4">
        <a href="" class="w-100 btn-viewall"> ดูกิจกรรมทั้งหมด <i class="fa-solid fa-circle-chevron-right"></i></a>
    </div>
    
</main>
