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
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        /* ขยายการ์ดเล็กน้อย */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        /* เพิ่มเงา */
    }

    .img-fit {
        height: 250px;
        /* กำหนดความสูงของรูปภาพให้เท่ากัน */
        object-fit: cover;
        /* ขยายรูปให้เต็มพื้นที่โดยไม่บิดเบี้ยว */
        width: 100%;
        /* ทำให้รูปภาพเต็มความกว้าง */
    }
</style>
@section('title', ' วิสัยทัศน์')
@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <div class="tab-content mb-2" id="contentTabContent">
                    <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="p-4 card-text">
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/vision/vision.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                โรงเรียนบ้านหนองโสน
                            </p>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                มุ่งพัฒนาผู้เรียนสู่ความเป็นเลิศตามศักยภาพ
                            </p>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                บริหารสถานศึกษาอย่างมีประสิทธิภาพ
                            </p>
                            <p class="text-titel font-sarabun-bold text-center lh-1" style="font-size: 45px;">
                                ด้วยการบริหารแบบมีส่วนร่วม
                            </p>
                            <div
                                class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3 mt-5 text-center">
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-1.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">
                                                การร่วมมือระหว่างหน่วยงาน โดยบริษัท
                                                ไทแอร์โรว์ได้มอบห้องเรียนวิทยาศาสตร์ให้กับโรงเรียนบ้านหนองโสน</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-2.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">การพัฒนาศักยภาพครู
                                                โดยกาจัดการศึกษาดูงาน เพื่อนำมาพัฒนา</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-3.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">
                                                การเยี่ยมบ้านนักเรียนเพื่อรับฟังปัญหา การได้พูดคุยกับผู้ปกครอง</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-4.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">
                                                การส่งเสริมนักนักเรียนในด้านการแข่งงานวิชาการ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-5.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">
                                                การส่งเสริมฝึกฝนเด็กเพื่อให้เด็กมีศักยภาพและกล้าที่จะทำ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('images/data-school/vision/vision-6.jpg') }}"
                                            class="card-img-top img-fit" alt="Image">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fs-4 text-primary font-sarabun-bold">
                                                การมีกิจกรรมให้เด็กได้ทำ ได้เรียนรู้</h5>
                                        </div>
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
