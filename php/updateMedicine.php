<?php
  // session_start();
  include "database.php";
  if(isset($_POST["submit"])){
        $id = $_POST['id'];
        $mname = $_POST['mname'];
        $mcategory = $_POST['mcategory'];
        $suname = $_POST['suname'];
        $mprice = $_POST['mprice'];
        $mquantity = $_POST['mquantity'];
        $packing = $_POST['packing'];
        $sql = "UPDATE medicine SET MEDNAME='$mname',  SNAME='$suname', MEDPRICE=$mprice, MEDQUANTITY=$mquantity , MEDPACKING='$packing'  WHERE MID=$id";
        $result = mysqli_query($db, $sql);
        if($result){
            header('location:manageMedicine.php');
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
    <title>Update Medicine</title>
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
             <h5>
                <span class="logo_name text-light">Global Medical</span>
             </h5>
          </div>
        </div>
      </nav>
      <div class="p-2">
      <main>
        <div class="container">
            <div class="text-center py-4">
                <h4>Update Medicine Details</h4>
               
            </div><hr />
            <div class="addcustomerForm" style="margin-left: 20%;">
            <!------------Add Medicine php code-------------->
            <?php
                $id = $_GET['id'];
                $sql = "SELECT MEDNAME,  SNAME, MEDPRICE, MEDQUANTITY, MEDPACKING FROM medicine WHERE MID=$id";
                
                $res = mysqli_query($db, $sql);
                $numrow = mysqli_num_rows($res);
                if($numrow > 0){
                    $row = mysqli_fetch_assoc($res);
            ?>
                <form action="updateMedicine.php" method="post" class="px-1 py-3">
                    <div class="row">
                    <input type="hidden" name="id" value="<?=$id ?>">
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="mname" class="form-label">Medicine Name :</label>
                                <input type="text" name="mname" class="form-control w-75" id="mname" placeholder="Medicine Name" required value="<?=$row['MEDNAME']?>">
                                <div class="invalid-feedback">Please enter the medicine name</div>
                            </div>
                        </div>
                        <?php
                          $query2 = "SELECT * FROM supplier";
                          $result1 = $db->query($query2);
                        ?>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="suname" class="form-label">Supplier :</label>                                
                                <select id="suname" name="suname" class="form-control w-75" required>
                                    <option><?=$row['SNAME']?></option>
                                    <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                    <option><?php echo $row1[2];?></option>
                                    <?php endwhile;?>
                                  </select>

                                <div class="invalid-feedback">Please enter the supplier name</div>
                            </div> 
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="mprice" class="form-label">Price :</label>
                                <input type="text" name="mprice" class="form-control w-75" id="mprice" placeholder="Price" required value="<?=$row['MEDPRICE']?>">
                                <div class="invalid-feedback">Please enter the price</div>
                            </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="mquantity" class="form-label">Quantity :</label>
                                <input type="text" name="mquantity" class="form-control w-75" id="mquantity" placeholder="Quantity" required value="<?=$row['MEDQUANTITY']?>">
                                <div class="invalid-feedback">Please enter the quantity</div>
                            </div>
                        </div>
                        <div class="form-group was-validated col-md-12 py-2">
                            <div class="mb-3">
                                <label for="packing" class="form-label">Packing Details :</label>
                                <input type="text" name="packing" class="form-control w-75" id="packing" placeholder="Packing e.g. 10TAB" required value="<?=$row['MEDPACKING']?>">
                                <div class="invalid-feedback">Please enter the packing size</div>
                            </div>
                            <div class="py-3">
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
                header('location: manageMedicine.php');
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
