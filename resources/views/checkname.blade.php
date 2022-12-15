@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2">[405-41-06 - 42464] Information Technology Project2</p>
        </div>
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">รหัสนักศึกษา</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">มา</th>
                        <th scope="col">สาย</th>
                        <th scope="col">ขาด</th>
                        <th scope="col">คะแนน</th>
                        <th scope="col">ตัวเลือก</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>164424221013</td>
                        <td>นายธีรทิน ภู่ระมาต</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>5</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="เข้าเรียน">
                                <i class="bi bi-person-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="มาสาย">
                                <i class="bi bi-person-exclamation"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="ขาดเรียน">
                                <i class="bi bi-person-dash"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-clipboard-minus"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">การลา</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ประเภทการลา</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ลาป่วย</option>
                            <option value="1">ลากิจ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">ข้อมูลการลา</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        ยกเลิก
                    </button>
                    <button type="button" class="btn btn-secondary">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection
