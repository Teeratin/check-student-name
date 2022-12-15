@extends('layouts.master')


@section('content')
    <div class="row m-auto g-3">
        <div class="col-lg-2">
            <select class="form-select">
                <option selected>ปีการศึกษา</option>
                <option value="1">2566</option>
                <option value="2">2565</option>
            </select>
        </div>
        <div class="col-lg-2">
            <select class="form-select">
                <option selected>เทอม</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">summer</option>
            </select>
        </div>
        <div class="col-lg-12">
            <p class="h4 mt-3">ช่วงเช้า</p>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
            <a href="{{ route('checkname_index') }}">
                <div class="card bg-c-green">
                    <div class="card-block">
                        <p class="fs-4">วันจันทร์ <i class="bi bi-calendar4-week float-end"></i></p>
                        <h6>[405-41-06 - 42464]</h6>
                        <p>17081 เขตเหนือ [อาคาร 17 ]</p>
                        <p>Information Technology Project2</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-12">
            <p class="h4 mt-3">ช่วงบ่าย</p>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
            <a href="{{ route('checkname_index') }}">
                <div class="card bg-c-green">
                    <div class="card-block">
                        <p class="fs-4">วันจันทร์ <i class="bi bi-calendar4-week float-end"></i></p>
                        <h6>[405-41-06 - 42464]</h6>
                        <p>17081 เขตเหนือ [อาคาร 17 ]</p>
                        <p>Information Technology Project2</p>
                    </div>
                </div>
            </a>
        </div>


    </div>
@endsection
