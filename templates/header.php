<nav style="background-color: rgb(59,0,5); background: linear-gradient(90deg, rgba(59,0,5,1) 0%, rgba(121,9,9,1) 44%, rgba(247,255,0,1) 100%);"  class="navbar navbar-expand-lg navbar-dark d-flex">
<img href="../dashboard.php" src="images/svcc_log2.png" style="width: 5%" class="card-img-top mx-auto" alt="..." > 
       
<font size="3" color="#FFFF00">
<strong>St.Vincent College of Cabuyao<br><font size="2" color="#FFFFFF">Mamatid, Cabuyao City, Laguna</font></strong>
</font><br>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto p-1">
            <?php if(isset($_SESSION['uId'])){ ?>
            <a class="nav-item nav-link active" href="dashboard.php"><i class="fa fa-tachometer">&nbsp;</i>Dashboard</a>
            <?php }?>
            
            <?php if(isset($_SESSION['uId'])){ ?>
            <a class="nav-item nav-link active" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
            <?php }else { ?>
            <a class="nav-item nav-link active" href="index.php"><i class="fa fa-user">&nbsp;</i>Login</a>
            <?php }?>
        </div>
    </div>
</nav>