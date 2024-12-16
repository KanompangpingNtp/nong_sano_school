<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            height: 11rem;
            /* กำหนดความสูงของ Header */
        }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    <!-- Header Section -->
    <header class="d-flex text-white text-center align-items-center justify-content-around">
        <!-- ส่วนที่ 1 -->
        <div class="flex-fill">
            <h2>Part 1</h2>
        </div>

        <!-- ส่วนที่ 2 -->
        <div class="flex-fill d-flex flex-column justify-content-center align-items-start">
            <div class="fs-2">โรงเรียนบ้านหนองโสน</div>
            <div>องค์การบริหารส่วนตำบลเสม็ดใต้อำเภอบางคล้า จังหวัดฉะเชิงเทรา</div>
        </div>

        <!-- ส่วนที่ 3 -->
        <div class="flex-fill">
            <h2>Part 3</h2>
        </div>

        <!-- ส่วนที่ 4 -->
        <div class="flex-fill">
            <h2>Part 4</h2>
        </div>
    </header>

    <!-- Content Section -->
    <main class="flex-grow-1 d-flex align-items-center justify-content-center bg-light">
        <p>Content Section</p>
    </main>

    <!-- Optional Footer -->
    <footer class="bg-dark text-white text-center py-2">
        <p>Footer</p>
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
