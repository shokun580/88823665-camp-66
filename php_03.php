<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">กรอกเลขที่ต้องการคำนวณสูตรคูณ</h2>
    
    <form method="POST" action="">
        <div class="mb-3">
            <label for="number" class="form-label">เลขที่ต้องการคูณ:</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">คำนวณสูตรคูณ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $number = $_POST['number'];

    
        echo "<h3 class='mt-4'>สูตรคูณของ $number</h3>";
        echo "<ul class='list-group'>";
        for ($i = 1; $i <= 12; $i++) {
            $result = $number * $i;
            echo "<li class='list-group-item'>$number x $i = $result</li>";
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>