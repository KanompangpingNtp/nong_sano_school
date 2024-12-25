<!-- resources/views/home.blade.php -->
@extends('user.home.layouts.app')

@section('content')
@include('user.home.components.page-1')
@include('user.home.components.page-2')
@include('user.home.components.page-3', ['pressRelease' => $pressRelease])
@include('user.home.components.page-4', ['activity' => $activity])
@include('user.home.components.page-5', ['procurement' => $procurement,'procurementResults' => $procurementResults,'average' => $average,'revenue' => $revenue,])
@include('user.home.components.page-6')
@include('user.home.components.page-7', ['classroom' => $classroom])
@include('user.home.components.page-8', ['building' => $building])
@include('user.home.components.page-9')
@endsection
