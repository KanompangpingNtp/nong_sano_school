<style>
    .bg-page2 {
        background-image: url('{{ asset('images/pages/2/bg-page2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .imge-bigboss {
        width: auto;
        height: 300px;
    }

    .imge-subbigboss {
        width: auto;
        height: 260px;
    }

    .trapezoid-name {
        background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
        color: #fff;
        border: none;
        font-size: 3rem;
        border-radius: 20px;
        padding: 2px 0px;
        text-align: center;
        margin-bottom: 15px;
        width: 320px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .trapezoid-position {
        background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
        color: #fff;
        border: none;
        font-size: 2.5rem;
        border-radius: 20px;
        padding: 0px 10px;
        text-align: center;
        margin-bottom: 10px;
        width: 500px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .trapezoid-name-sub {
        background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
        color: #fff;
        border: none;
        font-size: 2rem;
        border-radius: 20px;
        padding: 2px 10px;
        text-align: center;
        margin-bottom: 15px;
        width: 360px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    .trapezoid-position-sub {
        background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
        color: #fff;
        border: none;
        font-size: 1.8rem;
        border-radius: 20px;
        padding: 10px 0px;
        text-align: center;
        margin-bottom: 10px;
        width: 440px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
            0 0 9px rgba(0, 0, 0, 0.8);
    }

    @keyframes float1 {

        0%,
        100% {
            transform: translateY(0);
            /* ตำแหน่งเริ่มต้น */
        }

        50% {
            transform: translateY(-10px);
            /* ขยับขึ้นเล็กน้อย */
        }
    }

    @keyframes float2 {

        0%,
        100% {
            transform: translateY(0);
            /* ตำแหน่งเริ่มต้น */
        }

        50% {
            transform: translateY(10px);
            /* ขยับขึ้นเล็กน้อย */
        }
    }

    @keyframes glow {

        0%,
        100% {
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.5));
        }

        50% {
            filter: drop-shadow(2px 2px 15px rgba(255, 255, 255, 0.9));
        }
    }

    .arrow-down-1 {
        width: auto;
        height: 13rem;
        position: absolute;
        top: 1%;
        left: 1%;
        animation:
            float1 3s ease-in-out infinite,
            /* เคลื่อนไหวขึ้น-ลง */
            glow 2s ease-in-out infinite;
        /* เรืองแสง */
    }

    .arrow-down-2 {
        width: auto;
        height: 10rem;
        position: absolute;
        top: 35%;
        right: 1%;
        animation:
            float2 3s ease-in-out infinite,
            /* เคลื่อนไหวขึ้น-ลง */
            glow 2s ease-in-out infinite;
        /* เรืองแสง */
    }


    @media (min-width: 992px) {

        .div-imge-sibbigboss {
            padding-top: 7rem;
        }

        .imge-bigboss {
            width: auto;
            height: 500px;
        }

        .imge-subbigboss {
            width: auto;
            height: 360px;
        }

        .trapezoid-name {
            border: none;
            font-size: 3.5rem;
            padding: 2px 0px;
            text-align: center;
            width: 480px;
        }

        .trapezoid-position {
            background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
            color: #fff;
            border: none;
            font-size: 3rem;
            border-radius: 20px;
            padding: 0px 10px;
            text-align: center;
            margin-bottom: 10px;
            width: 580px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
                0 0 9px rgba(0, 0, 0, 0.8);
        }

        .trapezoid-name-sub {
            background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
            color: #fff;
            border: none;
            font-size: 2.5rem;
            border-radius: 20px;
            padding: 2px 10px;
            text-align: center;
            margin-bottom: 15px;
            width: 360px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
                0 0 9px rgba(0, 0, 0, 0.8);
        }

        .trapezoid-position-sub {
            background: linear-gradient(to bottom, #3766e8, #a7ce4ae8);
            color: #fff;
            border: none;
            font-size: 2.3rem;
            border-radius: 20px;
            padding: 10px 0px;
            text-align: center;
            margin-bottom: 10px;
            width: 360px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-shadow: 0 0 9px rgba(0, 0, 0, 0.5),
                0 0 9px rgba(0, 0, 0, 0.8);
        }

        .arrow-down-1 {
            width: auto;
            height: 17rem;
            position: absolute;
            top: 10%;
            left: 10%;
        }

        .arrow-down-2 {
            width: auto;
            height: 12rem;
            position: absolute;
            top: 35%;
            right: 5%;
        }

    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-center justify-content-center bg-page2 vh-100">
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-content-center py-5 py-lg-0"
        style="height: 100%;">
        <div class="flex-fill d-flex flex-column justify-content-center align-items-center font-sarabun-bold"
            style="position: relative;">
            <img src="{{ asset('images/pages/2/man-bigboss.png') }}" alt="man-bigboss" class="imge-bigboss">
            <img src="{{ asset('images/pages/2/arrow-down.png') }}" alt="arrow-down" class="arrow-down-1">
            <img src="{{ asset('images/pages/2/arrow-down.png') }}" alt="arrow-down" class="arrow-down-2">
            <div class="trapezoid-name">นายกิตติพงศ์ สีเหลือง</div>
            <div class="trapezoid-position">นายกองค์การบริหารส่วนตำบลเสม็ดใต้</div>
        </div>
        <div
            class="flex-fill d-flex flex-column justify-content-center align-items-center font-sarabun-bold div-imge-sibbigboss">
            <img src="{{ asset('images/pages/2/women-bigboss.png') }}" alt="women-bigboss" class="imge-subbigboss ">
            <div class="trapezoid-name-sub">นางสาวชฎานันท์ อนุลีจันทร์</div>
            <div class="trapezoid-position-sub">ผู้อำนวยการสถานศึกษา<br class="d-none d-lg-block">โรงเรียนบ้านหนองโสน
            </div>
        </div>
    </div>
</main>
