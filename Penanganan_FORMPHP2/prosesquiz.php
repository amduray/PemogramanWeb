<?php 
echo "<h2>Your Input:</h2>";
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    echo " $nama". "<br>";
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo " $email". "<br>";
}
if (isset($_POST['website'])) {
        $website = $_POST['website'];
        echo " $website". "<br>";
        }
        if (isset($_POST['comment'])) {
            $comment = $_POST['comment'];
            echo " $comment". "<br>";
            }
            if (isset($_POST['gender'])) {
                $gender = $_POST['gender'];
                echo " $gender". "<br>";
            }
?>