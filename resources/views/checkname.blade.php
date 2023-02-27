@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-3 mt-3 mb-2 ms-1">[{{ $subject->subject_code }}] {{ $subject->subject_name }}</p>
        </div>
        <div class="col-lg-12">
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">รหัสนักศึกษา</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">มา</th>
                        <th scope="col">สาย</th>
                        <th scope="col">ขาด</th>
                        <th scope="col">ลา</th>
                        <th scope="col">คะแนน</th>
                        <th scope="col">ตัวเลือก</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->student_code }}</td>
                            <td>{{ $student->fullname }}</td>
                            <td>{{ $student->CountPresent($id) }}</td>
                            <td>{{ $student->CountLate($id) }}</td>
                            <td>{{ $student->CountAbsent($id) }}</td>
                            <td>{{ $student->CountLeave($id) }}</td>
                            <td>{{ $student->Sumscore($id) }}</td>
                            @if ($student->isCheck($id))
                                <td>
                                    @php($data = ['id' => $id, 'sid' => $student->student_id])
                                    <a href="{{ route('checkname_update_present', $data) }}" class="btn btn-success"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="เข้าเรียน">
                                        <i class="bi bi-person-check"></i>
                                    </a>
                                    <a href="{{ route('checkname_update_late', $data) }}" class="btn btn-warning"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="มาสาย">
                                        <i class="bi bi-person-exclamation"></i>
                                    </a>
                                    <a href="{{ route('checkname_update_absent', $data) }}" class="btn btn-danger"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="ขาดเรียน">
                                        <i class="bi bi-person-dash"></i>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#ModalLeave{{ $student->student_id }}">
                                        <i class="bi bi-clipboard-minus"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal" id="ModalLeave{{ $student->student_id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-secondary">
                                                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">การลา
                                                    </h1>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                @php($data = ['id' => $id, 'sid' => $student->student_id])
                                                <form action="{{ route('checkname_update_leave', $data) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">ประเภทการลา</label>
                                                            <select class="form-select" name="leave_type">
                                                                <option value="ลาป่วย">ลาป่วย</option>
                                                                <option value="ลากิจ">ลากิจ</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">ข้อมูลการลา</label>
                                                            <textarea class="form-control" rows="3" name="leave_description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">ยืนยัน</button>
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            ยกเลิก
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                </td>
                            @else
                                <td>
                                    @php($data = ['id' => $id, 'sid' => $student->student_id])
                                    <a href="{{ route('checkname_present', $data) }}" class="btn btn-success"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="เข้าเรียน">
                                        <i class="bi bi-person-check"></i>
                                    </a>
                                    <a href="{{ route('checkname_late', $data) }}" class="btn btn-warning"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="มาสาย">
                                        <i class="bi bi-person-exclamation"></i>
                                    </a>
                                    <a href="{{ route('checkname_absent', $data) }}" class="btn btn-danger"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="ขาดเรียน">
                                        <i class="bi bi-person-dash"></i>
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#ModalLeave{{ $student->student_id }}">
                                        <i class="bi bi-clipboard-minus"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal" id="ModalLeave{{ $student->student_id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-secondary">
                                                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">การลา
                                                    </h1>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                @php($data = ['id' => $id, 'sid' => $student->student_id])
                                                <form action="{{ route('checkname_leave', $data) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">ประเภทการลา</label>
                                                            <select class="form-select" name="leave_type">
                                                                <option value="ลาป่วย">ลาป่วย</option>
                                                                <option value="ลากิจ">ลากิจ</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">ข้อมูลการลา</label>
                                                            <textarea class="form-control" rows="3" name="leave_description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">ยืนยัน</button>
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            ยกเลิก
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $students->links() }}
        </div>
    </div>
@endsection
