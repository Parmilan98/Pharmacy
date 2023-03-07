<?php
    include "database.php";

    if(isset($_POST["submit"])){
        $id = $_POST['id'];
        $aduname = $_POST['aduname'];
        $adAddress = $_POST['adAddress'];
        $aemail = $_POST['aemail'];
        $aphnumber = $_POST['aphnumber'];
        $sql = "UPDATE admin SET ANAME='$aduname', AADDRESS='$adAddress', AEMAIL='$aemail', ANUMBER=$aphnumber WHERE AID=$id";
        $result = mysqli_query($db, $sql);
        if($result){
            header('location:profileDetails.php'); 
        }else{
            echo "Error while updating rocord";
        }
    }
    if(isset($_GET["id"])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Profile</title>
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
      <main>
        <div class="container">
            <div class="text-center py-3">
                <h4><img src="../Images/addprofile.png" alt="add customer" style="width: 30px; height: 30px;" />Profile</h4>
                <h6>Manage Admin Details</h6>
            </div><hr />
            <div class="profileForm" style="margin-left: 20%;">
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT ANAME, AADDRESS, AEMAIL, ANUMBER FROM admin WHERE AID=$id";
                    $res = mysqli_query($db, $sql);
                    $numrow = mysqli_num_rows($res);
                    if($numrow > 0){
                        $row = mysqli_fetch_assoc($res);
                ?>
                <form action="updateProfile.php" method="post" class="px-1 py-3">
                    <div class="row">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <div class="form-group was-validated col-md-12 py-1">
                            <div class="mb-3">
                                <label for="aduname" class="form-label">Name :</label>
                                <input type="text" name="aduname" class="form-control w-75" id="aduname" placeholder="parmilan" required value="<?=$row['ANAME']?>">
                                <div class="invalid-feedback">Please enter name</div>
                              </div> 
                        </div>
                        <div class="form-group was-validated col-md-12 py-1">
                            <div class="mb-3">
                                <label for="adAddress" class="form-label">Address :</label>
                                <input name="adAddress" class="form-control w-75" placeholder="Badulla Road, Badulla" id="adAddress" required value="<?=$row['AADDRESS']?>">
                                <div class="invalid-feedback">Please enter the address</div>
                              </div>  
                        </div>
                        <div class="form-group was-validated col-md-12 py-1">
                            <div class="mb-3">
                                <label for="aemail" class="form-label">Email :</label>
                                <input type="email" name="aemail" class="form-control w-75" id="aemail" placeholder="parmilan19@gmail.com" required value="<?=$row['AEMAIL']?>">
                                <div class="invalid-feedback">Please enter the email address</div>
                              </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-1">
                            <div class="mb-3">
                                <label for="aphnumber" class="form-label">Contact Number :</label>
                                <input type="text" name="aphnumber" class="form-control w-75" id="aphnumber" placeholder="0755665789" required value="<?=$row['ANUMBER']?>">
                                <div class="invalid-feedback">Please enter the contact number</div>
                              </div>
                            <div class="py-2">
                            <button style="width: 100px;" type="submit" name="submit" class="btn btn-success">Update</button>  
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                    }else{
                        echo "<p class='alert alert-danger w-75'>Record not found</p>";
                     
                    } 
                }else{
                    header('location: profileDetails.php');
                }
                ?> 
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