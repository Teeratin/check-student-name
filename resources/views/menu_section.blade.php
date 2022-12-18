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
</head>

<body>
    @php
        $user_id = auth()->user()->lecturer_id;
    @endphp
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 d-flex align-items-center" href="{{ route('menu') }}">
                <img src="{{ asset('image/logo-rus.png') }}" width="60" height="60" />
                <h3 class="mb-0 ms-3 fw-bold font-header">
                    ระบบเช็คชื่อเข้าเรียนของนักศึกษา
                </h3>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://images.unsplash.com/photo-1667382479804-e0c062fd6ad2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                class="avatar" alt="" />
                            {{ auth()->user()->fullname }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile_index',$user_id) }}">
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

    <div class="menu-wrapper">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 mx-auto">
                        <a href="{{ route('timetable_normal_index') }}">
                            <div class="card card-menu p-3 mb-5 bg-body">
                                <div class="card-body text-center">
                                    <i class="bi bi-mortarboard" style="font-size: 100px"></i>
                                    <h4>ภาคปกติ</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <a href="{{ route('timetable_evening_index') }}">
                            <div class="card card-menu p-3 mb-5 bg-body">
                                <div class="card-body text-center">
                                    <i class="bi bi-mortarboard-fill" style="font-size: 100px"></i>
                                    <h4>ภาคสมทบ</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
