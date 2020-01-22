<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    $num_len = strlen($num);
    $armstrong_num = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $armstrong_num = $armstrong_num + $rem * $rem * $rem;
        $num = $num / 10;
    }
    if (strcmp($num, $armstrong_num)) {
        echo $armstrong_num . " is Armstrong number";
    } else {
        echo $armstrong_num . " is not Armstrong number";
    }
}
?>
<form>
    <input type="text" name="num">
</form>