<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>Voting Convenience Centers</h2>
                <h3 align="center">Regular Local Election</h3>
                <h4 align="center">NOVEMBER 5, 2019</h4>
                <p align="center">You can go to any of the Voting Convenience Centers to vote on November 5, 2019 (7:00 am - 7:00 pm)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div id="map"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="voting-centers">
                    <div data-mapboxKey="amyBiehlCommunitySchool" class="center location"><strong>Amy Biehl Community School</strong>301 Avenida Del Sur, Santa Fe</div>
                    <div data-mapboxKey="​atalayaElementarySchool" class="center location"><strong>Atalaya Elementary School</strong>721 Camino Cabra, Santa Fe</div>
                    <div data-mapboxKey="bennyJChavezCommunityCenter" class="center location"><strong>Benny J Chavez Community Center</strong>354 A Juan Medina Road, Chimayo</div>
                    <div data-mapboxKey="chaparralElementarySchool" class="center location"><strong>Chaparral Elementary School</strong>2451 Avenida Chaparral, Santa Fe</div>
                    <div data-mapboxKey="christianLifeChurch" class="center location"><strong>Christian Life Church</strong>121 Siringo Road, Santa Fe</div>
                    <div data-mapboxKey="edgewoodElementarySchool" class="center location"><strong>Edgewood Elementary School</strong>171 State Road 344, Edgewood</div>
                    <div data-mapboxKey="elCaminoRealAcademy" class="center location"><strong>El Camino Real Academy</strong>2500 S Meadows Road, Santa Fe</div>
                    <div data-mapboxKey="elRanchoSeniorCenter" class="center location"><strong>El Rancho Senior Center</strong>394 County Road 84, El Rancho</div>
                    <div data-mapboxKey="galisteoCommunityCenter" class="center location"><strong>Galisteo Community Center</strong>35 Avenida Vieja, Galisteo</div>
                    <div data-mapboxKey="glorietaPassFireStation" class="center location"><strong>Glorieta Pass Fire Station #2</strong>366 Old Denver Highway, Glorieta</div>
                    <div data-mapboxKey="gonzalesCommunitySchool" class="center location"><strong>Gonzales Community School</strong>851 W. Alameda, Santa Fe</div>
                    <div data-mapboxKey="hondoFireStation" class="center location"><strong>Hondo Fire Station #2</strong>645 Old Las Vegas Highway, Santa Fe</div>
                    <div data-mapboxKey="laCienegaCommunityCenter" class="center location"><strong>La Cienega Community Center</strong>136 Camino San Jose, La Cienega</div>
                    <div data-mapboxKey="maxCollCommunityCenter" class="center location"><strong>Max Coll Corridor Community Center</strong>16 Avenida Torreon, Eldorado</div>
                    <div data-mapboxKey="montezumaLodge" class="center location"><strong>Montezuma Lodge</strong>431 Paseo de Peralta, Santa Fe</div>
                    <div data-mapboxKey="nambeCommunityCenter" class="center location"><strong>Nambe Community Center</strong>180 A State Road 503, Nambe</div>
                    <div data-mapboxKey="nambePuebloTribalAdministrativeBuilding" class="center location"><strong>Nambe Pueblo Tribal Administrative Bldg</strong>15 Bayay Poe, Nambe Pueblo</div>
                    <div data-mapboxKey="ninaOteroCommunitySchool" class="center location"><strong>Nina Otero Community School</strong>5901 Herrera Drive, Santa Fe</div>
                    <div data-mapboxKey="pojoaqueMiddleSchool" class="center location"><strong>Pojoaque Middle School</strong>1797 State Road 502, Pojoaque</div>
                    <div data-mapboxKey="salazarElementarySchool" class="center location"><strong>Salazar Elementary School</strong>1231 Apache Avenue, Santa Fe</div>
                    <div data-mapboxKey="sanIldefonsoPuebloVisitorCenter" class="center location"><strong>San Ildefonso Pueblo Visitor Center</strong>74 Povi Kaa Drive, San Idelfonso Pueblo</div>
                    <div data-mapboxKey="santaFeCountyFairBuilding" class="center location"><strong>Santa Fe County Fair Building</strong>3229 Rodeo Road, Santa Fe</div>
                    <div data-mapboxKey="santaFeCountyFireStation" class="center location"><strong>Santa Fe County Fire Station (La Tierra)</strong>6 Arroyo Calabasas Road, Santa Fe</div>
                    <div data-mapboxKey="stJohnsUnitedMethodistChurch" class="center location"><strong>St. John's United Methodist Church</strong>1200 Old Pecos Trail, Santa Fe</div>
                    <div data-mapboxKey="stJosephsParishHall" class="center location"><strong>St. Joseph's Parish Hall</strong>2 E. Waldo Street, Cerrillos</div>
                    <div data-mapboxKey="stanleyCycloneCenter" class="center location"><strong>Stanley Cyclone Center</strong>22 W. Kinsell Avenue, Stanley</div>
                    <div data-mapboxKey="tesuqueElementarySchool" class="center location"><strong>Tesuque Elementary School</strong>1555 Bishop's Lodge Road, Tesuque</div>
                    <div data-mapboxKey="tesuquePuebloIntergenerationalCenter" class="center location"><strong>Tesuque Pueblo Intergenerational Center</strong>39 TP 804, Tesuque Pueblo, Tesuque Pueblo</div>
                    <div data-mapboxKey="tonyEQuintanaElementary" class="center location"><strong>Tony E. Quintana Elementary</strong>20 E Sombrillo Road Highway 106, Espanola</div>
                    <div data-mapboxKey="turquoiseTrailCharterElementary School" class="center location"><strong>Turquoise Trail Charter Elementary School</strong>13 A San Marcos Loop, Santa Fe</div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>




    mapboxgl.accessToken = 'pk.eyJ1IjoidGhlamFtZXN3aWxsaWFtIiwiYSI6ImNqMmw2bXNxdjAwNDQycm1oNnBoMWVrNnUifQ.A7kGacHIcQpZnQT8Et2KWQ'; // replace this with your access token
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/thejameswilliam/cj6wz1jya9lgz2ssd1spbxnvo', // replace this with your style URL
        center: [-105.980478, 35.6560663],
        zoom: 8
    });





    map.on('click', function (e) {
        var features = map.queryRenderedFeatures(e.point, {
            layers: ['santa-fe-polling-locations'] // replace this with the name of the layer
        });

        if (!features.length) {
            return;
        }

        var feature = features[0];
        console.log(feature);
        var popup = new mapboxgl.Popup({offset: [0, -15], closeOnClick: true})
            .setLngLat(feature.geometry.coordinates)
            .setHTML('<h3>' + feature.properties.place_name + '</h3><p>' + feature.properties.place_address + '</p>')
            .setLngLat(feature.geometry.coordinates)
            .addTo(map);
    });


    $('.voting-centers .location').on('click', function(e){
      var key = $(this).attr('data-mapboxKey');
      var features = map.queryRenderedFeatures(e.point, {
          layers: ['santa-fe-polling-locations'] // replace this with the name of the layer
      });
      var feature = getFeatureByKey(features, key);
      if(feature != false) {
        var popup = new mapboxgl.Popup({offset: [0, -15], closeOnClick: true})
            .setLngLat(feature.geometry.coordinates)
            .setHTML('<h3>' + feature.properties.place_name + '</h3><p>' + feature.properties.place_address + '</p>')
            .setLngLat(feature.geometry.coordinates)
            .addTo(map);

        $('html, body').animate({
          scrollTop: $("#map").offset().top - 70
        });
      }


    })

    function getFeatureByKey(features, key) {
      for (c = 0; c < features.length; c++) {
        if(key == features[c].properties.place_id) {
          return features[c];
        }
      }
      return false;
    }
</script>
