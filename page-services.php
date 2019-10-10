<?php get_header();?>

<div class="container home">
  <div class="main-row">
    <div class="container-fluid about-container" style="margin-top:30px; padding-right:65px; padding-left:65px">
      <div class="row">
          <p style="text-align:center">
            Sant Automotive provides factory maintenance, engine repair, brake replacement, and everything in between.
            We stand behind our work and promise to always provide honest evaluations, sound advice, and quality repairs.
            <br></br>Sant Automotive will help you get your car fixed quickly,
            accurately, and affordably!
          </p>
      </div>
    </div>
  </div>
  <div class="main-row" style="margin-top:30px">
    <div class="main">
      <h5>Our Services</h3>
    </div>
    <div class="container-fluid about-container">
      <div class="row">
        <div class="col-sm-12 col-md-4"style="text-align:center">
          <a href="<?php echo get_page_link( get_page_by_title( 'AC Service' )->ID );?>"><h5 class="service-page-link">AC Service</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Alternators' )->ID );?>"><h5 class="service-page-link">Alternators</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Batteries' )->ID );?>"><h5 class="service-page-link">Batteries</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Brakes' )->ID );?>"><h5 class="service-page-link">Brakes</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Diagnostics' )->ID );?>"><h5 class="service-page-link">Diagnostics</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Electrical Systems' )->ID );?>"><h5 class="service-page-link">Electrical System</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Engine Work' )->ID );?>"><h5 class="service-page-link">Engine Work</h5></a>
        </div>
        <div class="col-sm-12 col-md-4"style="text-align:center">
          <a href="<?php echo get_page_link( get_page_by_title( 'Extended Warranty Repairs' )->ID );?>"><h5 class="service-page-link">Extended Warranty</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Factory Maintenance' )->ID );?>"><h5 class="service-page-link">Factory Maintenance</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Financing' )->ID );?>"><h5 class="service-page-link">Financing</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Fleet Services' )->ID );?>"><h5 class="service-page-link">Fleet Services</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Headlights' )->ID );?>"><h5 class="service-page-link">Headlights</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Oil Change' )->ID );?>"><h5 class="service-page-link">Oil Changes</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Radiators and Cooling' )->ID );?>"><h5 class="service-page-link">Radiators & Cooling</h5></a>
        </div>
        <div class="col-sm-12 col-md-4"style="text-align:center">
          <a href="<?php echo get_page_link( get_page_by_title( 'Safety and Emissions' )->ID );?>"><h5 class="service-page-link">Safety & Emissions</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Steering' )->ID );?>"><h5 class="service-page-link">Steering</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Suspension' )->ID );?>"><h5 class="service-page-link">Suspension</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Tires' )->ID );?>"><h5 class="service-page-link">Tires</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Transmission' )->ID );?>"><h5 class="service-page-link">Transmission</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Wheel Alignment' )->ID );?>"><h5 class="service-page-link">Wheel Alignment</h5></a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Wiper Blades' )->ID );?>"><h5 class="service-page-link">Wiper Blades</h5></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>
