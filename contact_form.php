<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'add')
    {
    if ($_POST['fname'] != NULL && $_POST['lname'] != NULL && $_POST['email'] != NULL && $_POST['message'] != NULL && $_POST['service_id'] != NULL){
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $service_id = $_POST['service_id'];

        $sql = "INSERT INTO contacts (fname,lname,email,message,service_id) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $fname,$lname,$email,$message,$service_id);
        
        if ($stmt->execute()) {
            $_SESSION['alert'] = ['title' => 'Form Submit Successfully','body' => 'We Will Get Back To You Soon', 'type' => 'success'];
            header('location:'.url(''));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
            $_SESSION['alert'] = ['title' => 'Fill All The Deatils Of Form.','body' => '', 'type' => 'error'];
            header('location:'.url(''));
            die();
       }
    }
}
