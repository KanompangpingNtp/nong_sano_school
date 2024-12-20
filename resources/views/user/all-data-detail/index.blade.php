@extends('user.layouts.app')

<style>
    .bg-press-release {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ปรับให้ครอบคลุมความสูงของหน้าจอ */
        display: flex;
        /* ใช้ flex สำหรับการจัดวาง */
        align-items: center;
        /* จัดให้อยู่กึ่งกลางแนวตั้ง */
    }

    .bg-view-detail {
        background-color: rgb(56, 56, 213);
        padding: 20px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
        width: 100%;
        /* ให้ครอบคลุมพื้นที่ทั้งหมด */
        max-width: 1200px;
        /* กำหนดขนาดสูงสุด */
        margin: auto;
        /* จัดให้อยู่กึ่งกลางหน้าจอ */
    }

    .bg-view-in-detail {
        background-color: rgb(139, 139, 232);
        height: auto;
        /* ปรับให้สูงตามเนื้อหา */
        border-radius: 3%;
        padding: 10px;
        overflow: hidden;
        /* ป้องกันเนื้อหาเกินขอบ */
    }

    .carousel-inner img {
        height: 700px;
        border-radius: 15px;
        /* กำหนดความโค้งของมุม */
        overflow: hidden;
        /* ป้องกันไม่ให้ภาพล้นออกนอกกรอบ */
    }

    .carousel-item img {
        border-radius: 30px;
        /* ความโค้งของภาพ */
        object-fit: cover;
        /* ทำให้ภาพปรับขนาดโดยคงอัตราส่วน */
    }

    .card-text {
        background-color: white;
        border-radius: 30px;
    }
</style>

@section('content')
    <div class="bg-press-release my-5">
        <div class="container bg-view-detail">
            <div class="bg-view-in-detail">
                <!-- Carousel Section -->
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        @php
                            $numOfImages = 5; // กำหนดจำนวนภาพ
                        @endphp
                        @for ($i = 0; $i < $numOfImages; $i++)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"
                                aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $i + 1 }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        @for ($i = 1; $i <= $numOfImages; $i++)
                            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                                <img src="https://via.placeholder.com/800x400.png?text=Image+{{ $i }}"
                                    class="d-block w-100" alt="Image {{ $i }}">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Content Section -->
                <div class="mt-3 p-4 card-text">
                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs mb-3" id="contentTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                data-bs-target="#tab1-content" type="button" role="tab" aria-controls="tab1-content"
                                aria-selected="true">เนื้อหา</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2-content"
                                type="button" role="tab" aria-controls="tab2-content" aria-selected="false">PDF
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="contentTabContent">
                        <!-- Tab 1 Content -->
                        <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="tab1-tab">
                            <h2 class="fs-1 font-sarabun-bold">เนื้อหา</h2>
                            <p class="fs-4">
                                เนื้อหาในหัวข้อที่ 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                corrupti, nulla
                                voluptatum sequi veniam rem dicta eaque. Veritatis repellat, ex suscipit dolore doloribus
                                iusto quidem!
                            </p>
                        </div>

                        <!-- Tab 2 Content -->
                        <div class="tab-pane fade" id="tab2-content" role="tabpanel" aria-labelledby="tab2-tab">
                            <h2 class="fs-1 font-sarabun-bold">PDF</h2>
                            <p class="fs-4">
                                เนื้อหาในหัวข้อที่ 2: Quisquam quos alias eius, asperiores ad autem deserunt voluptates,
                                corporis,
                                reiciendis id. Doloremque praesentium, velit distinctio minima sequi consectetur maxime!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
