@extends('layouts.master')

@section('content')
    <div class="card m-4">
        <div class="m-4">
            <form action="{{ route('manage_subject_create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-12">
                        <p class="fs-5">เพิ่มรายชื่อวิชา</p>
                    </div>
                    <div class="row m-auto g-3">
                        <div class="col-lg-4">
                            <label class="form-label">รหัสวิชา</label>
                            <input type="text" class="form-control"
                                oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*?)\..*/g, '$1'); console.log(this.value)"
                                name="subject_code" value="" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">รายชื่อวิชา</label>
                            <input type="text" class="form-control" name="subject_name" />
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">สถานที่เรียน</label>
                            <input type="text" class="form-control" name="subject_place" />
                        </div>

                        <div class="col-lg-4">
                            <label class="form-label">หลักสูตร</label>
                            <select class="form-select" name="course_id">
                                @foreach ($courses as $row)
                                    <option value="{{ $row->course_id }}">{{ $row->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ปีการศึกษา</label>
                            <input type="text" class="form-control" name="subject_year" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ภาคการศึกษา</label>
                            <select class="form-select" name="subject_term">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="Summer">Summer</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ภาค</label>
                            <select class="form-select" name="subject_semester">
                                <option value="1">ภาคปกติ</option>
                                <option value="2">ภาคสมทบ</option>
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label class="form-label">วันที่เรียน</label>
                            <select class="form-select" name="subject_day">
                                <option value="จันทร์">จันทร์</option>
                                <option value="อังคาร">อังคาร</option>
                                <option value="พุธ">พุธ</option>
                                <option value="พฤหัสบดี">พฤหัสบดี</option>
                                <option value="ศุกร์">ศุกร์</option>
                                <option value="เสาร์">เสาร์</option>
                                <option value="อาทิตย์">อาทิตย์</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">กลุ่มเรียน</label>
                            <select class="form-select" name="section_id">
                                @foreach ($section as $row)
                                    <option value="{{ $row->section_id }}">{{ $row->section_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">ช่วงเวลาเรียน</label>
                            <select class="form-select" name="subject_period">
                                <option value="เช้า">เช้า</option>
                                <option value="บ่าย">บ่าย</option>
                                <option value="ค่ำ">ค่ำ</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">เริ่มเวลา</label>
                            <input type="time" class="form-control" name="subject_timeS" />
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label">สิ้นสุดเวลา</label>
                            <input type="time" class="form-control" name="subject_timeE" />
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">เกณฑ์การให้คะแนน</label>
                            <select class="form-select" name="scoring_id">
                                @foreach ($scoring as $row)
                                    <option value="{{ $row->scoring_id }}">{{ $row->scoring_name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="lecturer_id" value="{{ auth()->user()->lecturer_id }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success float-end mt-2">
                            <i class="bi bi-check2-square"></i>
                            ยืนยัน
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
