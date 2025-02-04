@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id= "name"onchange="return checkname();"
                                class="form-control" placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                กรุณาระบุข้อมูล ชื่อ-สกุล
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email"
                                class="form-control"onchange="return checkemail();" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                กรุณาระบุข้อมูล หรือ กรอก email ให้ถูกต้อง
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" onchange="return clickme3();"
                                class="form-control" placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="valid-feedback">
                                ok
                            </div>
                            <div class="invalid-feedback">
                                กรุณาระบบข้อมูล ชื่อ-สกุล
                            </div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    {{-- <button type="button" class="btn btn-danger" onclick="clickme()"> cilck me</button> --}}
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.querySelector("body > div > div > div.card > div > form > div:nth-child(2) > input");

        function checkname() {
            $('#name').removeClass('is-invalid');
            $('#name').removeClass('is-valid');
            let name = document.getElementById('name');
            // let email = document.getElementById('email');
            if (name.value == '') {
                $('#name').addClass('is-invalid'); //error
            } else {
                $('#name').addClass('is-valid'); //ok
            }
            return true;
        }

        function checkemail() {
            let email = $('#email');
            let emailValue = email.val().trim();
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;

            // รีเซ็ต Class ก่อนตรวจสอบใหม่
            email.removeClass('is-invalid is-valid');

            if (emailValue === '') {
                email.addClass('is-invalid'); // ถ้าช่องว่างให้ขึ้น Invalid
                return false;
            } else if (!emailPattern.test(emailValue)) {
                email.addClass('is-invalid'); // ถ้า Format ไม่ถูกต้อง ให้ขึ้น Invalid
                return false;
            } else {
                email.addClass('is-valid'); // ถ้าถูกต้อง ให้ขึ้น Valid
                return true;
            }
        }

        function clickme3() {
            $('#password').removeClass('is-invalid');
            $('#password').removeClass('is-valid');
            let password = document.getElementById('password');
            // let email = document.getElementById('email');
            if (password.value == '') {
                $('#password').addClass('is-invalid'); //error
            } else {
                $('#password').addClass('is-valid'); //ok
            }
            return true;
        }
    </script>
@endsection
