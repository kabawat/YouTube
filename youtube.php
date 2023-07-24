<!DOCTYPE html>
<html lang="en">
<?php
    // $logIn = true;
    $logIn = false;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="yt_container">
        <div class="yt_header">
            <!-- YouTube left side Header page-->
            <?php include "partial/header/left.php";?>
            <!-- YouTube Middle side Header page-->
            <?php include "partial/header/middle.php";?>
            <!-- YouTube right side Header page-->
            <?php include "partial/header/right.php";?>
        </div>

        <div class="yt_main_page">
            <!-- aside yt_container -->
            <div class="aside active" id="aside">
                <?php
                    include "partial/aside/toggle.php";
                    include "partial/aside/active.php";
                ?>
            </div>
            <!-- video main container  -->
            <div id="yt_video" class="yt_video active">
                <?php include "partial/main_video_page/top_list.php"?>
                <div class="video_container">
                    <?php include "partial/main_video_page/video.php"?>
                </div>

            </div>
        </div>
    </div>
    <script src="js/main.js"> </script>
</body>

</html>