<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum = $i + $sum;
        for ($j = 1; $j <= $sum; $j++) {
            echo "*";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "0";
        }
        echo "<br>";
    }
}
?>
<form>
    <input type="text" name="num">
</form>