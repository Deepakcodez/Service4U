
<?php include 'navbar.php' ?>

<!-- banner  -->
<div class="banner">
    <div class="heading">
        <h3>Expert Professional <br> Home Services, <br> Book Online</h3>
        <?php 
             if(isset($_SESSION) &&isset($_SESSION['email'])){
                                echo '
                                <a href="index.php" class="text-light text-decoration-none"> <button class="btn btn-primary px-5 bannerbtn ">
                Welcome </button></a>
                                ';
                            }else{
                                echo '
                                <a href="login.php" class="text-light text-decoration-none"> <button class="btn btn-primary px-5 bannerbtn ">
                Login </button></a>
                                    ';
                            }
        ?>
      


    </div>
    <img src="assets/img/bannerpng.png  " class="banner-png " alt=" plumber">

    <img src="assets/img/green banner.jpg" class="banner" alt="banner">
</div>

<!-- banner   -->



<!-- how it work -->
<section class="work">

    <div class="workcontainer">
        <h2>How it works</h2>
        3 simple steps to Trukky freedom

        <div class="imgworkcontainer">
            <div class="booking">
                <div class="bookingimg"><img src="assets/img/book.png" alt=""></div>
                <div class="bookimgright">

                    <div class="bookingheading">
                        <h5>STEP 1</h5>
                        BOOK ONLINE
                    </div>
                </div>

            </div>
            <div class="step3 booking">
                <div class="bookingimg"><img src="assets/img/book2.png" alt=""></div>
                <div class="bookimgright">

                    <div class="bookingheading">
                        <h5>STEP 2</h5>
                        GET CONFIRMATION SMS
                    </div>
                </div>
            </div>
            <div class="step3 booking">
                <div class="bookingimg"><img src="assets/img/book3.png" alt=""></div>
                <div class="bookimgright">

                    <div class="bookingheading">
                        <h5>STEP 1</h5>
                        PAY AFTER WORK DONE
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- washing  -->
<section class="washing">
    <div class="washingheading whcontent">
        <h2>WASHING MACHINE</h2>
        <p>There are only two times that your washing machine will talk to you: when it’s done and when it needs help, so
        don't worry we are here!</p>
    </div>
    <div class="wcontent">
        <div class="wimg1 wimg"></div>
        <div class="wimg2 wimg"></div>
        <div class="wimg3 wimg"></div>
        <div class="wimg4 wimg"></div>
    </div>
</section>




<section class="carpenter">
    <div class="carpentertext">
        <div class="carpenterheadaer">
            <h2>CARPENTER</h2>Our Carpentry work is the Illusion of Perfection!!!!
        </div>
        <button class="btn btn-success explore">Explore</button>
    </div>
    <div class="carpenterimgs">
        <div class="carpenterimg1 carpenteranim"><img src="assets/img/carpenter4.jpg" alt=""></div>
        <div class="carpenterimg1 carpenterimg2"><img src="assets/img/carpenter1.jpg" alt=""></div>
        <div class="carpenterimg1 carpenterimg3"><img src="assets/img/carpenter3.jpg" alt=""></div>
        <div class="carpenterimg1 carpenterimg4 carpenteranim2"><img src="assets/img/carpenter2.jpg" alt=""></div>
    </div>
</section>





<section class="carpenter">
    <div class="carpentertext">
        <div class="carpenterheadaer">
            <h2>Geyser</h2>"Human beings are like tea-bags. You don't know your own strength until you get hot water."

        </div>
        <button class="btn btn-success explore">Explore</button>
    </div>
    <div class="carpenterimgs">
        <div class="carpenterimg1 carpenteranim"><img src="assets/img/geyser1.jpg" alt=""></div>
        <div class="carpenterimg1 carpenterimg2"><img src="assets/img/geyser2.jpg" alt=""></div>
        <div class="carpenterimg1 carpenterimg3"><img src="assets/img/geyser3.jpg" alt=""></div>
        <div class="carpenterimg1 carpenteranim2 carpenterimg4"><img src="assets/img/geyser4.jpg" alt=""></div>
    </div>
</section>






<!-- counter  -->

<div class="section"></div>
<div class="counter-up">
    <div class="content">
        <div class="box">
            <div class="icon"><i class="fas fa-history"></i></div>
            <div class="counter">724</div>
            <div class="text">Working Hours</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-gift"></i></div>
            <div class="counter">58</div>
            <div class="text">Partners</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-users"></i></div>
            <div class="counter">436</div>
            <div class="text">Happy Clients</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-award"></i></div>
            <div class="counter">10</div>
            <div class="text">Awards Received</div>
        </div>
    </div>
</div>


<!-- 3d part  -->

<div class="spline">
<div class="splinetag">Services</div>
<iframe src='https://my.spline.design/3dtextbluecopy-6780b69b97ce3c92ad45626a214186e8/' frameborder='0' width='100%' height='100%'></iframe></div>








<!-- become a partner  -->
<section class="partneradv">
    <div class="partnerleft">
        <div class="partneradvtext">
            <div class="partneradvheading">
                <h2>Profit Your Business,<br>
                    Be Our Service4U Partner!</h2>
            </div>

            Our employees and Franchise holder are our biggest factor of success. We value each and every one of them,
            work in flat hierarchies and live an open culture of communication. Are you looking to make use of your
            individual knowledge and your skills in an innovative and expanding company? We are giving you a chance to
            do exactly that.
            <br> <a href="#"><button class="btn btn-light my-3">Become a Partner</button></a>

        </div>
    </div>
    <div class="partneradvimg"><img src="assets/img/man-2.png" alt=""></div>










</section> <div class="containerR">
        <h2> Our Happy Clients </h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, atque? Repudiandae
            possimus asperiores hic nemo id a molestiae minus impedit!</p>
    
        <!-- Clients Review Section -->
        <div class="reviewSection">

        <!-- Clients Review-1 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./client.png" alt="">
                        <span>Raju Sheoran</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>

        <!-- Clients Review-2 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./client.png" alt="">
                        <span>Raju Sheoran</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>

        <!-- Clients Review-3 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./client.png" alt="">
                        <span>Raju Sheoran</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>
        </div>
    </div>



<?php include 'footer.php' ?>