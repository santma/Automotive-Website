<?php get_header("service");?>

<?php $engine_work = get_field("engine_work");?>

<div class="container home">
  <div class="row home-row">
    <div class="col-12 main-row" style=" margin-top: 30px;margin-bottom: 35px;">
      <div class="main">
          <h3>Engine Work</h3>
      </div>
        <div class="tire-fluid about-container">
          <div class="row">
            <div class="col-sm-12 col-lg-4">
              <div class="container" style="margin: 1em;">
                <p><?php echo $engine_work["about_engine_work"];?></p>
              </div>
            </div>
            <div class="col-sm-12 col-lg-8">
              <div class="embed-container" style="margin: 35px;">
                <?php echo $engine_work["engine_work_video"];?>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<?php get_footer();?>
