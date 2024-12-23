@extends('admin.layout.admin_layout')
@section('user_content')

<h2 class="text-center">จัดการข่าวประชาสัมพันธ์</h2>

<br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างข่าวประชาสัมพันธ์
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างข่าวประชาสัมพันธ์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PressReleaseCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'ข่าวประชาสัมพันธ์')->id }}">
                        <label for="date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="title_name" class="form-label">ชื่อเรื่อง</label>
                        <input type="text" class="form-control" id="title_name" name="title_name">
                    </div>

                    <div class="mb-3">
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
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>

                    <div>
                        <label for="file_video" class="form-label">แนบไฟล์วิดีโอ</label>
                        <input type="file" class="form-control" id="file_video" name="file_video">
                        <small class="text-muted">ขนาดไฟล์ต้องไม่เกิน 50MB และรองรับเฉพาะไฟล์ .mp4, .avi, .mov, .wmv</small>
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

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Post Type</th>
            <th>Date</th>
            <th>Title Name</th>
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
                <td>{{ $postDetail->date ?? 'N/A' }}</td>
                <td>{{ $postDetail->title_name ?? 'N/A' }}</td>
                <td>{{ $postDetail->topic_name ?? 'N/A' }}</td>
                <td>{{ $postDetail->details ?? 'N/A' }}</td>
                <td>
                    {{-- <a href="{{ route('post.details.show', $postDetail->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('post.details.edit', $postDetail->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                    <form action="{{ route('PressReleaseDelete', $postDetail->id) }}" method="POST" style="display:inline;">
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


<script src="{{ asset('js/multipart_files.js') }}"></script>
@endsection
