  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
    $(function() {
      $('img.color').each(function(n) {
        n += 1;
        $(this).wrap('<figure class="tint t'+ n + '"></figure>');
      });
    });
  </script>
  
<style media="screen" type="text/css">
  
  body {background:#ffffff;}
  
  .wrap {
    overflow: hidden;
    width: 1260px;
    margin: 10px 5px -5px 5px;
  }
  
  .nautilus-gallery {
  	margin-left:0%	;
  }
  
  .tint {
    overflow: hidden;
    float: left;
    background: blue;
    margin: 0 20px 20px 0;
    height:280px;
    width:355px;
/*  -moz-border-radius: 40%;
    border-radius: 40%;	*/
  }
  
  .t2 {
    background: red;
  }
  
  .t3 {
    background: green;
  }
  
  .t4 {
    background: purple;
  }
  
  .t5 {
    background: yellow;
  }
 
  .t6 {
    background: hotpink;
  }
  
  img.color {
    float: left;
    background: black;
    display: block;
    -moz-transition: opacity .3s linear;
    -webkit-transition: opacity .3s linear;
    -ms-transition: opacity .3s linear;
    -o-transition: opacity .3s linear;
    transition: opacity .3s linear;
  }

  img.color:hover {
    opacity: .5;
    cursor: pointer;
  }
</style>

<div class="nautilus-gallery">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="355" height="280"> 
</div>	<!-- End .nautilus-gallery -->
<br /><br /><br /><br />