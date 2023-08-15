<?php
$connection = mysqli_connect('localhost', 'root','Rathin@1');
// $connection = mysqli_connect('sql200.infinityfree.com', 'epiz_34114231','3delLffhRSo');
if ($connection){
    echo "OK";
}
else{
    // echo "Error! Not Connect";
}

mysqli_select_db($connection, 'epiz_34114231_nexon');
// mysqli_select_db($connection, 'nexon');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];
$title = $_POST['project'];


$data = "INSERT INTO orders (NAME,EMAIL,SUBJECT,MASSAGE,PROJECT) VALUES('$name','$email','$subject','$massage','$title')";
mysqli_query ($connection, $data);

// echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Succesfully sent your message! 😊');
//     </script>");
// $contact="";
// echo $contact->send();
    // window.location.href='index.php';
?>