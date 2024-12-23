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
@section('title', ' ประวัติโรงเรียน')
@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <div class="tab-content mb-2" id="contentTabContent">
                    <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="p-4 card-text">
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/history/history.png') }}" alt="data-school"
                                    class="img-fluid">
                            </div>
                            <div class="text-center mb-5">
                                <img src="{{ asset('images/data-school/history/data1.jpg') }}" alt="data-school"
                                    class="img-fluid rounded shadow">
                            </div>
                            <p class="text-titel font-sarabun-bold text-center" style="font-size: 50px;">โรงเรียนบ้านหนองโสน
                            </p>
                            <p class="fs-3 text-justify">
                                ประวัติโรงเรียน โรงเรียนบ้านหนองโสนเปิดทำการสอนเมื่อปี พ.ศ. 2515
                                ทำการสอนตามหลักสูตรกระทรวงศึกษาธิการ โดยอาศัยอาคารเรียนชั่วคราวเป็นที่ทำการสอน มีนายภัคดี
                                ศรีเกษตรศรากุล เป็นผู้บริหารคนแรก ปี พ.ศ. 2520 ได้อาคารเรียนแบบ ป.1ข งบประมาณในการก่อสร้าง
                                320,000 บาท ต่อมาได้รับงบประมาณสร้างอาคารเอนกประสงค์ 1 หลัง งบประมาณ 200,000 บาท ส้วมแบบ
                                สปช. 601/22 จำนวน 1 หลัง สนามฟุตบอลแบบ ฟ.1และในปี 2535ได้รับงบประมาณจำนวน 879,620 บาท
                                สร้างอาคารเรียนแบบ สปช.104/26 จำนวน 1 หลัง 3 ห้องเรียน ปี 2558
                                ได้รับอาคารศูนย์พัฒนาเด็กเล็กขนาดไม่เกิน 50 คน ตามแบบมาตรฐานแบบที่ ส4.ศพด.1 ปีงบประมาณ 2561
                                ได้รับจัดสรรงบประมาณเพื่อก่อสร้างอาคารเรียน แบบ คสล. 3 ชั้น 12 ห้องเรียน
                                ซึ่งได้เริ่มดำเนินการก่อสร้างเมื่อเดือน เมษายน พ.ศ. 2561
                                แล้วเสร็จเปิดใช้เพื่อทำการเรียนการสอนในเดือน พฤษภาคม พ.ศ. 2562 ต่อมาในปีงบประมาณ 2562
                                ได้รับจัดสรรงบประมาณก่อสร้างแบบอาคารอเนกประสงค์ขนาดเล็กมีชั้นลอย
                                เริ่มก่อสร้างเมื่อเดือนธันวาคม พ.ศ. 2561 ซึ่งก่อสร้างแล้วเสร็จและเปิดใช้งานในภาคเรียนที่ 1
                                ปีการศึกษา 2562
                                โรงเรียนบ้านหนองโสนได้เปิดทำการสอนเมื่อปีพ.ศ.2515ทำการสอนตามหลักสูตรกระทรวงศึกษาธิการ
                                ต่อมาเมื่อปี พ.ศ. 2556 โรงเรียนบ้านหนองโสน
                                ได้ย้ายถ่ายโอนจากสถานศึกษาขั้นพื้นฐานไปยังสังกัดองค์กรปกครองส่วนท้องถิ่น กระทรวงมหาดไทย
                                จนถึงปัจจุบัน และในปีการศึกษา 2564
                                โรงเรียนบ้านหนองโสนได้มีการเปิดทำการเรียนการสอนในระดับชั้นมัธยมศึกษาปีที่ 1 ปัจจุบันนี้
                                มีถึงระดับมัธยมศึกษาปีที่ 3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
