<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productList";
$_SESSION['sku'] = $_GET['sku'];
//$_SESSION['filter'] = $_GET['filter'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Variable Declaration
$sku = null;
$picture = null;
$description = null;
$price = null;
$materials = null;
$title = null;
$size = null;

// Show necklaces with a SKU of Swat Valley
$sql = "SELECT * FROM products WHERE sku = '$_SESSION[sku]'";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..

    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        // echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
        $sku = $row['sku'];
        $picture = $row['pic'];
        $description = $row['desc'];
        $price = $row['price'];
        $materials = $row['materials'];
        $title = $row['title'];
        $size = $row['size'];

    }
}

$conn->close();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Fine Jewelry | Product</title>
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
    <body class="single single-portfolio">

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

            <div id="content" class="site-content content-1330 center-relative">
                <article>                                              
                    <div class="content-1330 center-relative clear">                
                        <div class="entry-content">
                            <div class="content-wrap">                           
                                <div class="one margin-0">
                                    <img src="demo-images/A_showcase.jpg" alt=""><br>
                                </div>
                                <div class="clear"></div>
                                <div class="one_half margin-0">
                                    <img src="demo-images/E_showcase.jpg" alt=""><br>
                                </div>
                                <div class="one_half last margin-0">
                                    <img src="demo-images/SW_showcase.jpg" alt=""><br>
                                </div>
                                <div class="clear"></div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <div class="one_half text-right portfolio-item-info">
                                    <strong>Name: </strong>&nbsp;<?php echo $sku; ?><br>
                                    <strong>Collection: </strong><?php echo $sku; ?><br>
                                    <strong>Material: </strong><?php echo $materials; ?><p></p>
                                    <strong>Price: </strong> <?php echo $price; ?><p></p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <div class="text-right">
                                        <a href="#" target="_self" class="button">Purchase</a>
                                    </div>
                                </div>
                                <div class="one_half last ">
                                    <strong>Handmade for Everyone</strong>
                                    <br>
                                    <p>&nbsp;</p>
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                </div>
                                <div class="clear"></div>
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