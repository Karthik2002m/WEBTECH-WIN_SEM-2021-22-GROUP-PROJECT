<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_1.css">
    <title>My Website</title>

    
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1 style="color: #1a1a00; font-size:20px; position: absolute; top: 10px; left: 70px">NEWSTIME
                        </h1>
                        <h4 style="color: #A69D8A; font-size:10px; position: absolute; top: 30px; left: 70px">The News
                            You Deserve</h4>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#world" data-after="World">World</a></li>
                            <li><a href="#India" data-after="India">India</a></li>
                            <li><a href="#Business" data-after="Business">Business</a></li>
                            <li><a href="#Entertainment" data-after="Entertainment">Entertainment</a></li>
                            <li><a href="#Sports" data-after="Sports">Sports</a></li>
                            <li><a href="lg1.php" data-after="Login">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->


    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Welcome to <span></span></h1>
                <h1 style="color:#1a1a00">Newstime <span></span></h1>
                <h1 style="color:#A69D8A">The News You Deserve <span></span></h1>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- World Section -->
    <section id="world">
        <div class="world container">
            <div class="world-top">
                <h1 class="section-title">World</h1>
            
                
            </div>
            <div class="world-bottom">
                <div class="world-item">
                <div class="api">
                    <?php
                    $api = file_get_contents("https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=2e3b9aefa12a4d1daf75daebb62516be");
                    
                    $news = json_decode($api, true);
                
                    ?>
                
                
                    <ul >
                
                    <?php  foreach($news['articles'] as $value) {
                        ?>
                        <!--<tr > -->
                        <li class = "api" style=" align: center;"><img src="<?=$value['urlToImage']?>" style=" align: centre ;height: 300px; width: 400px;" /></li>
                        <li class="api"> <div style="padding: 50px; font-size: 45px;">
                        <b><?=$value['title']?></b>
                        <p><?=$value['publishedAt']?></p>
                        <p><?=$value['description']?> </p>
                        <a href="<?=$value['url']?>" style="color:black; text-shadow: 10px 2px 10px #A69D8A; font-size: 20px;"><b> Readmore...</b></a></div></li>
                    </ul>
                    <br />
                    <?php } ?>
                   <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End World Section -->

    <!-- India Section -->
    <section id="India">
        <div class="India container">
            <div class="India-top">
                <h1 class="section-title">India</h1>
                <p> </p>
            </div>
            <div class="India-bottom">
                <div class="India-item">
                <div class="api">
                    <?php
                    $api = file_get_contents("https://newsapi.org/v2/top-headlines?country=in&apiKey=2e3b9aefa12a4d1daf75daebb62516be");
                    
                    $news = json_decode($api, true);
                
                    ?>
                
                
                    <ul >
                
                    <?php  foreach($news['articles'] as $value) {
                        ?>
                        <!--<tr > -->
                        <li class = "api" style=" align: center;"><img src="<?=$value['urlToImage']?>" style=" align: centre ;height: 300px; width: 400px;" /></li>
                        <li class="api"> <div style="padding: 50px; font-size: 45px;">
                        <b><?=$value['title']?></b>
                        <p><?=$value['publishedAt']?></p>
                        <p><?=$value['description']?> </p>
                        <a href="<?=$value['url']?>" style="color:black; text-shadow: 10px 2px 10px #A69D8A; font-size: 20px;"><b> Readmore...</b></a></div></li>
                    </ul>
                    <br />
                    <?php } ?>
                   <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
               
    </section>
    <!-- End India Section -->

    <!-- Business Section -->
    <section id="Business">
        <div class="Business container">
            <div class="Business-top">
                <h1 class="section-title">Business</h1>
                <p></p>
            </div>
            <div class="Business-bottom">
                <div class="Business-item">
                 <div class="api">
                    <?php
                    $api = file_get_contents("https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=2e3b9aefa12a4d1daf75daebb62516be");
                    
                    $news = json_decode($api, true);
                
                    ?>
                
                
                    <ul >
                
                    <?php  foreach($news['articles'] as $value) {
                        ?>
                        <!--<tr > -->
                        <li class = "api" style=" align: center;"><img src="<?=$value['urlToImage']?>" style=" align: centre ;height: 300px; width: 400px;" /></li>
                        <li class="api"> <div style="padding: 50px; font-size: 45px;">
                        <b><?=$value['title']?></b>
                        <p><?=$value['publishedAt']?></p>
                        <p><?=$value['description']?> </p>
                        <a href="<?=$value['url']?>" style="color:black; text-shadow: 10px 2px 10px #A69D8A; font-size: 20px;"><b> Readmore...</b></a></div></li>
                    </ul>
                    <br />
                    <?php } ?>
                   <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Business Section -->

    <!-- Entertainment Section -->
    <section id="Entertainment">
        <div class="Entertainment container">
            <div class="Entertainment-top">
                <h1 class="section-title">Entertainment</h1>
                <p></p>
            </div>
            <div class="Entertainment-bottom">
                <div class="Entertainment-item">

                <div class="api">
                    <?php
                    $api = file_get_contents("https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=2e3b9aefa12a4d1daf75daebb62516be");
                    
                    $news = json_decode($api, true);
                
                    ?>
                
               
                    <ul >
                
                    <?php  foreach($news['articles'] as $value) {
                        ?>
                        <!--<tr > -->
                        <li class = "api" style=" align: center;"><img src="<?=$value['urlToImage']?>" style=" align: centre ;height: 300px; width: 400px;" /></li>
                        <li class="api"> <div style="padding: 50px; font-size: 45px;">
                        <b><?=$value['title']?></b>
                        <p><?=$value['publishedAt']?></p>
                        <p><?=$value['description']?> </p>
                        <a href="<?=$value['url']?>" style="color:black; text-shadow: 10px 2px 10px #A69D8A; font-size: 20px;"><b> Readmore...</b></a></div></li>
                    </ul>
                    <br />
                    <?php } ?>
                   <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Entertainment Section -->

    <!-- Sports Section -->
    <section id="Sports">
        <div class="Sports container">
            <div class="Sports-top">
                <h1 class="section-title">Sports</h1>
                <p></p>
            </div>
            <div class="SportsSports-bottom">
                <div class="Sports-item">

                <div class="api">
                    <?php
                    $api = file_get_contents("https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=2e3b9aefa12a4d1daf75daebb62516be");
                    
                    $news = json_decode($api, true);
                
                    ?>
                
                
                    <ul >
                
                    <?php  foreach($news['articles'] as $value) {
                        ?>
                        <!--<tr > -->
                        <li class = "api" style=" align: center;"><img src="<?=$value['urlToImage']?>" style=" align: centre ;height: 300px; width: 400px;" /></li>
                        <li class="api"> <div style="padding: 50px; font-size: 45px;">
                        <b><?=$value['title']?></b>
                        <p><?=$value['publishedAt']?></p>
                        <p><?=$value['description']?> </p>
                        <a href="<?=$value['url']?>" style="color:black; text-shadow: 10px 2px 10px #A69D8A; font-size: 20px;"><b> Readmore...</b></a></div></li>
                    </ul>
                    <br />
                    <?php } ?>
                   <!-- </table> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Sports Section -->



    <!-- End Login Section -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1>Newstime</h1>
            </div>


            <p>Copyright © 2022 Made By Harsh/Karthikeya</p>
        </div>
    </section>
    <!-- End Footer -->
    <script src="./app.js"></script>
</body>

</html>