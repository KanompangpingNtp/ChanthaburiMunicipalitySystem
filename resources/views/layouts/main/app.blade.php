<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เทศบาลเมืองจันทบุรี</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Add your styles here */
        @font-face {
            font-family: 'Supermarket';
            src: url('/fonts/supermarket.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }


        body {
            font-family: 'Supermarket', sans-serif;
            font-size: 30px;
        }

        /* สำหรับ scrollbar ทุกประเภท */
        ::-webkit-scrollbar {
            width: 5px;
            /* กำหนดความกว้างของ scrollbar */
            height: 12px;
            /* กำหนดความสูงของ scrollbar สำหรับแนวนอน */

        }

        /* ส่วนที่ใช้ควบคุมสีของ scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #848484;
            /* สีของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบ scrollbar เป็นมุมมน */
            transition: all 0.5s;
        }

        /* ส่วนที่เป็นพื้นหลังของ scrollbar */
        ::-webkit-scrollbar-track {
            background: transparent;
            /* สีพื้นหลังของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบของ track เป็นมุมมน */
        }

        /* ส่วนของ scrollbar แนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 10px;
        }

        /* สำหรับ scrollbar เมื่อ hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* เปลี่ยนสีเมื่อ hover */
        }

        footer {
            background-image: url('');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* กำหนดความสูงขั้นต่ำของ footer */
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
            z-index: 1;
            display: flex;
            /* ใช้ Flexbox */
            flex-direction: column;
            /* จัด layout เป็นแนวตั้ง */
            justify-content: center;
            /* จัดให้อยู่กลาง */
            align-items: center;
            /* จัดให้อยู่กลาง */
        }

        .font-title-footer {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 50px;
            /* ขนาดฟอนต์พื้นฐาน */
            line-height: 1;
            position: relative;
        }

        .font-title-subfooter {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 25px;
            line-height: 1;
        }

        .logo-footer {
            margin-top: -60px;
            height: 180px;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
            /* แก้ไขค่าที่ใช้ */
            z-index: 2;
        }

        .img-footer {
            width: auto;
            height: 50px;
        }

        .font-work-footer {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 32px;
            line-height: 1;
        }

        .border-left-right-footer {
            border-left: 3px solid rgb(255, 208, 91);
            border-right: 3px solid rgb(255, 208, 91);
        }




        /* ซ่อน border-left และ border-right เมื่อหน้าจอเล็กกว่า lg */
        @media (max-width: 1200px) {
            .border-left-right-footer {
                border-left: none;
                border-right: none;
            }

            .logo-footer {
                margin-top: 20px;
                height: 180px;
                filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
                /* แก้ไขค่าที่ใช้ */
                z-index: 2;
            }

            .font-title-footer {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 60px;
                /* ขนาดฟอนต์พื้นฐาน */
                line-height: 1;
                position: relative;
            }

            /* สำหรับ .font-title-subheader */
            .font-title-subfooter {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 30px;
                line-height: 1;
            }

            .img-footer {
                width: auto;
                height: 50px;
            }

            .font-work-footer {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 40px;
                line-height: 1;
            }
        }
    </style>
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
            background-color: white;
            border: 1px solid #ddd;
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
            color: #333;
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #ececec;
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
    <style>
        .bg-page10 {
            background-image: url('{{ asset('images/pages/10/bg-10.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .title-section-10 {
            font-size: 70px;
            text-shadow: 2px 2px 5px black;
        }

        .bg-text-section-10 {
            background-color: rgba(0, 0, 0, 0.7);
            color: #ffff;
            font-size: 30px;
            border-radius: 20px;
            padding-top: 2rem;
            padding-bottom: 2rem;
            padding-right: 4rem;
            padding-left: 2rem;
        }

        .bg-text-section-10 img {
            width: 3rem;
        }

        .bg-coute {
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.5);
            /* เงาสีขาว */
            color: #fff;
            /* แก้ไขจาก #ffff เป็น #fff */
            padding: 10px 20px;
            border-radius: 20px;
            width: 100%;
        }

        .bg-footer {
            background: linear-gradient(to right, rgba(0, 60, 86, 0.8), rgba(0, 184, 184, 0.8));
            width: 100%;
        }

        .logo-footer-section-10 {
            height: 160px;
        }

        .title-logo-footer {
            height: 170px;
        }
    </style>
</head>

<body class="d-flex flex-column">
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
                            <img src="{{ asset('images/navbar/users.png') }}" alt="users">
                            <div>คู่มือประชาชน</div>
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/navbar/service.png') }}" alt="service">
                            <div>e-service</div>
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/navbar/law.png') }}" alt="law">
                            <div>ร้องเรียนการทุจริต</div>
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/navbar/speech.png') }}" alt="speech">
                            <div>สารจันทบุรี</div>
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/navbar/search.png') }}" alt="search">
                            <div>ข้อมูลพื้นฐาน</div>
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="navbar-item">
                            <img src="{{ asset('images/navbar/icon.png') }}" alt="icon">
                            <div>ศูนย์ข้อมูลข่าวสาร</div>
                        </a>
                    </div>
                    <div
                        class="custom-dropdown-container d-flex flex-column align-items-center justify-content-center position-relative">
                        <a class="custom-hover-trigger navbar-item d-flex flex-column align-items-center">
                            <img src="{{ asset('images/navbar/teamwork_3.png') }}" alt="teamwork" class="navbar-icon">
                            <div class="navbar-text">บุคลากร</div>
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

    @yield('content')

    <main class="bg-page10 d-flex flex-column justify-content-start align-items-center gap-5">
        <div class="container d-flex mt-5">
            <div class="title-section-10 lh-1 text-white" style="font-size: 72px;">
                <div class="d-flex align-items-end gap-3">
                    แผนที่ <img src="{{ asset('images/pages/10/india.png') }}" alt="icon-map" width="80">
                </div>
                <div class="fs-2">เทศบาบเมืองจันบุรี</div>
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center">
            <div class="bg-text-section-10 d-flex flex-column justify-content-start align-items-start gap-4">
                <div class="d-flex align-items-end lh-1 gap-3">
                    <img src="{{ asset('images/pages/10/building.png') }}" alt="icon">
                    <div class="text">
                        เลขที่ 39 ถนนเลียบเนิน ต.วัดใหม่ <br>
                        อ.เมืองจันทบุรี จ.จันทบุรี 22000
                    </div>
                </div>
                <div class="d-flex align-items-end lh-1 gap-3">
                    <img src="{{ asset('images/pages/10/gmail.png') }}" alt="icon">
                    <div class="text">
                        chanmunic@hotmail.com <br>
                        saraban_04220102@dla.go.th
                    </div>
                </div>
                <div class="d-flex align-items-end lh-1 gap-3">
                    <img src="{{ asset('images/pages/10/phone-call.png') }}" alt="icon">
                    <div class="text" style="font-size: 50px;">
                        039-313-669
                    </div>
                </div>
                <div class="d-flex align-items-end lh-1 gap-3">
                    <img src="{{ asset('images/pages/10/google-maps.png') }}" alt="icon">
                    <a href="https://maps.app.goo.gl/cAnHZwdeLUMz89sa9" target="_blank"
                        class="btn btn-primary fs-5 px-4" style="border-radius: 30px;"> ไปที่ Google map </a>
                </div>
            </div>
            <div class="d-flex align-items-end ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31149.617128833102!2d102.07114761286515!3d12.601871743491508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31048192adecbd05%3A0xf0e5e2b5d3162870!2z4LmA4LiX4Lio4Lia4Liy4Lil4LmA4Lih4Li34Lit4LiH4LiI4Lix4LiZ4LiX4Lia4Li44Lij4Li1IOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4iOC4seC4meC4l-C4muC4uOC4o-C4tSDguIjguLHguJnguJfguJrguLjguKPguLUgMjIwMDA!5e0!3m2!1sth!2sth!4v1737962171621!5m2!1sth!2sth"
                    width="600" height="450" style="border:0px solid black; border-radius:20px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="container bg-coute mb-2 ">
            <div class=" d-flex justify-content-center align-items-center">
                <div class="text-center py-3 px-4 border-3 border-light border-end lh-1">
                    <span class="fw-bold fs-3">จำนวนผู้เข้าชมเว็บไซต์</span> <br>
                    number of website visitors
                </div>
                <div class="text-center py-3 px-5 border-3 border-light border-end lh-1">
                    <span class="fw-bold fs-2">1</span> <br>
                    <span class=" fs-4">ขณะนี้</span>
                </div>
                <div class="text-center py-3 px-5 border-3 border-light border-end lh-1">
                    <span class="fw-bold fs-2">1</span> <br>
                    <span class=" fs-4">วันนี้</span>
                </div>
                <div class="text-center py-3 px-5 border-3 border-light border-end lh-1">
                    <span class="fw-bold fs-2">1</span> <br>
                    <span class=" fs-4">เดือนนี้</span>
                </div>
                <div class="text-center py-3 px-5 lh-1">
                    <span class="fw-bold fs-2">1</span> <br>
                    <span class=" fs-4">ปีนี้</span>
                </div>
                <div class="text-center py-3 px-5 border-3 border-light border-start lh-1">
                    <span class="fw-bold fs-2">1</span> <br>
                    <span class=" fs-4">ทั้งหมด</span>
                </div>
            </div>
        </div>
        <div class="bg-footer d-flex">
            <div class="container d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/pages/10/logox.png') }}" alt="icon"
                        class="logo-footer-section-10">
                    <img src="{{ asset('images/pages/10/title-logo.png') }}" alt="title"
                        class="title-logo-footer">
                </div>
                <div class="d-flex flex-column justify-content-center text-light fw-bold lh-1">
                    <div style="font-size:82px;">
                        1132
                    </div>
                    <div class="fs-4">
                        สายด่วนเทศบาล
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
