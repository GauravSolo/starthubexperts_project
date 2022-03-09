<?php
    include "config.php";
    header('Access-Control-Allow-Origin: *');

    if(isset($_FILES['image']))
    {   
        $file_name  = $_FILES['image']['name'];
        $file_size  = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        $filetype  = $_FILES['image']['type'];
        $file_ext  = strtolower(end(explode('.',$file_name)));
        $extension = array('jpeg','jpg','png','svg');

        $error = array();

        if(in_array($file_ext,$extension) === false)
        {
            $error[] = "This extenstion file not allowed. Please choose a PNG or JPG or SVG file";
        }

        // if($file_size > 2097152)
        // {
        //     $error[] = "File size must be 2mb or lower";
        // }

        $new_name = time().'-'.basename($file_name);
        $image_name = $new_name;
        if(empty($error))
        {
            $target = "upload/". $image_name;
            move_uploaded_file($file_tmp,$target);
        }else{
            echo json_encode(array('res'=>$error,'reset'=>'0'));
            die();
        }
    
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $para1 = mysqli_real_escape_string($conn,$_POST['para1']);
    $para2 = mysqli_real_escape_string($conn,$_POST['para2']);

    $sql = "INSERT INTO whatwedo(title,para1,para2,image) VALUES('{$title}','{$para1}','{$para2}','{$image_name}')";
    
    if(mysqli_query($conn,$sql)){
        echo json_encode(array('res'=>'Add Data Successfully!','reset'=>'1'));
    }
    else{
        echo json_encode(array('res'=>mysqli_error($conn),'reset'=>'0'));
    }
    mysqli_close($conn);


}else{
    echo json_encode(array('res'=>'IMAGE not Uploaded','reset'=>'0'));
}




?>