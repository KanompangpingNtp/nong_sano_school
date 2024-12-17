<style>
    .bg-page7 {
        background-image: url('{{ asset('images/pages/7/bg-page7.png') }}');
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

    .classroom-right {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .classroom-left {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .title-page7 {
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
        .title-page7 {
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
        .classroom-right {
            width: auto;
            height: 9rem;
            object-fit: contain;
        }

        .classroom-left {
            width: auto;
            height: 9rem;
            object-fit: contain;
        }

        .title-page7 {
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

    .card-seven {
        /* ความสูงของ card */
        background-color: #fff;
        border-radius: 15px;
        padding: 10px 10px 10px;
        /* เพิ่ม padding ด้านบนเพื่อให้ pin อยู่ด้านบน */
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card-seven:hover {
        transform: scale(1.05);
        /* ขยายขึ้น 5% เมื่อ hover */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงาให้ดูเด่นขึ้น */
    }

    .card-seven-image {
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

    .card-seven-text {
        flex-grow: 1;
        background-color: #e3e3e3;
        /* ขยายพื้นที่ข้อความให้เต็มพื้นที่ที่เหลือ */
        display: flex;
        justify-content: center;
        /* จัดข้อความให้อยู่กลางแนวนอน */
        align-items: center;
        /* จัดข้อความให้อยู่กลางแนวตั้ง */
        font-size: 30px;
        border-radius: 15px;
        color: #333;
        padding: 10px;
    }

    /* From Uiverse.io by Gautammsharma */
    .comic-button-seven {
        display: inline-block;
        padding: 10px 20px;
        font-size: 30px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: rgb(56, 56, 213);
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 5px 5px 0px #000;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .comic-button-seven:hover {
        background-color: #fff;
        color: rgb(56, 56, 213);
        border: 2px solid rgb(56, 56, 213);
        box-shadow: 5px 5px 0px rgb(56, 56, 213);
    }

    .comic-button-seven:active {
        background-color: rgb(233, 190, 82);
        box-shadow: none;
        transform: translateY(4px);
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-start justify-content-center bg-page7">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center font-sarabun-bold d-flex-equal-height"
            style=" margin-top:3rem;">
            <img src="{{ asset('images/pages/7/classroom.png') }}" alt="classroom"
                class="classroom-left pb-3 d-none d-md-block">
            <div class="title-page7">แนะนำห้องเรียน</div>
            <img src="{{ asset('images/pages/7/classroom.png') }}" alt="classroom"
                class="classroom-right pb-3 d-none d-md-block">
        </div>
        <div class="row w-100 row-gap-4 d-flex justify-content-around align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color:rgb(233, 190, 82);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 1</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color:rgb(233, 190, 82);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 2</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color:rgb(233, 190, 82);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 3</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color: rgb(56, 56, 213);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 4</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color: rgb(56, 56, 213);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 5</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-seven" style="background-color: rgb(56, 56, 213);">
                    <div class="card-seven-image"></div>
                    <div class="card-seven-text">Card 6</div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 w-100 px-3 font-sarabun-bold">
            <button class="comic-button-seven w-100"><i class="fa-solid fa-up-right-from-square me-2"
                    style="font-size:20px;"></i>
                ดูทั้งหมด</button>
        </div>
    </div>

</main>
