<?php
  session_start();
  include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet"  type="text/css" href="../css/log.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
      <div class="row px-3">
          <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
              <div class="img-left d-none d-md-flex"></div>

              <div class="card-body">
                <h3 style="color: purple;" class="title text-center mt-4">
                  Administrator Login
                </h3>
                <?php
                    if(isset($_POST["submit"])){
                          $sql = "SELECT * FROM admin WHERE	AEMAIL='{$_POST["email"]}' AND APASSWORD='{$_POST["password"]}'";
                          $res = $db->query($sql); 
                          if($res){
                              if($res->num_rows>0){
                                  $row = $res->fetch_assoc();
                                  $_SESSION["AID"]=$row["AID"];
                                  $_SESSION["ANAME"]=$row["ANAME"];
                                header("location:index.php");
                              }else{
                                echo "<p class=' text-center  fw-bold' style='border-radius:25px; color: red;'>Invalid email or password</p>";
                              }
                          }else{
                            echo "Error in ".$query."<br>".$db->error;
                          }
                    }
                ?>
                <form action="loginPage.php" method="post" class="form-box px-4">
                    <label class="py-2" for="email">Email Address</label>
                    <div class="form-input">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <input type="email" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <label class="py-2" for="password">Password</label>
                    <div class="form-input">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-block text-uppercase">Login</button>
                    </div>
                   
                </form>
              </div>
          </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/7c82d299f6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>