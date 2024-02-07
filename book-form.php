<?php
$connection = mysqli_connect('localhost','root','','my-website');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $business = $_POST['business'];
    $experience= $_POST['experience'];

    $request = "insert into form(name, email, phone, address, business, experience) values
    ( '$name','$email','$phone','$address','$business','$experience')";

    mysqli_query($connection, $request);

    header('location:form.php');

    echo 'Submitted:You will recieve an email for the suggestions';
}
else{

    echo 'something wrong try again';
}


?>