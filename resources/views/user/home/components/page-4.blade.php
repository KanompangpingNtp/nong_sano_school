<style>
    .bg-page4 {
        background-image: url('{{ asset('images/pages/4/bg-page4.png') }}');
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

    .megaphone-right-blue {
        width: auto;
        height: 5rem;
        object-fit: contain;
        /* ให้รูปภาพไม่ผิดสัดส่วน */
        transform: rotate(-15deg);
        /* เอียงซ้ายขึ้น 45 องศา */
    }

    .megaphone-left-blue {
        width: auto;
        height: 5rem;
        object-fit: contain;
        /* ให้รูปภาพไม่ผิดสัดส่วน */
        transform: rotate(15deg);
        /* เอียงซ้ายขึ้น 45 องศา */
    }

    .title-page4 {
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
            4px 4px 10px rgba(0, 0, 0, 0.8);
        /* สร้างเส้นขอบสีขาว */
    }

    .blue-broad {
        background-color: rgb(56, 56, 213);
        border-radius: 30px;
        position: relative;
    }

    .view-all-btn {
        position: absolute;
        bottom: -50px;
        right: 10px;
    }

    .view-all-btn button {
        border: 5px solid rgb(56, 56, 213);
        background-color: rgb(233, 190, 82);
        color: rgb(56, 56, 213);
        font-size: 40px;
        padding: 1px 20px;
        border-radius: 30px;
    }

    .view-all-btn button {
        border: 5px solid rgb(56, 56, 213);
        background-color: rgb(233, 190, 82);
        color: rgb(56, 56, 213);
        font-size: 40px;
        padding: 1px 20px;
        border-radius: 30px;
        transition: all 0.3s ease;
        /* เพิ่ม transition เพื่อให้มีการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .view-all-btn button:hover {
        background-color: rgb(56, 56, 213);
        /* เปลี่ยนสีพื้นหลังเมื่อ hover */
        color: rgb(233, 190, 82);
        /* เปลี่ยนสีตัวอักษรเมื่อ hover */
        border-color: rgb(233, 190, 82);
        /* เปลี่ยนสีของ border เมื่อ hover */
        transform: scale(1.05);
        /* ขยายปุ่มเล็กน้อย */
    }



    .yellow-board {
        background-color: rgb(233, 190, 82);
        /* สีพื้นหลังสีเหลือง */
        border-radius: 50px;
        background-image:
            linear-gradient(to right, #ffffffbf 0.6px, transparent 0.5px),
            linear-gradient(to bottom, #ffffffbf 0.6px, transparent 0.5px);
        background-size: 55px 25px;
        /* ขนาดของช่องตาข่าย */
        background-position: top left;
    }


    @media (min-width: 768px) {
        .title-page4 {
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
                4px 4px 10px rgba(0, 0, 0, 0.8);
            /* สร้างเส้นขอบสีขาว */
        }

    }



    @media (min-width: 992px) {
        .megaphone-right-blue {
            width: auto;
            height: 10rem;
            object-fit: contain;
            /* ให้รูปภาพไม่ผิดสัดส่วน */
            transform: rotate(-15deg);
            /* เอียงซ้ายขึ้น 45 องศา */
        }

        .megaphone-left-blue {
            width: auto;
            height: 10rem;
            object-fit: contain;
            /* ให้รูปภาพไม่ผิดสัดส่วน */
            transform: rotate(15deg);
            /* เอียงซ้ายขึ้น 45 องศา */
        }

        .title-page4 {
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
                4px 4px 10px rgba(0, 0, 0, 0.8);
            /* สร้างเส้นขอบสีขาว */
        }
    }

    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        /* ทำให้เมาส์เป็น pointer เมื่อ hover */
    }

    .hover-effect:hover {
        transform: scale(1.05);
        /* ขยายรูปภาพเล็กน้อย */
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงา */
    }

    .modal-body img {
        max-width: none;
        /* ปิดการจำกัดความกว้างของภาพ */
        height: auto;
        /* รักษาอัตราส่วนภาพ */
        display: inline-block;
        /* ให้ภาพแสดงตามขนาดจริง */
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-center justify-content-center bg-page4">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center font-sarabun-bold d-flex-equal-height "
            style=" margin-top:3rem;">
            <img src="{{ asset('images/pages/4/megaphon-left.png') }}" alt="megaphone-left"
                class="megaphone-left-blue pb-3 ">
            <div class="title-page4">กิจกรรม</div>
            <img src="{{ asset('images/pages/4/megaphone-right.png') }}" alt="megaphone-right"
                class="megaphone-right-blue pb-3 ">
        </div>
        <div class="blue-broad d-flex justify-content-center align-items-center px-3 py-4 w-100">
            <div class="yellow-board d-flex flex-column justify-content-center align-items-center w-100 py-4 px-5">
                <div class="row g-4">
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 1"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 2"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 3"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 4"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 5"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 6"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 7"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 8"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="https://via.placeholder.com/300x200" alt="Image 9"
                            class="rounded-4 w-100 hover-effect" onclick="openModal(this)">
                    </div>
                </div>
            </div>

            <div class="view-all-btn font-sarabun-bold">
                <button>ดูทั้งหมด</button>
            </div>
        </div>

    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">แสดงภาพ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalImage" class="rounded-4" alt="Selected Image">
            </div>
        </div>
    </div>
</div>


<script>
    function openModal(imgElement) {
        const imageUrl = imgElement.src; // ดึง URL รูปภาพจาก src
        document.getElementById('modalImage').src = imageUrl; // เปลี่ยนรูปภาพใน modal
        const myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show(); // เปิด modal
    }
</script>
