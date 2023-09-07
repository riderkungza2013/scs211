<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    <?php include("layouts/cs-css.php") ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
                <img class="m-4" src="http://cs.vru.ac.th/images/css.png" height="70">
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

    </div>
    <!-- Header -->
    <?php include("layouts/cs-header.php") ?>
    <!-- start of content , see end in footer -->
    <div class="content">
        <div class="container">
            <br />
            <h2>&starf;&nbsp;ติดต่อเรา</h2>
            <hr>

            <?php
            $selectedStyle = 1; // เลือก style ที่ 1
            include("layouts/cs-style.php");
            ?>

            <div id="map_container">
                <div id="map"></div>
            </div>

            <!-- script --> 

            <p></p>
            <h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="http://cs.vru.ac.th/images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>
        </div>
    </div>
    <!-- end of content, see start in header -->
    <?php
    $selectedStyle = 2; // เลือก style ที่ 2
    include("layouts/cs-style.php");
    ?>

    <div class="container-fluid bg-light  p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pl-4">
                    <h3>สมัครเรียนกับเรา</h3>
                    <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
                    <p>โทร. 02-909-1432 ต่อ 322 หรือ 323</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="py-4">
                        <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("layouts/cs-footer.php") ?>

    <!-- Cookie Consent by https://www.cookiewow.com -->
    <?php include("layouts/cs-script.php") ?>

</body>

</html>