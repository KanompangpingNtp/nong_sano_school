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
@section('title', ' ตราสัญลักษณ์ประจำโรงเรียน')
@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <div class="tab-content mb-2" id="contentTabContent">
                    <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="p-4 card-text">
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/emblem/emblem.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/emblem/emblem-1.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <p class="text-titel font-sarabun-bold text-center" style="font-size: 55px;">
                                ความหมายของตราสัญลักษณ์ประจำโรงเรียนบ้านหนองโสน
                            </p>
                            <p class="fs-3 text-center">
                                โรงเรียนบ้านหนองโสน เป็นโรงเรียนที่อยู่ภายใต้สังกัดองค์การบริหารส่วนตำบลเสม็ดใต้ อ.บางคล้า
                                จ.ฉะเชิงเทรา ซึ่งได้ใช้ตราสัญลักษณ์เดียวกับองค์การบริหารส่วนตำบลเสม็ดใต้ ขอบเบื้องบน
                                “โรงเรียนบ้านหนองโสน” ขอบเบื้องล่าง “สังกัดองค์การบริหารส่วนตำบลเสม็ดใต้ จ.ฉะเชิงเทรา”

                                ตอนกลางของเครื่องหมายมีสัญลักษณ์ ดังนี้ รูปช้าง หมายถึง
                                ประวัติความเป็นมาของตำบลเสม็ดใต้ซึ่งเล่าต่อกันมาและช้างเป็นสัญลักษณ์ของความมั่นคงแข็งแรง
                                ความยิ่งใหญ่และมีบารมีคู่บ้านคู่เมืองน้ำ หมายถึง ผู้ปกครองส่วนใหญ่มีอาชีพเลี้ยงสัตว์น้ำ
                                และประกอบกับในเขตตำบลเสม็ดใต้มีแหล่งน้ำลำคลองตามธรรมชาติ และคลองส่งน้ำชลประทาน
                                ไหลผ่านหลายสายพันธุ์พืช หมายถึง ความอุดมสมบูรณ์ของดินและผู้ปกครองมีอาชีพการเกษตรกุ้ง , ปลา
                                หมายถึง ปัจจุบันผู้ปกครองส่วนใหญ่มีอาชีพเลี้ยงกุ้งและปลา และในพื้นที่มีความอุดมสมบูรณ์

                                ความหมายโดยรวมแล้วหมายถึง ความมั่นคงแข็งแรงและความอุดมสมบูรณ์
                                ผู้ปกครองของนักเรียนมีอาชีพหลักคือการเกษตร
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
