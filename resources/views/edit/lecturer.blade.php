@extends('layouts.master')

@section('content')
    <div class="card m-4">
        <div class="m-4">
            <form action="{{ route('manage_lecturer_update', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-12">
                        <p class="fs-5">แก้ไขรายชื่ออาจารย์</p>
                    </div>
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select" name="lecturer_perfix">
                                <option value="นาย" {{ $data->lecturer_perfix == 'นาย' ? 'selected' : '' }}>นาย</option>
                                <option value="นาง" {{ $data->lecturer_perfix == 'นาง' ? 'selected' : '' }}>นาง</option>
                                <option value="นางสาว" {{ $data->lecturer_perfix == 'นางสาว' ? 'selected' : '' }}>นางสาว
                                </option>
                                <option value="ผู้ช่วยศาสตราจารย์" {{ $data->lecturer_perfix == 'ผู้ช่วยศาสตราจารย์' ? 'selected' : '' }}>
                                    ผู้ช่วยศาสตราจารย์</option>
                                <option value="รองศาสตราจารย์" {{ $data->lecturer_perfix == 'รองศาสตราจารย์' ? 'selected' : '' }}>
                                    รองศาสตราจารย์</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control input-nonenumber" name="lecturer_fname"
                                value="{{ $data->lecturer_fname }}" required />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control input-nonenumber" name="lecturer_lname"
                                value="{{ $data->lecturer_lname }}" required />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="lecturer_username"
                                    value="{{ substr($data->lecturer_username, 0, strpos($data->lecturer_username, '@rmutsb.ac.th')) }}"
                                    required />
                                <span class="input-group-text">@rmutsb.ac.th</span>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="lecturer_password" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รูปภาพ</label>
                            <input type="file" class="form-control" name="lecturer_image" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">สิทธิการใช้งาน</label>
                            <select class="form-select" name="lecturer_type" required>
                                <option value="1" {{ $data->lecturer_type == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $data->lecturer_type == 2 ? 'selected' : '' }}>User</option>
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
