<style>
    .bg-page6 {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ทำให้พื้นที่ขยายตามเนื้อหา */
        padding-bottom: 8rem;
        /* กันไม่ให้ขอบติดด้านล่าง */
    }

    .d-flex-equal-height {
        display: flex;
        align-items: stretch;
        /* ทำให้ทุกองค์ประกอบมีความสูงเท่ากัน */
        justify-content: center;
        /* จัดให้อยู่ตรงกลาง */
        text-align: center;
        /* จัดข้อความตรงกลาง */
    }

    .course-right {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .course-left {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .title-page6 {
        color: black;
        font-size: 4rem;
        display: flex;
        align-items: center;
        /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
        justify-content: center;
        padding: 5px 40px;
        /* ระยะห่างซ้ายขวา */
        position: relative;
        /* เพิ่มความหนาของตัวอักษร */

    }


    @media (min-width: 768px) {
        .title-page6 {
            color: black;
            font-size: 3rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */

        }

    }


    .yellow-six-board {
        width: 100%;
        min-height: 700px;
        /* ความสูงขั้นต่ำ */
        background-color: rgb(56, 56, 213);
        /* สีเขียวเข้ม */
        border: 22px solid rgb(233, 190, 82);
        /* ขอบสีน้ำตาล */
        border-radius: 30px;
        box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.8);
        padding: 10px;
        /* เพิ่ม padding เล็กน้อย */
    }


    .card-container {
        /* ให้แต่ละ card ขยายเต็มขนาดเท่ากัน */
        width: 94%;
        padding-bottom: 1rem;
        padding-top: 1rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        /* กำหนดขนาดของ container */
        gap: 10px;
        /* ระยะห่างระหว่าง card */
    }

    .card-six {
        position: relative;
        overflow: hidden;
        width: 49%;
        /* ให้แต่ละ card มีความกว้างประมาณ 48% ของพื้นที่ container */
        height: 600px;
        /* ความสูงของ card */
        background-color: #fff;
        border-radius: 15px;
        /* เพิ่ม padding ด้านบนเพื่อให้ pin อยู่ด้านบน */
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card-six:hover {
        transform: scale(1.05);
        /* ขยายขึ้น 5% เมื่อ hover */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงาให้ดูเด่นขึ้น */
    }

    .pin-red-icon {
        width: 50px;
        /* ขนาดรูปภาพ */
        height: auto;
        /* ให้รูปภาพยังคงสัดส่วนที่ถูกต้อง */
        position: absolute;
        top: 1px;
        /* ระยะห่างจากขอบบน */
        left: 1px;
        /* ระยะห่างจากขอบซ้าย */
        z-index: 20;
        /* ให้รูปภาพอยู่ด้านบนของเนื้อหา */
    }

    .card-image-six {
        background-image: url('https://via.placeholder.com/700x200');
        /* เปลี่ยน URL ให้เป็นรูปที่คุณต้องการ */
        background-size: contain;
        background-position: center;
        border-radius: 15px;
        height: 100%;
    }


    @media (min-width: 992px) {
        .course-right {
            width: auto;
            height: 8rem;
            object-fit: contain;
        }

        .course-left {
            width: auto;
            height: 8rem;
            object-fit: contain;
        }

        .title-page6 {
            color: black;
            font-size: 5rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */
        }
    }

    /* From Uiverse.io by Gautammsharma */
    .bg-brown {
        background-color: #7d441b;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 5px 5px 0px #000;
        height: 25px;
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-start justify-content-center bg-page6">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center font-sarabun-bold d-flex-equal-height "
            style=" margin-top:3rem;">
            <img src="{{ asset('images/pages/6/online-course.png') }}" alt="megaphone-left"
                class="course-left pb-3 d-none d-md-block">
            <div class="title-page6">หลักสูตรการเรียนการสอน</div>
            <img src="{{ asset('images/pages/6/online-course.png') }}" alt="megaphone"
                class="course-right pb-3 d-none d-md-block">
        </div>
        <div class="yellow-six-board d-flex flex-column justify-content-center align-items-center">
            <div class="card-container d-flex flex-column flex-lg-row justify-content-center w-100">
                <div class="card-six mb-4 mb-lg-0 me-lg-3 w-100 w-lg-50">
                    <img src="{{ asset('images/pages/6/pin-red.png') }}" alt="pin" class="pin-red-icon">
                    <div class="card-image-six"></div>
                </div>
                <div class="card-six mb-4 mb-lg-0 me-lg-3 w-100 w-lg-50">
                    <img src="{{ asset('images/pages/6/pin-red.png') }}" alt="pin" class="pin-red-icon">
                    <div class="card-image-six"></div>
                </div>
                <div class="card-six w-100 w-lg-50">
                    <img src="{{ asset('images/pages/6/pin-red.png') }}" alt="pin" class="pin-red-icon">
                    <div class="card-image-six"></div>
                </div>
            </div>
        </div>
        <div class="w-100 bg-brown">

        </div>
    </div>
</main>
