@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2 mt-2 ms-3">กลุ่มเรียน</p>
        </div>
        <div class="col-lg-12">
            <button type="button" class="btn btn-success float-end me-5" data-bs-toggle="modal"
                data-bs-target="#exampleModalAdd">
                <i class="bi bi-plus"></i>เพิ่มกลุ่มเรียน
            </button>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">กลุ่มเรียน</th>
                        <th scope="col">จำนวนนักศึกษา</th>
                        <th scope="col">ตัวเลือก</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->section_name }}</td>
                            <td>36</td>
                            <td>
                                <a href="{{ route('manage_section_edit',$row->section_id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                    </button>
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#ModalDelete{{ $row->section_id }}">
                                    <i class="bi bi-trash3"></i> ลบ
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Delete -->
                        <div class="modal fade" id="ModalDelete{{ $row->section_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                            <p class="fs-5">คุณต้องการลบ "{{ $row->section_name }}" ใช่หรือไม่</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            ยกเลิก
                                        </button>
                                        <a href="{{ route('manage_section_delete', $row->section_id) }}" class="btn btn-danger">ยืนยัน</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal section -->

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มกลุ่มเรียน
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('manage_section_create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row m-auto g-3">
                            <div class="col-lg-12">
                                <label class="form-label">รายชื่อกลุ่มเรียน</label>
                                <input type="text" class="form-control" name="section_name" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            ยกเลิก
                        </button>
                        <button type="submint" class="btn btn-success">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- End Modal section -->
@endsection
