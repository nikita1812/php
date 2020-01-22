<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET["num"];
    $num1 = 0;
    $num2 = 1;
    echo "$num fibonacci series is " . $num1 . "," . $num2;
    for ($i = 0; $i <= $num; $i++) {
        $sum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $sum;
        echo "," . $sum;
    }
}
?>
<form action="Fibonacci_series.php" method="GET">
    <input type="text" name="num">
</form>