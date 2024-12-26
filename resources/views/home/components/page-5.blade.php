<style>
    .bg-page5 {
        background-image: url('{{ asset('images/pages/5/bg-5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 120vh;
        position: relative;
    }

    .bg-adept {
        background: rgba(255, 255, 255, 0.2);
    }

    .position-relative {
        position: relative;
    }

    .name-blue-page5 {
        background: linear-gradient(to bottom, #3766e8, #50d0ffe8);
        color: #fff;
        border: 5px solid black;
        font-size: 2.8rem;
        border-radius: 25px;
        padding: 5px 20px;
        text-align: end;
        margin-bottom: 15px;
        width: 380px;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
        text-decoration: none;
        display: inline-block;
        position: relative;
        transition: all 0.3s ease;
    }

    .name-red-page5 {
        background: linear-gradient(to left, #e87537, #ffd350e8);
        color: #fff;
        border: 5px solid black;
        font-size: 2.8rem;
        border-radius: 25px;
        padding: 5px 20px;
        text-align: end;
        margin-bottom: 15px;
        width: 380px;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
        text-decoration: none;
        display: inline-block;
        position: relative;
        transition: all 0.3s ease;
    }

    .name-green-page5 {
        background: linear-gradient(to right, #b3ff30, #4ea100e8);
        color: #fff;
        border: 5px solid black;
        font-size: 2.8rem;
        border-radius: 25px;
        padding: 5px 20px;
        text-align: end;
        margin-bottom: 15px;
        width: 380px;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
        text-decoration: none;
        display: inline-block;
        position: relative;
        transition: all 0.3s ease;
    }

    .name-blue-page5:hover {
        box-shadow: 15px 15px 20px rgba(37, 146, 247, 0.6);
    }

    .name-red-page5:hover {
        box-shadow: 15px 15px 20px rgba(255, 119, 15, 0.6);

    }

    .name-green-page5:hover {
        box-shadow: 15px 15px 20px rgba(185, 255, 32, 0.6);

    }


    .button-img {
        width: 100px;
        /* กำหนดขนาดรูปภาพ */
        height: 100px;
        /* อัตราส่วนคงที่ */
        position: absolute;
        /* วางตำแหน่งอย่างอิสระ */
        left: -15px;
        /* ย้ายรูปไปด้านซ้ายของ tag a */
        top: 45%;
        /* วางตรงกลางแนวตั้ง */
        transform: translateY(-50%);
        /* ปรับเพื่อให้ตรงกลางแนวตั้ง */
        z-index: 1;
        /* วางไว้ใต้ tag a */
    }

    .icon-img {
        width: 50px;
        /* กำหนดขนาดรูปภาพ */
        height: 50px;
    }

    .bg-video {
        background: linear-gradient(to right, #00709f, #00b8b8);
        border-radius: 20px;
    }

    .title-page5 {
        font-size: 10rem;
        color: white;
        text-shadow: 6px 6px 10px rgba(0, 0, 0, 0.8);
        position: relative;
    }

    .title-page5 img {
        position: absolute;
        /* วางตำแหน่งแบบ absolute */
        top: 4rem;
        /* ระยะห่างจากด้านบน */
        left: 17rem;
        /* ระยะห่างจากด้านขวา */
        width: 50px;
        /* กำหนดขนาดของรูปภาพ */
        height: auto;
    }

    .fixed-footer-page5 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(to right, rgba(0, 60, 86, 0.8), rgba(0, 184, 184, 0.8));
        /* ตัวอย่างสีพื้นหลัง */
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-size: 2rem;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }

    .fixed-footer-page5 img {
        position: absolute;
        /* ทำให้ภาพอยู่เหนือ div */
        left: 16rem;
        /* ขยับภาพไปทางซ้าย */
        top: -30px;
        height: 7rem;
    }
</style>

<main class="d-flex flex-column align-items-center justify-content-center bg-page5">
    <div class="container title-page5">
        <img src="{{ asset('images/pages/5/arrow-down.png') }}" alt="arrow-down">
        VDO
    </div>
    <div class="w-100 bg-adept py-4">
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="col-4 d-flex flex-column align-items-start justify-content-center gap-3 "
                style="border-right: 16px dotted black;">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('images/pages/5/wd.png') }}" alt="wd" class="button-img">
                    <a href="#" class="name-blue-page5"><img src="{{ asset('images/pages/5/user-meeting.png') }}"
                            alt="user" class="icon-img me-2">แนะนำเทศบาล</a>
                </div>
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('images/pages/5/wd.png') }}" alt="wd" class="button-img">
                    <a href="#" class="name-red-page5"><img
                            src="{{ asset('images/pages/5/public-relation.png') }}" alt="user"
                            class="icon-img me-2">ประชาสัมพันธ์</a>
                </div>
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('images/pages/5/wd.png') }}" alt="wd" class="button-img">
                    <a href="#" class="name-green-page5"><img
                            src="{{ asset('images/pages/5/board-meeting.png') }}" alt="user"
                            class="icon-img me-2">ประชุมสภา</a>
                </div>
            </div>
            <div class="col-8 ms-5 p-3 d-flex align-items-center justify-content-end bg-video">
                <video class="rounded" controls width="100%">
                    <source src="path-to-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <div class="fixed-footer-page5">
        <img src="{{ asset('images/pages/5/logox.png') }}" alt="logox">
        เทศบาลเมืองจันทบุรี : เมืองน่าอยู่ ศูนย์กลางทางเศรษฐกิจ คุณภาพชีวิตที่ดี การศึกษาก้าวหน้า สิ่งแวดล้อมยั่งยืน
    </div>
</main>
