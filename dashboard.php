<?php
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location: index.php');
}else{
    include_once ("classes/Product.php");
    $pr = new Product();
    $products = $pr->getAllProduct();
    
    $orders = $pr->getAllOrders();
    
    $stocks = $pr->getProductStocks();
    
    $totalRevenue = $pr->getAllOrders();// used for revenue
    
    
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" type="image/png" href="images/icon.ico" sizes="16x16" >
      <title>Svcc Clinic System</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
   </head>
   <body style="background-color: #FFFFF6;">
      <?php include_once("templates/header.php");?>
      <div class="row">
      <div style="width: 23%; height: 100%" style="background-color: #FFFFF6;">
      <div class="sidebar" >
         <img src="images/svcc_log2.png" style="width: 50%" class="sidebar-img-top ml-5" alt="..." >
         <div class="card-body">
            <h5 class="card-title">Current Account</h5>
            <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo $_SESSION['uName'];?></p>
            <p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo $_SESSION['uType'];?></p>
            <p class="card-text"><i class="fa fa-clock-o">&nbsp;</i>Last Login : <?php echo $_SESSION['last_login']; ?></p>
            <div class="card mb-3">
               <a href="manage_patient.php" class="btn btn-outline-primary"  style="background-color: rgb(96, 0, 0);">Patient List</a>
               </div
               <br>
               <div class="card mb-3">
                  <a data-toggle="modal" data-target="#form_brand" class="btn btn-outline-primary"  style="background-color: rgb(96, 0, 0);">Clinic Archive</a>
                  </div
                  <br> 
                  <div class="card mb-3">
                     <a data-toggle="modal" data-target="#form_product" class="btn btn-outline-primary"  style="background-color: rgb(96, 0, 0);">Manage Clinic</a>
                     </div
                     <br>
                     <div class="card mb-3">
                        <a data-toggle="modal" data-target="#form_product" class="btn btn-outline-primary"  style="background-color: rgb(96, 0, 0);">Patient Diagnosis</a>
                        </div
                        <br>
                        <div class="card mb-3">
                           <a href="setting.php" class="btn btn-primary" style="background-color: rgb(96, 0, 0);"><i class="fa fa-edit">&nbsp;</i>Settings</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- three categories -->
               <div class="col-md-8">
                  <div class="" style="width: 100%;height: 80%">
                     <div class="card-body">  
                        <div class="row">
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <h5 class="card-title">Categories</h5>
                                    <p class="card-text">Here you can manage your categories and add new categories</p>
                                    <a href="#" data-toggle="modal" data-target="#form_patient" class="btn btn-outline-primary">Add</a>
                                    <a href="manage_categories.php" class="btn btn-outline-success">Manage</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <h5 class="card-title">Students</h5>
                                    <p class="card-text">Here you can manage your students and add new enrolly</p>
                                    <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-outline-primary">Add</a>
                                    <a href="manage_brands.php" class="btn btn-outline-success">Manage</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <h5 class="card-title">Patients</h5>
                                    <p class="card-text">Here you can manage your patients and add new patients</p>
                                    <!-- <a href="#" data-toggle="modal" data-target="#form_product" class="btn btn-outline-primary">Add</a> -->
                                    <a href="manage_products.php" class="btn btn-outline-success">Manage</a>
                                 </div>
                              </div>
                           </div>
                           <!-- chart -->
                        </div>
                        <div class="card-body">
                           <center>
                           <p>Getting started with chart Js | Chart Js Course</p>
                           <center>
                           <div>
                              <canvas id="myChart"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>      
         
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(0, 99, 132)',
      borderColor: 'rgb(0, 99, 132)',
      data: [0, 10, 5, 2, 20, 1, 41],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


         <?php
         // form_category
         include_once ("templates/category.php");?>
         <?php
         // form_brand
         include_once ("templates/brand.php");?>
         <?php
         // form_product
         include_once ("templates/product.php");?>
         <?php
         // form_patient
         include_once ("templates/patient.php");?>
         
    </body>
</html>
<?php }?>

