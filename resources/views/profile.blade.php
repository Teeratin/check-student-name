@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-lg-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2"
                        src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80"
                        alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-login" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <!-- Account details card-->
            <div class="card">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <div class="row g-3 mt-3">
                            <div class="col-lg-4">
                                <label class="form-label">คำนำหน้า</label>
                                <select class="form-select">
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">ชื่อ</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">นามสกุล</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Emal</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-login float-end" type="button">Save changes</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
