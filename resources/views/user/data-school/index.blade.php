@extends('user.layouts.app')

<style>
    .bg-press-release {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .card-link {
        text-decoration: none;
    }

    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
    }
</style>

@section('title', 'ข้อมูลทั่วไป')
@section('content')
    <div class="bg-press-release py-5">
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <!-- การ์ดประวัติโรงเรียน -->
                <div class="col">
                    <a href="/history" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-university fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">ประวัติโรงเรียน</h5>
                                <p class="card-text fs-4">ประวัติความเป็นมาของโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดวิศัยทัศน์ -->
                <div class="col">
                    <a href="/vision" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-eye fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">วิศัยทัศน์</h5>
                                <p class="card-text fs-4">วิสัยทัศน์ของโรงเรียนในการพัฒนาอนาคต.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดพันธกิจ -->
                <div class="col">
                    <a href="/mission" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-bullseye fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">พันธกิจ</h5>
                                <p class="card-text fs-4">การส่งเสริมการศึกษาของโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดเอกลักษณ์ -->
                <div class="col">
                    <a href="/identity" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-gem fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">เอกลักษณ์</h5>
                                <p class="card-text fs-4">เอกลักษณ์ของโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดอัตลักษณ์ -->
                <div class="col">
                    <a href="/characteristics" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-id-card fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">อัตลักษณ์</h5>
                                <p class="card-text fs-4">อัตลักษณ์ของโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดเป้าหมาย -->
                <div class="col">
                    <a href="/goals" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-bullhorn fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">เป้าหมาย</h5>
                                <p class="card-text fs-4">เป้าหมายหลักของโรงเรียนในอนาคต.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดตราสัญลักษณ์ -->
                <div class="col">
                    <a href="/logo" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">ตราสัญลักษณ์</h5>
                                <p class="card-text fs-4">ตราสัญลักษณ์ของโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- การ์ดสีประจำโรงเรียน -->
                <div class="col">
                    <a href="/school-color" class="card-link">
                        <div class="card h-100 shadow-sm text-center hover-card">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <i class="fa-solid fa-palette fa-3x text-primary mb-3"></i>
                                <h5 class="card-title text-primary font-sarabun-bold fs-3">สีประจำโรงเรียน</h5>
                                <p class="card-text fs-4">ความหมายสีประจำโรงเรียน.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
