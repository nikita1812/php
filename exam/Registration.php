<!DOCTYPE HTML>
<html>

<head>
    <title>
        registration page
    </title>
</head>

<body>
    <?php
    require_once 'session.php';
    require_once 'database.php';
    $request = $_POST;
    prepareData($request);
   
    function prepareData($request){
        insertData('user', register($request['register']));
    }
    function register($register)
    {
        return $register;
        unset($register['ConfirmPassword']);
    }
    setSession('register');
    ?>
    <form action="BlogPostListing.php" method="POST">
        <fieldset>
            <h1 align='center'>REGISTER</h1>
            <div>
                <label>Prefix : </label>
                <select name="register[prefix]" require><?php echo getValue("register", "prefix"); ?>
                    <option disabled>Choose one</option>
                    <?php $prefix = array('Mr', 'Miss', 'Ms', 'Mrs'); ?>
                    <?php foreach ($prefix as $value) : ?>
                        <?php $selected = $value == getValue("register", "prefix") ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>" <?php echo $selected; ?>>
                            <?php echo $value; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label>First Name :</label>
                <input type="text" name="register[FirstName]" require>
            </div>
            <div>
                <label>Last Name :</label>
                <input type="text" name="register[LastName]" require>
            </div>
            <div>
                <label>Email :</label>
                <input type="email" name="register[Email]" require>
            </div>
            <div>
                <label>Mobile Number :</label>
                <input type="number" name="register[Mobile]" require>
            </div>
            <div>
                <label>Password :</label>
                <input type="password" name="register[PasswordHash]" require>
            </div>
            <div>
                <label>Confirm Password :</label>
                <input type="password" name="register[ConfirmPassword]" require>
            </div>
            <div>
                <label>Information :</label>
                <textarea name="register[Information]" require></textarea>
            </div>
            <div>
                <input type="checkbox" name="register[Terms]"> Hereby, I Accept Terms & Conditions.
            </div>
            <div>
                <input type="submit" value="SUBMIT">
            </div>
        </fieldset>

    </form>
</body>

</html>