<?php
//match function
$string = "Match function example";
if (preg_match('/example/', $string)) {
    echo "Match Found <br>";
} else {
    echo "Match Not Found <br>";
}

//split function
$my_string = "split function example";
$my_array = preg_split("/ /", $my_string);
print_r($my_array);
echo "<br>";

//replace function 
$text = "replace function example";
$text = preg_replace('/replace/','<span style = "background:yellow">replace</span>',$text);
echo $text,"<br>";

//email id check using match function
$my_email = "email@gmail.com";
if(preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+\.[a-zA-z.]{2,5}/",$my_email)){
    echo "$my_email is a valid email address ";
}
else{
    echo "$my_email is NOT a valid email address";
}
?>
