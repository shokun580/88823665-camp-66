<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>File index.php</h1>
    <div class="con"></div>
    <?php
    echo "Hello World";
    echo '<br>';
    print("Hello World");
    echo '<br>';
    print_r("Hello World");
    echo '<br>';
    printf("Hello World");
    echo '<br>';
    var_dump("Hello World");
    $myVar = "Hello World";
    ?>
    <?php
    echo "<h2>" . $myVar . "</h2>";
    ?>
    <?php
    function myfunction($name)
    {
        global $myVar;
        echo "Hello " . $name;
        echo "<br>";
        return $myVar;
    }
    ?>
    <?php
    echo myFunction("John");
    echo "<br>";
    ?>
    <?php
    $my_arry = array(1,2,3,4,5,6,7);
    for ($i = 0; $i < count($my_arry); $i++) {
        echo $my_arry[$i] ." ";
    }
    echo "<br>";
    foreach($my_arry as $index => $value) {
        echo$value . " ";
    }
    echo "<br>";    
    $my_arry2[] = 1;
    $my_arry2[] = 2;
    $my_arry2[] = 3;
    $my_arry2[] = 4;
    $my_arry2[] = 5;
    print_r($my_arry2);
    echo"<br>";
    $my_arry3 = array(1,2,3,"myindex" => 4);
    $my_arry3["myindex"] = 1;
    print_r($my_arry3);

    ?>
</body>

</html>