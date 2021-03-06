<?php
session_start();
require_once "inc/loggedin.inc.php";
$pageTitle = "User information for " . ucwords($_SESSION['username']);
include_once "layout/header.php";
require_once "inc/update.profile.image.inc.php";
?>

<body>
    <?php
    include_once "layout/navbar.php";
    // var_dump($_SESSION)
    ?>
    <div class="container-fluid">

        <div class="container-fluid mx-auto mt-5 bg-dark text-white shadow">
            <div class="reg-wrapper bg-dark mx-auto  p-2 border-left border-right border-light text-center">
                <div class="profile-img mx-auto ">
                    <p>Profile Image for <?php echo $_SESSION['username']; ?></p>
                    <img src="<?= "usr/" . $_SESSION['profile_image'] ?>" alt="Profile image" height="300" width="300">
                    <br><br>
                    File Name:
                    <br>
                    <?php echo $_SESSION['profile_image']; ?>
                    <br><br>
                    <form action="update-profile-image.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                        <input class="btn btn-outline-success p-1" type="file" name="file_upload">
                        <input class="btn btn-outline-success p-1" type="submit" name="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>