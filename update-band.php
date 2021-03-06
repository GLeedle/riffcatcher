<?php
session_start();
$pageTitle = ucwords($_SESSION['username'] . "'s Band creator");
require_once "inc/loggedin.inc.php";
require_once "layout/header.php";
require_once "layout/navbar.php";
require_once "inc/update.band.inc.php";
// var_dump($_SESSION);
?>

<body>
    <div class="container-fluid mt-5 mb-5 mx-auto shadow w-75 bg-dark rounded">

        <form class="form-group text-left w-75 mx-auto" action="update-band.php" method="POST">

            <label for="bandname">Create or change band Name</label>
            <input class="form-control" type="text" id="bandname" name="bandname" value="<?php echo (isset($bandname_db) ? $bandname_db : ''); ?>">
            <br>
            <!-- <label for="bandmember">Add User to Band</label>
            <br>
            <select name="bandmember" id="bandmember">Band Member</select>
            <option value=""></option> -->
            <label for="banddesc"></label>
            <textarea class="form-control" name="banddesc" id="banddesc"><?php echo (isset($banddesc_db) ? $banddesc_db : ''); ?></textarea>
            <br>
            <label for="genre">Choose Genre</label>
            <br>
            <select name="genre" id="genre">
                <option value="" <?php if ($genre_db == "-- Select Degree Program --") echo ' selected="selected"'; ?>>-- Select Genre --</option>
                <option value="2" <?php echo $genre_db == "2" ? ' selected="selected"' : ''; ?>>Rock</option>
                <option value="3" <?php if ($genre_db == "3") echo ' selected="selected"'; ?>>Pop</option>
                <option value="5" <?php if ($genre_db == "5") echo ' selected="selected"'; ?>>Rap</option>
                <option value="6" <?php if ($genre_db == "6") echo ' selected="selected"'; ?>>Heavy Metal</option>
                <option value="7" <?php if ($genre_db == "7") echo ' selected="selected"'; ?>>R&B/Hip-Hop</option>
            </select>
            <br><br>
            <!-- <input type="submit" value="Update Band"> -->
            <br><br>
            <label for="bandmember">Add Member to Band</label>
            <input class="form-control" type="text" id="bandmember" name="bandmember">
            <input type="submit" value="Update Band">

            <?php include "layout/footer.php" ?>
</body>

</html>