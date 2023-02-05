@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2 mt-2 ms-3">รายชื่อวิชา</p>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('manage_subject_add') }}" class="btn btn-success float-end me-5">
                <i class="bi bi-plus"></i>เพิ่มข้อมูล
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
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->subject_code }}</td>
                                <td>{{ $row->subject_name }}</td>
                                <td>{{ $row->course->course_name }}</td>
                                <td>{{ $row->subject_day }}</td>
                                <td>{{ $row->subject_period . ' ' . '(' . date('H:i', strtotime($row->subject_timeS)) . '-' . date('H:i', strtotime($row->subject_timeE)) . ')' }}
                                </td>
                                <td>{{ $row->scoring->scoring_name }}</td>
                                <td>{{ $row->students->count() }}</td>
                                <td>
                                    <a href="{{ route('manage_subject_edit', $row->subject_id) }}">
                                        <button type="button" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i> แก้ไข
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#ModalDelete{{ $row->subject_id }}">
                                        <i class="bi bi-trash3"></i> ลบ
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Delete -->
                            <div class="modal fade" id="ModalDelete{{ $row->subject_id }}" tabindex="-1"
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
                                                <p class="fs-5">คุณต้องการลบ "{{ $row->subject_name }}" ใช่หรือไม่</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                            <a href="{{ route('manage_subject_delete', $row->subject_id) }}" type="button"
                                                class="btn btn-danger">ยืนยัน</a>
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
@endsection
