@extends('layouts.main.app')
@section('content')
    <style>
        .bg {
            background-image: url('{{ asset('images/agency/BG-AENGY.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .custom-gradient-shadow {
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3),
                /* เงาพื้นฐาน */
                0 0 50px -10px rgba(0, 60, 86, 0.8),
                /* เงาสีฟ้าเข้ม */
                0 0 50px -10px rgba(0, 184, 184, 0.8);
            /* เงาสีฟ้าอ่อน */
            background-color: #ffffff;
        }
    </style>
    <div class="bg">
        <div class="container  py-5 my-5 custom-gradient-shadow">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/pages/10/logox.png') }}" alt="icon" class="logo-footer-section-10">
                <img src="{{ asset('images/pages/10/title-logo.png') }}" alt="title" class="title-logo-footer">
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
                        0 3931 3669
                    </div>
                </div>
                <div class="d-flex align-items-end lh-1 gap-3">
                    <img src="{{ asset('images/pages/10/google-maps.png') }}" alt="icon">
                    <a href="https://maps.app.goo.gl/cAnHZwdeLUMz89sa9" target="_blank" class="btn btn-primary fs-5 px-4"
                        style="border-radius: 30px;"> ไปที่ Google map </a>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31149.617128833102!2d102.07114761286515!3d12.601871743491508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31048192adecbd05%3A0xf0e5e2b5d3162870!2z4LmA4LiX4Lio4Lia4Liy4Lil4LmA4Lih4Li34Lit4LiH4LiI4Lix4LiZ4LiX4Lia4Li44Lij4Li1IOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4iOC4seC4meC4l-C4muC4uOC4o-C4tSDguIjguLHguJnguJfguJrguLjguKPguLUgMjIwMDA!5e0!3m2!1sth!2sth!4v1737962171621!5m2!1sth!2sth"
                    width="600" height="450" style="border:0px solid black; border-radius:20px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>
@endsection
