<?php  $files_name = basename($_SERVER['SCRIPT_FILENAME'],".php")  ?>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/img/Pf.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
            pat
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $files_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $files_name == 'about' ? 'active': '' ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php echo $files_name == 'contract'? 'active':'' ?>">
                    <a class="nav-link" href="contract.php">contract</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>



  <!-- ||  = หรือ
  ? = เเสดง  -->