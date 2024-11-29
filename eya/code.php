<?php
session_start();
include('dbcon.php');
if (isset($_POST['delete_student'])) {
    $student_id = $_POST['delete_student'];

    try {
        $query = "DELETE FROM students WHERE id = :stud_id";
        $statement = $conn->prepare($query);
        $data = [':stud_id' => $student_id];
        $statement->execute($data);
        if($query_execute){
            $_SESSION['message'] = "delete";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Not delate";
            header('Location: index.php');
            exit(0);
        }
    }
     catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if(isset($_POST['update_student_btn']))
{
  $student_id = $_POST['student_id'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $configpassword = $_POST['configpassword'];

  try{
    
        $query = "UPDATE students SET fullname=:fullname, email=:email, password=:password, configpassword=:configpassword WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id,
          ':fullname' => $fullname,
          ':email' => $email,
          ':password' => $password,
          ':configpassword' => $configpassword,
          
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            $_SESSION['message'] = "UPdate Successfully";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Not Update";
            header('Location: index.php');
       exit(0);
        }
    }
      catch (PDOException $e) {
    echo $e->getMessage();
  }
}

if(isset($_POST['save_student_btn'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $configpassword = $_POST['configpassword'];

    $query ="INSERT INTO students (fullname, email, password, configpassword) VALUES(:fullname, :email, :password, :configpassword)";
    $query_run = $conn->prepare($query);
    $date = [
        ':fullname' =>$fullname,
        ':email' => $email,
        ':password' => $password,
        ':configpassword' => $configpassword,
    ];
    $query_execute =$query_run->execute($date);

    if($query_execute) {
        $_SESSION['message'] = "Inserted Successfully";
        header('Location: index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Not Inserted";
        header('Location: index.php');
        exit(0);
    }
}
?>     