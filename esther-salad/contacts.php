<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equip="X-UA-Compatible" content="IE-edge">
	<title>Esther Salad | Salad buah dan sayur nikmat</title>
	<meta name="author" content="esther salad">
	<meta name="description" content="Esther salad, Usaha Esther Salad didirikan tahun 2000 di Surabaya  dan telah berkembang di beberapa kota seperti Bali, Gresik, Ujung Pandang, Solo, Semarang, Jakarta. Beberapa berupa counter salad di berbagai mall, sebagian berupa delivery order." />
	<meta name="keywords" content="salad,esther salad, salad indonesia,salad buah,salad sayur,esthersalad,esther-salad,esther salad Indonesia,delivery order,Pesan Antar,Profil esther salad" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/contacts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(-7.291658, 112.765652);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:10,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(15);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    </head>
<body>
    <header>
		<div class="container-fluid header">
            <span class="mini-title"><a href="index.php">Esther Salad</a></span>
			<ul class="header-list">
				<li><a href="index.php">Home</a></li>
				<li ><a href="menu.php">Menu</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contacts.php">Contacts</a></li>
			</ul>
		</div>
    </header>
    <main>
        <br><br>
        
        <div class="main-content container-fluid">
            <center><h1>For Order</h1></center>
            
            <br>
        <img src="img/marker.png" class="logo"><h10> : Jalan Manyar Kartika III No.19,Sukolilo,Jawa Timur,Indonesia </h10>
            <br>
        <img src="img/tele.png" class="logo"><h10> : +62 31 5989017</h10>
            
        <img src="img/bbm.png" class="logo"><h10> : 58E4762</h10>
            <br>
        <img src="img/line.png" class="logo"><h10> : esthersalad</h10>
            
        <img src="img/wa.png" class="logo"><h10> : +628165409033</h10>
            <br>
        <img src="img/icon_Go_Food.png" class="logo"><h10> : Esther Salad</h10>
        <center><div id="googleMap" style="width:1000px;height:380px;"></div></center>
        
        
        </div>
        
        
    </main>
    <footer>
		<div class="wrapper container-fluid">
			@2016 Esther-Salad.com - All rights reserved. | Kontak kami
		</div>
		<br>
	</footer>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>