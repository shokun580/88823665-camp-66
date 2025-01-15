<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Error')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex  justify-content-center vh-100 ">
    <div class="container mt-5 ">
        <div class="row ">
            <!-- Left Section: Error Code (404, 500) -->
            <div class="col-md-4 text-end">
                <h1 class="display-1 fw-bold
                    @if(trim($__env->yieldContent('code')) == '404') text-warning
                    @elseif(trim($__env->yieldContent('code')) == '500') text-danger
                    @else text-secondary
                    @endif">
                    @yield('code')
                </h1>
            </div>

            <!-- Right Section: Error Message + Search -->
            <div class="col-md-8">
                <div class="d-flex align-items-center mb-2">

                    <span class="fs-2 me-2
                        @if(trim($__env->yieldContent('code')) == '404') text-warning
                        @elseif(trim($__env->yieldContent('code')) == '500') text-danger
                        @else text-secondary
                        @endif">
                        ⚠️
                    </span>
                    <h2 class="fw-semibold">@yield('title')</h2>
                </div>

                <p class="text-muted">@yield('message')</p>

                <div class="mt-3">
                    <a href="{{ url('/') }}" class="text-primary text-decoration-underline">
                        return to dashboard
                    </a>
                </div>

                <!-- ช่องค้นหา -->
                <div class="mt-4">
                    <div class="input-group w-50">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
