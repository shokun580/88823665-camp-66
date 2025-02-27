@extends('layouts.default')

@section('content')
    <div class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <?php
                $error = session()->get('error');
                if($error){
                    ?>
                    <div class="text-danger">
                        {{ $error }}
                    </div>

                    <?php
                }
                ?>
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email"
                            value="{{isset($email) ? $email : ''}}"
                            class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
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
                    <!-- /.social-auth-links -->
                    <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
                    <p class="mb-0">
                        <a href="register" class="text-center"> Register a new membership </a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
