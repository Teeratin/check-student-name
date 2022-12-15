@extends('layouts.master')

@section('content')
    <div class="card m-4">
        <div class="m-4">
            <div class="row g-3">
                <div class="col-lg-12">
                    <p class="fs-5">Information Technology Project 2</p>
                </div>
                <div class="row m-auto g-3">
                    <div class="col-lg-4">
                        <label class="form-label">รหัสวิชา</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                        <label class="form-label">รายชื่อวิชา</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                        <label class="form-label">สถานที่เรียน</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                        <label class="form-label">หลักสูตร</label>
                        <select class="form-select">
                            <option selected>สาขาวิชาเทคโนโลยีสารสนเทศ</option>
                            <option value="1">สาขาวิชาวิทยาการคอมพิวเตอร์</option>
                            <option value="2">สาขาวิชาเทคโนโลยีดิจิทัลมิเดีย</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">ปีการศึกษา</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">ภาคที่เรียน</label>
                        <select class="form-select">
                            <option selected>ภาคปกติ</option>
                            <option value="1">ภาคสมทบ</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">เทอม</label>
                        <select class="form-select">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">summer</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">วันที่เรียน</label>
                        <select class="form-select">
                            <option selected>จันทร์</option>
                            <option value="1">อังคาร</option>
                            <option value="2">พุธ</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">กลุ่มเรียน</label>
                        <select class="form-select">
                            <option selected>ITS16421N</option>
                            <option value="1">ITS16421N</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">ช่วงเวลาเรียน</label>
                        <select class="form-select">
                            <option selected>เช้า</option>
                            <option value="1">บ่าย</option>
                            <option value="2">ค่ำ</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label">เวลาเริ่ม</label>
                        <input type="time" class="form-control" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label">เวลาจบ</label>
                        <input type="time" class="form-control" />
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label">เกณฑ์การให้คะแนน</label>
                        <select class="form-select">
                            <option selected>5/4/3</option>
                            <option value="1">5/0/0</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-success float-end mt-2">
                        <i class="bi bi-check2-square"></i>
                        ยืนยัน
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card m-4">
        <div class="m-4">
            <div class="row">
                <div class="col-lg-6">
                    <p class="fs-4">รายชื่อนักศึกษา</p>
                </div>
                <div class="col-lg-6 ">
                    <button type="button" class="btn btn-success float-end " data-bs-toggle="modal"
                        data-bs-target="#exampleModalAdd">
                        <i class="bi bi-plus-circle"></i>
                        เพิ่มรายชื่อนักศึกษา
                    </button>
                </div>
                <div class="col-lg-12">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">รหัสนักศึกษา</th>
                                <th scope="col">ชื่อ-นามสกุล</th>
                                <th scope="col">กลุ่มเรียน</th>
                                <th scope="col">ตัวเลือก</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>164424221013</td>
                                <td>นายธีรทิน ภู่ระมาต</td>
                                <td>ITS16421N</td>
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
    </div>


    <!-- Modal Section -->

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มรายชื่อนักศึกษา
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <div class="col-lg-12">
                            <label class="form-label">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select">
                                <option value="1">นาย</option>
                                <option value="1">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">กลุ่มเรียน</label>
                            <select class="form-select">
                                <option value="1">ITS16421N</option>
                                <option value="1">ITS16422N</option>
                                <option value="1">ITS16423N</option>
                            </select>
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
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">
                        แก้ไขรายชือนักศึกษา
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <div class="col-lg-12">
                            <label class="form-label">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">คำนำหน้า</label>
                            <select class="form-select">
                                <option value="1">นาย</option>
                                <option value="1">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">กลุ่มเรียน</label>
                            <select class="form-select">
                                <option value="1">ITS16421N</option>
                                <option value="1">ITS16422N</option>
                                <option value="1">ITS16423N</option>
                            </select>
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
