@extends('user.layouts.app')

<style>
    .bg-press-release {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ปรับให้ครอบคลุมความสูงของหน้าจอ */
        display: flex;
        /* ใช้ flex สำหรับการจัดวาง */
        align-items: center;
        /* จัดให้อยู่กึ่งกลางแนวตั้ง */
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
        border-radius: 30px;
    }

    .card {

        border: none;
        box-shadow: none;
        background-color: transparent;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        /* ขยายการ์ดเล็กน้อย */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        /* เพิ่มเงา */
    }

    .img-fit {
        border-radius: 15px;
        /* ปรับมุมมนของรูปภาพ */
        object-fit: cover;
        /* จัดการรูปภาพให้แสดงเต็มพื้นที่ */
        width: 100%;
        /* ทำให้รูปภาพกว้างเต็ม card */
        height: 100%;
        /* ปรับให้รูปภาพสูงเต็มพื้นที่ */
        overflow: hidden;
        /* ตัดส่วนที่เกิน */
    }

    .unique-img {
        height: 300px;
        /* กำหนดความสูงของรูปภาพเป็น 300px (สามารถปรับได้) */
        object-fit: cover;
        /* ครอบคลุมพื้นที่การแสดงผล */
        border-radius: 10px;
        /* (ถ้าต้องการ) มุมมน */
    }

    .unique-card {
        max-width: 400px;
        /* (ตัวเลือก) จำกัดความกว้างของการ์ดนี้ */
        margin: auto;
        /* (ตัวเลือก) จัดให้อยู่กึ่งกลาง */
    }
</style>
@section('title', ' รายละเอียดข่าวประชาสัมพันธ์')
@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <div class="tab-content mb-2" id="contentTabContent">
                    <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="p-4 card-text">
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/mission/mission.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                ส่งเสริมและพัฒนาคุณภาพผู้เรียน
                            </p>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                พัฒนาศักยภาพครู
                            </p>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                ส่งเสริมและพัฒนาคุณภาพปัจจัยที่สนับสนุนการเรียนรู้
                            </p>
                            <div class="card shadow-sm mt-5 unique-card">
                                <img src="{{ asset('images/data-school/mission/mission-1.jpg') }}"
                                    class="card-img-top unique-img" alt="Image">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fs-4 text-primary font-sarabun-bold text-center">
                                        การจัดกีฬาสี เพื่อให้นักเรียนได้รู้แพ้ รู้ชนะ รู้อภัยกัน
                                    </h5>
                                </div>
                            </div>

                            <div
                                class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3 mt-2 text-center">
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-2.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-3.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-4.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-5.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-6.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/mission/mission-7.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
