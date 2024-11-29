<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>insert data into database</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>PHP PDO CRUD
                            <a href="index.php" class="btn btn-danger float-end">Add Student</a>
                        </h3>
                    </div>
                    <form action="code.php" method="POST">
                        <div classmb-3>
                            <label > full Name</label>
                            <input type="text" name="fullname" class="form-control"/>

                            <label > Email</label>
                            <input type="text" name="email" class="form-control"/>

                            <label > password</label>
                            <input type="text" name="password" class="form-control"/>
                            
                            <label > configpassword</label>
                            <input type="text" name="configpassword" class="form-control"/>
                        </div>
                        <div class="mb-3"> <button type="submit"  name="save_student_btn" class="btn btn-primary"> save student</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>