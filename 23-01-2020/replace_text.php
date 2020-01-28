<?php
    if(isset($_GET['text']) && isset($_GET['old_text']) && isset($_GET['new_text'])){
        if(!empty($_GET['text']) && !empty($_GET['old_text']) && !empty($_GET['new_text'])){
            $text = $_GET['text'];
            $old_text = $_GET['old_text'];
            $new_text = $_GET['new_text'];
            $_GET['text'] = str_replace($old_text, $new_text, $text);
        }
    }
?>
<form>
    <textarea name="text" rows="6"><?php echo (isset($_GET['text']) ? $_GET['text']  : " " )?></textarea><br><br>
    <input type="text" name="old_text"><br><br>
    <input type="text" name="new_text"><br><br>
    <input type="submit" value="Replace Text">
</form>