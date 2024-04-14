// branch filter
$(document).ready(function () {

    $('#search-branch').trigger('click');
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            $("#search-branch").trigger("click");
            event.preventDefault();
        }
    });
    $(".list-location").mCustomScrollbar({
        theme: "dark",
        scrollbarPosition: 'outside'
    });
});

$('body').on('click', '.info-trigger', function () {
    var map;
     var vectorLayer='';
    $("#atm-branch").html("");
    var that = $(this);
    var id = that.data('marker-id');
    var base_url = $('#base-url').val();
    var type = that.data('type');
    var name = that.data('name');
    //var detail = that.data('detail');
    var manager_name = that.data('manager_name');
    var email = that.data('email');
    var address = that.data('address');
    var phone = that.data('phone');
    var latitude = that.data('latitude');
    var longitude = that.data('longitude');
    if (type == 'ATM') {
        iconType = base_url + 'assets/frontend/img/icon/atm-index.png'
    } else {
        iconType = base_url + 'assets/frontend/img/icon/bank-index.png'
    }
    map = new OpenLayers.Map("atm-branch");
    map.addLayer(new OpenLayers.Layer.OSM());
    epsg6207 =  new OpenLayers.Projection("EPSG:4326"); //WGS 1984 projection
    projectTo = map.getProjectionObject(); //The map projection (Spherical Mercator)
    // var lonLat = new OpenLayers.LonLat(84.047618,28.449276 ).transform(epsg6207, projectTo);
    var lonLat = new OpenLayers.LonLat(parseFloat(longitude),parseFloat(latitude)).transform(epsg6207, projectTo);
    var zoom=18;
    map.setCenter (lonLat, zoom);
    vectorLayer = new OpenLayers.Layer.Vector("Overlay");
    var content = '<h4>'+name+'</h4>';
    if(manager_name){
       content +='<p>'+manager_name+'</p>';
    }
    if(email){
       content +='<p>'+email+'</p>';
    }
    if(address){
       content +='<p>'+address+'</p>';
    }
    if(phone){
       content +='<p>'+phone+'</p>';
    }
    var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(parseFloat(longitude), parseFloat(latitude)).transform(epsg6207, projectTo),
        // {description:name},
        //{description:name+manager_name+email+address+phone},
        // {details:detail},
        // {latitude:latitude},
        {description:content},
        {externalGraphic: iconType, graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
        // {externalGraphic:iconType}
    );
    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(lonLat));
    map.setCenter (lonLat, zoom);

    feature.popup = new OpenLayers.Popup.FramedCloud("pop",
    feature.geometry.getBounds().getCenterLonLat(),
    null,
    '<div class="markerContent">'+feature.attributes.description+'</div>',
    null,
    true,
    function() { controls['selector'].unselectAll(); }
);
feature.popup.closeOnMove = true;
map.addPopup(feature.popup);
   vectorLayer.addFeatures(feature);

    //alert(marker.position);
    function onMapMoveEnd () {
        this.bindPopup(this.feature.properties.property).openPopup();
    }

    function onLayerClick () {
        map.once('moveend', onMapMoveEnd, this);
        map.fitBounds(this.getBounds());
    }

    function onEachFeature (feature, layer) {

        layer.on('click', onLayerClick);
    }
    map.addLayer(vectorLayer);

    var controls = {
        selector: new OpenLayers.Control.SelectFeature(vectorLayer, { onSelect: createPopup, onUnselect: destroyPopup })
      };


      function createPopup(feature) {

          var lonLat = new OpenLayers.LonLat(feature.attributes.longitude,feature.attributes.latitude)
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject(), // to Spherical Mercator Projection
          );
          var zoom=18;
          var markers = new OpenLayers.Layer.Markers( "Markers" );
          map.addLayer(markers);
          markers.addMarker(new OpenLayers.Marker(lonLat));
          map.setCenter (lonLat, zoom);

          feature.popup = new OpenLayers.Popup.FramedCloud("pop",
          feature.geometry.getBounds().getCenterLonLat(),
          null,
          '<div class="markerContent">'+feature.attributes.description+'</div>',
          null,
          true,
          function() { controls['selector'].unselectAll(); }
      );
      feature.popup.closeOnMove = true;
      map.addPopup(feature.popup);

      }


      function destroyPopup(feature) {
        feature.popup.destroy();
        feature.popup = null;
      }



      map.addControl(controls['selector']);
      controls['selector'].activate();
})

// $('#atm-branch-search').on('submit', function (e) {
//     $("#search-branch").trigger("click");
// });


// toggle map onclick
$('.toggle-map').click(function () {
    $('.search-holder').addClass('minimize');
    setTimeout(function () {
        $('.btn-toggle-search-back').fadeIn('slow');
    }, 500)
});

$('.btn-toggle-search-back').click(function () {
    $(this).fadeOut('fast');
    $('.search-holder').removeClass('minimize');
});

// if ($('#search-branch').length) {
    // alert("success");
    $('#search-branch').on('click', function (e) {

        e.preventDefault();
        var base_url= $('#base_url').val();
        var that = $(this);
        var form = that.parents('form');
        var formData = form.serialize();
        var type= $('[name="type"]').val();
        var svg_icon = '';
        if(type == 'branch'){
            svg_icon = 'bank';
        }else{
            svg_icon = 'card';
        }
        var csrf = $.cookie('swapper_cookie');
        formData = 'csrf_test_name=' + csrf + '&' + formData;
        var base_url = $('#base-url').val();
        $.post(base_url + 'page/filter_branch', formData)
                .done(function (response) {

                    initOpenstreetMap(response.branch_data);

                    csrfHash = response.csrfHash;
                    $('input#csrf-token').val(csrfHash);
                    if (response) {
                        // alert(response);
                        $('#mCSB_1_container').html('');
                        $.each(response.branch_data, function (key, value) {
//                            $('.results').append('<a class="info-trigger" href="javascript:void(0);" data-marker-id="' + key + '">' + value.name + '</a>');
                              var infobox='';
                              infobox='<li>';
                              infobox+='<button class="branch-atm toggle-map info-trigger" data-marker-id="' + key;
                                if(typeof(value.name) !== 'undefined' && value.name !== null)
                                {
                                  infobox+='" data-name="' + value.name;
                                }
                                if(typeof(value.manager_name) != 'undefined' && value.manager_name != null)
                                {
                                    infobox+= '" data-manager_name="' + value.manager_name;
                                }
                                if(value.email)
                                {
                                  infobox+= '" data-email="' + value.email;
                                }
                                if(value.address)
                                  {
                                    infobox+='" data-address="' + value.address;
                                  }
                                  if(value.phone)
                                  {
                                    infobox+='" data-phone="' + value.phone;
                                  }

                                  if(value.type)
                                  {
                                    infobox+='" data-type="' + value.type;
                                  }
                                  if(value.latitude)
                                  {
                                    infobox+='" data-latitude="' + value.latitude;
                                  }
                                  if(value.longitude)
                                  {
                                    infobox+='" data-longitude="' + value.longitude;
                                  }
                                  infobox+='"><img src="'+base_url+'assets/frontend/img/icon/icon-' + svg_icon + '.svg" alt="" class="svg">' +
                                  ' <span>' + value.name + '</span>' +
                                  '  <i class="fas fa-angle-right"></i>' +
                                  ' </button>' +
                                  '  </li>';
                                  //console.log(infobox);
                            $('#mCSB_1_container').append(infobox);
                        });
                        svg_swap();
                    } else {
                        $('.results').html('<p>No results found</p>');
                    }
                });
        console.log('successs');
    });
// }

function svg_swap() {
    /*
     * Replace all SVG images with inline SVG
     */
    $('#mCSB_1_container').find('img.svg').map(function () {
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
}
;
var map;
var vectorLayer=[];
function initOpenstreetMap(mapData){
    var base_url = $('#base-url').val();
    if(map) {
        $("#atm-branch").html("");
    }

    map = new OpenLayers.Map("atm-branch");
    map.addLayer(new OpenLayers.Layer.OSM());
    epsg6207 =  new OpenLayers.Projection("EPSG:4326"); //WGS 1984 projection
    projectTo = map.getProjectionObject(); //The map projection (Spherical Mercator)
    var lonLat = new OpenLayers.LonLat(84.047618,28.449276 ).transform(epsg6207, projectTo);
    var zoom=7;
    map.setCenter (lonLat, zoom);
    vectorLayer = new OpenLayers.Layer.Vector("Overlay");
    if (mapData) {
        $.each(mapData, function (key, value) {

            // alert(value.type+'------'+value.detail+'------'+value.name+'------'+value.latitude+'------'+value.longitude);
            if (value.type == 'ATM') {

                iconType = base_url + 'assets/frontend/img/icon/atm-index.png'
            } else {
                iconType = base_url + 'assets/frontend/img/icon/bank-index.png'
            }
            var windowcontent = '<h4>'+value.name+'</h4>';
            if(value.manager_name){
               windowcontent +='<p>'+value.manager_name+'</p>';
            }
            if(value.email){
               windowcontent +='<p>'+value.email+'</p>';
            }
            if(value.address){
               windowcontent +='<p>'+value.address+'</p>';
            }
            if(value.phone){
               windowcontent +='<p>'+value.phone+'</p>';
            }
            var feature = new OpenLayers.Feature.Vector(
                new OpenLayers.Geometry.Point(parseFloat(value.longitude), parseFloat(value.latitude)).transform(epsg6207, projectTo),
                // {description:value.name},
                // {description:value.name+value.manager_name+value.email+value.address+value.phone},
                {description:windowcontent},
                {externalGraphic: iconType, graphicHeight: 25, graphicWidth: 21, graphicXOffset:-12, graphicYOffset:-25  }
                // {externalGraphic:iconType}
            );


           vectorLayer.addFeatures(feature);

            //alert(marker.position);
            function onMapMoveEnd () {
                this.bindPopup(this.feature.properties.property).openPopup();
            }

            function onLayerClick () {
                map.once('moveend', onMapMoveEnd, this);
                map.fitBounds(this.getBounds());
            }

            function onEachFeature (feature, layer) {

                layer.on('click', onLayerClick);
            }


        });
    } else{
        var feature = new OpenLayers.Feature.Vector(
            new OpenLayers.Geometry.Point(parseFloat(84.047618), parseFloat(28.449276)).transform(epsg6207, projectTo)

        );
       vectorLayer.addFeatures(feature);
    }
    map.addLayer(vectorLayer);

    // //Add a selector control to the vectorLayer with popup functions
    var controls = {
      selector: new OpenLayers.Control.SelectFeature(vectorLayer, { onSelect: createPopup, onUnselect: destroyPopup })
    };


    function createPopup(feature) {
        var lonLat = new OpenLayers.LonLat(feature.attributes.longitude,feature.attributes.latitude)
        .transform(
          new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
          map.getProjectionObject(), // to Spherical Mercator Projection
        );
        var zoom=9;
        var markers = new OpenLayers.Layer.Markers( "Markers" );
        map.addLayer(markers);
        markers.addMarker(new OpenLayers.Marker(lonLat));
        map.setCenter (lonLat, zoom);

        feature.popup = new OpenLayers.Popup.FramedCloud("pop",
        feature.geometry.getBounds().getCenterLonLat(),
        null,
        '<div class="markerContent">'+feature.attributes.description+'</div>',
        null,
        true,
        function() { controls['selector'].unselectAll(); }
    );
    feature.popup.closeOnMove = true;
    map.addPopup(feature.popup);

    }



    function destroyPopup(feature) {
      feature.popup.destroy();
      feature.popup = null;
    }



    map.addControl(controls['selector']);
    controls['selector'].activate();

}
