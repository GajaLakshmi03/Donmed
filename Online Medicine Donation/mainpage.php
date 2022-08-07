<!DOCTYPE html>
<html>
  <head>
    
   
    <title>DonMed</title>
                 
                 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
                

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="boxicons.min.css" rel="stylesheet">
  <link href="glightbox.min.css" rel="stylesheet">
  <link href="swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" type="text/css" href="sample.css" />
  <script src="index.js"></script>
  </head>
  <style>
    td a{
           font-size: x-large;
           
    }
  </style>
  <body>
    <header id="header">
        <div class="container d-flex align-items-center">
    
          <div class="logo me-auto">
            <h1><a href="index.php">Online Medicine and Equipment Donation</a></h1>
          </div>
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">HOME</a></li>
              <li><a class="nav-link scrollto" href="about.php">ABOUT</a></li>
              <li class="dropdown"><a href="#"><span>USER</span></a>
                <ul>
                  <li><a href="userlogin.php">Donate</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="contact.php">CONTACT</a></li>
              <li><a class="nav-link scrollto" href="admin.php">ADMIN</a></li>
              <li><a class="nav-link scrollto" href="ngo.php">NGO</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </header><!-- End Header -->
      <table>
        <tr>
          <td>
            <div class="pac-card" id="pac-card">
              <div>
                <div id="title">SEARCH NEARBY NGO</div>
                <div id="type-selector" class="pac-controls">
                  <input
                    type="radio"
                    name="type"
                    id="changetype-all"
                    checked="checked"
                  />
                  <label for="changetype-all">All</label>
        
                  
                  
                </div>
                <br />
                <div id="strict-bounds-selector" class="pac-controls">
                  <input type="checkbox" id="use-location-bias" value="" checked />
                  <label for="use-location-bias">Bias to map viewport</label>
        
                  <input type="checkbox" id="use-strict-bounds" value="" />
                  <label for="use-strict-bounds">Strict bounds</label>
                </div>
              </div>
              <div id="pac-container">
                <input id="pac-input" type="text" placeholder="Enter a location" />
              </div>
            </div>
            <div id="map" style="height: 600px;width: 800px;"></div>
            <div id="infowindow-content">
              <span id="place-name" class="title"></span><br />
              <span id="place-address"></span>
            </div>
        
            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkErW3Itf9lSMYko4pZIaAcmXJX05Qz6c&callback=initMap&libraries=places&v=weekly"
              async
            ></script>
            </td>
          <td><div class="container emp-add">

                        
            <h1 style="background-color:#4169e121;border-radius: 0.4em;text-align:center;">
                  <a href="addmedicine.php">ADD MEDICINE<b>+</b></a></h1>
                  
              <br><br><br><br><br><br><br>
              <h1 style="background-color: #4169e121;border-radius: 0.4em;text-align:center;">
                <a href="addequipment.php">ADD EQUIPMENT<b>+</b></a></h1>
                  
              
                  
               
                 
                  
                
              
                
          </div>
            </td>
            
              
         </div>
          </td></tr>
      </table>
    
                          
                            
                            
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>DONMED ADDRESS</h3>
                        <p style='font-size:13px;'>ONLINE MEDICINE AND EQUIPMENT DONATION  <br>Salem district, <br>Tamil Nadu <br><br>
              <strong>Phone:+91-8667780159</strong> <br>
              <strong>Email:onlinedonmed@gmail.com</strong> <br></p>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quick Link</h3>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="about.php">About</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="userlogin.php">User</a></li>
                       
                        <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="admin.php">Admin</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="ngo.php">NGO</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>ONLINE MEDICINE AND EQUIPMENT DONATION</h3>
                        <p>At Online Medicine and Equipment Donation(DonMed), we are focused on providing high quality & primary care to the small villages, towns & tehsil level city.  
                            Our ONLINE DONATION project, make primary medical care accessible, affordable and available to the rural and urban under-served communities across the state.
                            To meet the increasing demand for improvements in the health care facilities & services we can utilize the power of internet technology & its wide network, by which people can help each other with just one click from their phone. The Medicine Donation system proposed here aims at providing an online platform for donating medicines or unused medicines to needy people.</p>
                    </div>
                    <!-- <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div> -->
                </div>
                <p class="copyright">Copyright © 2021 DonMed</p>
            </div>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
      
  </body>
</html>