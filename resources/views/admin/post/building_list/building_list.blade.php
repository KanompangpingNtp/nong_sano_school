@extends('admin.layout.admin_layout')
@section('user_content')

<h2 class="text-center">จัดการอาคารและสถานทื่</h2>

<br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างอาคารและสถานทื่
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างอาคารและสถานทื่</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('BuildingCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'อาคารและสถานทื่')->id }}">
                        <label for="topic_name" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="topic_name" name="topic_name">
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">รายละเอียด</label>
                        <input type="text" class="form-control" id="details" name="details">
                    </div>

                    <div class="mb-3">
                        <label for="title_image" class="form-label">รูปหัวข้อ</label>
                        <input type="file" class="form-control" id="title_image[]" name="title_image">
                    </div>

                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png (ขนาดไม่เกิน 10MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Post Type</th>
            <th>Topic Name</th>
            <th>Details</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($postDetails as $index => $postDetail)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $postDetail->postType->type_name ?? 'N/A' }}</td>
                <td>{{ $postDetail->topic_name ?? 'N/A' }}</td>
                <td>{{ $postDetail->details ?? 'N/A' }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#showFile-{{ $postDetail->id }}">
                        แสดงไฟล์
                    </button>
                    <form action="{{ route('BuildingDelete', $postDetail->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">ลบ</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">No posts found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@foreach ($postDetails as $postDetail)
<div class="modal fade" id="showFile-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="showFileLabel-{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="showFileLabel-{{ $postDetail->id }}">แสดงไฟล์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <h5>รูปภาพ</h5>
                @if($postDetail->photos->isNotEmpty())
                <div>
                    @foreach($postDetail->photos as $photo)
                    <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image" style="width:150px; height:150px; object-fit:cover; margin-bottom:10px;">
                    @endforeach
                </div>
                @else
                <p>ไม่มีรูปภาพ</p>
                @endif

            </div>
        </div>
    </div>
</div>
@endforeach


<script src="{{ asset('js/multipart_files.js') }}"></script>
@endsection
