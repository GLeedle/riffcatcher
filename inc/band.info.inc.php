<?php 
$_SESSION['band_id'] = $_GET['band_id'];
$_SESSION['band_url'] = "band-info.php?band_id=" . $_GET['band_id'] . "&bandname=" . rawurlencode($_GET['bandname']);
require_once "sql/db_connect.inc.php";

$sql = "SELECT user.username 
        FROM user
        JOIN band_member
        ON band_member.user_id = user.user_id
        WHERE band_id = {$_GET['band_id']}";

    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()){

        $username = $row['username'];

        $dir = 'usr/' . $username . '/upload'; 
        echo "<h1>Files for user " . $username . "</h1>";  
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    echo "<div class=\"display-files\"><a href=\"usr/" . $username . "/upload/$filename\"><p class=\"text-center ml-5\">$filename</p></a>";                    
                    echo "<audio controls><source src=\"usr/" . $username . "/upload/$filename\" type=\"audio/mpeg\"></audio>";
                    $filename = rawurlencode($filename);
                    echo "</div>";
                    // echo "<a href=\"functions/display.files.php?file=$filename\"><div class=\"btn btn-outline-danger w-10  ml-3\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } //end second if   
}
