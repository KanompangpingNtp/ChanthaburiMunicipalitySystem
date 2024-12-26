<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('home.components.page-1')
    @include('home.components.page-2')
    @include('home.components.page-3')
    @include('home.components.page-4')
    @include('home.components.page-5')
    @include('home.components.page-6')
    @include('home.components.page-7')
    @include('home.components.page-8', ['procurement' => $procurement,'procurementResults' => $procurementResults,'average' => $average,'revenue' => $revenue,])
    @include('home.components.page-9')
    @include('home.components.page-10')
@endsection
