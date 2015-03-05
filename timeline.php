<?php include('page_title_gen.php'); ?> 
<?php include('header.php'); ?> 
<title>Rainer Karcher | <?php echo $pageName; ?></title>
<!-- always load the CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.knightlab.com/libs/timeline/latest/css/timeline.css">
<!-- and then one of either -->
<script type="text/javascript" src="http://cdn.knightlab.com/libs/timeline/latest/js/timeline.js"></script>
<br /><br /><br />
	  <?php include('carousel_past_work.php') ?>
	  <div class="page-header">
	    <h1>Timeline Testing</h1>
	  </div>
	  
	  
    <div id="timeline-embed"></div>
    <script type="text/javascript">
        var timeline_config = {
            width:              '100%',
            height:             '600',
            source:             'timeline.json',
            embed_id:           'timeline-embed',               //OPTIONAL USE A DIFFERENT DIV ID FOR EMBED
            start_at_end:       false,                          //OPTIONAL START AT LATEST DATE
            start_at_slide:     '4',                            //OPTIONAL START AT SPECIFIC SLIDE
            start_zoom_adjust:  '3',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
            hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
            font:               'Bevan-PotanoSans',             //OPTIONAL FONT
            debug:              true,                           //OPTIONAL DEBUG TO CONSOLE
            lang:               'en',                           //OPTIONAL LANGUAGE
            maptype:            'watercolor',                   //OPTIONAL MAP STYLE
            css:                'http://cdn.knightlab.com/libs/timeline/latest/css/timeline.css',     //OPTIONAL PATH TO CSS
            js:                 'http://cdn.knightlab.com/libs/timeline/latest/js/timeline.js'    //OPTIONAL PATH TO JS
        }
    </script>
    <script type="text/javascript" src="http://cdn.knightlab.com/libs/timeline/latest/js/storyjs-embed.js"></script>
	
	
		  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div> <!-- End #page_box -->
	<br /><br /><br /><br /><br /><br /><br /><br />
</body>
<br /><br /><br /><br /><br /><br /><br /><br />
</html>