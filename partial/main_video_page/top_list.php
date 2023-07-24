<?php
    $top_list = array("All","HTML","Computer Programming","Java Script","C Language","Software Development","C++","Artificial Intelligence","JAVA");
?>
<div class="yt_top_menu">
    <div class="yt_top_menu_list">
        <?php
            for ($i=0; $i < count($top_list); $i++) { 
        ?>
        <a class="yt_top_menu_item">
            <?php echo $top_list[$i];?>
        </a>
        <?php } ?>
    </div>
</div>