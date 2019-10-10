<?php get_header();?>

<?php $bios = get_field("bios");?>

<div class="container-fliud slider">
  <div class="container slider-img" style = "text-align: center;">
    <?php echo do_shortcode('[smartslider3 slider=6]');?>
  </div>
</div>
<div class="container home">
    <div class="container-fluid about-container">
      <div class="row">
        <div class="col">
          <p style="text-align:center">Sant Automotive is an auto repair shop located in Webster Groves, Missoui. We are a full service,
            ASE Blue Seal certified shop that for
            27 years has specialized in providing
            complete customer satisfaction.
            From oil changes and tires to advanced diagnostics,
            electrical trouble shooting, or precision wheel alignments,
            Sant Automotive is your one-stop shop.</p>
        </div>
      </div>
    </div>
    <div class="row home-row justify-content-center">
        <div class="d-sm-block col-sm-12 col-md-6 col-lg-3 main-row" style="padding-left:0px; padding-right:6px">
            <div class="main">
              <h5>Our Hours</h5>
            </div>
            <div class="tire-container">
              <div class="container hours" style="background-color: white">
                <div class="justify-content-center col-12">
                  <h5>Monday-Friday</h5>
                  <p>7:30am - 5pm</p>
                  <h5>Saturday & Sunday</h5>
                  <p>Closed</p>
                  <!--<input class="btn tire-submit col-12" type="submit" value="Appointment">-->
                </div>
              </div>
            </div>
        </div>
        <div class="d-none d-md-block col-md-6 col-lg-5 main-row" style="padding-left:6px; padding-right:6px">
            <div class="main">
              <h5>Our Services</h5>
            </div>
            <div class="tire-container">
              <div class="row first-row">
                    <div class="col-4" style="text-align:center">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Oil Change' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/oil-can.png"
                        class="img-thumbnail service-icon">
                      </a>
                    </div>
                    <div class="col-4" style="text-align:center">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Brakes' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/brake.png" class="img-thumbnail service-icon">
                      </a>
                    </div>
                    <div class="col-4" style="text-align:center">
                      <a  href="<?php echo get_page_link( get_page_by_title( 'Batteries' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/battery.png" class="img-thumbnail service-icon">
                      </a>
                    </div>
                  </div>
              <div class="row second-row" style="margin-bottom: 35px;">
                    <div class="col-4" style="text-align:center">
                      <div style="text-align:center">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Wheel Alignment' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/wheel-align.png" class="img-thumbnail service-icon">
                        </a>
                      </div>
                    </div>
                    <div class="col-4" style="text-align:center">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Tires' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/tire.png" class="img-thumbnail service-icon">
                      </a>
                    </div>
                    <div class="col-4" style="text-align:center">
                      <a href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID );?>"><img src="<?php bloginfo('template_directory');?>/images/more-repair.png" class="img-thumbnail service-icon">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 main-row" style="padding-right:6px;">
                <div class="main">
                  <h5>Find Us</h5>
                </div>
                <div class="tire-container" style = "text-align: center;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.6852949118775!2d-90.36483804935453!3d38.56406397952343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8c9599a8d472b%3A0xb63f005cec25139b!2sSant+Automotive!5e0!3m2!1sen!2sde!4v1564477013748!5m2!1sen!2sde" width="90%" height="90%" frameborder="0" style="border-radius: 5px; border: solid 1px #dee2e6; display: inline-block" allowfullscreen=""></iframe>
                </div>
            </div>
          </div>
    <div class="row home-row">
        <div class="col-12 main-row">
          <div class="main">
            <h5>About Us</h3>
          </div>
          <div class="container-fluid about-container">
            <div class="row staff">
              <div class="container profile">
                <div class="row">
                  <div class = "col-sm-12 col-md-4 col-lg-3">
                    <img src="<?php echo $bios["dicks-image"];?>" class="img-thumbnail profile-pic">
                  </div>
                  <div class = "col-sm-12 col-md-8">
                    <div class="container profile-bio">
                      <div class = "row">
                        <h5><?php echo $bios["dicks_name"];?></h3>
                      </div>
                      <div class="row">
                        <h5><?php echo $bios["dicks_position"];?></h5>
                      </div>
                      <div class="row">
                        <div><h6 style"padding-right: 20px;"><?php echo $bios["dicks_bio"];?></h6></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row staff">
              <div class="container profile">
                <div class="row staff">
                  <div class = "col-sm-12 col-md-4 col-lg-3">
	                     <img src="<?php echo $bios["employee_1_image"];?>" class="img-thumbnail profile-pic"/>
                  </div>
                  <div class = "col-sm-12 col-md-8">
                    <div class="container profile-bio">
                      <div class="row">
                        <h5><?php echo $bios["employee_1_name"];?></h3>
                      </div>
                      <div class="row">
                        <h5><?php echo $bios["employee_1_position"];?></h5>
                      </div>
                      <div class="row">
                        <h6 style="padding-right: 20px;"><?php echo $bios["employee_1_bio"];?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<?php get_footer();?>
