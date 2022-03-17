<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Add')
    {
        $name = $_POST['name'];
        $status = $_POST['status'];
        $sql = "INSERT INTO services (name,status) VALUES ('$name','$status')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Service Add Successfully', 'type' => 'success'];
            header('location:'.url('service-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Edit')
    {
        // var_dump($_POST);
        // die;
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $status = $_POST['status'];
        $service_id = $_POST['service_id'];

        $contact_id = $_POST['contact_id'];

        $sql = "UPDATE contacts set fname='$fname',lname='$lname',email='$email',message='$message',service_id='$service_id',status='$status' where id='$contact_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Contact Update Successfully', 'type' => 'success'];
            header('location:'.url('contact-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if(isset($_GET['submit']))
{
    $type = $_GET['submit'];
    if($type == 'delete')
    {
        $contact_id = $_GET['contact_id'];

        $sql = "DELETE FROM contacts WHERE id='$contact_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Contact Delete Successfully', 'type' => 'success'];
            header('location:'.url('contact-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

