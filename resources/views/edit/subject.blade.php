@extends('layouts.master')

@section('content')
    <div class="card m-4">
        <div class="m-4">
            <div class="row g-3">
                <div class="col-lg-12">
                    <p class="fs-5">{{ $data->subject_name }}</p>
                </div>
                <form action="{{ route('manage_subject_update', $data->subject_id) }}" method="POST">
                    @csrf
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">รหัสวิชา</label>
                            <input type="text" class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*?)\..*/g, '$1'); console.log(this.value)"
                                name="subject_code" value="{{ $data->subject_code }}" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รายชื่อวิชา</label>
                            <input type="text" class="form-control" name="subject_name"
                                value="{{ $data->subject_name }}" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">สถานที่เรียน</label>
                            <input type="text" class="form-control" name="subject_place"
                                value="{{ $data->subject_place }}" />
                        </div>

                        <div class="col-lg-4">
                            <label class="form-label">หลักสูตร</label>
                            <select class="form-select" name="course_id" value="{{ $data->course_id }}">
                                @foreach ($courses as $row)
                                    <option value="{{ $row->course_id }}"
                                        {{ $row->course_id == $data->course_id ? 'selected' : '' }}>{{ $row->course_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ปีการศึกษา</label>
                            <input type="text" class="form-control" name="subject_year"
                                value="{{ $data->subject_year }}" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ภาคการศึกษา</label>
                            <select class="form-select" name="subject_term" value="{{ $data->subject_term }}">
                                <option value="1" {{ '1' == $data->subject_term ? 'selected' : '' }}>1</option>
                                <option value="2" {{ '2' == $data->subject_term ? 'selected' : '' }}>2</option>
                                <option value="Summer" {{ 'Summer' == $data->subject_term ? 'selected' : '' }}>Summer
                                </option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ภาค</label>
                            <select class="form-select" name="subject_semester" value="{{ $data->subject_semester }}">
                                <option value="1" {{ '1' == $data->subject_semester ? 'selected' : '' }}>ภาคปกติ
                                </option>
                                <option value="2" {{ '2' == $data->subject_semester ? 'selected' : '' }}>ภาคสมทบ
                                </option>
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label class="form-label">วันที่เรียน</label>
                            <select class="form-select" name="subject_day" value="{{ $data->subject_day }}">
                                <option value="จันทร์" {{ 'จันทร์' == $data->subject_day ? 'selected' : '' }}>จันทร์
                                </option>
                                <option value="อังคาร" {{ 'อังคาร' == $data->subject_day ? 'selected' : '' }}>อังคาร
                                </option>
                                <option value="พุธ" {{ 'พุธ' == $data->subject_day ? 'selected' : '' }}>พุธ</option>
                                <option value="พฤหัสบดี" {{ 'พฤหัสบดี' == $data->subject_day ? 'selected' : '' }}>พฤหัสบดี
                                </option>
                                <option value="ศุกร์" {{ 'ศุกร์' == $data->subject_day ? 'selected' : '' }}>ศุกร์
                                </option>
                                <option value="เสาร์" {{ 'เสาร์' == $data->subject_day ? 'selected' : '' }}>เสาร์
                                </option>
                                <option value="อาทิตย์" {{ 'อาทิตย์' == $data->subject_day ? 'selected' : '' }}>อาทิตย์
                                </option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">กลุ่มเรียน</label>
                            <select class="form-select" name="section_id" value="{{ $data->section_id }}">
                                @foreach ($section as $row)
                                    <option value="{{ $row->section_id }}"{{ $row->section_id == $id ? 'selected' : '' }}>
                                        {{ $row->section_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ช่วงเวลาเรียน</label>
                            <select class="form-select" name="subject_period" value="{{ $data->subject_period }}">
                                <option value="เช้า" {{ 'เช้า' == $data->subject_period ? 'selected' : '' }}>เช้า
                                </option>
                                <option value="บ่าย" {{ 'บ่าย' == $data->subject_period ? 'selected' : '' }}>บ่าย
                                </option>
                                <option value="ค่ำ" {{ 'ค่ำ' == $data->subject_period ? 'selected' : '' }}>ค่ำ</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">เริ่มเวลา</label>
                            <input type="time" class="form-control" name="subject_timeS"
                                value="{{ $data->subject_timeS }}" />
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">สิ้นสุดเวลา</label>
                            <input type="time" class="form-control" name="subject_timeE"
                                value="{{ $data->subject_timeE }}" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">เกณฑ์การให้คะแนน</label>
                            <select class="form-select" name="scoring_id" value="{{ $data->scoring_id }}">
                                @foreach ($scoring as $row)
                                    <option value="{{ $row->scoring_id }}"
                                        {{ $row->scoring_id == $row->scoring_id ? 'selected' : '' }}>
                                        {{ $row->scoring_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success float-end mt-3">
                            <i class="bi bi-check2-square"></i>
                            ยืนยัน
                        </button>
                    </div>
                </form>
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
                            @foreach ($students as $row)
                                <tr>
                                    <td>{{ $row->student->student_code }}</td>
                                    <td>{{ $row->student->fullname }}</td>
                                    <td>{{ $row->student->section->section_name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete{{ $row->student->student_id }}">
                                            <i class="bi bi-trash3"></i> ลบ
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="ModalDelete{{ $row->student->student_id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form
                                            action="{{ route('manage_subject_delete_student', ['id' => $data->subject_id, 'sid' => $row->student->student_id]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                                        ลบ
                                                    </h1>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row m-auto g-3">
                                                        <p class="fs-5">คุณต้องการลบ "{{ $row->student->fullname }}"
                                                            ใช่หรือไม่</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">ยืนยัน</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        ยกเลิก
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!-- End Modal Section -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
                        เพิ่มรายชื่อนักศึกษา
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('manage_subject_add_student') }}" method="POST">
                        @csrf
                        <div class="row m-auto g-3">
                            <div class="col-lg-12">
                                <label class="form-label">กลุ่มเรียน</label>
                                <select class="form-select" name="section_id" id="filter_student">
                                    @foreach ($section as $row)
                                        <option
                                            value="{{ $row->section_id }}"{{ $row->section_id == $id ? 'selected' : '' }}>
                                            {{ $row->section_name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="subject_id" value="{{ $data->subject_id }}">
                            </div>
                            <div class="mt-3">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">รหัสนักศึกษา</th>
                                            <th scope="col">ชื่อ-นามสกุล</th>
                                            <th scope="col">ตัวเลือก</th>
                                        </tr>
                                    </thead>
                                    <tbody id="student_filter">
                                        @foreach ($filter_student as $row)
                                            <tr>
                                                <td>{{ $row->student_code }}</td>
                                                <td>{{ $row->fullname }}</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $row->student_id }}" name="checkbox[]">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">ยืนยัน</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        ยกเลิก
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
