<?php 
    $sbsLiat = array("W3 Coding Club", "learn Conding", "SBS Sanchore","w3 Schools", "php resource", "python Programing", "Ud sirji", "One Tuch");
    for ($i=0; $i < count($sbsLiat); $i++) { ?>
<div class="active_menu">
    <div class="yt_sub_icon">
        <img src="img/profile.jpg" alt="">
    </div>
    <div class="link yt_channel">
        <?php echo $sbsLiat[$i]; ?>
    </div>
</div>
<?php } ?>