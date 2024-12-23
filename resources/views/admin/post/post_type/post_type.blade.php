@extends('admin.layout.admin_layout')
@section('user_content')

<h2 class="text-center">จัดการประเภทของโพส</h2>

<br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createtypeModal">
    สร้างประเภทของโพส
</button>

<div class="modal fade" id="createtypeModal" tabindex="-1" aria-labelledby="createtypeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createtypeModalLabel">สร้างข่าวประชาสัมพันธ์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PostTypeCreate') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="type_name" class="form-label">ชื่อหัวข้อโพส</label>
                        <input type="text" class="form-control" id="type_name" name="type_name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<div class="col-md-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>ชื่อประเภทโพส</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postTypes as $key => $postType)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $postType->type_name }}</td>
                <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $postType->id }}">
                        แก้ไข
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('PostTypeDelete', $postType->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach ($postTypes as $postType)
<div class="modal fade" id="editModal{{ $postType->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $postType->id }}" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel{{ $postType->id }}">แก้ไขประเภทโพส</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PostTypeUpdate', $postType->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="type_name" class="form-label">ชื่อหัวข้อโพส</label>
                        <input type="text" class="form-control" id="type_name" name="type_name" value="{{ $postType->type_name }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@endsection
