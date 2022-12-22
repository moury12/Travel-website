<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
       Travel website
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <!--<a href="#"><img src="./img/logo2.jpg" alt=""></a>-->
        <div id="menu-bar" class="fas fa-bars">

        </div>
        <a href="#"><img class="img1" src="./img/logo2.jpg" alt=""></a>

        <div>
            <ul id="nav">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a  href="#packages">Packages</a></li>
                <li><a href="package.php"> Service</a></li>
                <li><a href="#hotels">Resort</a></li>
                <li><a href="#flights"> Transport</a></li>
                <li><a href="">Contact</a></li>
                <li><i class="fas fa-user-circle" id="login-btn"></i></li>
                <li><i class="fas fa-search" id="search-btn"></i></li>
                <i class="fas fa-times-circle" id="close"></i>
            </ul>
        </div>
        <form action="" class="search-bar-container">
            <input type="search" placeholder="Search here....." id="search-bar">
            <label for="search-bar" class="fas fa-search"><i class="fas fa-times-circle" id="closesearch"></i></label>
        </form>
        <div class="login-form-container">
            <i class="fas fa-times-circle" id="form-close"></i>
            <form action="">
                <h3>Login</h3>
                <input type="email" class="box" placeholder="Enter your email">
                <input type="password" class="box" placeholder="Enter your password">
                <input type="submit" value="Login" class="btn">
                <input type="checkbox" id="remember" <label for="remember">Remember me</label>
                <a href="#" class="f"> Forget password?</a>
                <p>Don't have any account?<a href="#" class="f">Register now</a></p>
            </form>
        </div>
    </section>
    <section id="travel">
        <h1>Explore your fantasy</h1>
        <h3>Connect with the world</h3>
        <h5>As small group adventure travel experts, our passion for authentic, responsible and life changing travel
            experiences is what sets us apart from the rest. <br /> With us, you’ll travel with friends, leave as
            family, and see the world in a way you never thought possible.</h5>
            <a href="gallary.html"><button>Explore now</button></a>
    </section>
    <section class="packages-cl" id="packages">
        <h1>Packages</h1>
        <h5>Vacation Package Deals
        </h5>
        <div class="pro-container">
            <div class="pro">
                <img src="img/bandorban.jpg" alt="bandorban">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Bandarban</h3>
                    <p>Bandarban , also called Rwadawmro in the Marma and Arakanese languages, is a district in
                        South-Eastern Bangladesh,<br /> and a part of the Chittagong Division. It is one of the three
                        hill districts of Bangladesh and a part of the Chittagong Hill Tracts.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 6000BDT <span>- 9000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/tangua.jpg" alt="tangua">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Tanguar Haor</h3>
                    <p>located in the Dharmapasha and Tahirpur upazilas of Sunamganj District in Bangladesh,<br /> is a
                        unique wetland ecosystem of national importance and has come into international focus.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 5000BDT <span>- 7000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/cos's bazar.jpg" alt="Cox's bazar">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Coxs Bazar</h3>
                    <p>Cox's Bazar sea beach is the longest sea beach in the world, 120 km long, having no 2nd
                        instance.<br /> The wavy water of Bay of Bengal touches the beach throughout.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 5000BDT <span>- 12000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/shremongol.jpg" alt="Shremongol">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Sreemangal</h3>
                    <p>Srimongal is the place of tea gardens, hills and forest areas on the hills.<br /> Within your
                        eyesight you will find green throughout. It is famous for the largest tea gardens of world
                        covered by lush green carpet.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                    <div class="price"> 4000BDT <span>- 7000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/saintmartin.jpg" alt="saintmartin">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Saint martin</h3>
                    <p>Martin is one of the most beautiful visiting places of Bangladesh.<br /> It has fresh blue water
                        with corals, beautiful sandy beaches, a lot of coconut trees, and huge natural beauties.<br />
                        Sunrise and sunset are two most striking things you can enjoy.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 8000BDT <span>- 15000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/shylet.jpg" alt="shylet">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Shylet Lalakhal</h3>
                    <p>Lalakhal is one of the most attractive tourist spots in Sylhet.<br />Lalakhal is a wide canal
                        located Sharee River near the Tamabil road.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                    <div class="price"> 3000BDT <span>- 5000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/jaflong.jpeg" alt="shyt">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Jaflong</h3>
                    <p>This lovely piece of heaven is situated just below the mountain range where hills are greenish
                        with the forests and blue sky melt in the water of the river.</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i>
                    </div>
                    <div class="price"> 4000BDT <span>- 6000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/shapla.jpg" alt="shaplabil">
                <div class="des">
                    <h3><i id="map" class="fas fa-map-marker-alt"></i> Shapla Bill</h3>
                    <p>দূর থেকেই চোখে পড়বে লাল আর সবুজের মাখামাখি। কাছে গেলে স্পষ্ট হবে শাপলা ফুলের এক প্রাকৃতিক স্বর্গ।
                        দেখেই চোখ জুড়িয়ে যাবে।</p>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 2000BDT <span>- 4000BDT</span></div>
                    <a href="package.php"><button>Book now</button></a>
                </div>
            </div>

        </div>
    </section>
    <section class="packages_cll" id="hotels">
        <h1>Hotel/Resort</h1>
        <h5>Hotel Reservation to any destination
        </h5>
        <div class="pro-container">
            <div class="pro">
                <img src="img/r6.jpg" alt="">
                <div class="des">
                    <a href="https://www.asiahotel.com.bd">
                        <h3>Hotel Asia</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Coxs Bazar</h2>
                    <li>PREMIER SINGLE</li>
                    <li>SUPER PREMIER DELUXE</li>
                    <li>PREMIER DELUXE TWIN</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 6000BDT <span>- 9000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r5.jpg" alt="">
                <div class="des">
                    <a href="
http://www.sairuresort.com/">
                        <h3>Sairu Hill Resort</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Bandorban</h2>
                    <li>SHANGU VIEW ROOM</li>
                    <li>PREMIER ROOM</li>
                    <li>SHANGU VIEW TERRACE ROOM</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 9000BDT <span>- 12000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r4.jpg" alt="">
                <div class="des">
                    <a href="https://www.facebook.com/TilagaonEcoVillage">
                        <h3>Tilagaon Eco Village</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Shremongol</h2>
                    <li>মাড হাউজ</li>
                    <li>এসি ভিলা</li>
                    <li>প্রাইভেট পুল ভিলা</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            
                    </div>
                    <div class="price"> 5500BDT <span>- 11000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r3.jpg" alt="">
                <div class="des">
                    <a href="

http://www.meghpunji.com/">
                        <h3>মেঘপুঞ্জি</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Sajek Khagrchori</h2>
                    <li>Tarasha</li>
                    <li>Purbasha</li>
                    <li>Rodela</li>
                    <li>Meghla</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 5000BDT <span>- 21000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r2.jpg" alt="">
                <div class="des">
                    <a href="https://www.facebook.com/DwipantorBeachResort/?ref=page_internal">
                        <h3>Dwipantor Beach Resort </h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i>Saintmartin</h2>
                    <li>Premium Duplex Cottage</li>
                    <li>Exclusive Couple Cottage</li>
                    <li>Studio Rooms</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 4000BDT <span>- 8000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r1.jpg" alt="shylet">
                <div class="des">
                    <a href="http://www.balishiraresort.com/">
                        <h3>Balishira Resort</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Shremongol</h2>
                    <li>superior couple duplex</li>
                    <li>couple cottage</li>
                    <li>Family villa</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 6000BDT <span>- 13000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r7.jpg" alt="shylet">
                <div class="des">
                    <a href="https://www.facebook.com/LakeshoreResortKaptai">
                        <h3>Lakeshore Resort</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Kaptai</h2>
                    <li>superior couple duplex</li>
                    <li>couple cottage</li>
                    <li>Family villa</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 6000BDT <span>- 13000BDT</span></div><button>Book now</button>
                </div>
            </div>
            <div class="pro">
                <img src="img/r8.jpg" alt="shylet">
                <div class="des">
                    <a href="
http://www.sarahresort.com/">
                        <h3>Sarah Resort</h3>
                    </a>
                    <h2><i id="map" class="fas fa-map-marker-alt"></i> Gazipur</h2>
                    <li>Ancient Mud house</li>
                    <li>Water lodge</li>
                    <li>water font villa</li>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="price"> 6000BDT <span>- 13000BDT</span></div><button>Book now</button>
                </div>
            </div>
            </div>

        </div>
    </section>
    <section class="packages_cll" id="flights">
        <h1>Available Transport</h1>
        <h5>Safe and Comfortable Transport
        </h5>
        <div class="pro-container">
            <div class="pro">
                <img src="img/f1.jpg" alt="bandorban">
                <div class="des">
                   <h2>Biman Bangladesh Airlines
 
 BG437</h2>
                    <h4><i id="map" class="fa-solid fa-plane"></i>Dhaka To Cox's Bazar</h4>
                   
                    <p>1 adult•One way•Economy class</p>
                    <h5>Total-BDT 15,517</h5>
                    <div class="price"> 4:00pm <span>- 6:00pm </span></div> <a href="https://www.biman-airlines.com/"><p>Book Ticket</p></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/f2.jpg" alt="bandorban">
                <div class="des">
                   <h2>Parabat Express </h2>
                    <h4><i id="map" class="fas fa-train"></i>Dhaka to Srimangal</h4>
                   
                    <li>Shevon-265Taka</li>
                    <li>First Seat-425 Taka</li>
                    <li>AC-736 Taka</li>
                    <div class="price"> 6:20pm <span>- 10:30pm </span></div> <a href="https://amartrain.com/parabat-express-train-schedule-ticket-price/"><p>Book Ticket</p></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/f3.jpg" alt="bandorban">
                <div class="des">
                   <h2>Shyamoli Paribahan </h2>
                    <h4><i id="map" class="fa-solid fa-bus"></i>DHAKA ⟺ BANDARBAN</h4>
                    <h4><i id="map" class="fa-solid fa-bus"></i>DHAKA ⟺ KHAGRACHARI</h4>
                    <h4><i id="map" class="fa-solid fa-bus"></i>DHAKA ⟺ RANGAMATI</h4>
                    <h4><i id="map" class="fa-solid fa-bus"></i>DHAKA ⟺ TEKNAF</h4>
                   
                    <li>Ac -1000tk</li>
                    <li>NonAc -850tk</li>
                    
                    <div class="price"> 10:20pm <span>- 5:30am </span></div> <a href="https://shyamolitickets.com/"><p>Book Ticket</p></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/f4.jpeg" alt="bandorban">
                <div class="des">
                   <h2>The Atlantic Cruise </h2>
                    <h4><i id="map" class="fas fa-train"></i>Teknaf to St. Martin </h4>
                   
                    <li>Economy Deck: 1150 BDT (Total 293 Seat)</li>
<li>Open Deck: 1250 BDT (Total 275 Seat)</li> 
<li>Royal Lounge AC: 1450 BDT (Total 150 Seat)</li>

                    <div class="price"> 9:00am <span>- 3:30pm </span></div> <a href="https://www.bdcruise.com/the-atlantic-cruise/"><p>Book Ticket</p></a>
                </div>
            </div>
        </div>
    </section>
    <script src="./script.js" class="logo" alt="logo"></script>
    
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
</body>

</html>