<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bdcb973a27.js"></script>


    <?php wp_head();?>

    <title>Sant Automotive</title>
  </head>


  <body>

    <header>
  <!--
    <div class = "container-fluid" style="text-align:center">
      <a href="#"><img class="logo" src="images/logo.png"></a>
    </div>
    <nav class= "justify-content-center" >
        <ul>
          <li><a class="navigation-bar">Home</a></li>
          <li><a class="navigation-bar">Contact</a>
          <li><a class="navigation-bar">Tires</a></li>
          <li><a class="navigation-bar">Services</a></li>
          <li><a class="navigation-bar">Fleet Management</a></li>
          <li><a class="navigation-bar">Auto Blog</a></li>
        </ul>
    </nav>-->

<!--Navigation-->
      <div class="container-fluid navigation-bar d-sm d-md-none" style="padding: 0px;">
        <div class="container" style="text-align: center;">
              <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
        </div>
        <div class="container-fluid accent-color" style = "line-height: 2;">
          <div class="container">
            <a href="#" onclick="toggleMobileMenu()" class="menu">
              <i class="fas fa-chevron-down fa-lg" id="nav-mobile-down"></i>
              <i class="fas fa-chevron-up fa-lg d-none" id="nav-mobile-up"></i></a>
          </div>

          <div class="d-none" id="mobile-menu">
            <div class="row sub-menu justify-content-center">
                <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>" title="Home" class="menu"><i class="fas fa-home fa-md"></i> Home</a>
            </div>

            <div class="row sub-menu justify-content-center">
              <a href="#" title="Contact" class="menu" onclick="toggleMobileContact()"><i class="fas fa-mobile-alt fa-md"></i> Contact
                <i class="fas fa-chevron-down fa-sm" id="contact-down-mobile"></i>
                <i class="fas fa-chevron-up fa-sm d-none" id="contact-up-mobile"></i></a>
            </div>

            <div class="d-none" id="contact-menu-mobile">
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="tel:+1-314-849-2900" title="Call Us" class="contact menu">
                  <i class="fas fa-phone-square fa-sm"></i> 314-603-3390</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="mailto:santauto@gmail.com" title="Email" class="contact menu">
                  <i class="fas fa-paper-plane fa-md"></i> santauto@gmail.com</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="https://goo.gl/maps/EPmXy4hjXJ9xfCq29" target = "_blank" title="Google Maps" class="contact menu">
                  <i class="fas fa-map-marked-alt fa-sm"></i> Find Us</a>
                </div>
              </div>
            </div>

            <div class="row sub-menu justify-content-center">
              <a href="#" title="Our Services" class="menu" onclick="toggleMobileServices()"><i class="fas fa-wrench fa-md"></i> Services
                <i class="fas fa-chevron-down fa-sm" id="services-down-mobile"></i>
                <i class="fas fa-chevron-up fa-sm d-none" id="services-up-mobile"></i></a>
            </div>

            <div class="d-none" id="services-menu-mobile">
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="#" class="menu">Brake Repair</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="#" class="menu">Oil Changes</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="#" class="menu">Transmissions</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="#" class="menu">Suspension</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="#" class="menu">Tires</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID );?>" class="menu">More...</a>
                </div>
              </div>
            </div>

            <div class="row sub-menu justify-content-center">
              <a href="#"title="Programs" class="menu" onclick="toggleMobilePrograms()"><i class="fas fa-thumbtack fa-md"></i> Programs
                <i class="fas fa-chevron-down fa-sm" id="programs-down-mobile"></i>
                <i class="fas fa-chevron-up fa-sm d-none" id="programs-up-mobile"></i></a>
            </div>

            <div class="d-none" id="programs-menu-mobile">
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a "<?php echo get_page_link( get_page_by_title( 'Financing' )->ID );?>" class="menu">Financing</a>
                </div>
              </div>
              <div class="row sub-menu mobile-sub">
                <div class="col offset-5">
                  <a "<?php echo get_page_link( get_page_by_title( 'Fleet Services' )->ID );?>" class="menu">Fleets</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

          <div class="container-fluid navigation-bar d-none d-md-block d-lg-none" style="padding: 0px;">
              <div class="container" style="text-align: center;">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
              </div>
              <div class="container-fluid accent-color" style = "line-height: 2;">
                  <div class="container" style="text-align: center;">
                    <ul class="accent-color" style = "margin-bottom: 0px;">
                      <li class="menu-tablet">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>" title="Home" class="menu"><i class="fas fa-home fa-md"></i> Home</a>
                      </li>
                      <li class="menu-tablet">
                        <a href="#" title="Contact" class="menu" onclick="toggleTabletContact()"><i class="fas fa-mobile-alt fa-md"></i> Contact
                          <i class="fas fa-chevron-down fa-sm" id="contact-down-tablet"></i>
                          <i class="fas fa-chevron-up fa-sm d-none" id="contact-up-tablet"></i></a>
                      </li>
                      <li class="menu-tablet">
                          <a href="#"title="Our Services" class="menu" onclick="toggleTabletServices()"><i class="fas fa-wrench fa-md"></i> Services
                            <i class="fas fa-chevron-down fa-sm" id="services-down-tablet"></i>
                            <i class="fas fa-chevron-up fa-sm d-none" id="services-up-tablet"></i></a>

                      </li>
                      <li class="menu-tablet">
                        <a href="#"title="Programs" class="menu" onclick="toggleTabletPrograms()"><i class="fas fa-thumbtack fa-md"></i> Programs
                          <i class="fas fa-chevron-down fa-sm" id="programs-down-tablet"></i>
                          <i class="fas fa-chevron-up fa-sm d-none" id="programs-up-tablet"></i></a>
                      </li>
                    </ul>

                  </div>

                  <div class="d-none" id="contact-menu-tablet">
                    <div class="row sub-menu">
                      <div class="col offset-md-4">
                        <a href="tel:+1-314-849-2900" title="Call Us" class="contact menu">
                        <i class="fas fa-phone-square fa-md"></i> 314-603-3390</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-4">
                        <a href="mailto:santauto@gmail.com" title="Email" class="contact menu">
                        <i class="fas fa-paper-plane fa-md"></i> santauto@gmail.com</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-4">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Find Us' )->ID );?>" title="Google Maps" class="contact menu">
                        <i class="fas fa-map-marked-alt fa-md"></i> Find Us</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-4">
                        <a href="https://www.facebook.com/SantAutomotive/" target="_blank" title="Facebook" class="contact menu"><i class="fab fa-facebook-square fa-md"></i>
                           Facebook</a>
                      </div>
                    </div>
                  </div>

                  <div class="d-none" id="services-menu-tablet">
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="#" class="menu">Brake Repair</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="#" class="menu">Oil Changes</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="#" class="menu">Transmissions</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="#" class="menu">Suspension</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="#" class="menu">Tires</a>
                      </div>
                    </div>
                    <div class="row sub-menu">
                      <div class="col offset-md-6" style="padding-left: 50px;">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID );?>" class="menu">More...</a>
                      </div>
                    </div>
                  </div>

                <div class="d-none" id="programs-menu-tablet">
                  <div class="row sub-menu">
                    <div class="col offset-md-9" style="padding-left: 0px;">
                      <a "<?php echo get_page_link( get_page_by_title( 'Fleet Services' )->ID );?>" class="menu">Fleet Services</a>
                    </div>
                  </div>
                  <div class="row sub-menu">
                    <div class="col offset-md-9" style="padding-left: 0px;">
                      <a "<?php echo get_page_link( get_page_by_title( 'Financing' )->ID );?>" class="menu">Financing</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        <div class="container-fluid navigation-bar d-none d-lg-block" style="padding: 0px;">
          <div class="container" style="text-align: center;">
                <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
          </div>
          <div class="container-fluid accent-color" style = "line-height: 2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <div class="container" style="text-align: center;">
                <ul class="accent-color" style = "margin-bottom: 0px;">
                  <li class="menu-desktop">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Home' )->ID );?>" title="Home" class="menu"><i class="fas fa-home fa-md"></i>
                       Home</a>
                  </li>
                  <li class="menu-desktop">
                    <a href="#" title="Contact" class="menu" onclick="toggleDesktopContact()"><i class="fas fa-mobile-alt fa-md"></i> Contact
                      <i class="fas fa-chevron-down fa-sm" id="contact-down-desktop"></i>
                      <i class="fas fa-chevron-up fa-sm d-none" id="contact-up-desktop"></i></a>
                  </li>
                  <li class="menu-desktop">
                      <a href="#"title="Our Services" class="menu" onclick="toggleDesktopServices()"> Services
                        <i class="fas fa-chevron-down fa-sm" id="services-down-desktop"></i>
                        <i class="fas fa-chevron-up fa-sm d-none" id="services-up-desktop"></i></a>
                  </li>
                  <li class="menu-desktop">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Tires' )->ID );?>" title="Tire Services" class="menu">Tires</a></li>
                        <!-- add to a tag: onclick="toggleDesktopTires()
                        <i class="fas fa-chevron-down fa-sm" id="tires-down-desktop"></i>
                        <i class="fas fa-chevron-up fa-sm d-none" id="tires-up-desktop"></i></a>-->
                  <li class="menu-desktop">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Fleet Services' )->ID );?>" title="Fleet Services" class="menu">Fleets</a>
                  </li>
                  <li class="menu-desktop">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Financing' )->ID );?>" title="Financing" class="menu">Financing</a>

                  </li>
                </ul>
              </div>
            </div>

            <div class="d-none accent-color" id="contact-menu-desktop">
              <div class="container" style="position: static;max-width: max-content;padding-right: 23%;">
                <div class="row sub-menu accent-color">
                  <div class="col">
                    <a href="#" title="Phone" class="contact menu non-link">
                    <i class="fas fa-phone-square fa-md"></i> 314-603-3390</a>
                  </div>
                </div>
                <div class="row sub-menu accent-color">
                  <div class="col">
                    <a href="mailto:santauto@gmail.com" title="Email" class="contact menu">
                    <i class="fas fa-paper-plane fa-md"></i> santauto@gmail.com</a>
                  </div>
                </div>
                <div class="row sub-menu accent-color">
                  <div class="col">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Find Us' )->ID );?>" title="Google Maps" class="contact menu">
                    <i class="fas fa-map-marked-alt fa-md"></i> Find Us</a>
                  </div>
                </div>
                <div class="row sub-menu accent-color">
                  <div class="col">
                    <a href="https://www.facebook.com/SantAutomotive/" target="_blank" title="Facebook" class="contact menu"><i class="fab fa-facebook-square fa-md"></i>
                       Facebook</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-none accent-color" id="tires-menu-desktop">
              <div class="container" style="position: static;max-width: max-content;padding-left: 17%;">
              <div class="row sub-menu accent-color">
                <div class="col">
                  <a href="#" class="contact menu">Tire Installation</a>
                </div>
              </div>
              <div class="row sub-menu accent-color">
                <div class="col">
                  <a href="#" class="contact menu">Shop Tires</a>
                </div>
              </div>
            </div>
          </div>

          <div class="d-none accent-color" id="services-menu-desktop">
            <div class="container" style="position: static;max-width: max-content;padding-left: 0%;">
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Brake Repair</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Oil Changes</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Transmissions</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Suspension</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Electrical System</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Wheel Alignment</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="#" class="menu">Steering Repair</a>
              </div>
            </div>
            <div class="row sub-menu accent-color">
              <div class="col">
                <a href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID );?>" class="menu">More...</a>
              </div>
            </div>
          </div>
        </div>

        </div>
<script type="text/javascript">
/* write your JavaScript code here */
//Mobile Vars
var nav_mobile_down = document.getElementById('nav-mobile-down');
var nav_mobile_up = document.getElementById('nav-mobile-up');
var mobile_menu = document.getElementById('mobile-menu');

var contact_down_mobile = document.getElementById('contact-down-mobile');
var contact_up_mobile = document.getElementById('contact-up-mobile');
var contact_menu_mobile = document.getElementById('contact-menu-mobile');

var services_down_mobile = document.getElementById('services-down-mobile');
var services_up_mobile = document.getElementById('services-up-mobile');
var services_menu_mobile = document.getElementById('services-menu-mobile');

var programs_down_mobile = document.getElementById('programs-down-mobile');
var programs_up_mobile = document.getElementById('programs-up-mobile');
var programs_menu_mobile = document.getElementById('programs-menu-mobile');

// Tablet Vars
var contact_down_tablet = document.getElementById('contact-down-tablet');
var contact_up_tablet = document.getElementById('contact-up-tablet');
var contact_menu_tablet = document.getElementById('contact-menu-tablet');

var services_down_tablet = document.getElementById('services-down-tablet');
var services_up_tablet = document.getElementById('services-up-tablet');
var services_menu_tablet = document.getElementById('services-menu-tablet');

var programs_down_tablet = document.getElementById('programs-down-tablet');
var programs_up_tablet = document.getElementById('programs-up-tablet');
var programs_menu_tablet = document.getElementById('programs-menu-tablet');

//Desktop Vars
var contact_down_desktop = document.getElementById('contact-down-desktop');
var contact_up_desktop = document.getElementById('contact-up-desktop');
var contact_menu_desktop = document.getElementById('contact-menu-desktop');

var services_down_desktop = document.getElementById('services-down-desktop');
var services_up_desktop = document.getElementById('services-up-desktop');
var services_menu_desktop = document.getElementById('services-menu-desktop');

var tires_down_desktop = document.getElementById('tires-down-desktop');
var tires_up_desktop = document.getElementById('tires-up-desktop');
var tires_menu_desktop = document.getElementById('tires-menu-desktop');


// Mobile Functions
function toggleMobileMenu(){
console.log("mobile menu toggle clicked");
nav_mobile_down.classList.toggle('d-none');
nav_mobile_up.classList.toggle('d-inline');
mobile_menu.classList.toggle('d-inline');
}
function toggleMobileContact(){
console.log("contact toggle clicked");
contact_down_mobile.classList.toggle('d-none');
contact_up_mobile.classList.toggle('d-inline');
contact_menu_mobile.classList.toggle('d-inline');
}
function toggleMobileServices(){
console.log("services toggle clicked");
services_down_mobile.classList.toggle('d-none');
services_up_mobile.classList.toggle('d-inline');
services_menu_mobile.classList.toggle('d-inline');
}
function toggleMobilePrograms(){
console.log("services toggle clicked");
programs_down_mobile.classList.toggle('d-none');
programs_up_mobile.classList.toggle('d-inline');
programs_menu_mobile.classList.toggle('d-inline');
}

// Tablet Functions
function toggleTabletContact(){
console.log("contact toggle clicked");
contact_down_tablet.classList.toggle('d-none');
contact_up_tablet.classList.toggle('d-inline');
contact_menu_tablet.classList.toggle('d-inline');
}

function toggleTabletServices(){
console.log("services toggle clicked");
services_down_tablet.classList.toggle('d-none');
services_up_tablet.classList.toggle('d-inline');
services_menu_tablet.classList.toggle('d-inline');
}

function toggleTabletPrograms(){
console.log("programs toggle clicked");
programs_down_tablet.classList.toggle('d-none');
programs_up_tablet.classList.toggle('d-inline');
programs_menu_tablet.classList.toggle('d-inline');
}

// Desktop Functions
function toggleDesktopContact(){
console.log("contact toggle clicked");
contact_down_desktop.classList.toggle('d-none');
contact_up_desktop.classList.toggle('d-inline');
contact_menu_desktop.classList.toggle('d-inline');
}
function toggleDesktopServices(){
console.log("contact toggle clicked");
services_down_desktop.classList.toggle('d-none');
services_up_desktop.classList.toggle('d-inline');
services_menu_desktop.classList.toggle('d-inline');
}
function toggleDesktopTires(){
console.log("contact toggle clicked");
tires_down_desktop.classList.toggle('d-none');
tires_up_desktop.classList.toggle('d-inline');
tires_menu_desktop.classList.toggle('d-inline');
}

</script>

  </header>
