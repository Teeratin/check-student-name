@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <form action="{{ route('profile_edit_img', $data->lecturer_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Profile picture card-->
                <div class="card mb-4 mb-lg-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ Storage::url(auth()->user()->lecturer_image) }}" alt="">
                        <div class="mt-2 mb-2 ps-5 pe-5">
                            <input type="file" class="form-control" name="lecturer_image">
                        </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-login" type="submit">Upload new image</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8 col-md-12">
            <!-- Account details card-->
            <div class="card">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('profile_edit', $data->lecturer_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 mt-3">
                            <div class="col-lg-4">
                                <label class="form-label">คำนำหน้า</label>
                                <select class="form-select" name="lecturer_prefix">
                                    <option value="นาย" {{ $data->lecturer_prefix == 'นาย' ? 'selected' : '' }}>นาย
                                    </option>
                                    <option value="นาง" {{ $data->lecturer_prefix == 'นาง' ? 'selected' : '' }}>นาง
                                    </option>
                                    <option value="นางสาว" {{ $data->lecturer_prefix == 'นางสาว' ? 'selected' : '' }}>นางสาว
                                    </option>
                                    <option value="ผู้ช่วยศาสตราจารย์"
                                        {{ $data->lecturer_prefix == 'ผู้ช่วยศาสตราจารย์' ? 'selected' : '' }}>
                                        ผู้ช่วยศาสตราจารย์</option>
                                    <option value="รองศาสตราจารย์"
                                        {{ $data->lecturer_prefix == 'รองศาสตราจารย์' ? 'selected' : '' }}>
                                        รองศาสตราจารย์</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" name="lecturer_fname"
                                    value="{{ $data->lecturer_fname }}">
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" name="lecturer_lname"
                                    value="{{ $data->lecturer_lname }}">
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
                                <input type="password" class="form-control" name="lecturer_password">
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-login float-end" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
