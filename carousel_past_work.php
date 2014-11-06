<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
			interval: 3000
			});
		});

	jQuery(function ($) {
		$('[data-toggle="popover"]').popover();
		$('[data-toggle="tooltip"]').tooltip();
		});
</script>
<div class="container">
<br /><br />

<style type="text/css" media="screen" >
	.carousel {
	  position: relative;
	  margin-right:1.50%;
	}
    .carousel-caption {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 15px;
      background: #000000;
      background: rgba(0, 0, 0, 0.75);
    }
    .carousel-caption h3 {
      margin-left:0;
      margin: 0 0 5px;
    }
    .carousel-caption p {
      margin-bottom: 0;
    }
    .carousel-caption p a {
      color: #f3f2f2;
    }
    .carousel-caption h3,
    .carousel-caption p {
      color: #f3f2f2;
      line-height: 20px;
    }
    .carousel-indicators {
      margin-left: 5%;
      float:left;
      list-style: none;
    }
</style>
<div id="carousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">     
      <img src="img/work/theatre_1200x480.jpg" alt="Theatre">
      <div class="carousel-caption">
        <h3>Department of Theatre & Dance</h3>
        <p>University of Alabama</p>
        <p><a href="http://www.theatre.ua.edu">www.theatre.ua.edu</a></p>
      </div> <!-- End .carousel-caption -->
     </div> <!-- End .item .active -->
     
    <div class="item">
      <img src="img/work/phycolab_1200x480.jpg" alt="Phycolab">
      <div class="carousel-caption">
        <h3>Phycology Laboratory</h3>
        <p>University of Alabama</p>
        <p><a href="http://phycolab.ua.edu">www.phycolab.ua.edu</a></p>
      </div> <!-- End .carousel-caption -->
     </div> <!-- End .item -->
     
    <div class="item">
      <img src="img/work/mint_1200x480.jpg" alt="MINT">
      <div class="carousel-caption">
        <h3>Center for Materials for Information Technology</h3>
        <p>University of Alabama</p>
        <p><a href="http://www.mint.ua.edu">www.mint.ua.edu</a></p>
      </div> <!-- End .carousel-caption -->
     </div> <!-- End .item -->
     
    <div class="item">
      <img src="img/work/etech_dashboard_1200x480.jpg" alt="eTech">
      <div class="carousel-caption">
        <h3>Office of Educational Technology</h3>
        <p>University of Alabama</p>
        <p><a href="http://github.com/rtkarcher/etech-wordpress-dashboard-widget">WordPress Plugin - GitHub Project</a></p>
      </div> <!-- End .carousel-caption -->
     </div> <!-- End .item -->
  </div> <!-- End .carousel-inner -->

  <!-- Carousel Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- End #carousel -->