		<style>
		#map{
			width:100%;
			height:500px;
			margin-bottom: 20px;
		}
		@media screen and (max-width:1250px) {
		#map{
			width:850px;
			height:525px;
		}
		}
		@media screen and (max-width:1000px) {
		#map{
			width:700px;
			height:450px;
		}
		}
		@media screen and (max-width:820px) {
		#map{
			width:600px;
			height:400px;
		}
		}
		@media screen and (max-width:650px) {
		#map{
			width:500px;
			height:300px;
		}
		}
		@media screen and (max-width:560px) {
		#map{
			width:375px;
			height:250px;
		}
		}
		@media screen and (max-width:400px) {
		#map{
			width:320px;
			height:250px;
		}
		}
		</style>

<section id="main">
    <div class="inner">
		<section>
		<h3>Clients dans votre zone</h3>
        <div id="map"></div><button onclick="getLocation()">Ajouter ma position</button>
		</section>
        <div class="table-wrapper">
			<table>
			    <thead>
					<tr>
						<th>Nom</th>
						<th>Dernière visite</th>
						<th>Num&eacute;ro de téléphone</th>
                        <th>Adresse</th>
                        <th>E-mail</th>
					</tr>
				</thead>
				<tbody>
            <?php       
                foreach ($clients as $client){
                    ?><tr>
                        <td><?php
                    echo $client['nom'];
                    ?>  </td>
                        <td><?php
                    echo $client['derniereVisite'];
                    ?>  </td>
                    <td><?php
                    echo "0".$client['num_tel'];
                    ?>  </td>
                    <td><?php
                    echo $client['adresse'];
                    ?>  </td>
                    <td><?php
                    echo $client['mail'];
                    ?>  </td>
                    </tr>
                    <?php
                } 
            ?>
        </p>
        </table>
        </tbody>
    </div>
</section>
<script>
var x = document.getElementById("demo");
	function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Activer votre geolocaltion pour bénéficier de ce service.";
    }
	}
	function showPosition(position) {
    	lat=position.coords.latitude; 
    	lon=position.coords.longitude;
    	latlon = new google.maps.LatLng(lat, lon);
		var image = 'http://localhost/Algobreizh/images/pos.png';
    	var marker = new google.maps.Marker({
			position:latlon,
			map:map,
			icon: image,
			animation: google.maps.Animation.DROP,
			zIndex:1,
			title:"Votre position"});
		}	
function myMap() {
	<?php
	$listeLatLng=array();
	foreach($clients as $client){
		$coords=array();
		$coords[]=$client['idClient'];
		$coords[]=$client['latitude'];
		$coords[]=$client['longitude'];
		$coords[]=$client['nom'];
		$coords[]=$client['derniereVisite'];
		$coords[]=$client['num_tel'];
		$coords[]=$client['adresse'];
		$listeLatLng[]=$coords;
	}
	?>
	var zoneMarqueurs = new google.maps.LatLngBounds();
	var tableau = <?php echo(json_encode($listeLatLng)); ?>;
 	var mapCanvas = document.getElementById("map");
  	var mapOptions = {
	zoom: 10,
    	center: new google.maps.LatLng(48.1119, -1.6742)
  	};
  	map = new google.maps.Map(mapCanvas, mapOptions);	
	var i;
	var I = tableau.length;
	for (i=0;i<I;i=i+1){
		var id=tableau[i][3];
		var lat=tableau[i][1];
		var lng=tableau[i][2];
		var Nom=tableau[i][3];
		var date=tableau[i][4];
		var tel=tableau[i][5];
		var adresse=tableau[i][6];
		var point = new google.maps.LatLng(lat,lng);
		marker = new google.maps.Marker({
      			position: point,
      			map: map,
      			// Texte du point
			label:id,
      			title: Nom+" "+date,
				info: "Nom: "+Nom+"<br />Dernière visite: "+date+"<br />Adresse: "+adresse+'<br />Numéro de Tél: 0'+tel,
				zIndex:5
      			});
		var infos='<div id="content">'+
					'<p>Nom'+Nom+'</p></div>';

		var infowindow = new google.maps.InfoWindow();
		google.maps.event.addListener(marker, 'mouseover', function () {
        	infowindow.setContent(this.info);                              
        	infowindow.open(map, this);                        
		});
		zoneMarqueurs.extend( marker.getPosition());
		}
	map.fitBounds(zoneMarqueurs);
	
	}		
</script>