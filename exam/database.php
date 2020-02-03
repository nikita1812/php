<?php
$conn_error = 'could not connect';
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $mysql_db = 'user';

    function connection()
    {
        global $mysql_conn, $mysql_host, $mysql_user, $mysql_pass, $mysql_db;
        $mysql_conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
        return $mysql_conn ? $mysql_conn : false;
    }
    function insertData($mysql_table, $data)
    {
        $mysql_conn = connection();
        $key1 = array_keys($data);
        $key = implode(",", $key1); //column name
        $value = implode("','", array_values($data)); //inseted value

        $insertQuery = "INSERT INTO $mysql_table($key) VALUES('$value')";
        
        if (mysqli_query($mysql_conn, $insertQuery) === true) 
        {            
            echo "New record created successfully <br>";
        } else {
            echo "Error: " . mysqli_error($mysql_conn)."<br>"; 
        }
    }
?>