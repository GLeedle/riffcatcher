<?php
$pageTitle = "Register for Riff Catcher";
require_once 'layout/header.php';
session_start();
?>

<body>
    <?php include "layout/navbar.php";
    require "inc/register.inc.php";
    ?>
    <div class="container-fluid bg-dark w-75 mt-5 mb-5 text-center rounded shadow">
        <div class="reg-wrapper bg-dark mx-auto w-50 p-2 border-left border-right">
            <div class="registration-form  mt-3">
                <p><a href="login.php">Login</a> or register to proceed.</P>
                <p>Please choose a username and fill out the information below to register.</p>
                <p class="error">* denotes a required field</p>
            </div>
            <hr>

            <form class="form-group text-left" action="register.php" method="POST">
                <label for="username">Username</label><p class="error">*</p><span data-field data-username> &nbsp;&nbsp;( Please enter a username )</span>
                <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?php echo isset($username) ? $username : ""; ?>">
                <br>
                <label for="firstname">First name</label><p class="error">*</p><span data-field data-firstname> &nbsp;&nbsp;( Please enter your first name )</span>
                <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo (isset($firstname) ? $firstname : ""); ?>">
                <br>
                <label for="lastname">Last name</label><p class="error">*</p><span data-field data-lastname> &nbsp;&nbsp;( Please enter your last name )</span>
                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo (isset($lastname) ? $lastname : ""); ?>">
                <br>
                <label for="email">Email</label><p class="error">*</p><span data-field data-email> &nbsp;&nbsp;( Please enter your email address )</span>
                <input class="form-control" type="email" id="email" name="email" placeholder="email" value="<?php echo (isset($email) ? $email : ""); ?>">
                <br>
                <label for="password">Password</label><p class="error">*</p><span data-field data-password> &nbsp;&nbsp;( Please enter a password )</span>
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <br>
                <label for="address">Address</label><span data-field data-address> &nbsp;&nbsp;( Please enter your address )</span>
                <input class="form-control" type="text" id="address" name="address" placeholder="Address" value="<?php echo (isset($address) ? $address : ""); ?>">
                <br>
                <label for="city">City</label><span data-field data-city> &nbsp;&nbsp;( Please enter your city )</span>
                <input class="form-control" type="text" id="city" name="city" placeholder="City" value="<?php echo (isset($city) ? $city : ""); ?>">
                <br>
                <label for="state">State</label><span data-field data-state> &nbsp;&nbsp;( Please enter your state )</span>
                <input class="form-control" type="text" id="state" name="state" placeholder="State" value="<?php echo (isset($state) ? $state : ""); ?>">
                <br>
                <label for="zip">Zip Code</label><span data-field data-zip> &nbsp;&nbsp;( Please enter your zip code )</span>
                <input class="form-control" type="text" id="zip" name="zip" placeholder="zip Code" value="<?php echo (isset($zip) ? $zip : ""); ?>">
                <br>
                <label for="phone">Phone Number</label><span data-field data-phone> &nbsp;&nbsp;( Please enter your phone number )</span>
                <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone Number" value="<?php echo (isset($phone) ? $phone : ""); ?>">
                <br>
                <input class="btn btn-primary" type="submit" value="Register" id="submit">
            </form>
            <p class="registration-form">Already a member? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <?php include 'layout/footer.php'; ?>
    <script src="js/errorHandle.js"></script>
</body>