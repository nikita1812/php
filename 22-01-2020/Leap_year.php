<?php
if (isset($_GET['year']) && !empty($_GET['year'])) {
    $year = $_GET['year'];
    if ($year % 4 == 0) {
        echo "$year is leap year";
    } else {
        echo "$year is not leap year";
    }
}
?>

<form>
    <input type="text" name="year">
</form>