<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="icon" type="image/ico" href=""/>-->
    <title>Mapping Destructions</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    
    <!-- jQuery Version 1.11.1 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="margin-bottom:30%;">

<h1>Coordinate Plotting Destructions</h1>
<br /><br />
<div class="alert alert-warning" role="alert">As a disclaimer, this is completely insane, and I apologize. It is, however, also going to be really hella cool if I ever get around to finishing it.</div><br />

<p>I've been using <a href="http://www.birdtheme.org/useful/v3tool.html" target="_blank">this interactive plotter</a> to generate geographic coordinates by clicking around on Google Maps. A few notes, though:</p><br />

<ul>
  <li>The 'Polyline'/'KML' selections up top have been getting the job done, but feel free to play around with those if you can find something more efficient.</li><br />
  <li>Plotting point by point can be insanely tedious, but for most polygon shapes, you can just draw some rough lines on the map in the general area you want to highlight, then select 'Edit lines' to drag things around and make more graceful contours.</li><br />
  <li>Afterwards, just hit 'Stop edit' before taking note of the coordinates listed below. The 'Delete last point' option is also really useful (and tracks every revision backwards to the initial point).</li><br />
  <li>Also, on a note of technicality, there <em>is</em> an option to toggle between 'Lat/Lng' and 'Lng/Lat' formatting for the coordinate output (that 'LatLng mousemove' dropdown selector), but it isn't super reliable - I haven't been able to get it to work, but if you can, then godspeed. If not, though, I've been doing the following to format them in the order of 'latitude,longitude', since the Google Maps API only seems to support listing coordinates in this format.</li>
</ul><br /><br />

<p>Once you have something that looks about right, go to the "Live code presentation in textarea" field...</p><br />

<ol style="text-decoration:none;">
  <li>Copy/paste everything between <code>&lt;coordinates&gt;</code> and <code>&lt;/coordinates&gt;</code> into Notepad or something.</li><br />
  <li>Delete the ",0.0" parameter on the end of each coordinate listing (just search/replace with nothing in the replacement field) so that "117.949219,39.164141,0.0" becomes "117.949219,39.164141".</li> <br /> 
  <li>Swap the order of the first and second coordinates in each listing so that "117.949219,39.164141" becomes "39.164141,117.949219".</li><br />
  <li>Save the list of coordinates in a doc somewhere with a note as to the historical period. </li><br />
</ol>

<br /><br />

<p><strong>Totally optional:</strong><br /><br />
If you're ever feeling froggy, you can try plugging the coordinates into the <a href="http://jsfiddle.net/quizas/cmnz5nxf/" target="_blank">JavaScript polygon overlay script here</a> - it's surprisingly easy! Also, it's just a test unit for fooling around, so don't be afraid to nuke the whole script or whatever.</p><br />

<p>Just go to the section that begins like this...</p><br />
<code>
// Define the latitudinal/longitudinal (LatLng) coordinates for the polygon's path<br />
    var randomCoords = [<br />
// e.g.  new google.maps.LatLng(36.013561, 113.730469),<br />
    new google.maps.LatLng(,),<br />
    ...<br />
    new google.maps.LatLng(,)<br />
    ];
</code>
<br /><br />
<p>... And plug the coordinates in to as few or many <code>new google.maps.LatLng( , )</code> entries as you want, then hit 'Run' up top to compile. If it looks especially kickass, you can 'Update' to save it as a revision, and the URL will reflect http://jsfiddle.net/quizas/cmnz5nxf/123213, etc., so that that particular revision can be viewed as a snapshot later on.</p><br /><br />

<h3>Map Images:</h3><br />
<ul>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_china_neolithic.gif" target="_blank">Neolithic Period</a></li>
  <li><a href="http://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Xia_dynasty.svg/696px-Xia_dynasty.svg.png" target="_blank">Xia Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-shang-large.gif" target="_blank">Shang Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-chou-large.gif" target="_blank">Zhou Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-six-large.gif" target="_blank">Six Dynasties</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-sui-large.gif" target="_blank">Sui Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-tang-large.gif" target="_blank">Tang Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-five-large.gif" target="_blank">Five Dynasties</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-n-sung-large.gif" target="_blank">Northern Song Dynasty</a></li>
  <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-s-sung-large.gif" target="_blank">Southern Song Dynasty</a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
</ul>
<br /><br />


<p>These already look amazing, so I'm really on the fence about bothering to re-render them interactively. Pretend these don't exist for now:</p>
<ul>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_warring_states_350_BCE_1.png" target="_blank">Warring States</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_qin_dynasty.png" target="_blank">Qin Dynasty</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_han_dynasty.png" target="_blank">Han Dynasty</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_three_kingdoms.png" target="_blank">Three Kingdoms</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Eastern_Jin_Dynasty_376_CE.png" target="_blank">Jin Dynasty</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Northern_and_Southern_Dynasties_560_CE.png" target="_blank">Period of Northern/Southern Dynasties</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_sui_dynasty_581_CE.png" target="_blank">Sui Dynasty</a> :: This one is beautiful, but seems to conflict with a few of the maps I've seen from university resources, so I have doubts...</li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Tang_Dynasty_circa_700_CE.png" target="_blank">Tang Dynasty</a></li>
  <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Five_Dynasties_Ten_Kingdoms_923_CE.png" target="_blank">Five Dynasties</a></li>
  <li><a href="" target="_blank">Northern/Southern Song Dynasties</a> :: Meh, doesn't actually differentiate between the two</li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
  <li><a href="" target="_blank"></a></li>
</ul>



</div> <!-- End .container -->



</body>
</html>smia.org/art-of-asia/history/images/maps/china-n-sung-large.gif" target="_blank">Northern Song Dynasty</a></li>
    <li><a href="http://archive.artsmia.org/art-of-asia/history/images/maps/china-s-sung-large.gif" target="_blank">Southern Song Dynasty</a></li>
    <li><a href="" target="_blank"></a></li>
    <li><a href="" target="_blank"></a></li>
    <li><a href="" target="_blank"></a></li>
    <li><a href="" target="_blank"></a></li>
  </ul>
  <br /><br />

  <p>These already look amazing, so I'm really on the fence about bothering to re-render them interactively. Pretend these don't exist for now:</p>
  <ul>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_warring_states_350_BCE_1.png" target="_blank">Warring States</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_qin_dynasty.png" target="_blank">Qin Dynasty</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_han_dynasty.png" target="_blank">Han Dynasty</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_three_kingdoms.png" target="_blank">Three Kingdoms</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Eastern_Jin_Dynasty_376_CE.png" target="_blank">Jin Dynasty</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Northern_and_Southern_Dynasties_560_CE.png" target="_blank">Period of Northern/Southern Dynasties</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_sui_dynasty_581_CE.png" target="_blank">Sui Dynasty</a> :: This one is beautiful, but seems to conflict with a few of the maps I've seen from university resources, so I have doubts...</li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Tang_Dynasty_circa_700_CE.png" target="_blank">Tang Dynasty</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Five_Dynasties_Ten_Kingdoms_923_CE.png" target="_blank">Five Dynasties</a></li>
    <li><a href="http://rainerkarcher.com/js/timeline-js/img/map_IanKiu_Song_Dynasty_1141.png" target="_blank">Northern/Southern Song Dynasties</a> :: Meh, doesn't actually differentiate between the two</li>
    <li><a href="" target="_blank"></a></li>
    <li><a href="" target="_blank"></a></li>
    <li><a href="" target="_blank"></a></li>
  </ul>
</div> <!-- End #images -->
</div> <!-- End .container -->

</body>
</html>