<form>
    <fieldset style="height: 100">
        <table>
            <tr>
                <td>Month:</td>
                <td><input type="text" name="month"></td>
            </tr>
            <tr>
                <td>end_month:</td>
                <td><input type="text" name="end_month"></td>
            </tr>
            <tr>
                <td>year:</td>
                <td><input type="text" name="year"></td>
            </tr>
            <tr>
                <td><input type="submit" value="click"><br></td>
            </tr>
        </table>
    </fieldset>

</form>




<?php
if (isset($_GET['month']) && isset($_GET['year']) && isset($_GET['end_month'])) {
    if (!empty($_GET['month']) && !empty($_GET['year']) && !empty($_GET['end_month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
        $end_month = $_GET['end_month'];

        //session store 
        session_start();
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year;
        $_SESSION['end_month'] = $end_month;
        prints($month, $year, $end_month);
    }
} else {
    session_start();
    if (isset($_SESSION['month']) && isset($_SESSION['year']) && isset($_SESSION['end_month'])) {
        $month = $_SESSION['month'];
        $year = $_SESSION['year'];
        $end_month = $_SESSION['end_month'];
        prints($month, $year, $end_month);
    } else {
        echo "hi";
    }
}
function prints($month, $year, $end_month)
{
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfTheWeek = date('N', strtotime($year . '-' . $month . '-01'));
    function space($firstDayOfTheWeek)
    {
        if ($firstDayOfTheWeek >= 7) {
            global $firstDayOfTheWeek;
            $firstDayOfTheWeek = 0;
        }
        for($s = 0; $s <= $firstDayOfTheWeek; $s++)
        {
            echo "<td>". " " ."</td>";
        }
    }
    space($firstDayOfTheWeek);

    if (($month < 13 && $month > 0)) {
        $cnt = $firstDayOfTheWeek;
        for ($j = $month; $j <= $end_month; $j++) {
            $month_name = date("F", mktime(0, 0, 0, $j, 10));
            echo "<table style = 'display : inline-flex; margin:10px;'><tr><th colspan='7' style=text-align:center>$month_name</th></tr><tr><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr><tr>";
            for ($i = 1; $i <= $days; $i++) {
                if ($cnt == 7) {
                    echo "</tr><tr>";
                    $cnt = 0;
                }
                echo "<td>" . $i . "</td>";
                $cnt++;
            }
            echo "</tr></table>";
        }
    } else {
        echo "Your $month are wrong";
    }
}
?>

<form>
    <fieldset style="height: 100">
        <table>
            <tr>
                <td>Month:</td>
                <td><input type="text" name="month"></td>
            </tr>
            <tr>
                <td>end_month:</td>
                <td><input type="text" name="end_month"></td>
            </tr>
            <tr>
                <td>year:</td>
                <td><input type="text" name="year"></td>
            </tr>
            <tr>
                <td><input type="submit" value="click"><br></td>
            </tr>
        </table>
    </fieldset>

</form>