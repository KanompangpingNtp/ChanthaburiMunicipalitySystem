<style>
    .bg-page7 {
        background-image: url('{{ asset('images/pages/7/bg-7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
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

    .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.6); /* เพิ่มพื้นหลังเข้ม */
    width: 50px;
    height: 50px;
    border-radius: 50%; /* ทำให้เป็นปุ่มกลม */
  }

  .carousel-control-prev-icon:hover,
  .carousel-control-next-icon:hover {
    background-color: rgba(255, 255, 255, 0.9); /* เพิ่มสีพื้นหลังเมื่อ hover */
  }

  .carousel-control-prev,
  .carousel-control-next {
    top: 50%; /* จัดให้อยู่ตรงกลางแนวตั้ง */
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
  }

  .carousel-control-prev-icon::before,
  .carousel-control-next-icon::before {
    font-size: 30px; /* เพิ่มขนาดลูกศร */
    font-weight: bold;
  }

  .carousel-control-prev {
    left: -20px; /* เพิ่มระยะจากขอบซ้าย */
  }

  .carousel-control-next {
    right: -20px; /* เพิ่มระยะจากขอบขวา */
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

</style>

<main class="bg-page7">
    <div class="bg-adept-7 py-3">
        <div class="container d-flex justify-content-start align-items-center gap-3">
            <img src="{{ asset('images/pages/7/megaphone.png') }}" alt="promote">
            <p>ข่าวกิจกรรม</p>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center gap-4 mt-4">
        <div class="d-flex flex-column align-content-center justify-content-center">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @foreach ($activity->chunk(4) as $chunk)
                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row">
                      @foreach ($chunk as $activitys)
                        <div class="col-md-3">
                          <div class="card">
                            <img src="{{ $activitys->photos->isNotEmpty() ? asset($activitys->photos->first()->url) : 'default-image.jpg' }}" 
                                 class="card-img-top" alt="Activity Image">
                            <div class="card-body">
                              <h5 class="card-title">{{ Str::limit( $activitys->title_name, 60) }}</h5>
                              <p class="card-text" style="font-size: 18px;">{{ Str::limit($activitys->details, 70) }}</p>
                              <a href="#" class="btn btn-primary w-100">ดูเพิ่มเติม</a>
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
          
        {{-- <!-- ส่วนขวา -->
        <div class="col-6 d-flex flex-column align-items-start justify-content-center bg-view">

            <div class="bg-view-in d-flex flex-column justify-content-start align-items-center w-100">
                <!-- Carousel -->
                <div id="carouselActivity" class="carousel slide w-100 " data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators" id="carouselIndicatorsActivity">
                        <!-- Indicators จะถูกเพิ่มที่นี่โดย JavaScript -->
                    </div>
                    <div class="carousel-inner " id="carouselInnerActivity">
                        <!-- รูปภาพจะถูกเพิ่มที่นี่โดย JavaScript -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselActivity"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselActivity"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- ข้อความ -->
                <div class="mt-3 p-3 bg-light w-100 text-center shadow-sm overflow-auto"
                    style="border-radius: 20px; min-height: 200px; max-height: 200px;">
                    <p id="detailTextActivity" class="mb-0" style="font-size: 1.5rem;">ไม่มีเนื้อหา</p>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="container">
        <a href="" class="w-100 btn btn-outline-primary">ดูทั้งหมด</a>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const activityTitleElements = document.querySelectorAll(
                '.activityTitle'); // ใช้ querySelectorAll เพื่อเลือกหลายๆ องค์ประกอบ

            // ลูปผ่านทุกองค์ประกอบ
            activityTitleElements.forEach(activityTitleElement => {
                const text = activityTitleElement.textContent || activityTitleElement.innerText;

                // กำหนดจำนวนตัวอักษรสูงสุด
                const maxCharCount = 40; // จำนวนตัวอักษรสูงสุดที่ต้องการให้แสดง
                let charCount = 0;
                let truncatedText = '';

                // ลูปผ่านตัวอักษรในข้อความทั้งหมด
                for (let i = 0; i < text.length; i++) {
                    charCount++;
                    truncatedText += text[i];

                    // ถ้าจำนวนตัวอักษรเกินที่กำหนด ให้หยุดลูป
                    if (charCount >= maxCharCount) {
                        truncatedText += '...'; // เพิ่ม "..." ถ้าตัดคำ
                        break;
                    }
                }

                // แสดงผลข้อความที่ตัดตามตัวอักษร
                activityTitleElement.textContent = truncatedText;
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const firstActivity = @json($activity->first()); // ดึงข้อมูลกิจกรรมแรก
            if (firstActivity && firstActivity.photos.length > 0) {
                showCarouselActivity(firstActivity.photos, firstActivity.details); // แสดงข้อมูลแรก
            } else {
                console.error('ข้อมูลแรกไม่มีภาพหรือรายละเอียด'); // แจ้งข้อผิดพลาดถ้าไม่มีข้อมูล
            }
        });

        function showCarouselActivity(photos, detail) {
            const carouselInner = document.getElementById("carouselInnerActivity");
            const carouselIndicators = document.getElementById("carouselIndicatorsActivity");
            const detailText = document.getElementById("detailTextActivity");

            // ล้างข้อมูลเก่าของภาพและ Indicators
            carouselInner.innerHTML = "";
            carouselIndicators.innerHTML = "";

            if (photos && photos.length > 0) {
                // เพิ่มรูปภาพและ Indicators ใหม่
                photos.forEach((photo, index) => {
                    // สร้าง Carousel Item
                    const carouselItem = document.createElement("div");
                    carouselItem.className = `carousel-item ${index === 0 ? "active" : ""}`; // รูปแรก active
                    carouselItem.innerHTML = `
                <img src="/storage/${photo.post_photo_file}" class="d-block w-100" alt="Image ${index + 1}" style="object-fit: cover; max-height: 400px; border-radius: 20px; margin-top: 5px;">
            `;
                    carouselInner.appendChild(carouselItem);

                    // สร้าง Indicator
                    const indicator = document.createElement("button");
                    indicator.type = "button";
                    indicator.dataset.bsTarget = "#carouselActivity";
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
            const carouselElement = document.querySelector("#carouselActivity");
            const carousel = bootstrap.Carousel.getInstance(carouselElement) || new bootstrap.Carousel(carouselElement);
            carousel.to(0); // ไปที่ภาพแรกสุด
        }
    </script>

</main>
<!-- ปุ่มดูทั้งหมด -->
{{-- <div class="d-flex justify-content-end mt-4 w-100">
                <button class="btn-viewall"><i class="fa-solid fa-play text-primary"></i> ดูทั้งหมด</button>
            </div> --}}
