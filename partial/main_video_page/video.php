<?php
$j = 100;
    for($i=1; $i<=$j; $i++){
        ?>
<div class="video_item">
    <div class="yt_thume_cont">
        <div class="thumbnail">
            <img class="thumb_img" src="thumbnail/video.jpg" alt="" width="100%" height="auto">
        </div>
        <div class="thumb_btn">
            <div class="watch_later">
                <div class="thum_icon">
                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"
                        class="style-scope yt-icon"
                        style="fill:#fff; pointer-events: none; display: block; width: 100%; height: 100%;">
                        <g class="style-scope yt-icon">
                            <path
                                d="M14.97,16.95L10,13.87V7h2v5.76l4.03,2.49L14.97,16.95z M12,3c-4.96,0-9,4.04-9,9s4.04,9,9,9s9-4.04,9-9S16.96,3,12,3 M12,2c5.52,0,10,4.48,10,10s-4.48,10-10,10S2,17.52,2,12S6.48,2,12,2L12,2z"
                                class="style-scope yt-icon"></path>
                        </g>
                    </svg>
                </div>
                <div class="thum_title">Watch Later</div>
            </div>
            <div class="add_play">
                <div class="thum_icon">
                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"
                        class="style-scope yt-icon"
                        style=" fill:#fff; pointer-events: none; display: block; width: 100%; height: 100%;">
                        <g class="style-scope yt-icon">
                            <path d="M21,16h-7v-1h7V16z M21,11H9v1h12V11z M21,7H3v1h18V7z M10,15l-7-4v8L10,15z"
                                class="style-scope yt-icon"></path>
                        </g>
                    </svg>
                </div>
                <div class="thum_title">ADD TO QUEUE</div>
            </div>
        </div>
        <div class="yt_video_time">
            12:12
        </div>
    </div>
    <div class="video_ds">
        <!-- YouTube channel logo  -->
        <div class="channel_logo_yt_video">
            <div class="channel_logo_img">
                <img src="img/profile.jpg" alt="" width="100%" height="100%">
            </div>
        </div>
        <!-- video link title and dis  -->
        <div class="yt_video_info">
            <div class="yt_video_title">
                Competitive Coding vs Development | What to do for Placements ?
            </div>
            <div class="channel_link">Sunny Games & Technology</div>
            <div class="yt_user_res">sda;lfgj</div>
        </div>
        <!-- 3 dot right side  -->
        <div class="video_btn">
        </div>
    </div>

</div>
<?php
    }
?>