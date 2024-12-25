<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'โรงเรียนบ้านหนองโสน')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Add your styles here */
        @font-face {
            font-family: 'THSarabunNew';
            src: url('/fonts/THSarabunNew.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'THSarabunNew-Bold';
            src: url('/fonts/THSarabunNew-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        .font-sarabun-bold {
            font-family: 'THSarabunNew-Bold', sans-serif;
            font-weight: bold;
            font-size: 18px;
        }

        body {
            font-family: 'THSarabunNew', sans-serif;
            font-size: 18px;
        }

        /* สำหรับ scrollbar ทุกประเภท */
        ::-webkit-scrollbar {
            width: 5px;
            /* กำหนดความกว้างของ scrollbar */
            height: 12px;
            /* กำหนดความสูงของ scrollbar สำหรับแนวนอน */

        }

        /* ส่วนที่ใช้ควบคุมสีของ scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #26a8ff;
            /* สีของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบ scrollbar เป็นมุมมน */
            transition: all 0.5s;
        }

        /* ส่วนที่เป็นพื้นหลังของ scrollbar */
        ::-webkit-scrollbar-track {
            background: transparent;
            /* สีพื้นหลังของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบของ track เป็นมุมมน */
        }

        /* ส่วนของ scrollbar แนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 10px;
        }

        /* สำหรับ scrollbar เมื่อ hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* เปลี่ยนสีเมื่อ hover */
        }

        /*///////////////////////// Header //////////////////////////////////*/
        header {
            background-image: url('{{ asset('images/pages/1/header-bg.png') }}');
            /* ใส่ URL ของรูปภาพที่ต้องการ */
            background-size: cover;
            /* ทำให้รูปภาพขยายเต็มพื้นที่ */
            background-position: center;
            /* จัดตำแหน่งรูปภาพให้อยู่ตรงกลาง */
            background-repeat: no-repeat;
            /* ไม่ให้รูปภาพซ้ำ */
            height: 10rem;
            /* กำหนดความสูงของ Header */
            z-index: 1;
        }

        /* สำหรับ .font-title-header */
        .font-title-header {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 60px;
            /* ขนาดฟอนต์พื้นฐาน */
            line-height: 0.5;
            position: relative;
        }

        /* สำหรับ .font-title-subheader */
        .font-title-subheader {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 25px;
            /* ขนาดฟอนต์พื้นฐาน */
        }

        .logo-header {
            margin-bottom: -50px;
            height: 180px;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
            /* แก้ไขค่าที่ใช้ */
            z-index: 2;
        }

        @media (min-width: 768px) {
            .font-title-header {
                font-size: 60px;
                /* ขนาดฟอนต์ที่ต้องการสำหรับหน้าจอที่มีขนาดมากกว่า md */
            }

            .font-title-subheader {
                font-size: 25px;
                /* ขนาดฟอนต์ที่ต้องการสำหรับหน้าจอที่มีขนาดมากกว่า md */
            }

        }

        /* เมื่อหน้าจอมีขนาดมากกว่า md (992px) */
        @media (min-width: 992px) {
            .font-title-header {
                font-size: 70px;
                /* ขนาดฟอนต์ที่ต้องการสำหรับหน้าจอที่มีขนาดมากกว่า md */
            }

            .font-title-subheader {
                font-size: 30px;
                /* ขนาดฟอนต์ที่ต้องการสำหรับหน้าจอที่มีขนาดมากกว่า md */
            }

        }

        .btn-yellow {
            background-color: rgb(231, 203, 20);
            padding: 6px 20px;
            /* แกน Y: 10px, แกน X: 20px */
            color: #fff;
            /* ตัวอักษรสีขาว */
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            /* เงาตามตัวอักษร */
            border: none;
            /* ทำให้ตัวอักษรหนา */
            border-radius: 10px;
            /* ทำให้มุมปุ่มมน */
            cursor: pointer;
            /* แสดงมือเมื่อวางเมาส์เหนือปุ่ม */
            font-size: 24px;
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.4);
            letter-spacing: 2px;
            transition: all 0.5s;
        }

        .btn-yellow:hover {
            background-color: darkgoldenrod;
            /* เปลี่ยนสีเมื่อ hover */
            text-shadow: 4px 2px 4px rgba(255, 255, 255, 0.829);
        }

        /*///////////////////////// Header //////////////////////////////////*/

        /*///////////////////////// Navbar //////////////////////////////////*/

        .bg-menu {
            background-color: #2b56cc;
            /* ฟ้าปกติ */
            background-image: linear-gradient(90deg, #2b56cc 25%, #193172 50%, #2b56cc 75%);
            /* ไลน์กราเดียนท์เพื่อสร้างคลื่นสี */
            background-size: 200% 100%;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
            animation: colorWave 15s linear infinite;
            /* ความเร็วการเคลื่อนไหวช้า */
        }


        .bg-menu a {
            color: #fff;
            font-size: 30px;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease, text-shadow 0.3s ease;
            display: inline-block;
            /* ทำให้ a เป็นบล็อกเพื่อรองรับ hover */
        }

        .bg-menu a:hover {
            color: #FFD700;
            /* เปลี่ยนสีตัวอักษรเมื่อ hover */
            transform: scale(1.1);
            /* ขยายเล็กน้อย */
            text-shadow: 0 0 10px #FFD700, 0 0 20px #FFD700;
            /* เพิ่มแสงเรือง */
        }

        .bg-menu img {
            width: 50px;
            /* กำหนดความกว้าง */
            height: auto;
            /* ให้ความสูงปรับตามอัตราส่วน */
            max-height: 50px;
            /* กำหนดความสูงสูงสุด */
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        /* เชื่อมโยงการ hover ระหว่าง a และ img */
        .bg-menu a:hover img {
            transform: scale(1.1);
            /* ขยายรูปเล็กน้อย */
            filter: drop-shadow(0 0 15px #FFD700);
            /* เพิ่มความสว่าง */
        }

        @keyframes colorWave {
            0% {
                background-position: -100%;
                /* เริ่มต้นจากซ้ายสุด */
                background-color: #4771e4;
                /* ฟ้าปกติ */
            }

            50% {
                background-position: 100%;
                /* วิ่งไปขวาสุด */
                background-color: #193172;
                /* สีเหลือง */
            }

            100% {
                background-position: -100%;
                /* กลับไปที่ซ้ายสุด */
                background-color: #4771e4;
                /* ฟ้าปกติ */
            }
        }

        /*///////////////////////// Navbar //////////////////////////////////*/

        /*///////////////////////// Footer //////////////////////////////////*/

        footer {
            background-image: url('{{ asset('images/pages/9/footer.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* กำหนดความสูงขั้นต่ำของ footer */
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
            z-index: 1;
            display: flex;
            /* ใช้ Flexbox */
            flex-direction: column;
            /* จัด layout เป็นแนวตั้ง */
            justify-content: center;
            /* จัดให้อยู่กลาง */
            align-items: center;
            /* จัดให้อยู่กลาง */
        }


        /* สำหรับ .font-title-header */
        .font-title-footer {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 50px;
            /* ขนาดฟอนต์พื้นฐาน */
            line-height: 1;
            position: relative;
        }

        /* สำหรับ .font-title-subheader */
        .font-title-subfooter {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 25px;
            line-height: 1;
        }

        .logo-footer {
            margin-top: -60px;
            height: 180px;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
            /* แก้ไขค่าที่ใช้ */
            z-index: 2;
        }

        .img-footer {
            width: auto;
            height: 50px;
        }

        .font-work-footer {
            text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
            font-size: 32px;
            line-height: 1;
        }

        .border-left-right-footer {
            border-left: 3px solid rgb(255, 208, 91);
            border-right: 3px solid rgb(255, 208, 91);
        }

        /* ซ่อน border-left และ border-right เมื่อหน้าจอเล็กกว่า lg */
        @media (max-width: 1200px) {
            .border-left-right-footer {
                border-left: none;
                border-right: none;
            }

            .logo-footer {
                margin-top: 20px;
                height: 180px;
                filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
                /* แก้ไขค่าที่ใช้ */
                z-index: 2;
            }

            .font-title-footer {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 60px;
                /* ขนาดฟอนต์พื้นฐาน */
                line-height: 1;
                position: relative;
            }

            /* สำหรับ .font-title-subheader */
            .font-title-subfooter {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 30px;
                line-height: 1;
            }

            .img-footer {
                width: auto;
                height: 50px;
            }

            .font-work-footer {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.6);
                font-size: 40px;
                line-height: 1;
            }
        }

        /*///////////////////////// Footer //////////////////////////////////*/
    </style>
    @yield('head')
</head>

<body class="d-flex flex-column">
    <header class="text-white">
        <div class="container d-flex align-items-center justify-content-between h-100 py-3">
            <!-- ส่วนที่ 1 -->
            <div class="flex-fill d-flex justify-content-end align-items-center ">
                <img src="{{ asset('images/pages/1/logo_schools.png') }}" alt="logo"
                    class="logo-header ms-5 me-3 d-none d-md-flex">
                <!-- ส่วนที่ 2 -->
                <div class="flex-fill d-flex flex-column justify-content-end align-items-center align-items-md-start font-sarabun-bold"
                    style="padding-top: 70px; padding-bottom: 5px;">
                    <div class="font-title-header">
                        โรงเรียนบ้านหนองโสน
                        <span style="position: absolute; top: -40px; right: -75px; height: 6rem;">
                            <img src="{{ asset('images/pages/1/arrow-down.png') }}" alt="arrow-down"
                                style="height: 100%;">
                        </span>
                    </div>
                    <div class="font-title-subheader">
                        องค์การบริหารส่วนตำบลเสม็ดใต้อำเภอบางคล้า จังหวัดฉะเชิงเทรา
                    </div>
                </div>
            </div>
            <!-- ส่วนที่ 3 -->
            <div class="flex-fill d-flex justify-content-center align-items-end h-100 pb-4 d-none d-lg-flex">
                <button class="btn-yellow font-sarabun-bold">
                    <i class="fas fa-sign-in-alt" style="font-size: 18px;"></i> เข้าสู่ระบบ
                </button>
            </div>
        </div>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-menu py-2">
        <div class="container">
            <!-- ปุ่ม Hamburger -->
            <button class="navbar-toggler d-lg-none text-white my-2 ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars" style="font-size: 20px;"></i>
            </button>

            <!-- เมนู -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div
                    class="d-flex flex-column flex-lg-row align-items-center justify-content-between font-sarabun-bold w-100 pt-3">
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="{{route('HomeIndex')}}"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/school.png') }}" alt="school" class="mb-2">
                            <span>หน้าแรก</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/documents.png') }}" alt="documents" class="mb-2">
                            <span>ข้อมูลทั่วไป</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/megaphone.png') }}" alt="megaphone" class="mb-2">
                            <span>ประชาสัมพันธ์</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/teacher.png') }}" alt="teacher" class="mb-2">
                            <span>ข้อมูลครู</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/student.png') }}" alt="student" class="mb-2">
                            <span>ข้อมูลนักเรียน</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/trophy.png') }}" alt="trophy" class="mb-2">
                            <span>ผลงานนักเรียน</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/bargaining.png') }}" alt="bargaining" class="mb-2">
                            <span>กระดานสนทนา</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/picture.png') }}" alt="picture" class="mb-2">
                            <span>ภาพกิจกรรม</span>
                        </a>
                    </div>
                    <div class="w-100 text-center py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <img src="{{ asset('images/pages/1/phone.png') }}" alt="phone" class="mb-2">
                            <span>ติดต่อเรา</span>
                        </a>
                    </div>
                    <div class="w-100 text-center d-lg-none py-3 py-lg-0">
                        <a href="#"
                            class="text-decoration-none d-block d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 gap-lg-0">
                            <i class="fas fa-sign-in-alt" style="font-size: 30px;"></i>
                            <span>เข้าสู่ระบบ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-white">
        <div
            class="container d-flex flex-column flex-xl-row align-items-center justify-content-center h-100 row-gap-5 py-5">
            <!-- ส่วนที่ 1 -->
            <div class="flex-fill d-flex justify-content-end align-items-center me-4">
                <img src="{{ asset('images/pages/1/logo_schools.png') }}" alt="logo" class="logo-footer">
            </div>


            <!-- ส่วนที่ 2 -->
            <div class="flex-fill d-flex flex-column justify-content-end align-items-center align-items-md-start font-sarabun-bold"
                style=" padding-bottom: 5px;">
                <div class="font-title-footer">
                    โรงเรียนบ้านหนองโสน
                </div>
                <div class="font-title-subfooter">
                    องค์การบริหารส่วน 78/2 หมู่ 2 ตำบลเสม็ดใต้ <br> อำเภอบางคล้า จังหวัดฉะเชิงเทรา 24110
                </div>
            </div>

            <!-- ส่วนที่ 3 -->
            <div
                class="flex-fill font-work-footer  d-flex justify-content-center align-items-center text-center h-100 me-4 font-sarabun-bold border-left-right-footer">
                เปิดทำการ <br> วันจันทร์ - วันศุกร์ <br> 7.00 น. - 16.30 น.
            </div>
            <!-- ส่วนที่ 4 -->
            <div
                class="flex-fill font-work-footer d-flex flex-column justify-content-center align-items-start h-100 font-sarabun-bold">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/pages/9/phone.png') }}" alt="phone" class="img-footer me-3">
                    038 - 568 - 941
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/pages/9/email.png') }}" alt="email" class="img-footer me-3">
                    bannongsanoschool@hotmail.com
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
