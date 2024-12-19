<?php 
session_start();
include('C:\xampp\htdocs\projet\dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">COURSES</a></li>
                          <li class="scroll-to-section"><a href="#courses">CERTIFICATION</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li> 
                          <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php if (isset($_SESSION['message'])): ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                    <?php unset($_SESSION['message']); endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Student List
                            <a href="student-add.php" class="btn btn-primary float-end">Add Student</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Search Bar -->
                        <input type="text" id="search" class="form-control mb-3" placeholder="Search by name or email">
                        
                        <table class="table table-bordered table-striped" id="student-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Confirm Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Profile Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Students will be dynamically populated here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="C:\xampp\htdocs\Ahmed\Integration\view\frontoffice\logout.php" class="btn btn-danger">Logout</a>

    <script>
    $(document).ready(function(){
        // Function to fetch students based on search input
        function fetchStudents(search = '') {
            $.ajax({
                url: 'fetch_students.php',
                type: 'GET',
                data: { search: search },
                success: function(data) {
                    $('#student-table tbody').html(data); // Populate the table with the returned data
                }
            });
        }

        // On typing in the search bar
        $('#search').keyup(function() {
            var search = $(this).val(); // Get the search input value
            fetchStudents(search); // Fetch the filtered students
        });

        // Initial fetch
        fetchStudents();
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
