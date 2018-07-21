<?php

require("dbconnectmap.php");
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];


$uname="root";
$pass="";
$servername="localhost";
$dbname="maps";
$db=new mysqli($servername,$uname,$pass,$dbname);

        $locations=array();
        $query =  $db->query("SELECT * FROM maps4");

        while( $row = $query->fetch_assoc() ){

            $id1=$row['id'];
            $name = $row['name'];
            $longitude = $row['longtitude'];                              
            $latitude = $row['latitude'];

                $q1="SELECT * FROM userdetails WHERE id='$id1'";
                $q2=mysqli_query($conn,$q1);
                if($q2)
                {   
                    $row=mysqli_fetch_assoc($q2);
                    $id=$row['id'];
                    $profilepic=$row['profilepic'];
                    $ccoll=$row['ccoll'];
                }

             $locations[]=array( 'id1'=>$id1,'name'=>$name, 'lat'=>$latitude, 'lng'=>$longitude,'profilepic'=>$profilepic);
        }
    ?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB8DFyRxuVaYalT2v5ajYfkPFhNa8_r1lo"></script>
    <script type="text/javascript">
    var map;
    var Markers = [];
    var infowindow;
    var content='<?php echo '<img src="profilepics/'.$profilepic.'" style="width:40px; height:40px;">'?>';
    var locations = [
        <?php for($i=0;$i<sizeof($locations);$i++){ $j=$i+1;?>
        [
            '<?php echo '<img src="profilepics/'.$locations[$i]['profilepic'].'" style="width:80px; height:70px;"><br><a href="profilepage.php?n='.$locations[$i]['id1'].'">'.$locations[$i]['name'].'</a>'?>',
            '<p><a href="<?php echo $locations[$i]['id1'];?>"><?php echo $locations[$i]['name']; ?> <?php echo $locations[$i]['id1'];?></a></p>',

            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            0
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
        var orig = {lat: 20.00, lng: 0.00};
    function initialize() {
      var mapOptions = {
        zoom: 3,
        center: orig
      };

      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        infowindow = new google.maps.InfoWindow();

        for(i=0; i<locations.length; i++)
         {
            var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
            var marker = new google.maps.Marker({
                position: position,
                map: map,
            });
            

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
        
            Markers.push(marker);
        }
        var markerCluster = new MarkerClusterer(map, Markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }

    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <body id="map-canvas">
