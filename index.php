<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// Show necklaces with a SKU of Swat Valley
$sql = "SELECT * FROM necklaces WHERE SKU LIKE 'A-%'";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
$conn->close();
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Fine Jewelry</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Dry Themes" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="DryThemes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />    
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>		
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/prettyPhoto.css' />        
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />        
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>                
<script src="js/respond.min.js"></script>                
<![endif]-->

    </head>
    <body class="page">

        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">                    
                    </td>
                </tr>
            </tbody>
        </table>   

        <div class="header-search">
            <div class="content-1330 center-relative">
                <form class="search-form">
                    <label>		
                        <input type="search" class="search-field" placeholder="Search ..." value="" name="s" title="Search for:">                        
                    </label>    
                </form>               
            </div>
        </div>


        <div class="body-wrapper">           
            <div class="content-1330 header-holder center-relative">
                <div class="header-logo left">

                    <h1 class="site-title">
                        <a href="index.html">
                            <img src="images/favicon.jpeg" alt="logo">
                        </a>               
                    </h1>

                </div>

                <div class="header-menu right">
                    <nav id="header-main-menu" class="left">
                        <ul class="main-menu sm sm-clean">
                            <li>
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#portfolio">Showcase</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>    
                            <li>
                                <a href="contact.html">Contact</a>

                            </li>
                        </ul>
                    </nav>
                    <div class="toggle-holder relative right">
                        <div id="toggle">
                            <i class="fa fa-search"></i>                      
                        </div>
                    </div>
                    <div class="clear"></div>							
                </div>
                <div class="clear"></div>
            </div>

            <div id="content" class="site-content">
                <article>
                    <div class="content-1330 center-relative">
                        <div class="page-desc">
                            David Ebbinghouse has traveled widely, especially in India and has collected ancient beads and conducted research on them. He has published bead research and given lectures to various bead societies around the country. All this he considers to be a subset of his artistic practice, rather than a separate activity, as he seeks to integrate all of his experiences into his work. This intention to create an art that is instrumental in living a life in modern times is the same impulse behind all of the world’s mythology throughout all time and history. In this way Ebbinghouse seeks to create an art that transcends the boundaries of how we normally think about art.
                        </div>
                        <div class="clear"></div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div class="button-group filters-button-group">
                            <div class="button is-checked" data-filter="*">All</div>
                            <div class="button" data-filter=".post">Agates</div>
                            <div class="button" data-filter=".image">Carnelian</div>
                            <div class="button" data-filter=".video">Egypt</div>
                            <div class="button" data-filter=".extern">Swat Valley</div> 
                            <div class="button" data-filter=".post">Mesopotamia</div>
                            <div class="button" data-filter=".image">Peru</div>
                            <div class="button" data-filter=".video">Saharan</div>
                        </div>
                        <!--Images-->
                        <div class="grid" id="portfolio">
                            <div class="grid-sizer"></div>
                            <div class="grid-item element-item p_one_third post">

                                <?php echo '<a href="single-portfolio.html">';?> 
                                <img src="demo-images/sun_portfolio_image01.png" class="card-img-top" alt="">
                                <div class="portfolio-text-holder">
                                    <p>AGATES</p>
                                </div>
                                <?php echo '</a>';?>



                                <!--
<a href="single-portfolio.html">
<img src="demo-images/sun_portfolio_image01.png" alt="">
<div class="portfolio-text-holder">
<p>CLOCK</p>
</div>
</a>
-->
                            </div>

                            <div class="grid-item element-item p_one_third image">
                                <a href="demo-images/sun_portfolio_image03.png" data-rel="prettyPhoto[gallery1]">
                                    <img src="demo-images/sun_portfolio_image03.png" alt="">
                                    <div class="portfolio-text-holder">
                                        <p>BAG</p>
                                    </div>
                                </a>
                            </div>

                            <div class="grid-item element-item p_one_third post">
                                <a href="single-portfolio.html">
                                    <img src="demo-images/sun_portfolio_image04.png" alt="">
                                    <div class="portfolio-text-holder">
                                        <p>FISH</p>
                                    </div>
                                </a>
                            </div>

                            <div class="grid-item element-item p_one_third video">
                                <a href="https://www.youtube.com/watch?v=xEW_YXgRSIE" data-rel="prettyPhoto[gallery1]">
                                    <img src="demo-images/sun_portfolio_image02.png" alt="">
                                    <div class="portfolio-text-holder">
                                        <p>BOTTLE</p>
                                    </div>
                                </a>
                            </div>

                            <div class="grid-item element-item p_one_third extern">
                                <a href="http://drythemes.com" target="_blank">
                                    <img src="demo-images/sun_portfolio_image05.png" alt="">
                                    <div class="portfolio-text-holder">
                                        <p>PAPER</p>
                                    </div>
                                </a>
                            </div>

                            <div class="grid-item element-item p_one_third post">
                                <a href="single-portfolio.html">
                                    <img src="demo-images/sun_portfolio_image07.png" alt="">
                                    <div class="portfolio-text-holder">
                                        <p>BLUE ICE</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div class="one_half">
                            <p>
                                <strong>The Story</strong>
                                <br>
                                David Ebbinghouse has traveled widely, especially in India and has collected ancient beads and conducted research on them. He has published bead research and given lectures to various bead societies around the country. All this he considers to be a subset of his artistic practice, rather than a separate activity, as he seeks to integrate all of his experiences into his work. This intention to create an art that is instrumental in living a life in modern times is the same impulse behind all of the world’s mythology throughout all time and history. In this way Ebbinghouse seeks to create an art that transcends the boundaries of how we normally think about art.
                            </p>
                        </div>
                        <div class="one_half last">
                            <p>
                                <strong>Insert Text</strong>
                                <br>
                                Insert Text
                            </p>
                            <p>&nbsp;</p>                            
                            <div class="text-left">
                                <a href="portfolio.html" target="_self" class="button ">More…</a>
                            </div>                        
                        </div>
                        <div class="clear"></div>
                    </div>
                </article>
            </div>

            <!--Footer-->

            <footer class="footer">
                <div class="content-1330 center-relative">			
                    <ul>
                        <li class="left-footer-content">
                            © 2020 by <a href="https://unshiftedbitdev.com">Unshifted Bit Development</a>.            
                        </li>
                        <li class="center-footer-content">                
                            <a href="index.html">
                                <img src="images/favicon.jpeg" alt="icon">
                            </a>                
                        </li>
                        <li class="right-footer-contnet">
                            <a href="https://www.instagram.com/davidebbinghousefinejewelry/">Instagram</a> 
                            <a href="https://www.etsy.com/shop/davidebbinghouse">Etsy</a>
                        </li>
                        <li class="left-footer-content mobile">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://unshiftedbitdev.com" target="_blank">Unshifted Bit Development</a>
                        </li>
                    </ul>
                </div>
            </footer>

            <!-- End .body-border -->
        </div>



        <!--Load JavaScript-->
        <script src="js/jquery.js"></script>			                                       
        <script src='js/jquery.fitvids.js'></script>
        <script src='js/jquery.smartmenus.min.js'></script>        
        <script src='js/imagesloaded.pkgd.js'></script>        
        <script src='js/isotope.pkgd.js'></script>        
        <script src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script src='js/jquery.mousewheel.min.js'></script>
        <script src='js/jquery.touchSwipe.min.js'></script>
        <script src='js/jquery.easing.1.3.js'></script>
        <script src='js/jquery.prettyPhoto.js'></script>        
        <script src='js/jquery.ba-throttle-debounce.min.js'></script>                
        <script src='js/jquery.nicescroll.min.js'></script>
        <script src='js/main.js'></script>
    </body>
</html>