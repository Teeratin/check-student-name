@extends('layouts.master')

@section('content')
    <div class="card m-4">
        <div class="m-4">
            <form action="{{ route('manage_lecturer_create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-12">
                        <p class="fs-5">เพิ่มรายชื่ออาจารย์</p>
                    </div>
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select" name="lecturer_prefix">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                                <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control input-nonenumber" name="lecturer_fname" required>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control input-nonenumber" name="lecturer_lname" required>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="lecturer_username" required>
                                <span class="input-group-text">@rmutsb.ac.th</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="lecturer_password" required />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รูปภาพ</label>
                            <input type="file" class="form-control" name="lecturer_image" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">สิทธิการใช้งาน</label>
                            <select class="form-select" name="lecturer_type" required>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success float-end mt-2">
                            <i class="bi bi-check2-square"></i>
                            ยืนยัน
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
