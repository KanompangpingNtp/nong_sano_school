<style>
    .bg-page8 {
        background-image: url('{{ asset('images/pages/8/bg-page8.png') }}');
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

    .school-right {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .school-left {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .title-page8 {
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


    @media (min-width: 768px) {
        .title-page8 {
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

    @media (min-width: 992px) {
        .school-right {
            width: auto;
            height: 9rem;
            object-fit: contain;
        }

        .school-left {
            width: auto;
            height: 9rem;
            object-fit: contain;
        }

        .title-page8 {
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
        }
    }

    .card-egiht {
        background-color: #fff;
        border-radius: 15px;
        padding: 10px 10px 10px;
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card-egiht:hover {
        transform: scale(1.05);
        /* ขยายขึ้น 5% เมื่อ hover */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงาให้ดูเด่นขึ้น */
    }


    .card-egiht-image {
        background-image: url('https://via.placeholder.com/460x200');
        /* เปลี่ยน URL ให้เป็นรูปที่คุณต้องการ */
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
        height: 250px;
        /* ความสูงของรูปภาพ */
    }

    .card-egiht-text {
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
        line-height: 1.5;
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

    .comic-button-eight {
        display: inline-block;
        padding: 10px 20px;
        font-size: 30px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: rgb(233, 190, 82);
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 5px 5px 0px #000;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .comic-button-eight:hover {
        background-color: #fff;
        color: rgb(233, 190, 82);
        border: 2px solid rgb(233, 190, 82);
        box-shadow: 5px 5px 0px rgb(233, 190, 82);
    }

    .comic-button-eight:active {
        background-color: rgb(56, 56, 213);
        box-shadow: none;
        transform: translateY(4px);
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-start justify-content-center bg-page8">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center font-sarabun-bold d-flex-equal-height"
            style=" margin-top:3rem;">
            <img src="{{ asset('images/pages/8/school.png') }}" alt="school" class="school-left pb-3 d-none d-md-block">
            <div class="title-page7">อาคารสถานที่</div>
            <img src="{{ asset('images/pages/8/school.png') }}" alt="school"
                class="school-right pb-3 d-none d-md-block">
        </div>

        <div class="row w-100 row-gap-4 d-flex justify-content-around align-items-center bg-white p-1 pt-3"
            style="border-radius: 10px;">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-warning">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 1</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-warning">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 2</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-warning">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 3</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-primary">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 4</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-primary">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 5</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-egiht bg-primary">
                    <div class="card-egiht-image"></div>
                    <div class="card-egiht-text">Card 6</div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 w-100 font-sarabun-bold">
            <button class="comic-button-eight w-100"><i class="fa-solid fa-up-right-from-square me-2"
                    style="font-size:20px;"></i>
                ดูทั้งหมด</button>
        </div>
    </div>
</main>
