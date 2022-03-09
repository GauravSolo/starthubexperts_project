<?php

    include "config.php";

    if(isset($_POST['id'])){

    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = {$id}";
    
    if(mysqli_query($conn,$sql))
    {
        echo "Delete Data Successfully!";
    }
    else{
        echo "Couldnt Delete Data!";
    }
}
    // mysqli_close($conn);
?>