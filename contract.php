<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/Facivons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Facivons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/Facivons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
    <meta name="title" content="test">
    <meta name="description" content="testtttt">
    <meta name="keywords" content="folkwed">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    
    
    
    <title>Contact</title>
</head>
<body>

     <!-- Section Navbar -->
     <?php  include_once('include/navbar.php') ?>

  <!-- header -->
  <header class="page-title  jarallax" data-jarallax='{"speed":0.6}' style="background-image: url(https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80)">
  <div class="container">
      <div class="row">
          <div class="col-12">
            <h1 class="display-4 font-weight-bold">สุทธิพัฒน์ อิ่มประไพ </h1>
            <p class="lead">การพัฒนาเว็บไซต์ของตัวเอง</p>
          </div>
      </div>
  </div>
</header>
<!-- vlog -->
<section class="container py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="border-short-bottom">รายละเอียดติดต่อ</h1>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card  h-100">
                <div class="card-body">
                    <i class="fas fa-address-card fa-2x"></i>
                    <h4>ที่อยู่</h4>
                    <p> 20/2 หมู่2 ซอย3 ถนน กาญจนาภิเษก หมู่บ้านสวนศรีประวัติ(ประตูน้ำ) อ.บางกรวย ต.ศาลากลาง จ.นนทบุรี 11130</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card  h-100">
                <div class="card-body">
                    <i class="fas fa-phone-alt fa-2x"></i>
                    <h4>เบอร์ติดต่อ</h4>
                    <p>094-545-6330</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card  h-100">
                <div class="card-body">
                    <i class="fas fa-envelope fa-2x"></i>
                    <h4>อีเมล</h4>
                    <p>patstepza@hotmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card  h-100">
                <div class="card-body">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <h4>facebook</h4>
                    <p>Sutthipat Imprapai</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title"> เเบบฟอร์มติดต่อเรา</h5>
        <form method="post" action="php/contract.php" >
            <div class="form-row">
              <div class="form-group col-md-4">
                  <label for=name>ชื่อ</label>
                <input type="text" id="name" name="name" class="form-control" required placeholder="ชื่อของคุณ">
              </div>
              <div class="form-group col-md-4">
                <label for="phone">เบอร์โทรศัพท์</label>
                <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์">
              </div>
              <div class="form-group col-md-4">
                <label for="email">อีเมล</label>
                <input type="text" id="email" name="email" class="form-control" required placeholder="example@gmail.com">
              </div>
            </div>
            <div class="form-group">
            <label for="message">ข้อความของคุณ</label>
            <textarea  id="message" name="message" rows="5" class="form-control"  placeholder="เขียนข้อความของคุณที่นี้"></textarea>
         </div> 
         <div id="recaptcha-wrapper" action="action.php" method="post" class="text-center my-2">
         <div class="g-recaptcha d-inline-block"data-callback="callback" data-sitekey="6LeAzhgaAAAAAD_vIi6F1eaFiFV66EkQOKt0-DGN"></div>
        </div>
            <button type="submit"  id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อความ  </button>
        </form>

    </div>
</div>
</section>

 
  <!-- footer -->
  <?php include_once('include/footer.php') ?>
  


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script>
        $(function(){
        //global variabls
        CaptchaResized = false ;
        captchaWidth= 304;
        captchaHeight = 78;
        captchaWapper = $('recaptcha-wepper');
        captchaElements = $('#re-imageselect, .g-recaptcha');

        $(window).on('resize',function(){
            resizeCaptcha();
        
        });
            resizeCaptcha();
        });

        function resizeCaptcha(){
            if(captchawapper.width() >= captchaWidth){
                if(CaptchaResized){
                    captchaElements.css('transfom','').css('-webkit-transfom','').css('-ms-transfom','').css('-o-transfom','');
                    captchaWapper.Height(captchaHeight);
                    CaptchaResized = false ;
                }
            }else{
                var scale = (1-(captchaWidth-captchaWapper.width())*(0.5/10.))
                captchaElements.css('transfom','scale('+scale+')').css('-webkit-transfom','scale('+scale+')').css('-ms-transfom','').css('-o-transfom','');
                captchaWapper.Height(captchaHeight*scale);
                if(CaptchaResized ==false )CaptchaResized=true;
             }
        }
        function callback() {
            $('#btn-submit').removeAttr('disabled');
        }
        
        
    </script>
</body>
</html>