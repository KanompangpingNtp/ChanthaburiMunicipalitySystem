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
                <div class="fs-1 fw-bold mb-4">title</div>

                {{-- content --}}
            </div>
        </div>
    </div>
    </div>
@endsection
