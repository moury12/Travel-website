

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Booking
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
        
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <section id="header">
        <!--<a href="#"><img src="./img/logo2.jpg" alt=""></a>-->
        <div id="menu-bar" class="fas fa-bars">

        </div>
        <a href="#"><img class="img1" src="./img/logo2.jpg" alt=""></a>

        <div>
            <ul id="nav" class="active">
                <li><a  href="index.php">Home</a></li>
                <li><a href="index.php#packages">Packages</a></li>
                <li><a class="active" href="package.php"> Services</a></li>
                <li><a href="index.php#flights"> Transport</a></li>
                <li><a href="index.php#hotels">Resort</a></li>
                <li><a href="index.php">Contact</a></li>
               
                <i class="fas fa-times-circle" id="close"></i>
            </ul>
        </div>
       
       
    
      
    </section>
    <div id="slider">
					  <figure>
						    <img src="img/s1.jpg">
						    <img src="img/s4.jpg">
						    <img src="img/s3.jpg">
                            
					  </figure>
				</div>
                
    <section class="booking">
    <h2>Book Your trip!
        </h2>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
            <select name="destination" class="inputBox" id="dropdown">
                        <option value="">Place you want to visit</option>
                        <option value="Bandorban">Bandorban</option>
                        <option value="Tanguar Haor">Tanguar Haor</option>
                        <option value="Coxs Bazar">Coxs Bazar</option>
                        <option value="Sreemangal">Sreemangal</option>
                        <option value="Saint martin
">Saint martin
</option>
                        <option value="Lalakhal">Lalakhal</option>
                        <option value="Jaflong">Jaflong</option>
                        <option value="Shapla Bill">Shapla Bill</option>
                    </select>
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="Enter your phone" name="phone">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
           
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date"  name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date"  name="leaving">
                </div>
                
                <input type="submit" value="submit" class="btn" name="send">
            </div>
        </form>
    </section>
    <?php
require_once 'book_form.php';
$sql = "SELECT * FROM book_form ORDER by id  ";
$all = $connection->query($sql);
?>

   <?php
   include_once 'book_form.php'
   ?>
   <main>
    <?php
    while (
        $row = mysqli_fetch_assoc(
            $all
        )
    ) {
    ?>
    <div class="card">
        <div class="image">
            <img src="img/t.png" alt="">
        </div>
        <div class="caption">
            <table aria-label="left" >
                <tr width ="">
                <td class="d" width="200" ><i id="map" class="fas fa-map-marker-alt"></i><?php
        echo $row['destination'];?> </td>
                <td> 
                    <?php
        echo $row['guests'];?></td>
               
           
           <tr> <td class="a"><i class="fa fa-calendar"></i><?php
        echo $row['arrivals'];?></td>
            <td class="a"><?php
        echo $row['leaving'];?></td></tr>
                </tr>
                <tr>
                <td><?php
        echo $row['name'];?></td>
            <td width="150"><?php
        echo $row['email'];?></td>
            
          
                </tr>
                <tr><td class="p">
         <i class="fa fa-phone"></i>  <?php
        echo $row['phone'];?></td></tr>
            </table>
           
        </div>
        <form action="book_form.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input type="submit" name="delete" class="btn" value="Cancel trip">
        </form>  
    </div>
    <?php
    }
    ?>
   </main>
    <footer class="footer-distributed">
 
 <div class="footer-left">

     <img src="img/logo2.jpg" alt="">

     <p class="footer-links">
         <a href="#">Home</a>
         ·
         <a href="#">Blog</a>
         ·
         <a href="#">Pricing</a>
         ·
         <a href="#">About</a>
         ·
         <a href="#">Faq</a>
         ·
         <a href="#">Contact</a>
     </p>

     <p class="footer-company-name">Reverie&copy; 2022</p>
 </div>

 <div class="footer-center">

     <div>
         <i class="fa fa-map-marker"></i>
         <p><span>Mirpur</span> dhaka, Bangladesh</p>
     </div>

     <div>
         <i class="fa fa-phone"></i>
         <p>+1 555 123456</p>
     </div>

     <div>
         <i class="fa fa-envelope"></i>
         <p><a href="tanzibamouri00@gmail.com"></a>tanzibamouri00@gmail.com</p>
     </div>

 </div>

 <div class="footer-right">

     <p class="footer-company-about">
         <span>About us</span>
         We will guide you for visiting the tourists spots, historical places in Bangladesh, ecotourism sites in Bangladesh and World Heritage Sites in Bangladesh.
     </p>

     <div class="footer-icons">

    <a href="https://www.facebook.com/nadironthegobangla"><img src="img/cf.png" alt=""></a>
         <a href="https://www.instagram.com/__moury__/"><img src="img/ci.png" alt=""></a>
         <a href="https://youtu.be/rkpzYNB6xks"><img src="img/cu.png" alt=""></a>
         <a href="https://www.linkedin.com/in/tanziba-mouri-46870423b/"><img src="img/cl.png" alt=""></a>

     </div>

 </div>

</footer>
<script src="./script.js" class="logo" alt="logo"></script>
</body>

</html>