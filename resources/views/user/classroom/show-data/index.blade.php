@extends('user.layouts.app')

<style>
    .bg-press-release {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* จำนวนบรรทัดที่ต้องการแสดง */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #515151;
    }

    .card {
        transition: transform 0.3s ease-in-out;
    }

    /* เอฟเฟ็กต์ Hover สำหรับการ์ด */
    .card:hover {
        transform: scale(1.05);
        /* ขยายการ์ดเล็กน้อย */

        /* เพิ่มการเปลี่ยนแปลงอย่างราบรื่น */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* เพิ่มเงา */
    }

    /* เอฟเฟ็กต์ Hover สำหรับปุ่ม */
    .btn-primary:hover {
        background-color: #0056b3;
        /* เปลี่ยนสีเมื่อ hover */
        border-color: #0056b3;
    }

    /* เพิ่มไอคอนให้ปุ่ม */
    .btn-icon {
        margin-right: 8px;
        /* ระยะห่างระหว่างไอคอนและข้อความ */
    }
</style>

@section('title', ' แนะนำห้องเรียน')
@section('content')
    <div class="bg-press-release py-5">
        <div class="container my-4 ">
            <!-- Header Section -->
            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-6 mb-2 mb-md-0">
                    <p class="text-center text-lg-start text-primary font-sarabun-bold" style="font-size: 4rem;">
                        แนะนำห้องเรียน</p>
                </div>
                <div class="col-12 col-md-6 text-md-end">
                    <form class="d-flex justify-content-center justify-content-md-end">
                        <input type="text" class="form-control me-2 fs-3" placeholder="ค้นหา..." aria-label="Search">
                        <button class="btn btn-primary fs-3 d-flex align-items-center" type="submit">
                            <i class="fa-solid fa-magnifying-glass fs-5 me-2"></i> <!-- ไอคอน -->
                            ค้นหา
                        </button>
                    </form>
                </div>

            </div>

            <!-- Cards Section -->
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
                {{-- @for ($i = 1; $i <= 12; $i++)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image {{ $i }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fs-2 text-primary font-sarabun-bold">ข้อมูลที่ {{ $i }}
                                </h5>
                                <a href="#" class="btn btn-primary mt-auto fs-4">
                                    <i class="fas fa-info-circle btn-icon" style="font-size: 18px;"></i> ดูเพิ่มเติม
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor --}}
                @foreach ($classroom as $post)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $post->photos->where('post_photo_status', 1)->first()->post_photo_file) }}"
                                class="card-img-top" alt="{{ $post->title_name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fs-2 text-primary font-sarabun-bold">{{ $post->topic_name }}
                                </h5>
                                <a href="{{route('ClassRoomShowDetails',$post->id)}}" class="btn btn-primary mt-auto fs-4">
                                    <i class="fas fa-info-circle btn-icon" style="font-size: 18px;"></i> ดูเพิ่มเติม
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
