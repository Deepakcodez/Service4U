<?php
include 'navbar.php'
?>

     
<!-- form  -->
<section class="vh-100 " >
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black formheight" style="border-radius: 25px; background: #9dffbe; ">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Login</p>

            <?php
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    if($username=="" || $password==""){
                        echo "<div class='alert alert-danger'>Something Missing</div>";
                    }else{
                        include_once "config.php";
                        $q = "select * from admin where username='$username' and password='$password'";
                        $result = mysqli_query($con,$q);
                        if($row = mysqli_fetch_array($result)){
                            $_SESSION['user'] = $username;
                            echo "
                                <script>
                                    window.location.assign('showusers.php');
                                </script>
                            ";
                        }else{
                            echo "<div class='alert alert-danger'>Incorrect Username and Password</div>";
                        }
                    }                    
                }
            ?>

                                <form action="indexadmin.php" method="post"  class="mx-1 mx-md-4">
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="username" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Username</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="form3Example4c" class="form-control" />
                                            <label class="form-label"  for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="signupbtn">
                                        <button type="submit" name="submit" class="btn btn-primary submitbtn ">Submit</button>
                                    </div>
                                    
                             


                                </form>

                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- form  -->

<?php
include 'footer.php'
?>