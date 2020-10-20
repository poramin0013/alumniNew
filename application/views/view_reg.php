
<header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <!--  -->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div style="text-align: center;" > 
                            <h2>ระบบสมาชิกศิษย์เก่า</h2>
                            <h3>Nakhon Pathom Rajabhat University</h3>
                            <img src="img/npru.png" >
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
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="index"><a href="index.php">หน้าแรก</a></li>
                        
                       
                        <li><a href="#"  data-toggle="modal" data-target="#login">เข้าสู่ระบบ</a></li>
                        <li class="register" ><a href="<?php echo base_url();?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>
                       
                      
                        <li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#logout">ออกจากระบบ</a></li>
                      

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        <div class="nav-item" style="background-color: #fff;">
        </div>
    </header>
<style>
.index{
    background-color:#e7ab3c;
    color:#fff;
}
</style>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<br>
<div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ลงทะเบียน</h3>
                    </div>
                </div>
            </div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<?php
foreach ($datapersonal->result_array() as $rowPersonal) {
    foreach ($dataalumni->result_array() as $rowAlumni) {
        foreach ($dataworkinformation->result_array() as $rowWorkinformation) {
           echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

            echo '<thead>
                    <tr>
                        <th colspan="3" style="background-color:#e7ab3c;color:#fff;" >ข้อมูลส่วนตัว</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:130px;">ชื่อ - นามสกุล</td>
                        <td>';
            echo $rowPersonal['name'];
            echo ' </td>
                        <td rowspan="3"  style="width:130px;" >';
            if ($rowPersonal['img'] != "noImage") {
                echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                                    src="img/upload/';
                echo $rowPersonal['img'];
                echo ' ">';
            } else {
                echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                                    src="img/user.png">';
            }
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เพศ</td>
                        <td>';
            echo $rowPersonal['gender'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>วันเดือนปีเกิด</td>
                        <td>';
            echo $rowPersonal['birthday'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td colspan="2">';
            echo $rowPersonal['address'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td colspan="2">';
            echo $rowPersonal['tel'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td colspan="2">';
            echo $rowPersonal['facebook'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td colspan="2">';
            echo $rowPersonal['email'];
            echo ' </td>
                    </tr>
                </tbody>';

            echo '</table>';


            echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

            echo '<thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการศึกษา</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">รหัสนักศึกษา</td>
                        <td>';
            echo $rowAlumni['student_id'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>หมู่เรียน</td>
                        <td>';
            echo $rowAlumni['group'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>สาขา</td>
                        <td>';
            echo $rowAlumni['branch'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>คณะ</td>
                        <td>';
            echo $rowAlumni['faculty'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ภาคการศึกษา</td>
                        <td>';
            echo $rowAlumni['semester'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ระดับการศึกษา</td>
                        <td>';
            echo $rowAlumni['education_level'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่เข้า</td>
                        <td>';
            echo $rowAlumni['year_int'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่จบ</td>
                        <td>';
            echo $rowAlumni['year_out'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>
                        ผลงานที่โดดเด่น</td>
                        <td>';
            echo $rowAlumni['outstanding_work'];
            echo ' </td>
                    </tr>
                </tbody>';

            echo '</table>';

 
            echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

           echo '
                <thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการทำงาน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">ชื่อบริษัท</td>
                        <td>';
            echo $rowWorkinformation['company'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ตำแหน่งงาน</td>
                        <td>';
            echo $rowWorkinformation['position'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td>';
            echo $rowWorkinformation['address'];
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์บริษัท</td>
                        <td>';
            echo $rowWorkinformation['tel'];
            echo ' </td>
                    </tr>
                </tbody>';


            echo '</table>';
        };
    };
};
    

?>
</div>
</body>