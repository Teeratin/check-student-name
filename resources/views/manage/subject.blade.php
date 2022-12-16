@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2 mt-2 ms-3">รายชื่อวิชา</p>
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
                            <th scope="col">รหัสวิชา</th>
                            <th scope="col">รายชื่อวิชา</th>
                            <th scope="col">หลักสูตร</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">เวลา</th>
                            <th scope="col">เกณฑ์การให้คะแนน</th>
                            <th scope="col">จำนวนนักศึกษา</th>
                            <th scope="col">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>405-41-06</td>
                            <td>Information Technology Project 2</td>
                            <td>สาขาวิชาเทคโนโลยีสารสนเทศ</td>
                            <td>วันจันทร์</td>
                            <td>เช้า (08:00-12:00)</td>
                            <td>5/4/3</td>
                            <td>30</td>
                            <td>
                                <a href="{{ route('manage_subject_edit') }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                    </button>
                                </a>
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

    <!-- Modal Section -->

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มรายชื่อวิชา
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                            <label class="form-label">ภาคการศึกษา</label>
                            <select class="form-select">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">Summer</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ภาค</label>
                            <select class="form-select">
                                <option selected>ภาคปกติ</option>
                                <option value="1">ภาคสมทบ</option>
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
                            <label class="form-label">เริ่มเวลา</label>
                            <input type="time" class="form-control" />
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">สิ้นสุดเวลา</label>
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

    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        ลบ
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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
