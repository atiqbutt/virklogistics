     <style>
     .margint{
		 margin-top:50px;}
     .wi200{
         width: 200px;
     }
      .wi150{
         width: 50px;
     }
     </style>                  
<base href="http://mondeca.com/index.php/en/any-place-en" />
  
  <script src="f.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
                new JCaption('img.caption');
            });
jQuery(document).ready(function(){
    jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
;jQuery(document).ready(function(){
    jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
  </script>
  <script type="text/javascript">
    (function() {
      Joomla.JText.load({"JLIB_FORM_FIELD_INVALID":"Invalid field:&#160"});
    })();
  </script>

    <script type="text/javascript">
        //<![CDATA[
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                document.createTextNode("@-ms-viewport{width:auto!important}")
            );
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
        }
        //]]>
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17663461-1', 'auto');
  ga('send', 'pageview');

</script>
                
                            

<div class="custom"  >
    <LINK REL=StyleSheet HREF="http://mondeca.com/mdc_css/weather.css" TYPE="text/css">

<script type="text/javascript"
    src="a.js"></script>
<script type="text/javascript"
    src="b.js"></script>
<script src="c.js"></script>
<script src="d.js"></script>


<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBVTKLztwVOGDuo1qGsjHzdY7wXRcKbAVI"> </script>
<script>
// Docs at http://simpleweatherjs.com

jQuery(document).ready(function($) {

    var weatheron=0;
    $('#weatherbutton').on('click', function() {
    weatheron=1-weatheron;
     ga('send', 'event', 'button', 'click', 'weather');
      
      
    if (weatheron)
    {
        lng=$('#lng')[0].innerHTML;
        lat=$('#lat')[0].innerHTML;
        loadWeather(lat+','+lng); //load weather using your lat/lng coordinates
        $('#weatherbutton').html('Hide weather');
        $('#weatherbutton').css('color', 'white');
    }
      else
      {
       
        $('#weather').html('');
        $('#weatherbutton').html('Show weather');
        $('#weatherbutton').css('color', 'white');
          
     }


});


function loadWeather(location, woeid) {
  $.simpleWeather({
    location: location,
    woeid: woeid,
    unit: 'c',
    success: function(weather) {
           
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
  
      
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
}
});
</script>

<script>
  function load() {

      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        var center = new GLatLng(31.55461,74.35716);
        
         var center = new GLatLng(21.55461,44.35716);
        
        map.setCenter(center, 15);
        geocoder = new GClientGeocoder();
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
        document.getElementById("lat").innerHTML = center.lat().toFixed(5);
        document.getElementById("lng").innerHTML = center.lng().toFixed(5);

        
        GEvent.addListener(map, "dragstart", function() {
            document.getElementById("weather").innerHTML = "";
          document.getElementById("weatherbutton").innerHTML = "Show weather";
        
         });
             
        
      GEvent.addListener(marker, "dragend", function() {
        ga('send', 'event', 'map', 'drag/move', 'map');
       var point = marker.getPoint();
          map.panTo(point);
       document.getElementById("lat").innerHTML = point.lat().toFixed(5);
       document.getElementById("lng").innerHTML = point.lng().toFixed(5);

        });
       GEvent.addListener(marker, "dragstart", function() {
            document.getElementById("weather").innerHTML = "";
            document.getElementById("weatherbutton").innerHTML = "Show weather";
        
         });
        

     GEvent.addListener(map, "moveend", function() {
       ga('send', 'event', 'map', 'drag/move', 'map');
          map.clearOverlays();
    var center = map.getCenter();
          var marker = new GMarker(center, {draggable: true});
          map.addOverlay(marker);
          document.getElementById("lat").innerHTML = center.lat().toFixed(5);
       document.getElementById("lng").innerHTML = center.lng().toFixed(5);


     GEvent.addListener(marker, "dragend", function() {
       
       ga('send', 'event', 'map', 'drag/move', 'map');
      var point =marker.getPoint();
         map.panTo(point);
      document.getElementById("lat").innerHTML = point.lat().toFixed(5);
         document.getElementById("lng").innerHTML = point.lng().toFixed(5);

        });
 
        });

      }
    }

       function showAddress(address) {
       var map = new GMap2(document.getElementById("map"));
       map.addControl(new GSmallMapControl());
       map.addControl(new GMapTypeControl());
       if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
          document.getElementById("lat").innerHTML = point.lat().toFixed(5);
       document.getElementById("lng").innerHTML = point.lng().toFixed(5);
         map.clearOverlays()
            map.setCenter(point, 14);
   var marker = new GMarker(point, {draggable: true});  
         map.addOverlay(marker);

        GEvent.addListener(marker, "dragend", function() {
      var pt = marker.getPoint();
         map.panTo(pt);
      document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
         document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });


     GEvent.addListener(map, "moveend", function() {
          map.clearOverlays();
    var center = map.getCenter();
          var marker = new GMarker(center, {draggable: true});
          map.addOverlay(marker);
          document.getElementById("lat").innerHTML = center.lat().toFixed(5);
       document.getElementById("lng").innerHTML = center.lng().toFixed(5);

     GEvent.addListener(marker, "dragend", function() {
     var pt = marker.getPoint();
        map.panTo(pt);
    document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
       document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });
 
        GEvent.addListener(marker, "dragstart", function() {
            console.log('dragstart');
            document.getElementById("weather").innerHTML = "";
            document.getElementById("weatherbutton").innerHTML = "Show weather";
        });
       
       
        });

            }
          }
        );
      }
    }
  
  
  
  
  if(window.attachEvent) {
    window.attachEvent('onload', load);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function() {
            curronload();
            load();
        };
        window.onload = newonload;
    } else {
        window.onload = load;
    }
}


</script>

<script>
var formaddress = document.getElementById("address");

formaddress.addEventListener("focusin", myFocusFunction);
formaddress.addEventListener("focusout", myBlurFunction);

function myFocusFunction() {
    document.getElementById("weather").innerHTML = ""; 

                 
}

function myBlurFunction() {
    document.getElementById("weather").innerHTML = ""; 
}

</script>


 <script>
      function test11(){
        var f2 = document.getElementById("input");
        var f1 = document.getElementById("input2");
        var f3 = document.getElementById("input3");
         var f4 = document.getElementById("input4");
          var f5 = document.getElementById("input5");
          var f6 = document.getElementById("input6");
        //f2.value = f1.value + f3.value+ f4.value+ f5.value;
        f1.value = f6.value +" "+ f5.value +" "+ f4.value+" "+ f3.value+" "+ f2.value;
      }
    </script>

<?php 
$phoneArr=array();
if(!empty($subInfo["phone"])){$phoneArr=explode('_',$subInfo["phone"]);} ?> 
<div class="row"id="subject-panel">
    <div class="col-lg-1"></div>
    <div class="col-lg-10"id="sp-margin">
        <div class="panel panel-primary">
                
                
                
                   
            
                <div class="panel-heading"id="panel-h">
                    <h3 class="panel-title">Address Info</h3>
                </div>
                <div class="panel-body">
                       
                      
      
                    
                    
                    
                    
                    <table class="table table-striped table-bordered table-responsive">
                      
                        		<tr>
                            <td class="wi150">
                                Address: 
                            </td>
                            <td class="wi200" >
                                
                      <form class="form-inline" id="address"   onsubmit="showAddress(this.address.value);
                                          ga('send', 'event', 'form', 'submit', 'address');return false">
                                                      
                          <input id="input2" type="text"  name="address" placeholder="Lahore Pakistan"   style="width:50%;" Class="username_input"  required class="form-control" /> 
                      <input type="submit"  onclick="test()" value="Search" class="btn btn-primary btn-mondeca" />           
                      
                      </td>
                        </tr>
                        
				
                            
         <div >
      
             
             
      </div>
      </form>
                        
             
                        
            <form action="<?php echo base_url('addingstock'); ?>" method="post"  >            
                        
                
                       
                
                <tr>
                            <td>Name:</td>
                            <td>
                                
                                    <input type="text" class="form-control" name="name" id="input4"  onblur="test11()" required=""/>
                            
                                
                                
                            </td>
                            
                        </tr> 
                        
                          <tr>
                            <td>City:</td>
                            <td>
                                 <select style="width:50%;" class="form-control city" name="city"  id="input6" onblur="test11()" >

                            <option>Select ....</option>
                             <?php
                            if(!empty($city))
                            {
                            foreach($city as $amb){ ?>
                <option value="<?php echo $amb["id"]?>"><?php echo $amb["name"]?></option>
               
               
                                <?php  }}?>
                            </select>
                                
                                
                            </td>
                            
                        </tr>
                       
                        
                        
                        <tr>
                            <td>Area</td>
                            <td>
                               
                                 <select style="width:50%;" class="form-control area" name="area"  id="input6" onblur="test11()" >

                            <option>Select ....</option>
                             <?php
                            if(!empty($address))
                            {
                            foreach($address as $amb){ ?>
                <option value="<?php echo $amb["id"]?>"><?php echo $amb["area"]?></option>
               
               
                                <?php  }}?>
                            </select>
                                  
                            </td>
                            
                        </tr>
                
                      
                        <tr>
                            <td>
                                phone:
                            </td>
                            <td>
                                
                                  <input type="text" name="phone" required class="form-control"  required=""/>

                                
                                
                                
                            </td>
                        </tr>
                        
                        
                         <tr>
                            <td>
                                Contact Person:
                            </td>
                            <td>
                                
                                  <input type="text" name="contact_name" required class="form-control"  required="" />

                                
                                
                                
                            </td>
                        </tr>
                         


                        <tr>
                            <td>
                                Contact Person Phone:
                            </td>
                            <td  >
                              

<div id='TextBoxesGroup'>
    <div id="TextBoxDiv1">
        <input class="form-control" name="contact_phone[]" type='text' id='textbox1' >
    </div>
</div> 
<input type='button' value='Add Button' id='addButton'>
<input type='button' value='Remove Button' id='removeButton'>


 
                                
                            </td>
                        </tr>
  

                         
                        
                        
                        
                        </tr>
                                          
                      


          
                    </table>  



 

<div style="display:flex;flex-wrap:wrap; margin-top: 2%; margin-bottom: 2%;">
    <div align="center" id="map" style="min-width:100%; min-height:300px; width:100%;"></div>
    <div style="display: flex; flex-wrap:wrap; flex-direction:column;
                
              max-width: 100%; justify-content:flex-start; min-width:300px; width:100%; ">
      
    </div>
  </div>

                    
<div class="col-lg-12">
    <div class="col-lg-3" style="padding-left:0px; margin-left:0px;">



                
   <form  enctype="multipart/form-data" method="post" >
      <table class="table" style="  display:none; margin-left:-5%; margin-top:5%; width:50%;">
            <tbody>
              <tr><th>Latitude</th><th>Longitude</th></tr>
              <tr>
                 <!-- <td style="font-size: 48px; color: green;" id="lat"><label id="lat" name="a1"/>&nbsp;</td>
                  <td style="font-size: 48px; color: green;" id="lng"><label  id="lng" name="a2"/>&nbsp;</td>-->
                  
                  <th> <textarea   name="latitude" id="lat" style="height:27px;">
                    
                    </textarea></th>
                    <th>
                  <textarea name="longitude" id="lng"  style="height:27px;">
                    
                    </textarea>
                  </th>
                  </td>
      </tbody>
        </table>


       <input type="hidden" id="username_input2"  name="address">
          <input type="submit" name="submit" class="btn btn-primary btn-mondeca" value="submit"/>

        </form>
                    
                    
             
                       <div id="weather"></div>
                    
            </div></div>
                    
                    
</div>
            
            
            </div>
                        
</div> 
                        
</div>

                        
                        
                        
                    </div>
                   
       
            <br />
          
         
          <!--end location page-->
       
 
  <!-- SlidesJS Required: Link to jQuery -->
  <script src="g.js"></script>
 
                 
     








                              <div class="panel-footer">
                   
                    <!--button class="btn btn-info " name="process">Process</button-->                    
                </div>
                </div>

            </div></div>
            
            
            </div>
                        
</div> 
    </div>             
           
            </div>
            <br />
          
           </div>

           
           
    

<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

    if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
    }   

    var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + counter);

    newTextBoxDiv.after().html('<input class="form-control" type="text" name="contact_phone[]" />' );

    newTextBoxDiv.appendTo("#TextBoxesGroup");


    counter++;
     });

     $("#removeButton").click(function () {
    if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   

    counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {

    var msg = '';
    for(i=1; i<counter; i++){
      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
    }
          alert(msg);
     });
  });
</script>

         
           
      
    <script>
        
      function test(){
        var f1 = document.getElementById("input2");
        var f2 = document.getElementById("username_input2");
        f2.value = f1.value;
      }
    </script>
 