<?php
session_start();
include('dbcon.php');

// Delete Student
if (isset($_POST['delete_student'])) {
    $student_id = $_POST['delete_student'];

    try {
        $query = "DELETE FROM students WHERE id = :stud_id";
        $statement = $conn->prepare($query);
        $data = [':stud_id' => $student_id];
        $statement->execute($data);

        if ($statement->rowCount() > 0) {
            $_SESSION['message'] = "Deleted Successfully";
            header('Location: indexa.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Not Deleted";
            header('Location: indexa.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// Update Student
// Mettre à jour un étudiant
if (isset($_POST['update_student_btn'])) {
    $student_id = $_POST['student_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $configpassword = $_POST['configpassword'];

    // Vérifier si le mot de passe et la confirmation sont identiques
    if ($password !== $configpassword) {
        $_SESSION['message'] = "Les mots de passe ne correspondent pas.";
        header('Location: student-edit.php?id=' . $student_id);
        exit(0);
    }

    try {
        $query = "UPDATE students SET fullname=:fullname, email=:email, password=:password, configpassword=:configpassword WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id,
            ':fullname' => $fullname,
            ':email' => $email,
            ':password' => $password,
            ':configpassword' => $configpassword,
        ];
        $statement->execute($data);

        if ($statement->rowCount() > 0) {
            $_SESSION['message'] = "Mis à jour avec succès";
            header('Location: indexa.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Aucune modification effectuée";
            header('Location: indexa.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


// Add Student
if (isset($_POST['save_student_btn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $configpassword = $_POST['configpassword'];

    // Vérifier si le mot de passe et la confirmation sont identiques
    if ($password !== $configpassword) {
        $_SESSION['message'] = "Les mots de passe ne correspondent pas.";
        header('Location: student-add.php');
        exit(0);
    }

    try {
        $query = "INSERT INTO students (fullname, email, password, configpassword) VALUES(:fullname, :email, :password, :configpassword)";
        $statement = $conn->prepare($query);
        $data = [
            ':fullname' => $fullname,
            ':email' => $email,
            ':password' => $password,
            ':configpassword' => $configpassword,
        ];
        $statement->execute($data);

        if ($statement->rowCount() > 0) {
            $_SESSION['message'] = "Inséré avec succès";
            header('Location: indexa.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Échec de l'insertion";
            header('Location: indexa.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
