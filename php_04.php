<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">กรอกเลขที่ต้องการ</h2>
    
    <form method="POST" action="">
        <div class="mb-3">
            <label for="number" class="form-label ">เลขที่ต้องการรู้ตัวแรก:</label>
            <input type="number" class="form-control" id="number_start" name="number_start" required>
            <label for="number" class="form-label ">เลขที่ต้องการรู้ตัวสุดท้าย:</label>
            <input type="number" class="form-control" id="number_end" name="number_end" required>
        </div>
        <button type="submit" class="btn btn-primary btn btn-danger">เป็นเลขอะไร</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number_start'];
        $number2 = $_POST['number_end'];
        echo "<h3 class='mt-4'>เลข $number1 ถึง $number2 มีอะไรเป็นเลขคู่คี่บ้าง</h3>";
        echo "<ul class='list-group'>";
        for ($i = $number1; $i <= $number2; $i++) {
            ?>
            <div class="row">

                <div class="h2 col text-start">
                    <?php
                    if ($i % 2 === 0) {
                        echo "<li class='list-group-item text-success fs-6' >$i : เป็นเลขคู่</li>";
                        
                    } else {
                        echo "<li class='list-group-item text-danger fs-6' >$i : เป็นเลขคี่</li>";
                        
                    }

                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    }
    ?>
</div>

</body>
</html>