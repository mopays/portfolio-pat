<?php $files_name = basename($_SERVER['SCRIPT_FILENAME'],".php") ?>

<footer class="semi-footer p-5 text-center text-md-left">
    <div class="row">
        <div class="col-md-4">
            <a class="navbar-baran" href="#">
                <img src="" width"35" height="35" class="d-inline-block align-top" alt="">
                สุทธิพัฒน์ อิ่มประไพ
            </a>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>      094-545-6330 <br>
                <i class="fa fa-envelope" aria-hidden="true"></i>patstepza@hotmail.com<br>
            </p>
            <a href="https://www.facebook.com/patstepza/" target="_blank"  >
                <i class="fab fa-facebook-square fa-2x"></i></a>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
        <div class="col-md-4">
            <ul class="navbar-nav ">
                <h4 class="text-center" >เมนู</h4>
                <li class="nav-item <?php echo $files_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $files_name == 'about' ? 'active' : '' ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php echo $files_name == 'contract' ? 'active' : '' ?>">
                    <a class="nav-link" href="contract.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="com-md-4">
            <h4>เเผนที่</h4>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5798266574675!2d100.39328331534736!3d13.80418439979538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e290df4b8af9bf%3A0xfacb846917ec9d86!2z4LiL4Lit4LiiIOC4q-C4oeC4ueC5iOC4muC5ieC4suC4meC4quC4p-C4meC4qOC4o-C4teC4m-C4o-C4sOC4p-C4seC4leC4tCDguK3guLPguYDguKDguK3guJrguLLguIfguIHguKPguKfguKIg4LiZ4LiZ4LiX4Lia4Li44Lij4Li1IDExMTMw!5e0!3m2!1sth!2sth!4v1614269101394!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</footer>


