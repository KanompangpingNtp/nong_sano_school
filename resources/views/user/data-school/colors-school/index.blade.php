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
</style>
@section('title', ' สีประจำโรงเรียน')
@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <div class="tab-content mb-2" id="contentTabContent">
                    <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="p-4 card-text">
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/colors/colors.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/colors/colors-1.jpg') }}" alt="data-school"
                                    class="img-fluid shadow">
                            </div>
                            <p class="fs-2 text-center">
                                สีเหลือง หมายถึงความคิดริเริ่มสร้างสรรค์
                                ความสว่างสดใสในที่นี้จะหมายถึงปัญญาอันเปรียบประดุจเหมือนอาวุธของเราทุกคน
                            </p>
                            <p class="fs-2 text-center">
                                สีฟ้า หมายถึงความสงบ ความมีระเบียบ ความศรัทธาในที่นี้จะหมายถึงสมาธิ
                                ที่จะทำให้เกิดสติในการทำกิจกรรมต่างๆของเรา
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
