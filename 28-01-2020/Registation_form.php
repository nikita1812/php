<!DOCTYPE html>
<html>

<head>
    <title>Registation Form</title>
</head>

<body>
    <?php
    require_once "Registation_form_fun.php";
    setValueSession('account');
    setValueSession('address');
    setValueSession('info');
    ?>

    <form method="POST">
        <fieldset>
            <legend>Account Details</legend>
            <div>
                <label>First Name : </label>
                <select name="account[prifix]" require><?php getValue("account", "prifix"); ?>
                    <option disabled>Choose one</option>
                    <?php $prifix = array('Mr', 'Miss', 'Ms', 'Mrs', 'Dr'); ?>
                    <?php foreach ($prifix as $value) : ?>
                        <?php $selected = $value == getValue("account", "prifix") ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>" <?php echo $selected; ?>>
                            <?php echo $value; ?></option>
                    <?php endforeach ?>
                </select>
                <input type="text" name="account[firstName]" value="<?php echo getValue("account", "firstName"); ?>" require> 
            </div>
            <div>
                <label>Last Name : </label>
                <input type="text" name="account[lastName]" value="<?php echo getValue("account", "lastName"); ?>" require>
            </div>
            <div>
                <label>Date of Birth : </label>
                <input type="date" name="account[birthDate]" value="<?php echo getValue("account", "birthDate"); ?>" require>
            </div>
            <div>
                <label>Phone Number : </label>
                <input type="number" name="account[phoneNumber]" value="<?php echo getValue("account", "phoneNumber"); ?>" require>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="account[email]" value="<?php echo getValue("account", "email"); ?>" require>
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="account[password]" value="<?php echo getValue("account", "password"); ?>" require>
            </div>
            <div>
                <label>Re-Password</label>
                <input type="text" name="account[repassword]" value="<?php echo getValue("account", "repassword"); ?>" require>
            </div>
        </fieldset>
        <fieldset>
            <legend>ADDRESS INFORMATION</legend>
            <div>
                <label>Address 1 : </label>
                <textarea name="address[address1]" require><?php echo  getValue("address", "address1"); ?></textarea>
            </div>
            <div>
                <label>Address 2 : </label>
                <textarea name="address[address2]" require><?php echo getValue("address", "address2"); ?></textarea>
            </div>
            <div>
                <label>Companay : </label>
                <input type="text" name="account[companay]" value="<?php echo getValue("account", "companay"); ?>" require>
            </div>
            <div>
                <label>City : </label>
                <input type="text" name="address[city]" value="<?php echo getValue("address", "city"); ?>" require>
            </div>
            <div>
                <label>State : </label>
                <input type="text" name="address[state]" value="<?php echo getValue("address", "city"); ?>" require>
            </div>
            <div>
                <label>Country : </label>

                <select name="address[country]" require><?php getValue("address", "country"); ?>
                    <option disabled>Choose one</option>
                    <?php $country = array('India', 'Canada', 'US', 'UK', 'Nepal'); ?>
                    <?php foreach ($country as $value) : ?>
                        <?php $selected = $value == getValue("address", "country") ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>" <?php echo $selected; ?>>
                            <?php echo $value; ?></option>
                    <?php endforeach ?>
                    ?>
                </select>
            </div>
            <div>
                <label>Postal Code : </label>
                <input type="number" name="address[code]" value="<?php echo getValue("address", "code"); ?>" require>
            </div>
            <div>
                <label>Other Information</label>
                <input type="checkbox" name="check" onclick="showHideField(this);" require>
            </div>
        </fieldset>
        <fieldset id="MyDiv" style="display:none">
            <legend>OTHER INFORMATION</legend>

            <div>
                <label>Describe Yourself : </label>
                <textarea name="info[describe]" require><?php echo getValue("info", "describe"); ?></textarea>
            </div>
            <div>
                <label>Profile Image(Image Uplode) : </label>
                <input type="file" name="info[iamge]" value="<?php echo getValue("info", "image"); ?>" require>
            </div>
            <div>
                <label>Certificate Uplode(File Uplode, Only PDF should be accepatable) : </label>
                <input type="file" name="info[certi]" value="<?php echo getValue("info", "certi"); ?>" require>
            </div>
            <div>
                <label>How long have you been in business? : </label>
                <select name="info[business]" require>
                    <option disabled require>Choose one</option>
                    <?php $business = array("UNDER 1 YEAR", "1-2 YEAR", "2-5 YEAR", "5-10 YEARS", "OVER 10 YEARS"); ?>
                    <?php foreach ($business as $value) : ?>
                        <?php $selected = $value == getValue("info", "business") ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>" <?php echo $selected ?>><?php echo $value; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div>
                <label>Number of unique clients you see each week? : </label>
                <select name="info[clients]" require><?php echo getValue("info", "clients"); ?>
                    <option disabled>Choose one</option>
                    <?php $clients = array("1-5", "5-10", "10-15", "15+"); ?>
                    <?php foreach ($clients as $value) : ?>
                        <?php $selected = $value == getValue("info", "clients") ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>" <?php echo $selected ?>><?php echo $value; ?></option>
                    <?php endforeach ?>
                    ?>
                </select>
            </div>
            <div>
                <label>How do you like us to get in touch with you? : </label>
                <?php $argument = array("Post", "Email", "SMS", "Phone"); ?>
                <?php foreach ($argument as $value) : ?>
                    <?php $selected = in_array($value , getValue("info", "checkboxvar", [])) ? 'checked' : ''; ?>
                    <input type='checkbox' name='info[checkboxvar][]' value="<?php echo $value; ?>"<?php echo $selected ?> require> 
                    <?php echo $value; ?>
                <?php endforeach ?>   
            </div>
            <div>
                <label>Hobbies</label>
                <select name="info[hobbie][]" multiple require>
                    <?php $hobbies = array("Listening to Music", "Travelling", "Blogging", "Sports", "Art"); ?>
                    <?php foreach ($hobbies as $value) : ?>
                        <?php $selected = in_array($value ,getValue("info", "hobbie",[])) ? 'selected' : ''; ?>
                        <option value="<?php echo $value; ?>"<?php echo $selected ?>><?php echo $value; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </fieldset>
        <div>
            <input type="submit" name="submit">
        </div>
    </form>
    <script type="text/javascript">
        function showHideField(chk) {
            var x = document.getElementById("MyDiv");
            x.style.display = chk.checked ? "block" : "none";
        }
    </script>

</body>

</html>