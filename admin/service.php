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
        $name = $_POST['name'];
        $status = $_POST['status'];
        $service_id = $_POST['service_id'];

        $sql = "UPDATE services set name='$name',status='$status' where id='$service_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Service Update Successfully', 'type' => 'success'];
            header('location:'.url('service-list.php'));
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
        $service_id = $_GET['service_id'];

        $sql = "DELETE FROM services WHERE id='$service_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Service Delete Successfully', 'type' => 'success'];
            header('location:'.url('service-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

