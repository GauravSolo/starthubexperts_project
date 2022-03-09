<?php
ob_start();
include('config.php');

if(isset($_POST['username']))
{
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    if($phone == '1')
    {
        $sql3 = "SELECT * FROM admin WHERE username = '{$username}' and pass = '{$email}'";
        $result3 = mysqli_query($conn,$sql3);
        // while(mysqli_next_result($conn)){;}
        if($result3)
        {
            if(mysqli_num_rows($result3) > 0)
            {
                while($rows = mysqli_fetch_assoc($result3))
                {
                    session_start();
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['role'] = '1';
                }
            }else{
                header("Location: {$host}");
                exit();
            }              
        }
        echo json_encode(array('res'=>'3'));
        exit();                   
    }


    $sql = "INSERT INTO users(username, email, phone, category, message) VALUES('{$username}','{$email}','{$phone}','{$category}','{$message}');";
    $sql .= "INSERT INTO backup(username, email, phone, category, message) VALUES('{$username}','{$email}','{$phone}','{$category}','{$message}');";
    $sql .= "UPDATE sitedata SET Tenquiries = Tenquiries + 1";
    $result = mysqli_multi_query($conn,$sql);
    while(mysqli_next_result($conn)){;}

    if($result)
    {
        $sql1 = "SELECT Tenquiries FROM sitedata WHERE  1" ;
        
        $result1 = mysqli_query($conn, $sql1) ;
        while(mysqli_next_result($conn)){;}
        $count = -1;
        $row = '';
        if($result1)
        {
            $row = mysqli_fetch_assoc($result1);
            $count = $row['Tenquiries'];
        }
        echo json_encode(array('res'=>"1",'count'=>$count));

        mysqli_close($conn);
    }else{
        echo json_encode(array('res'=>"0"));
    }
  
}else{

    echo json_encode(array('res'=>"0"));
}


ob_end_flush();

?>