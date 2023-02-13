@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2">รายชื่ออาจารย์</p>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('manage_lecturer_add') }}">
                <button type="button" class="btn btn-success float-end me-5">
                    <i class="bi bi-plus"></i>เพิ่มข้อมูล
                </button>
            </a>
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
                            <th scope="col">Email</th>
                            <th scope="col">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($member as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->fullname }}</td>
                                <td>{{ $data->lecturer_username }}</td>
                                <td>
                                    <a href="{{ route('manage_lecturer_edit', $data->lecturer_id) }}">
                                        <button type="button" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i> แก้ไข
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalDelete{{ $data->lecturer_id }}">
                                        <i class="bi bi-trash3"></i> ลบ
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Delete -->
                            <div class="modal fade" id="exampleModalDelete{{ $data->lecturer_id }}" tabindex="-1"
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
                                                <p class="fs-5">คุณต้องการลบ "{{ $data->fullname }}" ใช่หรือไม่</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('manage_lecturer_delete', $data->lecturer_id) }}"
                                                class="btn btn-danger">ยืนยัน</a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Scetion -->




    <!-- End Modal Section -->
@endsection
