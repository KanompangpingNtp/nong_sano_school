<style>
    .bg-page9 {
        background-image: url('{{ asset('images/pages/9/bg-page9.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .custom-card-container {
        display: flex;
        justify-content: space-around;
        /* กระจาย Card ให้มีระยะห่างเท่ากัน */
        flex-wrap: wrap;
        /* ทำให้ Card เลื่อนลงมาเมื่อพื้นที่ไม่พอ */
        gap: 2rem;
        /* ระยะห่างระหว่าง Card */
        width: 100%;
        max-width: 1200px;
        /* ควบคุมความกว้างสูงสุดของ Card Container */
    }

    .custom-card {
        border: 10px solid rgb(255, 208, 91);
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease;
        width: 310px;
        /* ความกว้างคงที่ของ Card */
        max-width: 100%;
    }

    .custom-card:hover {
        transform: scale(1.05);
    }

    .card-rotate-left {
        transform: rotate(-20deg);
    }

    .card-rotate-normal {
        transform: rotate(0);
    }

    .card-rotate-right {
        transform: rotate(20deg);
    }

    .custom-card img {
        width: 100%;
        height: auto;
    }

    .number-visitor {
        background-color: rgb(56, 56, 213);
        color: #ffffff;
        font-size: 32px;
        border-radius: 20px;
        padding: 10px 20px;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.6);
        width: 100%;
        text-align: center;
    }

    /* สไตล์ที่กำหนดขอบให้กับ .border-start-s และ .border-end-s */
    .border-start-s {
        border-right: 3px solid rgb(255, 208, 91);
    }

    .border-end-s {
        border-left: 3px solid rgb(255, 208, 91);
    }
</style>

<!-- Content Section -->
<main class="bg-page9">
    <!-- ส่วนแสดง Card -->
    <div class="custom-card-container">
        <!-- Card 1 -->
        <div class="custom-card card-rotate-left d-none d-lg-block">
            <img src="https://via.placeholder.com/310x300" alt="Card Image 1">
        </div>
        <!-- Card 2 -->
        <div class="custom-card card-rotate-normal d-none d-lg-block">
            <img src="https://via.placeholder.com/310x300" alt="Card Image 2">
        </div>
        <!-- Card 3 -->
        <div class="custom-card card-rotate-right d-none d-xl-block">
            <img src="https://via.placeholder.com/310x300" alt="Card Image 3">
        </div>
    </div>

    <!-- ส่วนแสดงจำนวนผู้เข้าชมด้านล่าง -->
    <div class="container number-visitor d-flex flex-column flex-lg-row justify-content-around align-items-center"
        style="margin-top: 10rem;">
        <div class="pe-4 border-start-s">
            จำนวนผู้เข้าชมเว็บไซต์ <br>
            Number of website visitors
        </div>
        <div>
            <div>score</div>
            <div>ขณะนี้</div>
        </div>
        <div>
            <div>score</div>
            <div>วันนี้</div>
        </div>
        <div>
            <div>score</div>
            <div>สัปดาห์นี้</div>
        </div>
        <div>
            <div>score</div>
            <div>เดือนนี้</div>
        </div>
        <div>
            <div>score</div>
            <div>ปีนี้</div>
        </div>
        <div class="ps-4 border-end-s">
            <div>score</div>
            <div>ทั้งหมด</div>
        </div>
    </div>
</main>
