@extends('layouts.master')


@section('content')
    <form action="{{ route('timetable_normal_search') }}" method="POST">
        @csrf
        <div class="row m-auto g-3">
            <div class="col-lg-2">
                <select class="form-select" name="subject_term">
                    <option selected>เทอม</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="Summers">Summer</option>
                </select>
            </div>
            <div class="col-lg-2">
                <input type="number" class="form-control" placeholder="ปีการศึกษา" name="subject_year">
            </div>
            <div class="col-lg-8">
                <button type="submit" class="btn bg-green text-white float-end"><i class="bi bi-search"></i>
                    ยืนยัน</button>
            </div>
    </form>
    <div class="col-lg-12">
        <p class="h4 mt-3">ช่วงเช้า</p>
    </div>

    @foreach ($data as $row)
        @if ($row->subject_period == 'เช้า')
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 mb-2">
                <a href="{{ route('checkname_index', $row->subject_id) }}">
                    <div
                        class="card {{ $row->subject_day == 'จันทร์' ? ' card-mon' : '' }}
                                    {{ $row->subject_day == 'อังคาร' ? 'card-tue' : '' }}
                                    {{ $row->subject_day == 'พุธ' ? 'card-wen' : '' }}
                                    {{ $row->subject_day == 'พฤหัสบดี' ? 'card-thu' : '' }}
                                    {{ $row->subject_day == 'ศุกร์' ? 'card-fri' : '' }}
                                    {{ $row->subject_day == 'เสาร์' ? 'card-sat' : '' }}
                                    {{ $row->subject_day == 'อาทิตย์' ? 'card-sun' : '' }}">
                        <div class="card-body">
                            <p class="fs-4">{{ $row->subject_day }} [{{ $row->subject_code }}] <i
                                    class="bi bi-calendar4-week float-end"></i></p>
                            <p>{{ $row->subject_place }}</p>
                            <p>{{ $row->subject_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    @endforeach


    <div class="col-lg-12">
        <p class="h4 mt-3">ช่วงบ่าย</p>
    </div>

    @foreach ($data as $row)
        @if ($row->subject_period == 'บ่าย')
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 mb-2">
                <a href="{{ route('checkname_index', $row->subject_id) }}">
                    <div
                        class="card {{ $row->subject_day == 'จันทร์' ? ' card-mon' : '' }}
                                    {{ $row->subject_day == 'อังคาร' ? 'card-tue' : '' }}
                                    {{ $row->subject_day == 'พุธ' ? 'card-wen' : '' }}
                                    {{ $row->subject_day == 'พฤหัสบดี' ? 'card-thu' : '' }}
                                    {{ $row->subject_day == 'ศุกร์' ? 'card-fri' : '' }}
                                    {{ $row->subject_day == 'เสาร์' ? 'card-sat' : '' }}
                                    {{ $row->subject_day == 'อาทิตย์' ? 'card-sun' : '' }}">
                        <div class="card-body">
                            <p class="fs-4">{{ $row->subject_day }} [{{ $row->subject_code }}] <i
                                    class="bi bi-calendar4-week float-end"></i></p>
                            <p>{{ $row->subject_place }}</p>
                            <p>{{ $row->subject_name }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
    </div>
@endsection
