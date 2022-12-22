<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $destination = $_POST['destination'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $request = "insert into book_form(name,email,phone,address,destination,guests,arrivals,leaving)
    values('$name','$email','$phone','$address','$destination','$guests','$arrivals','$leaving')";
    mysqli_query($connection, $request);
    header('location:package.php');
   
}else{

}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM book_form WHERE id ='$id'";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo '<script> alert("Trip Canceled"); </script>';
        header('location:package.php');
    }
    else{
        echo '';
    }
}
?>