<?php
  include "database.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Change Password</title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
  <div class="sidebar close">
    <ul class="nav-links">
        <li>
          <a href="index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="index.php">Dashboard</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="addCustomer.php">
            <i class='bx bxs-user'></i>
              <span class="link_name">Customers</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Customers</a></li>
            <li><a href="addCustomer.php">Add Customers</a></li>
            <li><a href="manageCustomer.php">Manage Customers</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="addMedicine.php">
            <i class='bx bx-plus-medical' ></i>
              <span class="link_name">Medicine</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Medicine</a></li>
            <li><a href="addMedicine.php">Add Medicine</a></li>
            <li><a href="manageMedicine.php">Manage Medicine</a></li>
          </ul>
        </li>
        <li>
          <a href="search.php">
          <i class='bx bx-search' ></i>
            <span class="link_name">Search</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="search.php">Search</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="addSupplier.php">
              <i class="bx bx-plug"></i>
              <span class="link_name">Suppliers</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Suppliers</a></li>
            <li><a href="addSupplier.php">Add Suppliers</a></li>
            <li><a href="manageSupplier.php">Manage Suppliers</a></li>
          </ul>
        </li>
        <li>
          <a href="stock.php">
          <i class='bx bxs-coin-stack' ></i>
            <span class="link_name">Stock</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="stock.php">Stock</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="addPharmacist.php">
            <i class='bx bxs-purchase-tag' ></i>
              <span class="link_name">Pharmacist</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Pharmacist</a></li>
            <li><a href="addPharmacist.php">Add Pharmacist</a></li>
            <li><a href="managePharmacist.php">Manage Pharmacist</a></li>
          </ul>
        </li>
        <li>
          <a href="profileDetails.php">
            <i class="bx bx-cog"></i>
            <span class="link_name">Profile Settings</span>
          </a>
          <ul class="sub-menu blank">
              <li><a class="link_name" href="profileDetails.php">Profile Settings</a></li>
          </ul>
        </li>
        <li>
          <a href="changepassword.php">
          <i class="bx bx-key"></i>
            <span class="link_name">Change Password</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
        <li>
            <a href="logout.php">
            <i class='bx bx-log-out'></i>
              <span class="link_name">Logout</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="logout.php">Logout</a></li>
            </ul>
        </li> 
      </ul>
  </div>
    <section class="home-section">
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1673FD;">
        <div class="container-fluid">
          <div class="home-content">
            <i class="bx bx-menu"></i>
            <!-- <div class="logo-details"> -->
             <h5>
                <!-- <i class='bx bx-globe bx-spin text-light' ></i> -->
                <span class="logo_name text-light">Global Medical</span>
             </h5>
            <!-- </div> -->
            <!-- <h5 class="d-md-none d-block">Global Medical</h5> -->
            <!-- <div class="ms-auto"><button class=""><i class="bx bx-cog"></i></button></div> -->
          </div>
        </div>
      </nav>
      <div class="p-2">
      <main class="py-3" style="background-color: #E4E9F7; min-height: 88vh;">
        <div class="container">
            <div class="text-center py-3">
                <h4><img src="../Images/changepassword.png" alt="add supplier" class="mx-1" style="width: 30px; height: 30px;" />Change Password</h4>
                <h6>Set New Password</h6>
            </div><hr />
            <div class="addcustomerForm" style="margin-left: 20%;">
            <?php
              if(isset($_POST["submit"])){
                  $sql="SELECT * FROM admin WHERE APASSWORD='{$_POST["opass"]}' AND AID='{$_SESSION["AID"]}'";
                  $result=$db->query($sql);
                  if($result->num_rows>0){
                        $s = "UPDATE admin SET APASSWORD='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
                        $db->query($s);
                        echo "<p class='alert alert-success fw-bold w-75 text-center'>Password Changed Successfully</p>";
                  }else{
                        echo "<p class='alert alert-danger fw-bold w-75 text-center'>Invalid Current Password</p>";
                  }
              }    
            ?>
                <form action="changepassword.php" method="post" class="px-1 py-3">
                    <div class="row">
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="opass" class="form-label">Old Password :</label>
                                <input type="password" name="opass" class="form-control w-75" id="opass" placeholder="old password" required>
                                <div class="invalid-feedback">Please enter old password</div>
                            </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="npass" class="form-label">New Password :</label>
                                <input type="password" name="npass" class="form-control w-75" id="npass" placeholder="password" required>
                                <div class="invalid-feedback">Please enter your new password</div>
                            </div>
                        </div>
                        <div>
                            <div class="py-2">
                              <button type="submit" name="submit" id="submit" class="btn btn-success">update Password</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
          </div>
      </main>
      </div>
    </section>
    <script>
      let arrow = document.querySelectorAll('.arrow')
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener('click', (e) => {
          let arrowParent = e.target.parentElement.parentElement 
          arrowParent.classList.toggle('showMenu')
        })
      }
      let sidebar = document.querySelector('.sidebar')
      let sidebarBtn = document.querySelector('.bx-menu')
      console.log(sidebarBtn)
      sidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('close')
      })
    </script>
    <script src="jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7c82d299f6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
