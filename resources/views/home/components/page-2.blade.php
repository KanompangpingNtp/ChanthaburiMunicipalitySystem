<style>
    .bg-page2 {
        background-image: url('{{ asset('images/pages/2/bg-2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 3rem 0rem;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .imge-blue {
        width: auto;
        height: 340px;
    }

    .imge-red {
        width: auto;
        height: 340px;
    }

    .imge-blue-sub {
        width: auto;
        height: 280px;
    }

    .imge-red-sub {
        width: auto;
        height: 280px;
    }

    .name-blue {
        background: linear-gradient(to bottom, #3766e8, #50d0ffe8);
        color: #fff;
        border: none;
        font-size: 1.4rem;
        border-radius: 10px;
        padding: 8px 0px;
        text-align: center;
        margin-bottom: 15px;
        width: 300px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .name-red {
        background: linear-gradient(to bottom, #e87537, #ffd350e8);
        color: #fff;
        border: none;
        font-size: 1.4rem;
        border-radius: 10px;
        padding: 8px 0px;
        text-align: center;
        margin-bottom: 15px;
        width: 300px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .head-text-title-red {
        position: relative;
    }

    .position-text-red {
        position: absolute;
        top: -30px;
        /* เลื่อนออกจากมุมบน */
        right: 0;
        /* วางที่ขอบขวา */
        padding: 10px 20px;
        background: linear-gradient(to bottom, #e87537, #ffd350e8);
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .head-text-title-blue {
        position: relative;
    }

    .position-text-blue {
        position: absolute;
        top: -30px;
        /* เลื่อนออกจากมุมบน */
        right: 0;
        /* วางที่ขอบขวา */
        padding: 10px 20px;
        background: linear-gradient(to bottom, #3766e8, #50d0ffe8);
        color: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
        border-radius: 5px;
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-center justify-content-center bg-page2">
    <div class="container d-flex justify-content-between align-content-center overflow-auto" style="height: 100%;">
        {{-- ด้านซ้าย --}}
        <div class="d-flex flex-column justify-content-center align-items-center mb-5 pb-3">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/pages/2/l-1.png') }}" alt="blue" class="imge-blue">
                <div class="name-blue lh-1">นายกิจฐพร โชติสุวรรณ์ <br> นายกเทศมนตรีเมืองจันทบุรี</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/pages/2/l-2.png') }}" alt="red" class="imge-red">
                <div class="name-red lh-1">นายสมพงษ์ ภิรมย์ชม <br> ปลัดเทศบาลเมืองจันทบุรี</div>
            </div>
        </div>
        {{-- ด้านขวา --}}
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-5">
            {{-- ข้างบน --}}
            <div class="head-text-title-blue">
                <div class="d-flex justify-content-center align-items-center gap-4 border-top pt-4 border-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-1.png') }}" alt="blue" class="imge-blue-sub">
                        <div class="name-blue lh-1">นายพยับ สมใจนึก <br> รองนายกเทศมนตรีเมืองจันทบุรี</div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-2.png') }}" alt="blue" class="imge-blue-sub">
                        <div class="name-blue lh-1">นายสมนึก มุ่งชูเกียรติสกุล <br> รองนายกเทศมนตรีเมืองจันทบุรี</div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-3.png') }}" alt="blue" class="imge-blue-sub">
                        <div class="name-blue lh-1">นายสมชัย ธรรมพัฒน์พงศ์ <br> รองนายกเทศมนตรีเมืองจันทบุรี</div>
                    </div>
                </div>
                <!-- ข้อความหัวหน้าส่วนราชการ นอก div -->
                <div class="position-text-blue">
                    คณะผู้บริหาร
                </div>
            </div>

            {{-- ข้างล่าง --}}
            <div class="head-text-title-red">
                <div class="d-flex justify-content-center align-items-center gap-4 border-top border-3 pt-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-4.png') }}" alt="red" class="imge-red-sub">
                        <div class="name-red lh-1">นายวัชรเกียรติ์ ธีรการุณวงศ์ <br> รองปลัดเทศบาลเมืองจันทบุรี</div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-5.png') }}" alt="red" class="imge-red-sub">
                        <div class="name-red lh-1">นายวิศาล บัวลอย <br> รองปลัดเทศบาลเมืองจันทบุรี</div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/pages/2/m-6.png') }}" alt="red" class="imge-red-sub">
                        <div class="name-red lh-1">นางสาวณภัทร คล่องสืบข่าว<br> รองปลัดเทศบาลเมืองจันทบุรี</div>
                    </div>
                </div>

                <!-- ข้อความหัวหน้าส่วนราชการ นอก div -->
                <div class="position-text-red">
                    หัวหน้าส่วนราชการ
                </div>
            </div>


        </div>
    </div>
</main>
