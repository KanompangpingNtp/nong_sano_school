@extends('user.layouts.app')

<style>
    .bg-press-release {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

@section('title', ' อาคารและสถานที่')
@section('content')
    <div class="bg-press-release py-5">
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <!-- หัวข้อที่ 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 1</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 1.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 2</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 2.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 3</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 3.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 4 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 4</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 4.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 5 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 5</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 5.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 6 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 6</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 6.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 7 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 7</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 7.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>

                <!-- หัวข้อที่ 8 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary font-sarabun-bold fs-4">หัวข้อที่ 8</h5>
                            <p class="card-text fs-5">นี่คือรายละเอียดของหัวข้อที่ 8.</p>
                            <a href="#" class="btn btn-primary mt-auto">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
