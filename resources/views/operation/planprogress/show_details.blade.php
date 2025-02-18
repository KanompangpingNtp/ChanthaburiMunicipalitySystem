@extends('layouts.main.app')
@section('content')
    <style>
        .bg {
            background-image: url('{{ asset('images/bg/bg-i.png') }}');
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
                <div class="fs-1 fw-bold mb-4">แผนและความก้าวหน้าในการดำเนินงานและการใช้จ่ายงบประมาณประจำปี</div>
                <span class="text-center">{{$PerfSingleTopic->detail_name}}</span><br>

                @if($PerfSingleTopic->files->isNotEmpty())
                @foreach($PerfSingleTopic->files as $file)
                <a href="{{ asset('storage/' . $file->file_path) }}" download class="btn btn-success btn-sm mb-2">
                    <i class="bi bi-download"></i> ดาวน์โหลดไฟล์ PDF
                </a>
                <iframe src="{{ asset('storage/' . $file->file_path) }}" width="100%" height="800px"></iframe>
                @endforeach
                @else
                <p class="text-center text-muted">ไม่มีข้อมูล</p>
                @endif

            </div>
        </div>
    </div>
    </div>

@endsection
