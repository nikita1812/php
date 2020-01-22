<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    $div = $num / 2;
    $mod = 0;
    for ($i = 2; $i <= $div; $i++) {
        $mod = $num % $i;
        if ($mod == 0) {
            echo "$num is not prime";
            break;
        } else {
            echo "$num is prime number";
            break;
        }
    }
}
?>
<form>
    <input type="text" name="num">
</form>