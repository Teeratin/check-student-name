@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <p class="fs-2">เกณฑ์การให้คะแนน</p>
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
                            <th scope="col">ลำดับ</th>
                            <th scope="col">เกณฑ์การให้คะแนน</th>
                            <th scope="col">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->scoring_name }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#ModalEdit{{ $row->scoring_id }}">
                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#ModalDelete{{ $row->scoring_id }}">
                                        <i class="bi bi-trash3"></i> ลบ
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="ModalEdit{{ $row->scoring_id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                แก้ไขเกณฑ์การให้คะแนน
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('manage_scoring_update', $row->scoring_id) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row m-auto g-3">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">เกณฑ์การให้คะแนน</label>
                                                        <input type="text" class="form-control" name="scoring_name"
                                                            value="{{ $row->scoring_name }}" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="form-label">มาเรียน</label>
                                                        <input type="text" class="form-control" name="scoring_present"
                                                            value="{{ $row->scoring_present }}" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="form-label">สาย</label>
                                                        <input type="text" class="form-control" name="scoring_late"
                                                            value="{{ $row->scoring_late }}" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="form-label">ขาด</label>
                                                        <input type="text" class="form-control" name="scoring_absent"
                                                            value="{{ $row->scoring_absent }}" />
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
                            <div class="modal fade" id="ModalDelete{{ $row->scoring_id }}" tabindex="-1"
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
                                                <p class="fs-5">คุณต้องการลบ "{{ $row->scoring_name }}" ใช่หรือไม่</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                            <a href="{{ route('manage_scoring_delete', $row->scoring_id) }}"
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

    <!-- Modal Scetion -->

    <!-- Modal Add -->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                        เพิ่มเกณฑ์การให้คะแนน
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('manage_scoring_create') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row m-auto g-3">
                            <div class="col-lg-12">
                                <label class="form-label">เกณฑ์การให้คะแนน</label>
                                <input type="text" class="form-control" name="scoring_name" />
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">มาเรียน</label>
                                <input type="text" class="form-control" name="scoring_present" />
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">สาย</label>
                                <input type="text" class="form-control" name="scoring_late" />
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">ขาด</label>
                                <input type="text" class="form-control" name="scoring_absent" />
                                <input type="hidden" name="lecturer_id" value="{{ auth()->user()->lecturer_id }}">
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

    <!-- End Modal Scetion -->
@endsection
