<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SE ALUMNI</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<header class="header-section">
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8" >
                    <div style="text-align: center; ">
                        <h1 style="font-family:TH Sarabun New; color:#145139"><b>ระบบสมาชิกศิษย์เก่า</b></h2>
                        <h3 style="font-family:Courier New; color:#145139"><b>SOFTWARE ENGINEERING</b></h3>
                        
                    </div>
                </div>
                <div class="col-lg-2 text-right col-md-2">
                    <!-- XXXX -->
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu" style="background-color:#58986f">
                <ul>
                    <li class="index"><a href="index.php">หน้าแรก</a></li>


                    <li><a href="#" data-toggle="modal" data-target="#login">เข้าสู่ระบบ</a></li>
                    <li class="register"><a href="<?php echo base_url(); ?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>


                    <li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#logout">ออกจากระบบ</a></li>


                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <div class="nav-item" style="background-color: #fff;">
    </div>
</header>
<style>
    .index {
        background-color: #e7ab3c;
        color: #fff;
    }
</style>

<!--  -->
<br>
<!--  -->
<br>
<!-- -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/se.png">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/01.png">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/02.png">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/03.png">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/04.png">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/05.png">
        </div>
    </div>
</section>
<!-- -->

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
            <?php //echo $_SESSION["name"] ; 
            ?>
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3 style="font-family:TH Sarabun New; color:#145139">ข้อมูลศิษย์เก่า</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%; background-color: #8FBC8F ; " >
                <thead>
                    <tr>
                        <th><h3 style="font-family:TH Sarabun New; color:#145139"><b>รหัสนักศึกษา</b></h3></th>
                        <th><h3 style="font-family:TH Sarabun New; color:#145139"><b>ชื่อ</b></h3></th>
                        <th><h3 style="font-family:TH Sarabun New; color:#145139"><b>หมู่เรียน</b></h3></th>
                        <th><h3 style="font-family:TH Sarabun New; color:#145139"><b>ปีการศึกษาแรกเข้า</b></h3></th>
                        <th><h3 style="font-family:TH Sarabun New; color:#145139"><b>จังหวัด</b></h3></th>
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datapersonal->result_array() as $row) { ?>
                        <tr>
                            <td><h4 style="font-family:TH Sarabun New;"><?php echo $row['student_id']; ?></h4></td>
                            <td><h4 style="font-family:TH Sarabun New;"><?php echo $row['name']; ?></h4></td>
                            <td><h4 style="font-family:TH Sarabun New;"><?php echo $row['group']; ?></h4></td>
                            <td><h4 style="font-family:TH Sarabun New;"><?php echo $row['year_int']; ?></h4></td>
                            <td><h4 style="font-family:TH Sarabun New;"><?php echo $row['province']; ?></h4></td>
                            

                            <td>
                                <form action="<?php echo base_url('index.php/manage/info_list'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
                                    <button class="btn btn-info" name="submit" style="background-color: #145139 ; ">ดูรายละเอียด</button>
                                </form>
                            </td>

                        </tr>


                    <?php }; ?>
                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
<!--  -->


<?php include("footer.php") ?>