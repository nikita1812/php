<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET["num"];
    echo $num . "<br>";
    $factorialNum = 1;
    for ($i = $num; $i >= 1; $i--) {
        $factorialNum = $factorialNum * $i;
    }
    echo "$num factoral number is $factorialNum";
}
?>


<form>
    <input type="text" name="num">

</form>