<!-- /.row -->
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
              <h3 class="box-title">Update Location</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 
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
				 
				 <form class="form-horizontal" id="expense" action="<?php echo base_url()?>Defination/updatelocationtype" method="post">
                     
<div style="display:flex;flex-wrap:wrap; margin-top: 2%; margin-bottom: 2%;">
    <div align="center" id="map" style="min-width:100%; min-height:300px; width:100%;"></div>
    <div style="display: flex; flex-wrap:wrap; flex-direction:column;
                
              max-width: 100%; justify-content:flex-start; min-width:300px; width:100%; ">
      
    </div>
  </div>
  
<div class="col-lg-12">
    <div class="col-lg-12" style="padding-left:0px; margin-left:0px;">
   <form  enctype="multipart/form-data" method="post" action="<?php echo base_url()?>Defination/savelocationtype" >
      <table class="table" style="    margin-left:-5%; margin-top:5%; width:50%;">
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


							</div>
                      </div>


				 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="time_out" name="name" type="text" value="<?php echo $edit->name?>" class="form-control" >                        
                          </div>
                      </div>
                     <input type="hidden" name="id" value="<?php echo $edit->id?>">
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="time_out" name="name" type="text" value="<?php echo $edit->address?>" class="form-control" >                        
                          </div>
                      </div>                      

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarks">Remarks </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="address" name="remarks" class="form-control"  value="<?php echo $edit->remarks?>" placeholder="remarks" >
                        </div>
                      </div>
                     <input type="submit" name="myform" value="Update" class="col-md-offset-3 btn btn-primary">   
               
                </form>
            </div>
            <!-- /.box-body -->
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
                    date: {
                        trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The date field is required'
                            }
                        }
                    },
                   
                    excluded: ':disabled', 
                    title: {
                         trigger:'blur change keyup focus',
                        validators: {
                            notEmpty: {
                                message: 'The title field is required'
                            }
                        }
                    },
                    
                    amount: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The amount field is required'
                            }
                        }
                    },
                      payee: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The payee field is required'
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


<script>
$('#time_in').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '9',
    maxTime: '6:00pm',
    defaultTime: '9',
    startTime: '9:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

$('#time_out').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '6',
    maxTime: '6:00pm',
    defaultTime: '6pm',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

</script>













































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
                
                            
   
<!-- /.row -->
 
          
          
          
          
          
          
          
          
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
          
          
          
         
          </div>
 
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
        var center = new GLatLng(<?php echo $edit->latitude?>,<?php echo $edit->longitude?>);
        
         var center = new GLatLng(<?php echo $edit->latitude?>,<?php echo $edit->longitude?>);
        
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
        
      function test(){
        var f1 = document.getElementById("input2");
        var f2 = document.getElementById("username_input2");
        f2.value = f1.value;
      }
    </script>
 
              <span  id="ad"  ></span>           
            