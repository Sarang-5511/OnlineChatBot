<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "onlinebot");
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($connect == false) {
    die("Sorry failed to connect") . mysqli_connect_error();
}


if(isset($_POST['msg'])){
    $usermsg=$_POST['msg'];
    $sql = "SELECT * FROM messages WHERE usermsg LIKE '%$usermsg%'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        $row = mysqli_fetch_assoc($result);
        $botans=$row['botmsg'];
        echo $botans;
        
       
    } else {
       echo "Nothing";
    }
}

// $usermsg=mysqli_real_escape_string($connect,$_POST['msg']);
// echo $usermsg;
?>