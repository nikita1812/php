<html>
    <head>
    <head>
      <style>  
         .error {color: #FF0000;}
      </style>
   </head>
   
    </head>

<body>
    <?php
        session_start();
        $FnamEerr = $LnameErr = $birthDateErr = $phonNubErr = $emailErr = $addr1Err = $addr2Err = $countryErr = $postalCodeErr = $cmpPassword =  "";
        $FirstName = $LastName = $BirthDate = $PhoneNumber = $Email = $Address1 = $Address2 = $password = $Re_Password = $compnay = $city = $state = $postalCode = $country = $hobbie = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["Fname"])){
                $FnamEerr = "Name is required";
            }
            else{
                $FirstName = test_input($_POST["Fname"]);
            }
            $_SESSION['firstname'] = $FirstName;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["Lname"])){
                $LnameErr = "Name is required";
            }
            else{
                $LastName = test_input($_POST["Lname"]);
            }
            $_SESSION['lastname'] = $LastName;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["date"])){
                $birthDateErr = "Birth of date is required";
            }
            else{
                $BirthDate = test_input($_POST["date"]);
            }
            $_SESSION['birthday'] = $BirthDate;
            echo $_SESSION['birthday'];
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["num"])){
                $phonNubErr = "Phone Number is required";
            }
            else{
                $PhoneNumber = test_input($_POST["num"]);

            }
            $_SESSION['phonenumber'] = $PhoneNumber;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }
            else{
                $Email = test_input($_POST["email"]);
                if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }
            $_SESSION['email'] = $Email;
        }

        if(isset($_POST['password']) && isset($_POST['repassword'])){
            if(!empty($_POST['password']) && !empty($_POST['repassword'])){
                $password = $_POST['password'];
                $Re_Password = $_POST['repassword'];
                if($password != $Re_Password){
                    $cmpPassword = "password are not match.";
                }
            }
            $_SESSION['password'] = $password;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["addr1"])){
                $addr1Err = "Address is required";
            }
            else{
                $Address1 = test_input($_POST["addr1"]);
            }
            $_SESSION['address1'] = $Address1;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["addr2"])){
                $addr2Err = "Address is required";
            }
            else{
                $Address2 = test_input($_POST["addr2"]);
            }
            $_SESSION['address2'] = $Address2;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["country"])){
                $countryErr = "country is required";
            }
            else{
                $country = test_input($_POST["country"]);
            }
            $_SESSION['country'] = $country;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["code"])){
                $postalCodeErr = "postal code is required";
            }
            else{
                $postalCode = test_input($_POST["code"]);
            }
            $_SESSION['code'] = $postalCode;
        }

        if(isset($_POST['companay']) || isset($_POST['city']) || isset($_POST['state']) || isset($_POST['describe_yourself']) || isset($_POST['profileImage']) || isset($_POST['buiness']) || isset($_POST['clients']) || isset($_POST['']) || isset($_POST['hobbie'])){
            if(!empty($_POST['companay']) || !empty($_POST['city']) || !empty($_POST['state']) || !empty($_POST['describe_yourself']) || !empty($_POST['profileImage']) || !empty($_POST['buiness']) || !empty($_POST['clients']) || !empty($_POST['']) || !empty($_POST['hobbie'])){
                $compnay = $_POST['companay'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $describe_yourself = $_POST['describe_yourself'];
                $profileImage = $_POST['profileImage'];
                $business = $_POST['business'];
                $clients = $_POST['clients'];
                $hobbie = $_POST['hobbie'];

        
                $_SESSION['companay'] = $compnay;
                $_SESSION['city'] = $city;
                $_SESSION['state'] = $state;
                $_SESSION['describeYourself'] = $describe_yourself;
                $_SESSION['profileImage'] = $profileImage;
                $_SESSION['business'] = $business;
                $_SESSION['clients'] = $clients;
                $_SESSION['hobbie'] = $hobbie;
            }
        }
        else{
            echo "hi";
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>
    <p><span class="error">* required field.</span></p>
    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend><b>ACCOUNT DETAILS</b></legend>
            <table>
                <tr>

                <tr>
                    <td>FirstName:</td>
                    <td>
                        <select id="m">
                            <option>Mr</option>
                            <option>Miss</option>
                            <option>Ms</option>
                            <option>Mrs</option>
                            <option>Dr</option>
                        </select>
                        <input type="text" name="Fname" placeholder="First Name" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>" require> 
                        <span class="error">*<?php echo $FnamEerr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input type="text" name="Lname" placeholder="Last Name" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>" require>
                        <span class="error">*<?php echo $LnameErr;?></span>
                    </td>
                </tr> 
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="date" value="<?php if(isset($_SESSION['birthday'])){echo $_SESSION['birthday'];}?>" require> 
                        <span class="error">*<?php echo $birthDateErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <input type="number" name=num value="<?php if(isset($_SESSION['phonenumber'])){echo $_SESSION['phonenumber'];}?>" require>
                        <span class="error">*<?php echo $phonNubErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" require>
                        <span class="error">*<?php echo $emailErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}?>" require>
                    </td>
                </tr>
                <tr>
                    <td>Re-Password</td>
                    <td>
                        <input type="password" name="repassword" require>
                        <span class="error">*<?php echo $cmpPassword;?></span>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend><b>ADDRESS INFORMATION</b></legend>
            <table>
                <tr>
                    <td>Address_line_1</td>
                    <td>
                        <textarea name="addr1" require><?php if(isset($_SESSION['address1'])){echo $_SESSION['address1'];}?>  </textarea>
                        <span class="error">*<?php echo $addr1Err;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Address_line_2</td>
                    <td>
                        <textarea name="addr2" require><?php if(isset($_SESSION['address2'])){echo $_SESSION['address2'];}?></textarea>
                        <span class="error">*<?php echo $addr2Err;?></span>
                    </td>
                </tr>
                <tr>
                    <td>companay</td>
                    <td>
                        <input type="text" name="companay" value="<?php if(isset($_SESSION['companay'])){echo $_SESSION['companay'];}?>" require>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <input type="text" name="city" value="<?php if(isset($_SESSION['city'])){echo $_SESSION['city'];}?>" require>
                    </td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>
                        <input type="text" name="state" value="<?php if(isset($_SESSION['state'])){echo $_SESSION['state'];}?>" require>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select id="country" require>
                        <?php if(isset($_SESSION['country'])){echo $_SESSION['country'];}?>
                            <option value="" selected disabled>plzz select</option>
                            <option value="India">India</option>
                            <option value="Canada">Canada</option>
                            <option value="US">US</option>
                            <option value="UK">UK</option>
                            <option value="Nepal">Nepal</option>
                        </select>
                        <span class="error">*<?php echo $countryErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td>
                        <input type="text" name="code" value="<?php if(isset($_SESSION['code'])){echo $_SESSION['code'];}?>" require>
                        <span class="error">*<?php echo $postalCodeErr;?></span>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>OTHER INFORMATION</legend>
            <!-- Checkbox to toggle content.
                (Just Below Extra Table is for proper formatting)
             -->
            <table>
                <tr>
                    <td>Other Information <input type="checkbox" name="check" onclick="ShowHideDiv(this)"></td>
                </tr>
            </table>
            <!-- Here, default style is none so it won't be displayed when loaded -->
            <table id="myDIV" style="display:none">
                <tr>
                    <td>Describe Yourself</td>
                    <td><textarea name="describe_yourself"><?php if(isset($_SESSION['describeYourself'])){echo $_SESSION['describeYourself'];}?></textarea></td>
                </tr>
                <tr>
                    <td>Profile Image(Image Uplode)</td>
                    <td><input type="file" name="profileImage" value="<?php if(isset($_SESSION['profileImage'])){echo $_SESSION['profileImage'];}?>"></td>
                </tr>
                <tr>
                    <td>Certificate Uplode(File Uplode, Only PDF should be accepatable)</td>
                    <td><input type="file" name="profileImage" value="<?php if(isset($_SESSION['certi'])){echo $_SESSION['certi'];}?>"></td>
                </tr>
                <tr>
                    <td>How long have you been in business?</td>
                    <td>
                        <select name="business"> 
                        <?php if(isset($_SESSION['business'])){echo $_SESSION['business'];}?>
                            <option>UNDER 1 YEAR</option>
                            <option>1-2 YEARS</option>
                            <option>2-5 YEARS</option>
                            <option>5-10 YEARS</option>
                            <option>OVER 10 YEARS</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Number of unique clients you see each week?</td>
                    <td>
                        <select id="clients">
                        <?php if(isset($_SESSION['clients'])){echo $_SESSION['clients'];}?>
                            <option>1-5</option>
                            <option>6-10</option>
                            <option>11-15</option>
                            <option>15+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>How do you like us to get in touch with you?</td>
                    <td>Post<input type="checkbox" name="post">
                        Email<input type="checkbox" name="email">
                        SMS<input type="checkbox" name="sms">
                        Phone<input type="checkbox" name="phone"></td>
                </tr>
                <tr>
                    <td>Hobbies(Multi Select Box)</td>
                    <td>
                        <select id="hobbie" multiple>
                        <?php if(isset($_SESSION['hobbie'])){echo $_SESSION['hobbie'];}?>
                            <option>Listening to Music</option>
                            <option>Travelling</option>
                            <option>Blogging</option>
                            <option>Sports</option>
                            <option>Art</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <!-- JS to toggle hide and show -->
    <script type="text/javascript">
        function ShowHideDiv(chk) {
            var x = document.getElementById("myDIV");
            x.style.display = chk.checked?"block":"none";
        }
    </script>

    <?php
        echo "<h2>Your given values are as:</h2>";
        echo "First Name : ".$FirstName."<br>";
        echo "Last Name : ".$LastName."<br>";
        echo "Birth of Date : ".$BirthDate."<br>";
        echo "Phone Number : ".$PhoneNumber."<br>";
        echo "Email : ".$Email."<br>";
        echo "Password : ".$password."<br>";
        echo "Address1 : ".$Address1."<br>";
        echo "Address2 : ".$Address2."<br>";
        echo "Companay : ".$compnay."<br>";
        echo "City : ".$city."<br>";
        echo "State : ".$state."<br>";
        echo "Country : ".$country."<br>";
        echo "Postal Code : ".$postalCode."<br>";
    ?>
</body>

</html>