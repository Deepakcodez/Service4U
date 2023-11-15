<?php include('navbar.php') ?>
<div class="workercontainer">
<?php
include_once "config.php";
$q = "select * from partner";
$result = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='workerbox'>";

       echo " <div class='workerpic'>";

        echo    "<img src='assets/img/book2.png' alt=''>
        </div>
        <div class='workerdetails'>
            <div class='workername'>";
                
                    echo " <h5>$row[name]</h5>";
                    echo "<p class='workerexpert'>$row[occupation]</p>";
                
                echo "<p class='workerbio'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit
                    amet
                </p>
            </div>
        </div>
        <div class='workerbtn btn btn-primary'>Book-me</div>
    </div>";
}
    ?>


</div>
</div>

<?php include('footer.php') ?>