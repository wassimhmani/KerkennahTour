<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Kraten tour</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/logoAssociation.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_white_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="header_information">
                        <ul>
                           <li><img src="images/1.png" alt="#" /> Elkraten,Kerkennah 3055</li>
                           <li><img src="images/2.png" alt="#" /> +216 57090134</li>
                           <li><img src="images/3.png" alt="#" /> Association.elkraten@hmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <!-- <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>-->
                        <div class="logo"> <a href="index.html"><img src="images/logoAssociation.png" alt="#" height="60"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="#">Home</a> </li>
                              <li> <a href="#about">About</a> </li>
                              <li><a href="#travel">Tour</a></li>
                              <li><a href="#blog">Blog</a></li>
                              <li><a href="#contact">Contact Us</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->
   <section>
      <div class="banner-main">
         <!-- <img src="images/banner.jpg" alt="#"/>-->
         <img src="images/kerkennah.png" alt="#" />
         <div class="container">
            <div class="text-bg">
               <h2>KerKennah<br><strong class="">Amazing Tour</strong></h2>
               <!--<div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>-->
               <div class="container">
                  <form class="main-form">
                     <h3>calculate Your Tour</h3>
                     <div class="row">
                        <div class="col-md-9">
                           <div class="row">
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                 <label>Number</label>
                                 <input class="form-control" type="number" name="" id="nb_personne" min="4" max="12" value="4">
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 z-3">
                                 <label>meal</label>
                                 <select class="form-control" name="Any" id="meal">
                                    <option value="0">Any</option>

                                    <option value="10">Market guiallit</option>
                                    <option value="13">spagetti fruit de mer</option>
                                    <option value="15">Ojja fruit de mer</option>



                                 </select>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                 <label>grilled fish</label>
                                 <select class="form-control z-9999" name="Any" id="fish">
                                    <option value="0">Any</option>
                                    <option value="20">
                                    <span class="star" data-value="1">★</span>
  <span class="star" data-value="2">★</span>
  <span class="star" data-value="3">★</span>
  <span class="star" data-value="4">★</span>
  <span class="star" data-value="5">★</span>
                                    </option>
                                    <option value="15">
                                    <span class="star" data-value="1">★</span>
  <span class="star" data-value="2">★</span>
  <span class="star" data-value="3">★</span>
  
                                    </option>
                                    <option value="10">
                                    <div id="star-rating" class="d-flex gap-1">
  <span class="star" data-value="1">★</span>

</div>
                                    </option>

                                 </select>
                              </div>

                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                 <label>Extra</label>
                                 <select multiple class="form-control form-select" id="extra">

                                    <option value="3">fruit</option>
                                    <option value="2.5">citron</option>
                                    <option value="3">soda</option>

                                    <option value="2">thé</option>

                                 </select>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 z-3">
                                 <label>Date</label>
                                 <input class="form-control" placeholder="Any" type="date" id="dateTour">
                              </div>

                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                           <h3 id="price" style="background-color:#ee580f ; color:beige">0 DT</h3>
                           <a href="#" id="calculate" data-toggle="modal" data-target="#exampleModal">calculate</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2>About our tour program</h2>
                  <span>Located in the Kerkennah archipelago, the "Kraten Association" organization offers unique sea excursions departing from the charming village of Kraten. Specializing in nautical tours, this organization invites visitors to explore the crystal-clear waters of the Mediterranean aboard traditional feloukas, while discovering artisanal fishing techniques and the rich local maritime heritage

                  </span>
               </div>
            </div>
         </div>
      </div>
      <div class="bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> <span>The program includes peaceful cruises between islets, marine wildlife observation, swimming in pristine lagoons, and tasting fresh seafood. Whether for a family outing, an adventure with friends, or a romantic getaway, "Évasion Marine Kraten" provides an authentic experience, blending nature, culture, and relaxation.

                           Embark on an unforgettable maritime adventure and let yourself be enchanted by the wild beauty of Kerkennah!</span></p>
                     <div class="palne-img-area">
                        <img src="images/traditional_img.png" alt="images">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a href="#">Read More</a>
      </div>
   </div>
   <!-- end about -->
   <!-- traveling -->
   <div id="travel" class="traveling">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2>Select Offers For Traveling</h2>
                  <span>Explore the hidden gems of Kerkennah with our exclusive tours! Whether it's a scenic bus ride, a small island adventure, or a relaxing summer getaway, we offer the perfect experience to discover this serene paradise</span>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
               <div class="traveling-box">
                  <i><img src="icon/travel-icon2.png" alt="icon" /></i>
                  <h3>Island discovery</h3>
                  <p> Set sail to Kerkennah’s hidden islets and uncover their untouched beauty. Enjoy crystal-clear waters, traditional fishing spots, and a peaceful escape into nature’s paradise </p>
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
               <div class="traveling-box">
                  <i><img src="icon/snorkeling.png" alt="icon" /></i>
                  <h3>Snorkeling</h3>
                  <p>Snorkeling in Kerkennah’s waters reveals a serene world of colorful fish and lush seagrass. Dive into the crystal-clear sea for a peaceful and unforgettable experience.</p>
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
               <div class="traveling-box">
                  <i><img src="icon/travel-icon4.png" alt="icon" /></i>
                  <h3>beach Rest</h3>
                  <p>Relax on Kerkennah’s serene beaches, where golden sands meet crystal-clear waters. Enjoy the gentle sea breeze and the tranquil atmosphere for the perfect summer escape! </p>
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end traveling -->
   <!--London -->
   <div class="London">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Weekend in Kraten, Kerkennah</h2>
                  <span>Spending a weekend on Kerkennah Island offers a peaceful escape with stunning seaside views, fresh seafood, and warm hospitality. You can explore traditional fishing villages, relax under swaying palm trees, and enjoy breathtaking sunsets over the Mediterranean. The island’s slow pace and rich cultural heritage make it a perfect destination for relaxation and discovery</span>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="London-img">
            <figure><img src="images/kerkennah_symbol.jpg" alt="img" /></figure>
         </div>
      </div>
   </div>
   <!-- end London -->
   <!--Tours -->
   <div class="Tours">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>The Best dishes</h2>
                  <span>Kerkennah's traditional cuisine is a delightful blend of fresh seafood, aromatic spices, and Mediterranean flavors. Signature dishes include grilled fish, octopus stew ("Marmite de Poulpe"), and "Borza", a unique couscous made with barley. Local olive oil, hand-harvested sea salt, and sun-dried tomatoes add depth to these authentic island specialties.</span>
               </div>
            </div>
         </div>
         <section id="demos">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <img class="img-responsive" src="images/spaguetti.jpg" alt="#" />
                        <h3>spaghetti</h3>
                        <p>Kerkennah’s seafood spaghetti is a coastal delight, brimming with fresh shrimp, octopus, and clams, infused with rich Mediterranean spices. Each bite captures the island’s essence, blending sea-kissed flavors with traditional Tunisian warmth</p>
                     </div>
                     <div class="item">
                        <img class="img-responsive" src="images/ojja.jpg" alt="#" />
                        <h3>sauce</h3>
                        <p>Kerkennah’s Ojja Seafood is a rich and flavorful dish made with the island’s freshest seafood, slow-cooked in a spiced tomato and harissa sauce. Served with poached eggs and crusty bread, it captures the authentic taste of Tunisia’s coastal cuisine.</p>
                     </div>
                     <div class="item">
                        <img class="img-responsive" src="images/poisson-grille.jpg" alt="#" />
                        <h3>grilled fish</h3>
                        <p>Kerkennah’s grilled fish is a simple yet exquisite dish, seasoned with local spices and cooked over an open flame for a smoky, tender bite. Fresh from the sea, it embodies the island’s rich maritime flavors and Mediterranean charm.</p>
                     </div>
                     <div class="item">
                        <img class="img-responsive" src="images/couscous.jpg" alt="#" />
                        <h3>couscous</h3>
                        <p>Kerkennah’s fish couscous is a flavorful blend of tender local fish, aromatic spices, and fluffy semolina, slow-cooked to perfection. This island specialty captures the essence of the sea with every bite, offering a true taste of Tunisian tradition.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <!-- end Tours -->
   <!-- Amazing -->
   <div class="amazing">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="amazing-box">
                  <h2>Amazing Kerkennah Tour</h2>
                  <span>The program includes peaceful cruises between islets, marine wildlife observation, swimming in pristine lagoons, and tasting fresh seafood. Whether for a family outing, an adventure with friends, or a romantic getaway, "Évasion Marine Kraten" provides an authentic experience, blending nature, culture, and relaxation. Embark on an unforgettable maritime adventure and let yourself be enchanted by the wild beauty of Kerkennah!</span>
                  <a href="#">Book Now</a><a href="#">Get More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end Amazing -->
   <!-- our blog -->
   <div id="blog" class="blog">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Blog</h2>
                  <span>A blog contains articles, insights, and updates related to the site's niche, engaging visitors with informative and relevant content</span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="blog-box">
                  <figure><img src="images/groupe.jpg" alt="#" />
                     <span>4 Feb 2019</span>
                  </figure>
                  <div class="travel">
                     <span>Post By : Travel Agency</span>
                     <p><strong class="Comment"> 06 </strong> Comment</p>
                     <p><strong class="like">05 </strong>Like</p>
                  </div>
                  <h3>Felouk of Kerkennah</h3>
                  <p>The Felouk of Kerkennah is a traditional wooden sailboat used by fishermen on the Tunisian archipelago.
                     It features a distinctive triangular lateen sail, allowing smooth navigation through shallow waters.
                     Handcrafted with ancestral techniques, it reflects the rich maritime heritage of the region.
                     Today, it remains a symbol of Kerkennah’s culture, blending history with sustainable fishing practices</p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="blog-box">
                  <figure><img src="images/charfia.jpg" alt="#" />
                     <span>10 Feb 2019</span>
                  </figure>
                  <div class="travel">
                     <span>Post By : Travel Agency</span>
                     <p><strong class="Comment"> 06 </strong> Comment</p>
                     <p><strong class="like">05 </strong>Like</p>
                  </div>
                  <h3>The Charfia of kerkennah</h3>
                  <p>The Charfia is a traditional fishing technique unique to the Kerkennah Islands in Tunisia.
                     It consists of palm fronds and wooden barriers arranged in shallow waters to guide fish into traps.
                     This sustainable method has been used for centuries, respecting marine ecosystems and local traditions.
                     Still practiced today, the Charfia embodies the harmony between Kerkennah’s people and the sea</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end our blog -->
   <!-- footer -->
   <footer>
      <div id="contact" class="footer">
         <div class="container">
            <div class="row pdn-top-30">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <ul class="location_icon">
                     <li> <a href="#"><img src="icon/facebook.png"></a></li>
                     <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                     <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                     <li> <a href="#"><img src="icon/instagram.png"></a></li>
                  </ul>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="Follow">
                     <h3>CONTACT US</h3>
                     <span>Kraten <br>Kerkennah<br>
                        Sfax<br>
                        +216 57090134</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="Follow">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="link">
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Terms and conditions</a></li>
                        <li> <a href="#"> Privacy policy</a></li>
                        <li> <a href="#">News</a></li>
                        <li> <a href="#"> Contact us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="Follow">
                     <h3> Contact</h3>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <input class="Newsletter" placeholder="Name" type="text">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <input class="Newsletter" placeholder="Email" type="text">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                        </div>
                     </div>
                     <button class="Subscribe">Submit</button>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>Copyright 2025 All Right Reserved By <a href="https://www.linkedin.com/in/hmani-wassim-70a05794/">Wassim Hmani</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!--modal-->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Calulate your tour</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <table class="table border-bottom border-gray-200 mt-3" id="myTable">
                  <thead>
                     <tr>
                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Description</th>
                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Price</th>
                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Qte</th>
                        <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">Amount</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr id="meal_line">
                        <td class="px-0" id="meal_description">meal</td>
                        <td id="meal_price"></td>
                        <td id="meal_qte"></td>
                        <td class="text-end px-0" id="meal_amount">0 TND</td>
                     </tr>
                     <tr id="grilled_fish_line">
                        <td class="px-0" id="grilled_fish_description">grilled fish</td>
                        <td id="fish_price"></td>
                        <td id="fish_qte"></td>
                        <td class="text-end px-0" id="fish_amount">$80.00</td>
                     </tr>
                     <tr id="extra_line">
                        <td class="px-0">Extra</td>
                        <td id="Extra_price"></td>
                        <td id="Extra_qte"></td>
                        <td class="text-end px-0" id="extra_amount">$80.00</td>
                     </tr>
                     <tr>
                        <td class="px-0">boat fees & equipements</td>
                        <td></td>
                        <td></td>
                        <td class="text-end px-0" id="boat_fees">$80.00</td>
                     </tr>
                     <tr>
                        <td class="px-0">other fees</td>
                        <td></td>
                        <td></td>
                        <td class="text-end px-0" id="other_fees">$80.00</td>
                     </tr>


                  </tbody>
               </table>
               <div class="mt-3">

                  <div class="d-flex justify-content-center mt-3">
                     <h2 class="me-3">Total:</h2>
                     <h2 style="color:#ee580f;" id="total"> 0 TND</h2>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-dismiss="modal" id="cancelBtn">cancel</button>
               <button type="button" class="btn" style="background-color: #ee580f;color:beige;" id="confirm">Confirm</button>
            </div>
         </div>
      </div>
   </div>
   <!--end modal-->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <script>
      $(document).ready(function() {
         let today = new Date();
         today.setDate(today.getDate() + 2); // Add 2 days
         let minDate = today.toISOString().split("T")[0];
         $("#dateTour").attr("min", minDate);

         var owl = $('.owl-carousel');
         owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
               0: {
                  items: 1
               },
               600: {
                  items: 2
               },
               1000: {
                  items: 3
               }
            }
         })
         if (localStorage.getItem("disabledDates") == null) {
            let disabledDates = [];
            localStorage.setItem("disabledDates", JSON.stringify(disabledDates));
         }
         $("#calculate").on("click", function() {
            disabledDates = JSON.parse(localStorage.getItem("disabledDates"));
            disabledDates.push($("#dateTour").val());
            localStorage.setItem("disabledDates", JSON.stringify(disabledDates));
            if ($("#dateTour").val() === "") {
               $("#dateTour").css("border", "2px solid red"); // Highlight input in red
               alert("date cannot be empty!");
               return false;
            } else {
               var fish = Number($("#fish").val());
               var meal = Number($("#meal").val());
               var nb_personne = Number($("#nb_personne").val());
               var sumextra = 0;
               var allextra = $("#extra").val();
               
              /* var allextraLabel = $("#extra option:selected").map(function() {
                  return $(this).text(); // Get the text of the selected option
               }).get(); // Convert jQuery object to an array*/
               //alert(allextraLabel[0]);
               allextra.forEach(extra => {
                  sumextra += Number(extra);
                 // var $rows = $("#myTable tbody tr");

                 // $rows.eq(3).before("<tr><td>" + extra + "</td><td>" + extra + " DT</td><td>" + nb_personne + "</td><td>" + extra * nb_personne + " DT</td></tr>");

               });
               



               var consommation = nb_personne * (meal + fish + sumextra);

               var boatfees = 250;
               var gain_association = 10;
               var frais_siteweb = 2;
               var other_fees = gain_association + frais_siteweb;
               var price = consommation + boatfees + other_fees;
               $("#price").text(price + " DT");
               $("#total").text(price + " DT");
               $("#boat_fees").text(boatfees + " DT");
               $("#other_fees").text(other_fees + " DT");
               if (meal != 0) {
                  $("#meal_description").text($("#meal option:selected").text());
                  $("#meal_price").text(meal + " DT");
                  $("#meal_qte").text(nb_personne);
                  $("#meal_amount").text(meal * nb_personne + " DT");
               } else {
                  $("#meal_line").remove();

               }
               if (fish != 0) {
                  $("#grilled_fish_description").text($("#fish option:selected").text() + " grilled fish");
                  $("#fish_price").text(fish + " DT");
                  $("#fish_qte").text(nb_personne);
                  $("#fish_amount").text(fish * nb_personne + " DT");
               } else {
                  $("#grilled_fish_line").remove();
               }
               if (sumextra != 0) {
                  $("#Extra_price").text(sumextra + " DT");
                  $("#Extra_qte").text(nb_personne);
                  $("#extra_amount").text(sumextra * nb_personne + " DT");
               } else {
                  $("#extra_line").remove();
               }
            }
         });
         $("#confirm").on("click", function() {
            $(".modal-body").append('<center><input class="form-control" placeholder="Enter your phone number" type="tel" name="" id="phone_number" required></center>');
            var input = document.querySelector("#phone_number");
            var iti = window.intlTelInput(input, {
               initialCountry: "tn", // Set default country (Tunisia)
               separateDialCode: true,
               utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
            });
            $(this).replaceWith('<button class="btn btn-success" id="finish">Finish</button>');
         });
         $(document).on("click", "#finish", function() {
            if ($("#phone_number").val() === "") {
               $("#phone_number").css("border", "2px solid red"); // Highlight input in red
               alert("phone number cannot be empty!");
            } else if ($("#phone_number").val().length < 8) {
               alert("phone number cannot be short!");
            } else {
               var Extras = [];
               $("#extra option:selected").each(function() {
                  Extras.push($(this).text());
               });
               var fish = $("#fish option:selected").text();
               var meal = $("#meal option:selected").text();
               var nb_personne = Number($("#nb_personne").val());
               var dateTour = $("#dateTour").val();
               var phone = $("#phone_number").val();
               $(this).remove();

               $(".modal-body").replaceWith('<div class="modal-body"><H3>Your request has been sent! Our team will call you as soon as possible.</h3><p>The cancellation of any booking must be made at least 3 days before the scheduled date. Cancellations made within this period will be eligible for a full refund. Any cancellation made less than 3 days before the booking date may result in partial or no refund, as per our terms and conditions.</p><p id="responseMessage"></p></div>');
               $.ajax({
                  type: "POST",
                  url: "send_email.php", // Backend script
                  data: {
                     extras: Extras,
                     fish: fish,
                     meal: meal,
                     nb_personne: nb_personne,
                     date: dateTour,
                     phone: phone
                  },
                  success: function(response) {
                     $("#responseMessage").html(response);

                  },
                  error: function() {
                     $("#responseMessage").html("<p style='color:red;'>Error sending email.</p>");
                  }
               });
               $('#cancelBtn').text('Close')
            }
         });
         $('#exampleModal').on('hidden.bs.modal', function() {
            location.reload();
         });
         $("#nb_personne").focusout(function() {
            var min = parseInt($(this).attr("min"));
            var max = parseInt($(this).attr("max"));
            var value = parseInt($(this).val());

            if (value < min) $(this).val(min);
            if (value > max) $(this).val(max);
         });
         $("#extra").select2({
            placeholder: "any",
            allowClear: true
         });
         $(document).on("input", "#phone_number", function() {

            var value = $(this).val();

            // Remove any non-numeric characters
            value = value.replace(/\D/g, '');

            // Ensure the length does not exceed 8
            if (value.length > 8) {
               value = value.substring(0, 8);
            }

            $(this).val(value);
         });
         /* disabledDates = [
            "2025-03-19",
            "2025-03-20",
            "2025-03-21"
         ];*/


         $("#dateTour").on("change", function() {
            disabledDates = JSON.parse(localStorage.getItem("disabledDates"));

            let selectedDate = $(this).val(); // Get the selected date

            // Check if the selected date is in the list of disabled dates
            if (disabledDates.includes(selectedDate)) {
               alert("This date is unavailable! Please select another date.unavailable dates: " + disabledDates);
               $(this).val(""); // Clear the input if the date is disabled
            }
         });






      })
   </script>

</body>

</html>