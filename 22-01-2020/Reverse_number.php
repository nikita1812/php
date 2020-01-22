<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET["num"];
    $revrse_num = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $revrse_num = ($revrse_num * 10) + $rem;
        $num = $num / 10;
    }
    echo "Reverse Number is $revrse_num"; 
}

?>
<form action="Reverse_number.php" method="GET">
    <input type="text" name="num">
</form>