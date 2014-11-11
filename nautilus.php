<link rel="stylesheet" type="text/css" href="css/nautilus.css">
 <script type="text/javascript">
    $(function() {
      $('img.color').each(function(n) {
        n += 1;
        $(this).wrap('<figure class="tint t'+ n + '"></figure>');
      });
    });
</script>

<div class="nautilus-gallery">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280">
      <img class="color" src="img/nautilus6.jpg" alt="" width="355" height="280"> 
</div>	<!-- End .nautilus-gallery -->