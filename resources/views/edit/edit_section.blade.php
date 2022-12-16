@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2 mt-2 ms-3"></p>
        </div>
        <div class="col-lg-12">
            <button type="button" class="btn btn-success float-end me-5" data-bs-toggle="modal" data-bs-target="#ModalAdd">
                <i class="bi bi-plus"></i> เพิ่มรายชื่อนักศึกษา
            </button>
            <button type="button" class="btn btn-success float-end me-3" data-bs-toggle="modal"
                data-bs-target="#exampleModalAddExcel">
                <i class="bi bi-file-earmark-excel"></i> Import Excel
            </button>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th scope="col">รหัสนักศึกษา</th>
                        <th scope="col">ชื่อ-นามสกุล</th>

                        <th scope="col">ตัวเลือก</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_student as $row)
                        <tr>
                            <td>{{ $row->student_code }}</td>
                            <td>{{ $row->fullname }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#ModalEdit{{ $row->student_id }}">
                                    <i class="bi bi-pencil-square"></i> แก้ไข
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#ModalDelete{{ $row->student_id }}">
                                    <i class="bi bi-trash3"></i> ลบ
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="ModalEdit{{ $row->student_id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            แก้ไขรายชื่อนักศึกษา
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form
                                        action="{{ route('manage_section_update', ['id' => $row->section_id, 'sid' => $row->student_id]) }}"
                                        method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row m-auto g-3">
                                                <div class="col-lg-12">
                                                    <label class="form-label">รหัสนักศึกษา</label>
                                                    <input type="text" class="form-control"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                        maxlength="12" name="student_code"
                                                        value="{{ $row->student_code }}" />
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">คำนำหน้า</label>
                                                    <select class="form-select" name="student_perfix">
                                                        <option value="นาย"
                                                            {{ $row->student_perfix == 'นาย' ? 'select' : '' }}>นาย</option>
                                                        <option value="นางสาว"
                                                            {{ $row->student_perfix == 'นางสาว' ? 'select' : '' }}>นางสาว
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="form-label">ชื่อ</label>
                                                    <input type="text" class="form-control" name="student_fname"
                                                        value="{{ $row->student_fname }}" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="form-label">นามสกุล</label>
                                                    <input type="text" class="form-control" name="student_lname"
                                                        value="{{ $row->student_lname }}" />
                                                    <input type="text" class="form-control" hidden name="section_id"
                                                        value="{{ $id }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                            <button type="submit" class="btn btn-warning">ยืนยัน</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Delete -->
                        <div class="modal fade" id="ModalDelete{{ $row->student_id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <p class="fs-5">คุณต้องการลบ "{{ $row->fullname }}" ใช่หรือไม่</p>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Section -->

    <!-- Modal Add -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มรายชื่อนักศึกษา
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('manage_section_create_student') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row m-auto g-3">
                            <div class="col-lg-12">
                                <label class="form-label">รหัสนักศึกษา</label>
                                <input type="text" class="form-control"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    maxlength="12" name="student_code" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">คำนำหน้า</label>
                                <select class="form-select" name="student_perfix">
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" name="student_fname" />
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" name="student_lname" />
                                <input type="text" class="form-control" hidden name="section_id"
                                    value="{{ $id }}" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            ยกเลิก
                        </button>
                        <button type="submit" class="btn btn-success">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Add Excel -->
    <div class="modal fade" id="exampleModalAddExcel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        Import Excel
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-auto g-3">
                        <div class="col-lg-12">
                            <label class="form-label">Import File</label>
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


    <!-- End Modal Section -->
@endsection
