<?php

require 'includes/dbhandler.php';

$uname = $_SESSION['uname'];
$sql = "SELECT * FROM messages WHERE receiver='$uname' ORDER BY time DESC";
$query = mysqli_query($conn, $sql);
echo'<div class = "title">
            <h3>Messages</h3>
        </div>';
while($row = mysqli_fetch_assoc($query)){
    $message = $row['message'];
    
    
    echo '
     <div class = "display">   
        '.$message.'
    
     </div>
    ';
   
}