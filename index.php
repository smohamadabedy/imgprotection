<?php
session_start();

            if(isset($_SESSION['level'])){
                $a = $_SESSION['level'];
            }else
            {
                $a = false;
            }
           
      $permf = explode(',',$a);
            $url = $_SERVER['REQUEST_URI'];
            $b = explode('/',$url);
            $fname =  explode('.',$b[4]);
            $ufname = $fname[0];
            $fname = $fname[0][1];
            $vfname = $ufname[0][0];

            if($a == false){
                die('شما مجوز دسترسی ندارید برای ادامه ثبت نام کنید یا وارد شوید');
            }
            if($fname > 2 ){
            if(substr($b[3], -1) != $vfname){
                die('فایل پیدا نشد');
            }
            if(!in_array($b[3],$permf)){
                 die('شما مجوز دسترسی ندارید برای ادامه سطح کاربری خود را ارتقا دهید');
            }
            if(!in_array("folder".$vfname,$permf)){
                 die('شما مجوز دسترسی ندارید برای ادامه سطح کاربری خود را ارتقا دهید');
            }
            }
           
        ?>
        <?php 
        if (isset($ufname)){

        ?>

<img src="http://mysitegig.gigfa.com/testpic/img/<?php echo $ufname; ?>.jpg" style="text-align: center;
position: absolute;
margin: auto;
top: 0;
right: 0;
bottom: 0;
left: 0;
max-width:100%;
max-height:100%;
"/>
 
<?php
        }
 ?>
  <script>
  document.body.style.background = "#212121";

  </script>