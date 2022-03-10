<?php
session_start();
if(!isset($_SESSION['userlogin'])){
    header('location: index.php');
}else{
    include_once ("classes/Brand.php");
    $br = new Brand();
    $brands = $br->getAllBrand();
/*    
if(isset($_GET['delbr'])){
    // brand delete from brand tbl
    $delbr = $_GET['delbr'];
    $delBrand = $br->deleteBrand($delbr);    
    // refresh the page,
    echo "<meta http-equiv='refresh' content='0;URL=?id=live'/>";    
}*/

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventory System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">       
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     
        <script src="js/manage.js"></script>

     </head>
     <body>
         <?php include_once("templates/header.php");?>
         <br>
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="card" style="background-color: whitesmoke;">
                         <h3 class="text-center" style="font-family: cursive">All Brands</h3>

                         <div class="card-body">

            <table class="table table-striped table-bordered table-condensed table-hover text-center" id="example">

             <thead>
                 <tr class="btn-danger text-center">
                     <td bgcolor="#990000"><b>SL#</b></td>
                     <td bgcolor="#990000"><b>Brand</b></td>
                     <td bgcolor="#990000"><b>Status</b></td>
                     <td bgcolor="#990000"><b>Action</b></td>
                 </tr>
             </thead>
             <tbody id="brandTbody">
             </tbody>
             <tfoot>
                 <tr class="btn-danger text-center">
                     <td bgcolor="#990000"></td>
                     <td bgcolor="#990000"></td>
                     <td bgcolor="#990000"></td>
                     <td bgcolor="#990000"></td>                                   
                 </tr>
             </tfoot>
         </table>  
                         </div>
                     </div>      
                 </div>
             </div>            
         </div>
              <script type="text/javascript">
     // delete brand     
     $(document).ready(function() {
      $('.btn-outline-danger').click(function() {
      var did = $(this).attr("did");    
      if(confirm("Are you sure you want to delete this Brand?")){
          $.ajax({
              url: "includes/process.php",
              method: "POST",
              data: {deleteBrand:1,id:did},                    
              cache: false,
              success: function(html) {
              $(".delete_br" + did).fadeOut('slow');
                  }    
               })
            }else{
            return false;
            }
        })
     })
         </script>
          <?php include_once("templates/update_brand.php")?>

          <script>
            $(document).ready(function(){
                
                $.ajax({
                    url: "../webpage/api/brand/getBrands.php",
                    method: "GET",
                    success: function(data) {
                        $("#brandTbody").html('');
                        var results = JSON.parse(data);
                        var htmlArray = [];
                        for (const result of results) {
                            htmlArray.push("<tr>");
                            htmlArray.push("<td>"+ result.bId +"</td>");
                            htmlArray.push("<td>"+ result.brand_name +"</td>");
                            htmlArray.push("<td>"+ result.status +"</td>");
                            htmlArray.push("<td>");
                            htmlArray.push("</td>");
                        }
                        $("#brandTbody").html(htmlArray.join(''));
                    }

                    
                });
                
                
            });
          </script>
             
     </body>
</html>
<?php }?>
<script>
   
</script>
