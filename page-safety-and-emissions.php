<?php get_header("service");?>

<?php $safety_and_emissions = get_field("safety_and_emissions");?>

<div class="container home">
  <div class="row home-row">
    <div class="col-12 main-row" style=" margin-top: 30px;margin-bottom: 35px;">
      <div class="main">
          <h3>Safety and Emissions</h3>
      </div>
        <div class="tire-fluid about-container">
          <div class="row">
            <div class="col-sm-12 col-lg-4">
              <div class="container" style="margin: 1em;">
                <p><?php echo $safety_and_emissions["about_safety_and_emissions"];?></p>
              </div>
            </div>
            <div class="col-sm-12 col-lg-8">
              <div class="embed-container" style="margin: 35px;">
                <?php echo $safety_and_emissions["safety_and_emissions_video"];?>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<?php get_footer();?>
