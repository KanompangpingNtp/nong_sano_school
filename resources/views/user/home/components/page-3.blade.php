<style>
    .bg-page3 {
        background-image: url('{{ asset('images/pages/3/bg-page3.png') }}');
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

    .megaphone-right {
        width: auto;
        height: 5rem;
        object-fit: contain;
        /* ให้รูปภาพไม่ผิดสัดส่วน */
        transform: rotate(-15deg);
        /* เอียงซ้ายขึ้น 45 องศา */
    }

    .megaphone-left {
        width: auto;
        height: 5rem;
        object-fit: contain;
        /* ให้รูปภาพไม่ผิดสัดส่วน */
        transform: rotate(15deg);
        /* เอียงซ้ายขึ้น 45 องศา */
    }

    .title-page3 {
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
        text-shadow:
            2px 2px 0px white,
            -2px -2px 0px white,
            2px -2px 0px white,
            -2px 2px 0px white;
        /* สร้างเส้นขอบสีขาว */
    }


    @media (min-width: 768px) {
        .title-page3 {
            color: black;
            font-size: 6rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */
            text-shadow:
                2px 2px 0px white,
                -2px -2px 0px white,
                2px -2px 0px white,
                -2px 2px 0px white;
            /* สร้างเส้นขอบสีขาว */
        }

    }





    .blackboard {
        width: 100%;
        min-height: 700px;
        /* ความสูงขั้นต่ำ */
        background-color: #23402a;
        /* สีเขียวเข้ม */
        border: 22px solid #7d441b;
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

    .card {
        position: relative;
        overflow: hidden;
        width: 49%;
        /* ให้แต่ละ card มีความกว้างประมาณ 48% ของพื้นที่ container */
        height: 600px;
        /* ความสูงของ card */
        background-color: #fff;
        border-radius: 15px;
        padding: 20px 15px 15px;
        /* เพิ่ม padding ด้านบนเพื่อให้ pin อยู่ด้านบน */
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        /* ขยายขึ้น 5% เมื่อ hover */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงาให้ดูเด่นขึ้น */
    }

    .pin-icon {
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

    .card-image {
        background-image: url('https://via.placeholder.com/460x200');
        /* เปลี่ยน URL ให้เป็นรูปที่คุณต้องการ */
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
        height: 460px;
        /* ความสูงของรูปภาพ */
    }

    .card-text {
        flex-grow: 1;
        background-color: #e3e3e3;
        display: -webkit-box;
        /* ใช้ Box Layout เพื่อรองรับ multi-line ellipsis */
        font-size: 30px;
        border-radius: 15px;
        color: #333;
        padding: 10px;

        /* ตัดข้อความเมื่อเกิน 2 บรรทัด */
        width: 100%;
        /* กำหนดความกว้าง */
        line-height: 1.2;
        /* ระยะห่างระหว่างบรรทัด */
        max-height: calc(1.5em * 2);
        /* กำหนดความสูงสำหรับ 2 บรรทัด */
        overflow: hidden;
        /* ซ่อนข้อความที่เกิน */
        text-overflow: ellipsis;
        /* เพิ่ม ... */
        -webkit-line-clamp: 2;
        /* แสดงได้ 2 บรรทัด */
        -webkit-box-orient: vertical;
        /* ตั้งค่าการจัดกล่องให้เป็นแนวตั้ง */
        white-space: normal;
        /* อนุญาตให้ข้อความขึ้นบรรทัดใหม่ */
    }


    .custom-text-limit {
        max-height: calc(1.5em * 2);
        /* จำกัดความสูงไว้เท่ากับ 2 บรรทัด */
        overflow: hidden;
        /* ซ่อนข้อความที่เกินพื้นที่ */
        text-overflow: ellipsis;
        /* เพิ่ม ... เมื่อข้อความเกิน */
    }

    @media (min-width: 992px) {
        .megaphone-right {
            width: auto;
            height: 10rem;
            object-fit: contain;
            /* ให้รูปภาพไม่ผิดสัดส่วน */
            transform: rotate(-15deg);
            /* เอียงซ้ายขึ้น 45 องศา */
        }

        .megaphone-left {
            width: auto;
            height: 10rem;
            object-fit: contain;
            /* ให้รูปภาพไม่ผิดสัดส่วน */
            transform: rotate(15deg);
            /* เอียงซ้ายขึ้น 45 องศา */
        }


        .title-page3 {
            color: black;
            font-size: 7rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */
            text-shadow:
                2px 2px 0px white,
                -2px -2px 0px white,
                2px -2px 0px white,
                -2px 2px 0px white;
            /* สร้างเส้นขอบสีขาว */
        }
    }

    /* From Uiverse.io by WhiteNervosa */
    .new-button {
        font-size: 28px;
        color: #e1e1e1;
        cursor: pointer;
        position: relative;
        border: none;
        background: none;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;
        letter-spacing: 3px;
    }

    .new-button:focus,
    .new-button:hover {
        color: #fff;
    }

    .new-button:focus:after,
    .new-button:hover:after {
        width: 100%;
        left: 0%;
    }

    .new-button:after {
        content: "";
        pointer-events: none;
        bottom: -2px;
        left: 50%;
        position: absolute;
        width: 0%;
        height: 2px;
        background-color: #fff;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: width, left;
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-start justify-content-center bg-page3">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center font-sarabun-bold d-flex-equal-height "
            style=" margin-top:3rem;">
            <img src="{{ asset('images/pages/3/megaphone-left.png') }}" alt="megaphone-left"
                class="megaphone-left pb-3 d-none d-md-block">
            <div class="title-page3">ข่าวประชาสัมพันธ์</div>
            <img src="{{ asset('images/pages/3/megaphone.png') }}" alt="megaphone"
                class="megaphone-right pb-3 d-none d-md-block">
        </div>
        <div class="blackboard d-flex flex-column justify-content-center align-items-center">
            <div class="card-container d-flex flex-column flex-lg-row justify-content-center w-100">
                <div class="card mb-4 mb-lg-0 me-lg-3 w-100 w-lg-50">
                    <img src="{{ asset('images/pages/3/pin.png') }}" alt="pin" class="pin-icon">
                    <div class="card-image"></div>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid quasi ipsa pariatur.
                        Perferendis ab, praesentium sunt facere nostrum fugit similique esse cupiditate ipsam suscipit
                        impedit eligendi dolores, dolorum dolor voluptas?
                    </div>
                </div>
                <div class="card w-100 w-lg-50">
                    <img src="{{ asset('images/pages/3/pin.png') }}" alt="pin" class="pin-icon">
                    <div class="card-image"></div>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid quasi ipsa pariatur.
                        Perferendis ab, praesentium sunt facere nostrum fugit similique esse cupiditate ipsam suscipit
                        impedit eligendi dolores, dolorum dolor voluptas?
                    </div>
                </div>
            </div>
            <div class="text-center my-3 font-sarabun-bold">
                <button class="new-button "><i class="fa-solid fa-arrow-right-to-bracket" style="font-size: 18px;"></i>
                    ดูทั้งหมด</button>
            </div>
        </div>
    </div>
</main>
