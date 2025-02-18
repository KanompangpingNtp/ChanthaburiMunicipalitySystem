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
        <div class="d-flex flex-column justify-content-center align-items-center ps-5 pe-5 ">
            <div class="fs-1 fw-bold mb-4">แผนอัตรากำลัง 3 ปี</div>

            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                table tr:nth-child(odd) {
                    background-color: #77e0cd;
                }

                table tr:nth-child(even) {
                    background-color: #ffffff;
                }

                table td,
                table th {
                    border: none;
                    padding: 10px;
                }

                table tr:hover {
                    background-color: #31cdb0 !important;
                    color: white;
                }

                a {
                    text-decoration: none;
                    color: #333;
                    /* font-size: 18px; */
                }

                a:hover {
                    color: white;
                }

            </style>

            <br>
            <table class="w-100">
                @foreach($PerfSingleTopic as $detail)
                <tr>
                    <td>
                        <a href="{{ route('WorkforcePlanDetail', $detail->id) }}">
                            {{ $detail->detail_name }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>


        </div>
    </div>
</div>
</div>

@endsection
