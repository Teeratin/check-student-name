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
    <div class="login-wrapper">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div>
                <!-- <h1 class="h1 text-center">ระบบเช็คชื่อเข้าเรียนของนักศึกษา</h1> -->

                <div class="card card-login mx-auto">
                    <div class="row m-3">
                        <div class="col-6">
                            <img src="{{ asset('image/login_image_1.svg') }}" alt="" width="100%"
                                height="100%" class="m-4" />
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <h4 class="card-login-title">เข้าสู่ระบบ</h4>
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label form-label-login">ชื่อผู้ใช้</label>
                                        <input type="text" class="form-control form-control-login"
                                            placeholder="Username" />
                                    </div>

                                    <div>
                                        <label class="form-label form-label-login">รหัสผ่าน</label>
                                        <input type="password" class="form-control form-control-login"
                                            placeholder="********" />
                                    </div>

                                    <div class="mt-5 text-center">
                                        <a href="{{ route('menu') }}" class="btn btn-login w-100">
                                            เข้าสู่ระบบ
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
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
