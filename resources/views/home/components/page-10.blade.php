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
                <a href="https://maps.app.goo.gl/cAnHZwdeLUMz89sa9" target="_blank" class="btn btn-primary fs-5 px-4" style="border-radius: 30px;"> ไปที่ Google map </a>
            </div>
        </div>
        <div class="d-flex align-items-end ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31149.617128833102!2d102.07114761286515!3d12.601871743491508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31048192adecbd05%3A0xf0e5e2b5d3162870!2z4LmA4LiX4Lio4Lia4Liy4Lil4LmA4Lih4Li34Lit4LiH4LiI4Lix4LiZ4LiX4Lia4Li44Lij4Li1IOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4iOC4seC4meC4l-C4muC4uOC4o-C4tSDguIjguLHguJnguJfguJrguLjguKPguLUgMjIwMDA!5e0!3m2!1sth!2sth!4v1737962171621!5m2!1sth!2sth" width="600" height="450" style="border:0px solid black; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <img src="{{ asset('images/pages/10/logox.png') }}" alt="icon" class="logo-footer-section-10">
                <img src="{{ asset('images/pages/10/title-logo.png') }}" alt="title" class="title-logo-footer">
            </div>
            <div class="d-flex flex-column justify-content-center text-light fw-bold lh-1">
                <div style="font-size:72px;">
                    1132
                </div>
                <div class="fs-4">
                    สายด่วนเทศบาล
                </div>
            </div>
        </div>
    </div>
</main>
