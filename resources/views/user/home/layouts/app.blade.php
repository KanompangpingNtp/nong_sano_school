<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โรงเรียนบ้านหนองโสน</title>
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
    </style>
    @yield('head')
</head>

<body class="d-flex flex-column">
    @yield('content')
    <footer class="text-white">
        <div class="container d-flex flex-column flex-xl-row align-items-center justify-content-center h-100 row-gap-5">
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
                class="flex-fill font-work-footer  d-flex justify-content-center align-items-center text-center h-100 me-4 font-sarabun-bold">
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
