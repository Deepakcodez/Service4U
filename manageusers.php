
<?php
                    if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $password = md5($_POST['password']);

                        if($name==""||$password==""||$email==""||$address==""||$phone==""){
                          echo "
                          <script>
                              window.location.assign('signup.php?msg=feilds missing&err=1');
                          </script>
                          ";
                      }
                       else{
                         $con=mysqli_connect("localhost","root","","service4u");
                         $q = "insert into signup value(NULL,'$name',$phone,'$email','$address','$password')";
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
                            window.location.assign('signup.php?msg=please fill this &err=1');
                        </script>
                        ";
                      }
                     
                    }
                  }
                  else{
                    echo "
                    <script>
                        window.location.assign('signup.php?msg=fill this &err=1');
                    </script>
                    ";
                  }
                   

                   ?>
