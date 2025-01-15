<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="container text-center">
        <div class="row justify-content-center align-items-center offset-md-2">
            <!-- Left Section: Error Code (404, 500) -->
            <div class="col-md-3 text-end">
                <h1 class="display-1 fw-light mb-0
                    @if(trim($__env->yieldContent('code')) == '404') text-warning
                    @elseif(trim($__env->yieldContent('code')) == '500') text-danger
                    @else text-secondary
                    @endif">
                    @yield('code')
                </h1>
            </div>

            <!-- Right Section: Error Message + Search -->
            <div class="col-md-6 ms-0">
                <!-- ไอคอน ⚠️ และข้อความ -->
                <div class="d-flex align-items-center  mb-0">
                    <span class="fs-2 me-2
                        {{ trim($__env->yieldContent('code')) == '404' ? 'text-warning' : (trim($__env->yieldContent('code')) == '500' ? 'text-danger' : 'text-secondary') }}">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                    </span>
                    <h2 class="fw-semibold mb-0">@yield('title')</h2>
                </div>

                <!-- ข้อความและลิงก์ -->
                <div class="d-flex align-items-center ">
                    <p class="text-muted mb-0 me-2">@yield('message')</p>
                    <a href="{{ url('/') }}" class="text-primary text-decoration-underline">
                        return to dashboard
                    </a>
                </div>

                <!-- ช่องค้นหา -->
                <div class="mt-3 d-flex ">
                    <div class="input-group" style="max-width: 300px;">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn
                            @if(trim($__env->yieldContent('code')) == '500') btn-danger
                            @else btn-warning
                            @endif">
                            🔍
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
