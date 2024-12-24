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
            <label for="number" class="form-label">เลขที่ต้องการรู้:</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">เป็นเลขอะไร</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        echo '<div class="mt-4">';
        echo '<div class="alert ';
        if ($number % 2 === 0) {
            echo 'alert-success">เลข ' . $number . ' เป็นเลขคู่';
        } else {
            echo 'alert-warning">เลข ' . $number . ' เป็นเลขคี่';
        }
        echo '</div>';
        echo '</div>';


    }
    ?>
</div>

</body>
</html>