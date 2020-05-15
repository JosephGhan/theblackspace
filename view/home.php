<div class="container-fluid">
        <div id="logoDiv">
            <img src="view/Images/logo.png" alt="whoops" id="logo"/>
        </div>
        <h3>The Black Space</h3>
        <p>We are a band from Marshfield Missouri that plays a wide variety of music from rock to country. There are currently three members in the band.<br><br>Josh (vocals, bass, keys)<br>Isabel (piano, drums, vocals)
            <br>Joe (guitar, vocals)</p>
        <div id="post">
            <?php
                $posts = getPost();
                echo($posts[0][0]);
            ?>
        </div>
        <!-- <div id="cara">
        <a href="https://www.instagram.com/TheBlackSpaceMusic/" id="carousel" target="_blank">
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height: 900px;">
                    <?php
                        $pictures = getImages();
                        //print_r($pictures);
                        $i = 0;
                        foreach($pictures as $picture)
                        {
                            if($i == 0)
                                echo("<div class='carousel-item active'><img class='d-block h-auto w-auto' src='$picture[0]' alt='First slide'></div>");
                            else
                                echo("<div class='carousel-item'><img class='d-block h-auto w-auto' src='$picture[0]' alt='First slide'></div>");
                            $i++;
                        }
                    ?> 
                    
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
              </div>
            </div>
            </a>
        
    </div> -->
</div>