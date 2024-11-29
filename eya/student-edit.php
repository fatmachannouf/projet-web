<?php
 include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> edit andinsert data into database</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3> adit PHP PDO CRUD
                            <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $student_id = $_GET['id'];
                            $query ="SELECT * FROM students WHERE id=:stud_id LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':stud_id' =>$student_id];
                            $statement->execute($data);
                            $result = $statement->fetch(PDO::FETCH_OBJ);
                        }
                        ?>
                    <form  action="code.php" method="POST">
                    <input type="hidden" name="student_id" value="<?= $result->id; ?>"/>
                        <div classmb-3>
                        
                            <label > full Name</label>
                            <input type="text" name="fullname" value="<?=$result-> fullname;?>" class="form-control" required/>

                            <label > Email</label>
                            <input type="text" name="email"  value="<?=$result-> email;?>" class="form-control" required/>

                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" value="" placeholder="Enter new password" class="form-control" required>
                            
                            <label for="configpassword" class="form-label">Confirm Password</label>
                        <input type="password" id="configpassword" name="configpassword" value="" placeholder="Confirm new password" class="form-control" required>
                        </div>
                        </div>
                        <div class="mb-3"> <button type="submit"  name="update_student_btn" class="btn btn-primary"> Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>