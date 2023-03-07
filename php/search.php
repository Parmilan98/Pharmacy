<?php
  session_start();
  include "database.php";
  function countRecord($sql,$db)
  {
    $result = $db->query($sql);
    return $result->num_rows;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Search</title>
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
      <main class="py-3" style="background-color: #E4E9F7; min-height: 88.5vh;">
          <h3 class="text-center py-4">Search</h3>
          <div class="container-fluid">
              <div class="row text-center d-flex justify-content-around">

                <div style="border-left: 6px solid red;" class="col-md-3 col-sm-5 mx-1 my-3 bg-light rounded">
                    <div class="d-flex text-center justify-content-between">
                      <div class="p-3">
                          <h6 style="color: red;">CUSTOMERS</h6>
                          <h6 class="fw-bold"><?php echo countRecord("SELECT * FROM customer",$db); ?></h6>
                      </div>
                      <div>
                            
                      </div>
                    </div>
                    <div class="d-flex text-center justify-content-between p-1" >
                          <h6>Search Customers</h6>
                          <a href="searchCustomer.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div style="border-left: 6px solid blue;" class="col-md-3 col-sm-5 mx-1 my-3 bg-light rounded">
                    <div class="d-flex text-center justify-content-between">
                      <div class="p-3">
                          <h6 style="color: blue;">SUPPLIERS</h6>
                          <h6 class="fw-bold"><?php echo countRecord("SELECT * FROM supplier",$db); ?></h6>
                      </div>
                      <div>
                            
                      </div>
                    </div>
                    <div class="d-flex text-center justify-content-between p-1" >
                          <h6>Search Supplier</h6>
                          <a href="searchSupplier.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div style="border-left: 6px solid green;" class="col-md-3 col-sm-5 mx-1 my-3 bg-light rounded">
                    <div class="d-flex text-center justify-content-between">
                      <div class="p-3">
                          <h6 style="color: green;">MEDICINES</h6>
                          <h6 class="fw-bold"><?php echo countRecord("SELECT * FROM medicine",$db); ?></h6>
                      </div>
                      <div>
                            
                      </div>
                    </div>
                    <div class="d-flex text-center justify-content-between p-1" >
                          <h6>Search Medicine</h6>
                          <a href="searchMedicine.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div style="border-left: 6px solid green;" class="col-md-3 col-sm-5 mx-1 my-3 bg-light rounded">
                    <div class="d-flex text-center justify-content-between">
                      <div class="p-3">
                          <h5>Pharmacist</h5>
                          <h6><?php echo countRecord("SELECT * FROM medicine",$db); ?></h6>
                      </div>
                      <div>
                            
                      </div>
                    </div>
                    <div class="d-flex text-center justify-content-between p-1" >
                          <h6>Search Pharmacist</h6>
                          <a href="searchPharmacist.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
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
