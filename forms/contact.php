<?php
$connection = mysqli_connect('localhost', 'root','root');
// $connection = mysqli_connect('sql212.epizy.com', 'epiz_32082552','gYrhBIggRL');
if ($connection){
    echo "OK";
}
else{
    // echo "Error! Not Connect";
}

mysqli_select_db($connection, 'nexon');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];


$data = "INSERT INTO orders (NAME,EMAIL,SUBJECT,MASSAGE) VALUES('$name','$email','$subject','$massage')";
mysqli_query ($connection, $data);

// echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Succesfully sent your message! 😊');
//     </script>");
// $contact="";
// echo $contact->send();
    // window.location.href='index.php';
?>