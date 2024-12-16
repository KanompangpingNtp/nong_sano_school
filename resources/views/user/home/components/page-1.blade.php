<!-- resources/views/components/header.blade.php -->
<style>
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
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4);
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

    @keyframes colorWave {
        0% {
            background-position: -100%;
            /* เริ่มต้นจากซ้ายสุด */
            background-color: #2b56cc;
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
            background-color: #2b56cc;
            /* ฟ้าปกติ */
        }
    }

    .bg-menu {
        background-color: #2b56cc;
        /* ฟ้าปกติ */
        background-image: linear-gradient(90deg, #2b56cc 25%, #193172 50%, #2b56cc 75%);
        /* ไลน์กราเดียนท์เพื่อสร้างคลื่นสี */
        background-size: 200% 100%;
        /* ขยายขนาดเพื่อให้สีวิ่ง */
        border: 10px solid #FFD700;
        border-bottom: none;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
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



    /* เมื่อหน้าจอมีขนาดมากกว่า md (768px) */
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


    .logo-header {
        margin-bottom: -60px;
        height: 170px;
        filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.6));
        /* แก้ไขค่าที่ใช้ */
        z-index: 2;
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

    main {
        background-image: url('{{ asset('images/pages/1/bg-page1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 83vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }
</style>
<header class="text-white">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <!-- ส่วนที่ 1 -->
        <div class="flex-fill d-flex justify-content-end align-items-center me-4 d-none d-md-flex">
            <img src="{{ asset('images/pages/1/logo_schools.png') }}" alt="logo" class="logo-header">
        </div>


        <!-- ส่วนที่ 2 -->
        <div class="flex-fill d-flex flex-column justify-content-end align-items-center align-items-md-start font-sarabun-bold"
            style="padding-top: 70px; padding-bottom: 5px;">
            <div class="font-title-header">
                โรงเรียนบ้านหนองโสน
                <span style="position: absolute; top: -40px; right: -75px; height: 6rem;">
                    <img src="{{ asset('images/pages/1/arrow-down.png') }}" alt="arrow-down" style="height: 100%;">
                </span>
            </div>
            <div class="font-title-subheader">
                องค์การบริหารส่วนตำบลเสม็ดใต้อำเภอบางคล้า จังหวัดฉะเชิงเทรา
            </div>
        </div>

        <!-- ส่วนที่ 3 -->
        <div class="flex-fill d-flex justify-content-center align-items-end h-100 pb-4 d-none d-lg-flex ">
            <button class="btn-yellow font-sarabun-bold"> <i class="fas fa-sign-in-alt" style="font-size: 18px;"></i>
                เข้าสู่ระบบ</button>
        </div>
    </div>
</header>
<!-- Content Section -->
<main class="d-flex align-items-end justify-content-center">
    <div
        class="container d-flex flex-wrap align-items-center justify-content-evenly bg-menu font-sarabun-bold pb-2 pt-3 column-gap-3">
        <!-- แถวแรกจะเป็น 2 คอลัมน์เมื่อหน้าจอ < xl -->
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/school.png') }}" alt="school">
                <div>หน้าแรก</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/documents.png') }}" alt="documents">
                <div>ข้อมูลทั่วไป</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/megaphone.png') }}" alt="megaphone">
                <div>ข่าวประชาสัมพันธ์</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/teacher.png') }}" alt="teacher">
                <div>ข้อมูลครู</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/student.png') }}" alt="student">
                <div>ข้อมูลนักเรียน</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/trophy.png') }}" alt="trophy">
                <div>ผลงานนักเรียน</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/bargaining.png') }}" alt="bargaining">
                <div>กระดานสนทนา</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/picture.png') }}" alt="picture">
                <div>ภาพกิจกรรม</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center">
            <a href="#" class="text-center">
                <img src="{{ asset('images/pages/1/phone.png') }}" alt="phone">
                <div>ติดต่อเรา</div>
            </a>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center d-lg-none">
            <a href="#" class="text-center">
                <i class="fas fa-sign-in-alt" style="font-size: 30px;"></i>
                <div>เข้าสู่ระบบ</div>
            </a>
        </div>
    </div>


</main>
