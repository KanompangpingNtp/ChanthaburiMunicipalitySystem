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
    <div class="container d-flex align-items-center justify-content-center gap-4 mt-4">
        <div class="col-6 d-flex flex-column align-content-center justify-content-center bg-view">
            <div class="bg-view-in d-flex flex-column justify-content-center align-items-start gap-3">
                @foreach ($pressRelease as $release)
                    <div class="card-view"
                        onclick="showCarouselPressRelease({{ $release->photos->toJson() }}, '{{ $release->details }}')">
                        <div class="d-flex justify-content-between align-content-center">
                            <div class="title text-truncate d-flex justify-content-start align-items-center">
                                <img src="{{ asset('images/pages/6/hextacle.png') }}" alt="hextacle" width="20"
                                    height="20">
                                <span class="releaseTitle">{{ $release->title_name }}</span>
                            </div>
                            <div class="date pt-1">
                                <i class="fa-solid fa-calendar-days text-warning"></i>
                                {{ $release->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        <div class="content">
                            <div class="pdf-item ms-3">
                                <i class="fa-solid fa-file-pdf text-danger"></i>
                                @if ($release->pdfs->isNotEmpty())
                                    <a href="{{ asset('storage/' . $release->pdfs->first()->post_pdf_file) }}"
                                        target="_blank" class="text-primary">
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
        <div class="col-6 d-flex flex-column align-items-start justify-content-center bg-view">
            <div class="bg-view-in d-flex flex-column justify-content-start align-items-center w-100">
                <!-- Carousel -->
                <div id="carouselPressRelease" class="carousel slide w-100" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators" id="carouselIndicatorsPressRelease">
                        <!-- Indicators จะถูกเพิ่มที่นี่โดย JavaScript -->
                    </div>
                    <div class="carousel-inner" id="carouselInnerPressRelease">
                        <!-- รูปภาพจะถูกเพิ่มที่นี่โดย JavaScript -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPressRelease"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPressRelease"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- ข้อความ -->
                <div class="mt-3 p-3 bg-light w-100 text-center shadow-sm overflow-auto"
                    style="border-radius: 20px; min-height: 200px; max-height: 200px;">
                    <p id="detailTextPressRelease" class="mb-0" style="font-size: 2rem;">lorem</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const releaseTitleElements = document.querySelectorAll(
                '.releaseTitle'); // ใช้ querySelectorAll เพื่อเลือกหลายๆ องค์ประกอบ

            // ลูปผ่านทุกองค์ประกอบ
            releaseTitleElements.forEach(releaseTitleElement => {
                const text = releaseTitleElement.textContent || releaseTitleElement.innerText;

                // กำหนดจำนวนตัวอักษรสูงสุด
                const maxCharCountrelease = 40; // จำนวนตัวอักษรสูงสุดที่ต้องการให้แสดง
                let charCountrelease = 0;
                let truncatedTextrelease = '';

                // ลูปผ่านตัวอักษรในข้อความทั้งหมด
                for (let i = 0; i < text.length; i++) {
                    charCountrelease++;
                    truncatedTextrelease += text[i];

                    // ถ้าจำนวนตัวอักษรเกินที่กำหนด ให้หยุดลูป
                    if (charCountrelease >= maxCharCountrelease) {
                        truncatedTextrelease += '...'; // เพิ่ม "..." ถ้าตัดคำ
                        break;
                    }
                }

                // แสดงผลข้อความที่ตัดตามตัวอักษร
                releaseTitleElement.textContent = truncatedTextrelease;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const firstrelease = @json($pressRelease->first()); // ดึงข้อมูลกิจกรรมแรก
            if (firstrelease && firstrelease.photos && Array.isArray(firstrelease.photos) && firstrelease.photos
                .length > 0) {
                // ถ้ามีรูปภาพ
                showCarouselPressRelease(firstrelease.photos, firstrelease.details); // แสดงข้อมูลแรก
            } else if (firstrelease && firstrelease.details) {
                // ถ้ามีรายละเอียดแต่ไม่มีรูปภาพ
                console.log('มีรายละเอียดแต่ไม่มีรูปภาพ');
                showCarouselPressRelease([], firstrelease.details);
            } else {
                // กรณีไม่มีข้อมูล
                console.error('ข้อมูลแรกไม่มีภาพหรือรายละเอียด ข่าวประชาสัมพันธ์');
            }
        });

        function showCarouselPressRelease(photos, detail) {
            const carouselInner = document.getElementById("carouselInnerPressRelease");
            const carouselIndicators = document.getElementById("carouselIndicatorsPressRelease");
            const detailText = document.getElementById("detailTextPressRelease");

            // ล้างข้อมูลเก่าของภาพและ Indicators
            carouselInner.innerHTML = "";
            carouselIndicators.innerHTML = "";

            if (photos && photos.length > 0) {
                // เพิ่มรูปภาพและ Indicators ใหม่
                photos.forEach((photo, index) => {
                    const carouselItem = document.createElement("div");
                    carouselItem.className = `carousel-item ${index === 0 ? "active" : ""}`; // รูปแรก active
                    carouselItem.innerHTML = `
                <img src="/storage/${photo.post_photo_file}" class="d-block w-100" alt="Image ${index + 1}" style="object-fit: cover; max-height: 400px; border-radius: 20px; margin-top: 5px;">
            `;
                    carouselInner.appendChild(carouselItem);

                    const indicator = document.createElement("button");
                    indicator.type = "button";
                    indicator.dataset.bsTarget = "#carouselPressRelease";
                    indicator.dataset.bsSlideTo = index;
                    indicator.className = index === 0 ? "active" : "";
                    indicator.setAttribute("aria-current", index === 0 ? "true" : "false");
                    indicator.setAttribute("aria-label", `Slide ${index + 1}`);
                    carouselIndicators.appendChild(indicator);
                });
            } else {
                // กรณีไม่มีรูปภาพ แสดงรูป Default
                const defaultImage = "{{ asset('images/pages/5/logox.png') }}"; // ใส่ path รูป default ที่คุณต้องการ
                const carouselItem = document.createElement("div");
                carouselItem.className = "carousel-item active";
                carouselItem.innerHTML = `
            <img src="${defaultImage}" class="d-block w-100" alt="Default Image" style="object-fit: cover; max-height: 400px; border-radius: 20px; margin-top: 5px;">
        `;
                carouselInner.appendChild(carouselItem);
            }

            // แสดงรายละเอียดกิจกรรม
            detailText.textContent = detail || "ไม่มีรายละเอียด";

            // สร้าง Carousel ใหม่และตั้งค่าไปยังสไลด์แรก
            const carouselElement = document.querySelector("#carouselPressRelease");
            const carousel = bootstrap.Carousel.getInstance(carouselElement) || new bootstrap.Carousel(carouselElement);
            carousel.to(0); // ไปที่สไลด์แรกสุด
        }
    </script>
</main>
