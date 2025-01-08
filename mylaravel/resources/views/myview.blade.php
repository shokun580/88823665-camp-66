<h1>My view</h1>
<?php echo $value_id;?>
{{$value_id;}}{{$myinput}}
<form action="{{url('/mycontroller')}}" method="POST">
    @csrf
    <input type = "number" name = "myinput">
    <button type = "sumbit">
        submit
    </button>

</form>
<?php for($i=1;$i<13;$i++){?>
    <?php
    $ans = intval($myinput) * $i;
    ?>
    <h1>{{ $myinput . " x " . $i . " = " . ($myinput * $i) }}</h1>
<?php }?>
