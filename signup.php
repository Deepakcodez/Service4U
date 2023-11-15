<?php include 'navbar.php' ?>


<!-- form  -->
<section class="vh-100 ">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black formheight" style="border-radius: 25px; background: #9dffbe; ">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Sign up</p>

                                <form method="post" action="manageusers.php" class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" id="form3Example1c" class="form-control username" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" name="phone" id="form3Example1c" class="form-control userphone" />
                                            <label class="form-label" for="form3Example1c">Your Phone</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" id="form3Example3c" class="form-control useremail" />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-home fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="address" id="form3Example4cd" class="form-control useraddress" />
                                            <label class="form-label" for="form3Example4cd">Address</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="form3Example4c" class="form-control userpassword" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>




                                    <div class="signupbtn">
                                        <button type="submit" name='submit' class="btn btn-primary submitbtn ">Submit</button>
                                        <button type="button" class="btn btn-success     bap">Become a partner</button>

                                    </div>

                                    <p class="form-label mx-5 haal"> Have an account <a href="login.php"
                                            class='text-decoration-none'>Login</a> </p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="assets/img/bannerpng.png" class="img-fluid mx-5 loginimg" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- form  -->

<?php include 'footer.php' ?>