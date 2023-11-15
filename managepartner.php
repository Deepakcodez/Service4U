
<?php
                    if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $aadhar = $_POST['aadhar'];
                            $occupation = $_POST['occupation'];
                            $experience = $_POST['experience'];
                            $address = $_POST['address'];
                            $password = $_POST['password'];

                        if($name==""||$password==""||$email==""||$address==""||$phone==""||$aadhar==""||$occupation==""||$experience==""){
                            echo "
                            <script>
                                window.location.assign('partner.php?msgfeilds missing&err=0');
                            </script>
                            ";                      }
                       else{
                        include_once "config.php";
                         $q = "INSERT INTO `requests` (`name`,`phone`,`email`,`aadhar`,`occupation`,`experience`,`address`,`password`) VALUES ('$name',$phone,'$email','$aadhar','$occupation','$experience','$address','$password')";
                          $res=mysqli_query($con,$q);

                      if($res>0){
                        echo "
                        <script>
                            window.location.assign('index.php?msg=registered successfully&err=0');
                        </script>
                        ";
                      }
                      else{
                        echo "
                        <script>
                            window.location.assign('partner.php?msg=please fill this &err=1');
                        </script>
                        ";
                      }
                     
                    }
                  }
                  else{
                    echo "
                    <script>
                        window.location.assign('partner.php?msg=fill this &err=1');
                    </script>
                    ";
                  }
                   

                   ?>
