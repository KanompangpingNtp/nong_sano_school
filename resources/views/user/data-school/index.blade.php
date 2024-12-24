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

    .bg-view-detail {
        background-color: rgb(56, 56, 213);
        padding: 20px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
        width: 100%;
        /* ให้ครอบคลุมพื้นที่ทั้งหมด */
        max-width: 1200px;
        /* กำหนดขนาดสูงสุด */
        margin: auto;
        /* จัดให้อยู่กึ่งกลางหน้าจอ */
    }

    .bg-view-in-detail {
        background-color: rgb(139, 139, 232);
        height: auto;
        /* ปรับให้สูงตามเนื้อหา */
        border-radius: 3%;
        padding: 10px;
        overflow: hidden;
        /* ป้องกันเนื้อหาเกินขอบ */
    }

    .text-titel {
        color: rgb(139, 139, 232);
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        /* เงา 2px ในแนวนอนและแนวตั้ง, ความเบลอ 5px, และสีเงาเป็นสีดำอ่อน */
    }


    .card-text {
        background-color: white;
        border-radius: 10px;
    }
</style>

@section('title', 'ข้อมูลทั่วไป')
@section('content')
    <div class="bg-press-release py-5">
        <div class="container my-4 bg-view-detail">
            <div class="bg-view-in-detail p-4">
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
                                    <p class="card-text fs-4">วิสัยทัศน์ของโรงเรียนในการพัฒนา.</p>
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
                <div class="card-text mt-4">
                    <div class="row align-items-center p-5">
                        <!-- ฝั่งข้อความ -->
                        <div class=" text-center ">
                            <p class="text-titel lh-1" style="font-size: 50px;">โรงเรียนบ้านหนองโสน</p>
                            <p class="fs-4">
                                โรงเรียนบ้านหนองโสน เป็นโรงเรียนขนาดเล็ก ตั้งอยู่ใจกลางชุมชน นักเรียนส่วนใหญ่
                                ที่เข้าเรียนในโรงเรียนแห่งนี้ มีฐานะปานกลางถึงยากจน นักเรียนส่วนใหญ่จะอาศัยอยู่กับ ปู่ ย่า
                                ตา ยาย ซึ่งบางคนครอบครัวมีปัญหา ทั้งทางเรื่องการเงิน และปัญหาพ่อ แม่ หย่าร้างกัน
                                ทำโรงเรียนบ้านหนองโสนเป็นโรงเรียนขยายโอกาสขนาดเล็กที่ให้โอกาสนักเรียนเหล่านี้ได้มีที่ศึกษาเล่าเรียน

                                การที่องค์การบริหารส่วนตำบลเสม็ดใต้ ได้เข้ามารับถ่ายโอนโรงเรียน
                                ก็เพื่อต้องการให้เด็กในตำบลเสม็ดใต้ทุกคน ที่ไม่มีโอกาสได้ไปเรียนต่อในโรงเรียนขนาดใหญ่
                                ได้มีอนาคตที่ดี และโรงเรียนบ้านหนองโสน ได้ทำ MOU กับวิทยาลัยสารพัดช่าง
                                เพื่อไปสอนเกี่ยวกับอาชีพต่างๆ ให้เด็กๆได้มีความรู้ และมีโอกาสที่จะได้ไปต่อยอด
                                ทำเป็นอาชีพของตนเองได้ในอนาคต โดยโรงเรีนบ้านหนองโสนตั้งอยู่ที่ 78/2 หมู่ 2 ตำบลเสม็ดใต้
                                อำเภอบางคล้า จังหวัดฉะเชิงเทรา โทร 038-568941 โทรสาร 038-568941 e-mail :
                                bannongsanoschool@hotmail.com สังกัดองค์การบริหารส่วนตำบลเสม็ดใต้ อำเภอบางคล้า
                                จังหวัดฉะเชิงเทรา เปิดสอนระดับชั้นอนุบาล ถึง ระดับชั้นมัธยมศึกษาปีที่ 3 จำนวน 12 ห้องเรียน
                                โรงเรียนมีเนื้อที่ 11 ไร่ เขตพื้นที่บริการ หมู่ 2 และ หมู่ 5 ตำบลเสม็ดใต้ อำเภอบางคล้า
                                จังหวัดฉะเชิงเทรา</p>
                        </div>
                        <!-- ฝั่งรูปภาพ -->
                        <div class=" text-center">
                            <img src="{{ asset('images/data-school/data-school.jpg') }}" alt="Image description"
                                class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
