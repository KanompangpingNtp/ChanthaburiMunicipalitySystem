@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Agency Details</h1>
    <p><strong>Agency Name:</strong> {{ $agency->personnel_agency_name }}</p>

    <!-- แสดงข้อมูล Ranks -->
    @if ($agency->ranks->count() > 0)
    <ul>
        @foreach ($agency->ranks as $rank)
        <li>
            <strong>{{ $rank->personnel_rank_name }}</strong>
            @if ($rank->details->count() > 0)
            <ul>
                @foreach ($rank->details as $detail)
                <li>
                    <strong>ชื่อ </strong> {{ $detail->full_name }}<br>
                    <strong>เบอร์ติดต่อ </strong> {{ $detail->phone }}<br>
                    <strong>status:</strong> {{ $detail->status }}<br>
                    <strong>แผนก </strong> {{ $detail->department ?? 'ว่าง' }}<br>

                    @if ($detail->images->count() > 0)
                    <ul>
                        @foreach ($detail->images as $image)
                        <li>
                            <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: 100px; height: 100px; object-fit: cover;">
                        </li>
                        @endforeach
                    </ul>
                    @else
                        <p>No images available for this person.</p>
                    @endif
                </li>
                @endforeach
            </ul>
            @else
                <p>No personnel details available for this rank.</p>
            @endif
        </li>
        @endforeach
    </ul>
    @else
        <p>No ranks available for this agency.</p>
    @endif

    <a href="{{ url()->previous() }}">Back</a>
</div>

@endsection
