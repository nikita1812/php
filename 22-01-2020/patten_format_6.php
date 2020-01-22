<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = 1; $i <= $num; $i++) {
        echo "*";
    }
    echo "<br>";

    for ($j = 1; $j <= $num; $j++) {
        echo "*";
    }
    echo "<br>";
    for ($j = 1; $j <= $num; $j++) {
        echo "*";
    }
}
?>
<form>
    <input type="text" name="num">
</form>