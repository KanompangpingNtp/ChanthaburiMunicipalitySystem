<style>
    header {
        height: 7rem;
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.8);
        /* สีขาวโปร่งใส */
    }

    .fixed-top {
        position: absolute;
        /* เปลี่ยนจาก fixed เป็น absolute */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        /* เพิ่ม z-index เพื่อให้แน่ใจว่า navbar อยู่เหนือองค์ประกอบอื่น */
    }


    .bg-page1 {
        background-image: url('{{ asset('images/pages/1/bg-1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }


    .logo-header {
        height: 100px;
    }

    .title-logo {
        height: 120px;
    }

    .text-nav-link {
        color: #1a54c9;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .text-nav-link a {
        color: #1a54c9;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .text-nav-link a:hover {
        color: #003399;
        /* เปลี่ยนสีตัวอักษรเมื่อ hover */
        transform: scale(1.1);
        /* ขยายเล็กน้อยเมื่อ hover */
    }

    /* ปรับขนาดตัวอักษร */
    .font-small {
        font-size: 24px;
    }

    .font-medium {
        font-size: 30px;
        /* ขนาดปกติ */
    }

    .font-large {
        font-size: 35px;
    }

    .text-button {
        background: none;
        /* ไม่มีพื้นหลัง */
        border: none;
        /* ไม่มีเส้นขอบ */
        color: #1a54c9;
        cursor: pointer;
        /* เปลี่ยนเคอร์เซอร์เป็นมือเมื่อ hover */
        padding: 0;

        /* ระยะห่างระหว่างปุ่ม */
        transition: color 0.3s ease, transform 0.2s ease;
    }

    /* เอฟเฟกต์เมื่อ hover */
    .text-button:hover {
        color: #003399;
    }

    .content-page1 {
        margin-top: 12rem;
    }

    .bg-dark-transparent {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 20px;
        padding-top: 1rem;
        padding-bottom: 2rem;
        padding-right: 2rem;
        padding-left: 2rem;
    }

    .bg-dark-transparent .title {
        font-size: 70px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        /* เพิ่มเงาดำ */
    }

    .bg-dark-transparent .detail {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        /* เพิ่มเงาดำ */
    }

    .btn-login {
        display: inline-block;
        padding: 10px 20px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 12px;
        margin-bottom: 10px;
        background: linear-gradient(to right, #003c56, #00b8b8);
        color: white;
        transition: transform 0.3s ease;
        /* แยก transition สำหรับ background และ transform */
    }

    .btn-login:hover {
        transform: scale(1.05);
    }

    .bg-blue {
        background: linear-gradient(to bottom, rgba(0, 0, 255, 0.5), rgba(128, 0, 128, 0.5));
        /* สีน้ำเงินที่โปร่งแสง */
        padding: 10px 20px;
        border-radius: 10px;
        /* เพิ่มมุมโค้งเล็กน้อย */
    }

    .bg-blue p {
        color: white;
        text-align: center;
        margin-bottom: 10px;
    }

    .bg-blue .d-flex img {
        width: 40px;
        /* กำหนดขนาดของไอคอน */
        height: 40px;
        transition: transform 0.3s ease;
        /* ให้ไอคอนขยายเมื่อ hover */
    }

    .bg-blue .d-flex img:hover {
        transform: scale(1.2);
        /* ขยายขนาดไอคอนเมื่อ hover */
    }

    .bg-menu {
        background: linear-gradient(to right, rgba(0, 60, 86, 0.8), rgba(0, 184, 184, 0.8));
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        transition: transform 0.3s ease;
    }


    .navbar-hidden {
        transform: translateY(100%);
    }

    .navbar-item {
        color: white;
        text-decoration: none;
        text-align: center;
        display: block;
        padding: 2px 10px;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .navbar-item img {
        width: 40px;
        height: 40px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
        /* เพิ่ม effect การขยายขนาดของไอคอน */
    }

    .navbar-item div {
        font-size: 23px;
        transition: color 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงสีของข้อความ */
    }

    .navbar-item:hover {
        color: #00b8b8;
        /* เปลี่ยนสีของข้อความเมื่อ hover */
        border-radius: 10px;
        /* เพิ่มมุมโค้งเพื่อให้ดูนุ่มนวล */
    }

    .navbar-item:hover img {
        transform: scale(1.1);
        /* ขยายขนาดไอคอนให้ใหญ่ขึ้นเมื่อ hover */
    }

    .navbar-item:hover div {
        color: #00b8b8;
        /* เปลี่ยนสีของข้อความเมื่อ hover */
    }

    /* แสดงแนวตั้งไอคอนและข้อความ */
    .navbar-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }



    /* ตั้งค่าเริ่มต้นของคอนเทนเนอร์ */
    .custom-dropdown-container {
        position: relative;

    }

    /* สไตล์สำหรับ dropdown menu */
    .custom-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #00b8b8c9;
        border: 1px solid #007777;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        list-style: none;
        padding: 10px 0;
        margin: 0;
        font-size: 23px;
        min-width: 200px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 999;
    }

    .custom-dropdown-container:hover .custom-dropdown-menu {
        opacity: 1;
        visibility: visible;
    }

    /* สไตล์สำหรับแต่ละรายการใน dropdown */
    .dropdown-item {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        color: rgb(0, 0, 0);
        background-color: #00dfdf;
        border-radius: 4px;
    }

    /* Keyframes สำหรับ slide-down */
    @keyframes slide-down {
        0% {
            opacity: 0;
            transform: translateY(-10%);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<main class="d-flex align-items-start justify-content-center bg-page1">
    <header class="text-black fixed-top">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <!-- Logo และข้อความ -->
            <div class="flex-fill d-flex flex-row justify-content-start align-items-center">
                <img src="{{ asset('images/pages/1/logox.png') }}" alt="logo" class="logo-header me-3">
                <img src="{{ asset('images/pages/1/title-logo.png') }}" alt="logo" class="title-logo">
                {{-- <div style="padding: 40px 0 5px;">
                    <div class="font-title-header text-warning">
                        เทศบาลเมืองจันทบุรี
                    </div>
                    <div class="font-title-subheader text-warning">
                        CHANTHABURI TOWN MUNICIPALITY
                    </div>
                </div> --}}
            </div>

            <!-- เมนูด้านขวา -->
            <div class="flex-fill d-flex justify-content-end align-items-center h-100">
                <ul class="d-flex gap-3 list-unstyled mb-0 align-items-end text-nav-link">
                    <li class="d-flex align-items-baseline gap-1">
                        <img src="{{ asset('images/pages/1/po.png') }}" alt="logo">
                        <div class="font-small text-button ">ก</div>
                        <div class="font-medium text-button ">ก</div>
                        <div class="font-large text-button ">ก</div>
                    </li>
                    <li><a href="#">หน้าแรก</a></li>
                    <li><a href="#">ข่าวสารเทศบาล</a></li>
                    <li><a href="#">ติดต่อ</a></li>
                </ul>
            </div>
        </div>
    </header>


    <div class="container content-page1 d-flex" style=" width: 100%;">
        <!-- ฝั่งซ้าย (ข้อความ) -->
        <div class="col-6 d-flex flex-column justify-content-start align-items-start" style="height: 70vh;">
            <a href="{{ route('showLoginForm') }}" class="btn-login">เข้าสู่ระบบ</a>
            <div class="bg-dark-transparent">
                <div class="text-white title lh-1">เมืองน่าอยู่</div>
                <div class="text-warning detail ">ศูนย์กลางทางเศรษฐกิจ คุณภาพชีวิตที่ดี <br>
                    การศึกษาก้าวหน้า สิ่งแวดล้อมยั่งยืน</div>
            </div>
        </div>


        <!-- ฝั่งขวา (ข้อมูล) -->
        <div class="col-6 d-flex flex-column justify-content-end align-items-end p-3 text-white mb-4">
            <div class="bg-blue">
                <p>สื่อประชาสัมพันธ์เทศบาลเมืองจันทบุรี</p>
                <div class="d-flex align-items-center justify-content-center gap-4">
                    <a href="https://www.facebook.com/chanthaburi.town.municipality" target="_blank"><img
                            src="{{ asset('images/pages/1/facebook-logo.png') }}" alt="facebook"></a>
                    <a href="#"><img src="{{ asset('images/pages/1/tiktok.png') }}" alt="tiktok"></a>
                    <a href="#"><img src="{{ asset('images/pages/1/youtube.png') }}" alt="youtube"></a>
                    <a href="#"><img src="{{ asset('images/pages/1/messeger.png') }}" alt="messeger"></a>
                </div>
            </div>

        </div>
        <div class="  bg-menu pb-2 pt-3">
            <div class="container d-flex flex-wrap justify-content-evenly">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/1.png') }}" alt="users">
                        <div>ข้อมูลพื้นฐาน</div>
                    </a>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/2.png') }}" alt="service">
                        <div>ทำเนียบบุคลากร</div>
                    </a>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/3.png') }}" alt="law">
                        <div>อำนาจหน้าที่</div>
                    </a>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/4.png') }}" alt="speech">
                        <div>แผนพัฒนาท้องถิ่น</div>
                    </a>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/5.png') }}" alt="search">
                        <div>การดำเนินงาน</div>
                    </a>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <a href="#" class="navbar-item">
                        <img src="{{ asset('images/navbar/6.png') }}" alt="icon">
                        <div>คู่มือประชาชน</div>
                    </a>
                </div>
                <div
                    class="custom-dropdown-container d-flex flex-column align-items-center justify-content-center position-relative">
                    <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                        <img src="{{ asset('images/navbar/7.png') }}" alt="teamwork" class="navbar-icon">
                        <div class="navbar-text">สารจันทบุรี</div>
                    </a>
                    <!-- ลิสต์รายการ -->
                    <ul class="custom-dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item">แผนผังองค์กรรวม</a>
                        </li>
                        @foreach ($personnelAgencies as $agency)
                            <li>
                                <a href="{{ route('agency.show', ['id' => $agency->id]) }}" class="dropdown-item">
                                    {{ $agency->personnel_agency_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
    </div>
</main>
<script>
    // ฟังก์ชันสำหรับเปลี่ยนขนาดตัวอักษร
    function changeFontSize(size) {
        document.body.style.fontSize = size;
    }

    // กำหนดเหตุการณ์ให้กับปุ่ม
    document.querySelector('.font-small').addEventListener('click', () => changeFontSize('25px'));
    document.querySelector('.font-medium').addEventListener('click', () => changeFontSize('30px')); // ขนาดปกติ
    document.querySelector('.font-large').addEventListener('click', () => changeFontSize('35px'));
</script>
