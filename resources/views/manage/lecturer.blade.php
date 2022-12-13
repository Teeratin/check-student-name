@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2">รายชื่ออาจารย์</p>
        </div>
        <div class="col-lg-12">
            <button type="button" class="btn btn-success float-end me-5" data-bs-toggle="modal"
                data-bs-target="#exampleModalAdd">
                <i class="bi bi-plus"></i>เพิ่มข้อมูล
            </button>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ-นามสกุล</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                            <th scope="col">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>นายธีรทิน ภู่ระมาต</td>
                            <td>teeratin@gmail.com</td>
                            <td>admin123</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalEdit">
                                    <i class="bi bi-pencil-square"></i> แก้ไข
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalDelete">
                                    <i class="bi bi-trash3"></i> ลบ
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>นายธีรทิน ภู่ระมาต</td>
                            <td>teeratin@gmail.com</td>
                            <td>admin123</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalEdit">
                                    <i class="bi bi-pencil-square"></i> แก้ไข
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalDelete">
                                    <i class="bi bi-trash3"></i> ลบ
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Scetion -->

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มรายชื่ออาจารย์
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select">
                                <option selected>นาย</option>
                                <option value="1">นาง</option>
                                <option value="2">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">email</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รูปภาพ</label>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        ยกเลิก
                    </button>
                    <button type="button" class="btn btn-success">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        แก้ไขรายชื่ออาจารย์
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select">
                                <option selected>นาย</option>
                                <option value="1">นาง</option>
                                <option value="2">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">email</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รูปภาพ</label>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        ยกเลิก
                    </button>
                    <button type="button" class="btn btn-warning">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        ลบ
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <p class="fs-5">คุณต้องการลบ "" ใช่หรือไม่</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        ยกเลิก
                    </button>
                    <button type="button" class="btn btn-danger">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal Section -->
@endsection