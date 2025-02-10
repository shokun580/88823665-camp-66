<head>
    <title>my first laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<h1 class="text-center mt-4">ตารางสูตรคูณ</h1>
<div class="container d-flex flex-column align-items-center mt-5">

    <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
        <form action="{{url('/mycontroller')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label">ใส่ตัวเลข</label>
                <input type="number" name="myinput" id="myinput" class="form-control text-center" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">คำนวน</button>
        </form>
    </div>

    {{-- แสดงตารางสูตรคูณ --}}
    <div class="mt-4 text-center  "style="max-width: 500px; width: 100%;">
        <?php for($i = 1; $i <= 12; $i++) { ?>
            <div class="alert shadow p-4 alert-secondary">
                <h4>{{ $myinput . " x " . $i . " = " . ($myinput * $i) }}</h4>
            </div>
        <?php } ?>
    </div>
</div>
