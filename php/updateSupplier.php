<?php
  include "database.php";
  if(isset($_POST["submit"])){
        $id = $_POST['id'];
        $snic = $_POST['snic'];
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $snumber = $_POST['snumber'];
        $saddress = $_POST['saddress'];
        $sql = "UPDATE supplier SET NIC='$snic', SNAME='$sname', SEMAIL='$semail', SNUMBER=$snumber, SADDRESS='$saddress' WHERE id=$id";
        $result = mysqli_query($db, $sql);
        if($result){
            header('location:manageSupplier.php');
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
    <title>Add Supplier</title>
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
                <h4>Update Supplier Details</h4>
            </div><hr />
            <div class="addcustomerForm" style="margin-left: 20%;">
            <!------------Add Supplier php code-------------->
            <?php
                $id = $_GET['id'];
                $sql = "SELECT 	NIC, SNAME, SEMAIL, SNUMBER, SADDRESS FROM supplier WHERE id=$id";
                $result = mysqli_query($db, $sql);
                $numrow = mysqli_num_rows($result);
                if($numrow > 0){
                    $row = mysqli_fetch_assoc($result);
            ?>
                <form action="updateSupplier.php" method="post" class="px-1 py-3">
                    <div class="row">
                    <input type="hidden" name="id" value="<?=$id ?>">
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="snic" class="form-label">NIC Number :</label>
                                <input type="text" name="snic" class="form-control w-75" id="snic" placeholder="NIC" required value="<?=$row['NIC']?>">
                                <div class="invalid-feedback">Please enter the nic number</div>
                            </div> 
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="sname" class="form-label">Supplier Name :</label>
                                <input type="text" name="sname" class="form-control w-75" id="sname" placeholder="Name" required value="<?=$row['SNAME']?>">
                                <div class="invalid-feedback">Please enter name</div>
                            </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="semail" class="form-label">Supplier Email :</label>
                                <input type="email" name="semail" class="form-control w-75" id="semail" placeholder="Email" required value="<?=$row['SEMAIL']?>">
                                <div class="invalid-feedback">Please enter email address</div>
                              </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="snumber" class="form-label">Supplier Contact Number :</label>
                                <input type="text" name="snumber" class="form-control w-75" id="snumber" placeholder="Contact Number" required value="<?=$row['SNUMBER']?>">
                                <div class="invalid-feedback">Please enter contact number</div>
                              </div> 
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="saddress" class="form-label">Supplier Address :</label>
                                <input name="saddress" class="form-control w-75" placeholder="Address" id="saddress" required value="<?=$row['SADDRESS']?>">
                                <div class="invalid-feedback">Please enter address</div>
                              </div>
                            <button style="width: 100px;" type="submit" id="submit" name="submit" class="btn btn-success">Update</button>  
                        </div>
                    </div>
                </form>
                </form>
            <?php
             }else{
                echo "<p style='color: red;'>Record not found</p>";
            } 
        }else{
            header('location: manageSupplier.php');
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
