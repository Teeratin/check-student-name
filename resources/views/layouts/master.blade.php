<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบเช็คชื่อนักศึกษา</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@v1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans Thai" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</head>

<body>
    @php
        $user_id = auth()->user()->lecturer_id;
    @endphp
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 d-flex align-items-center" href="{{ route('menu') }}">
                <img src="/image/logo-rus.png" width="60" height="60" />
                <h3 class="mb-0 ms-3 fw-bold font-header">
                    ระบบเช็คชื่อเข้าเรียนของนักศึกษา
                </h3>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80"
                                class="avatar" alt="" />
                            {{ auth()->user()->fullname }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile_index', $user_id) }}">
                                    <i class="bi bi-person-gear"></i> บัญชี</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="wrapper">

        <!-- Sidebar -->
        <div class="flex-shrink-0 p-3 bg-white sidebar">
            <a href="{{ route('profile_index',auth()->user()->lecturer_id) }}">
                <div class="sidebar-avatar">
                    <img
                        src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" />
                    <h1 class="sidebar-avatar-text mb-0">{{ auth()->user()->fullname }}</h1>
                    <h2></h2>
                </div>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="sidebar-item {{ Route::currentRouteName() == 'menu' ? 'active' : '' }}">
                    <a href="{{ route('menu') }}">
                        <i class="bi bi-house-door"></i>
                        <span>หน้าหลัก</span>
                    </a>
                </li>
                @php
                    $menu_timetable = strpos(Route::currentRouteName(), 'timetable_') === 0;
                @endphp
                <li class="sidebar-item has-submenu {{ !$menu_timetable ? 'collapsed' : '' }}" data-bs-toggle="collapse"
                    data-bs-target="#section-collapse" aria-expanded="{{ $menu_timetable ? 'true' : 'false' }}">
                    <a class="sidebar-link sidebar-submenu {{ $menu_timetable ? 'active' : '' }}" href="#">
                        <i class="bi bi-calendar-check"></i>
                        <span>ตารางสอน</span>
                    </a>
                    <div class="collapse {{ $menu_timetable ? 'show' : '' }}" id="section-collapse">
                        <ul class="submenu">
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() == 'timetable_normal_index' ? 'active' : '' }}"
                                    href="{{ route('timetable_normal_index') }}"> <span>ภาคปกติ</span></a>
                            </li>
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() == 'timetable_evening_index' ? 'active' : '' }}"
                                    href="{{ route('timetable_evening_index') }}"><span>ภาคสมทบ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                @php
                    $menu_manage = strpos(Route::currentRouteName(), 'manage_') === 0;
                @endphp
                <li class="sidebar-item has-submenu {{ !$menu_manage ? 'collapsed' : '' }}" data-bs-toggle="collapse"
                    data-bs-target="#manage-collapse" aria-expanded="{{ $menu_manage ? 'true' : 'false' }}">
                    <a class="sidebar-link sidebar-submenu {{ $menu_manage ? 'active' : '' }} " href="#">
                        <i class="bi bi-gear-wide-connected"></i>
                        <span>ตั้งค่า</span>
                    </a>
                    <div class="collapse {{ $menu_manage ? 'show' : '' }}" id="manage-collapse">
                        <ul class="submenu">
                            @if (auth()->user()->lecturer_type == 1)
                                <li>
                                    <a class="nav-link {{ Route::currentRouteName() == 'manage_lecturer_index' ? 'active' : '' }}"
                                        href="{{ route('manage_lecturer_index') }}"> <span>อาจารย์</span></a>
                                </li>
                                <li>
                                    <a class="nav-link {{ Route::currentRouteName() == 'manage_course_index' ? 'active' : '' }}"
                                        href="{{ route('manage_course_index') }}"><span>หลักสูตร</span></a>
                                </li>
                            @endif
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() == 'manage_scoring_index' ? 'active' : '' }}"
                                    href="{{ route('manage_scoring_index') }}"><span>เกณฑ์การให้คะแนน</span></a>
                            </li>
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() == 'manage_subject_index' ? 'active' : '' }}"
                                    href="{{ route('manage_subject_index') }}"><span>วิชา</span></a>
                            </li>
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() == 'manage_section_index' ? 'active' : '' }}"
                                    href="{{ route('manage_section_index') }}"><span>กลุ่มเรียน</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- End Sidebar -->


        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- End Content -->


    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
{{-- <script src="{{ asset('js/overscroll.js') }}"></script> --}}
{{-- <script src="{{ asset('js/smooth-scrollbar.js') }}"></script> --}}
<script src="{{ asset('js/main.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
