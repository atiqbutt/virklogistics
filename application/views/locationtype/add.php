

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
                
                            
   

 <section class="content">
      <div class="row">
           <div class="col-md-12">
           <?php if ($this->session->flashdata('msg' )): ?>
          <div class="alert alert-success">
          <?php echo $this->session->flashdata('msg'); ?>  
          </div>
           <?php endif; ?> 
        <div class="col-xs-12">
          <div class="box col-sm-12">
            <div class="box-header" >
              <h3 class="box-title">Add Location</h3>
            </div>
          
          
          
          
          
          
          
          
          
<div class="custom"  >
    <LINK REL=StyleSheet HREF="http://mondeca.com/mdc_css/weather.css" TYPE="text/css">


 <script>
      function test11(){
 /*       var f2 = document.getElementById("input");
        var f1 = document.getElementById("input2");
        var f3 = document.getElementById("input3");
         var f4 = document.getElementById("input4");
          var f5 = document.getElementById("input5");
          var f6 = document.getElementById("input6");
   */     //f2.value = f1.value + f3.value+ f4.value+ f5.value;
     //   f1.value = f6.value +" "+ f5.value +" "+ f4.value+" "+ f3.value+" "+ f2.value;
//	 document.getElementById('ad')= document.getElementById("a").value;;
      }
    </script>
                
                    <table class="table table-striped table-bordered table-responsive">
                      
                        		<tr>
                            <td class="wi150">
                                Address: 
                            </td>
                            <td class="wi200" >
                                
                      <form class="form-inline" id="address"   onsubmit="showAddress(this.address.value);
                                          ga('send', 'event', 'form', 'submit', 'address');return false">
                                                      
                          <input onkeyup="test11()" id="input2" type="textbox"  name="address" placeholder="Pakistan"   style="width:50%;" Class="username_input"   required class="form-control" /> 
                      <input type="submit"  onclick="test()" value="Search" class="btn btn-primary btn-mondeca" />           
                      
                      </td>
                        </tr>
                        
				
                            
         <div >
               
             
      </div>
      </form>
                                   
                        </tr>
                    </table>  
<div style="display:flex;flex-wrap:wrap; margin-top: 2%; margin-bottom: 2%;">
    <div align="center" id="map" style="min-width:100%; min-height:300px; width:100%;"></div>
    <div style="display: flex; flex-wrap:wrap; flex-direction:column;
                
              max-width: 100%; justify-content:flex-start; min-width:300px; width:100%; ">
      
    </div>
  </div>
  
<div class="col-lg-12">
    <div class="col-lg-12" style="padding-left:0px; margin-left:0px;">
   <form  enctype="multipart/form-data" method="post" action="<?php echo base_url()?>Defination/savelocationtype" >
      <table class="table" style=" display:none;   margin-left:-5%; margin-top:5%; width:50%;">
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
	   
    <div class="item form-group col-lg-12" style="margin-bottom:10px;">
 <div class="col-lg-3">Title</div>
         <div class="col-lg-9">
                                       <input type="address" name="name" class="form-control"  placeholder="Title" >
         </div>       
	</div>
	
                      <div class="item form-group  col-lg-12">
  <div class="col-lg-3">Remarks</div>
         <div class="col-lg-9">
                                       <input type="address" name="remarks" class="form-control"  placeholder="remarks" >
         </div>
         </div>
         
         <div class="ln_solid"></div>
                      <div class="form-group col-lg-12">
                        <div class="col-md-6 col-md-offset-3">
                          <input class="btn btn-success" type="submit" name="register" value="submit" />
                          <input id="zzz" class="btn btn-warning" type="reset" name="reset" value="Reset" />
                          <a type="submit" name="register" href='<?php echo base_url()?>Defination/view_locationtype';" class="btn btn-danger">Cancel</a>
            
                        </div>
                      </div>

        </form>
                    
                    
             
                       <div id="weather"></div>
                    
            </div></div>
                    

                        
                        
                        
                    </div>
            
          
          
          
          
          
          
          
          
          
          
         
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

 
<script type="text/javascript">

function ValidateNumberOnly()
{
if ((event.keyCode < 48 || event.keyCode > 57)) 
{
   event.returnValue = false;
}
}

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#expense')
            .on('init.form.bv', function(e, data) {
                //console.log(data);
            })
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The name field is required'
                            }
                        }
                    },
                   
                    remarks: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The remarks field is required'
                            }
                        }
                    },
                  
                }

            });

    });
    

$("#zzz").click(function(){
   $('#shippingForm').bootstrapValidator("resetForm",true);    
});

</script>

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBVTKLztwVOGDuo1qGsjHzdY7wXRcKbAVI"> </script>
<script>

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
        var center = new GLatLng(31.92320,73.94519);
        
         var center = new GLatLng(31.92320,73.94519);
        
        map.setCenter(center, 10);
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
        
      function test(){
        var f1 = document.getElementById("input2");
        var f2 = document.getElementById("username_input2");
        f2.value = f1.value;
      }
    </script>
 
              <span  id="ad"  ></span>          




			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
     
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.1.1/js/buttons.flash.min.js"></script>

    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/aetrade_favicon.png'); ?>">

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.1/css/buttons.dataTables.min.css">   
    <!-- Bootstrap -->
    
  
    
    <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<!-- DataTables CSS -->
<link href=".<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
<!-- Custom CSS -->


<!-- Timeline CSS -->
<link href="<?php echo base_url(); ?>assets/css/timeline.css" rel="stylesheet">


<!-- Morris Charts CSS 
<link href="<?php echo base_url(); ?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">-->

<!-- Custom Fonts -->
<link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!--    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-form.min.js"></script>
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--;hou;ouhil-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
     
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- data tables new js -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>



<!--    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/highchart.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-form.min.js"></script>
   
<!-- Form Validation libraries -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
   