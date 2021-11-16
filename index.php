<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost","id15888815_root","|6?@gHG\A}GH9oH@","id15888815_localhost");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    

    return $ip;
}


$user_ip = getUserIP();

date_default_timezone_set("Asia/Manila");
$today = date("F j, Y, g:i a"); 



// Attempt insert query execution
$sql = "INSERT INTO userip (uip, utime) VALUES ('$user_ip', '$today')";
if($mysqli->query($sql) === true){
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Attempt delete owners ip address query execution
$sql = "DELETE FROM userip WHERE uip='120.29.77.31'";
if($mysqli->query($sql) === true){
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
} 
 
 
// Close connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/iconset/cca.jpg" type="image/icon type">

</head>
<body onload="realtimeClock()">
    <!-- Div Main Container -->
    <div class="main-container" id="home">
        <!-- Navigation Item and Logo Text -->
        <div class="nav-bar">
            <div class="logo-name">
                <a href="#" target="_blank">Portfolio.me</a>
            </div>
            <div class="nav-bar-items">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#certification">Certification</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#">Project</a></li>
                </ul>
            </div>
        </div>
                <div class="right-colum">
                    <p>Click to Listen</p>
                        <img src="images/play.svg" id="icon">
                </div>
        <!-- Banner image and Text Banner -->
        <div class="image-banner">
            <div class="banner-content">
                <h1>Hello! Im Jerramy.<br/>
                    <h1 class="h1-color">Becoming Professional <span class="txt-type" data-wait="3000" data-words='["Developer.", "Designer.", "Creator.", "Graphic Artist."]'></span><span class="txt-type1">|</span>

                    </h1>
                </h1>
                <p class="cont-text">Analytical and problem solving skills. Interpersonal and communication skills. The ability to work well under pressure.</p>
                <br/>
                <br/>
                <br/>
                <div class="social-menu">
                    <ul>
                        <li><a href="https://www.facebook.com/iamjerz" target="www.facebook.com/iamjerz"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/jerramy02/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/jerramycalites/" target="https://www.instagram.com/jerramycalites/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- About me Information -->
        <div class="about" id="about">
            <h1 class="title"> About me</h1>    
                <hr>
                <br/>
                    <b class="title-txt"> Programming Language and Tools</b> <br><br/>

                            
                                <img src="images/iconset/cisco.svg" class="iconset">
                                <img src="images/iconset/css3.svg" class="iconset">
                                <img src="images/iconset/database.svg" class="iconset">
                                <img src="images/iconset/html5.svg" class="iconset">

                                <!-- See more hide button -->
                                <img src="images/iconset/java.svg" class="iconset">
                                <img src="images/iconset/javascript.svg" class="iconset">
                                <img src="images/iconset/mysql.svg" class="iconset">
                                <img src="images/iconset/photoshop.svg" class="iconset">
                                <img src="images/iconset/php.svg" class="iconset">
                                <img src="images/iconset/python.svg" class="iconset">
                                <img src="images/iconset/visualstudio.svg" class="iconset">
                            <br/>   
                            <br/>
                            <b class="title-txt"> WORKFLOW </b> <br><br/>
                                <p class="par-text"><i class="fa fa-check"> </i> computer technicial</p>
                                <p class="par-text"><i class="fa fa-check"> </i> graphic artist </p>
                                <p class="par-text"><i class="fa fa-check"> </i> Phone Technicial</p>
                    <!-- See more hide button -->   
                                <p class="par-text"><i class="fa fa-check"> </i> Excel Expertise</p>
                                <p class="par-text"><i class="fa fa-check"> </i> Photographer</p>
                            <br/>
                            <b class="title-txt"> interest</b> <br><br/>
                                <p class="par-par">
                                        Apart from being a web developer, I enjoy most of my time being outdoors. In the summer, I am an traveler and alcoholic person. During the cold months here in philippines, I enjoy helping others, and making fun with friends.
                            
                                        When forced indoors, I follow a number of sci-fi and fantasy genre movies and k-drama shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the cyber world and making photographic memory with my family.
                                </p><br>
                            <br>
                            <b class="title-txt">educaiton</b> <br><br/>    
                                <p class="par-edu"> City college of angeles <b class="color-par-edu-date">2018-Present</b></p>
                                    <p class="par-edu-par-title-main">Bachelor of Information Systems</p>
                                    <br>
                                    <p class="par-edu-par">Information Systems - Web Development</p>
                                    <p class="par-edu-par">Cisco Networking CCNA 1, 2, 3, 4</p>
                                    <br>
                                <p class="par-edu"> Angeles City National Higher School - Senior High School  <b class="color-par-edu-date">2018-2010</b></p>
                                    <p class="par-edu-par-title-main">Accountancy, Business, and Management</p>
                                    <br>
                                    <p class="par-edu-par">Fundamental of Accounting</p>
                                    <p class="par-edu-par">Marketing Strategies</p>
            <br>
            <hr>
        <!-- Certification -->
        </div>
        <div class="certification" id="certification">
            <h1 class="title">Certification</h1>
            <hr>
                <div class="cert-box">
                    <div class="slider">
                      <div class="slider-items">
                          <div  class="item active">
                             <img src="images/certexcel.jpg" />
                             <div class="caption">
                                <a class="slide-text" href="https://www.youracclaim.com/users/jerramy-calites" target="https://www.youracclaim.com/users/jerramy-calites">Microsoft Office Specialist: Excel</a>
                             </div>
                          </div>
                          <div  class="item">
                             <img src="images/certcisco.jpg" />
                             <div class="caption">
                                <a class="slide-text" href="https://www.youracclaim.com/users/jerramy-calites" target="https://www.youracclaim.com/users/jerramy-calites">Cisco Networking</a>
                             </div>
                          </div>
                      </div>    
                                    <!-- slider controls -->
                              <div class="left-slide"><</div>
                              <div class="right-slide">></div>
                            <!-- slider controls -->            
                    </div>
            <hr>
            <br>
                </div>
        </div>
        <div class="gallery" id="gallery">
            <h1 class="title">Gallery</h1>
            <div class="gallery-box">
                <div class="col">
                    <h2>Flower</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h2>Church</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h2>Angeles City</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h2>CCA Bethlehem</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h2>CCA Bethlehem</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>
                <div class="col">
                    <h2>CCA Bethlehem</h2>
                    <div class="caption1">
                        <p></p>
                    </div>
                </div>

            </div>

        </div>












        <div class="footer">
            <div class="col2">
                <a href="#" id="date"></a>
            </div>
            <div class="col2">
                <a href="https://whatismyipaddress.com/ip/<?php echo $user_ip ?>" target="https://whatismyipaddress.com/ip/<?php echo $user_ip ?>">Jerramy Calites © 2021 | Your IP Address: <?php echo $user_ip ?></a>
            </div>
            <div class="col2">
                <a href="#" id="clock"></a>
            </div>
        </div>





            <audio id="mySong" loop autoplay>
                <source src="images/song.mp3" type="audio/mp3">
            </audio>



    </div>
    <!-- inserting JavaScript -->
    <script src="main.js"></script>
</body>
</html>