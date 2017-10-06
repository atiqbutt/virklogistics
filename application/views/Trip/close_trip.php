<style>
  .vechinfo{ 
    display: none;
  }

.ms-options li{

  list-style-type: none;
  padding-left: 0px;
}

.ms-options ul{
  padding-left: 5px;
}
.paddinglr0{
  padding-left:0px; padding-right:0px;
  margin-left:0px; margin-right:0px;
}
.paddinglr5{
  padding-left:5px; padding-right:5px;

}
.paddinglr2{
  padding-left:px; padding-right:2px;
}
.content{
  padding-top:40px !important;
}

</style>
 
<section class="content paddinglr0">
  <div class="box">

      <div class="box-header" style=" padding-bottom: 0;margin-bottom: 0;">
          <h3 style="font-weight:bold; padding-top: 10px;" class="box-title pull-left">Close Trip
       </h3>
          <div class="col-lg-3 vechinfo pull-right">
                    
            <div  style="padding:5px; margin-top: 5px; border: 1px solid  #D3D3D3" id="vech_info" class="panel-body">
                          
                <!-- panel-body -->
              </div>
              <!-- panel panel-default -->
        </div>
     </div>

      <div class="box-body paddinglr0">
            <form name="myform" id="myform" action="<?php echo base_url() ?>trip/save_trip" method="post" enctype="multipart/form-data">
          
        <div class="col-lg-9 paddinglr0">
            <div class="col-lg-12 paddinglr5">
                <div class="panel panel-default" style="padding-top:0px;padding-bottom:0px;margin-bottom:3px !important;">
                  <div class="panel-heading"><i class="fa fa-bus" aria-hidden="true"></i>
                   Trip Information</div>
           
                   
            <div class="panel-body paddinglr0" style="padding-top:0px;padding-bottom:0px;">
               <div class="col-lg-3 paddinglr5" style="padding-top:0px;padding-bottom:0px;">
                    <div class="form-group">
                      <label>Trip ID</label>
                      <input class="form-control" type="text" value="<?php echo  $trip_info['0']['id']  ?>" readonly/>
                    </div>
              </div>  


                <div class="col-lg-3  paddinglr5">
                     <div class="form-group"> 
                        <label>Company</label>
                          <input class="form-control" type="text"  value="<?php echo  $trip_info['0']['comname'] ?>" readonly/>
                      </div>
                  </div>  


                <div class="col-lg-3 paddinglr5">
                    <div class="form-group">    
                        <label>Contractor</label>
                     <input class="form-control" type="text"  value="<?php echo  $trip_info['0']['conname'] ?>" readonly/>
                    </div>
                </div>    

                  <div class="col-lg-3  paddinglr5">
                      <div class="form-group">    
                        <label>Vehicle</label>
                          <input class="form-control" type="text" value="<?php echo  $trip_info['0']['vehiclename'] ?>" readonly/>
                        </div>
                  </div>
                  </div>
                  <!-- panel-body -->
                </div>
                <!-- panel panel-default -->
            </div>
              <!-- col-lg-12 -->

    <div class="col-lg-12  paddinglr5">
        <div class="panel panel-default" style="margin-bottom:3px !important;" >
          <div class="panel-heading"><i class="fa fa-asterisk" aria-hidden="true"></i>
          Meter Reading </div>
            <div class="panel-body paddinglr0" style="padding-top:0px;padding-bottom:0px;"> 
                   
                   <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>Start Meter Reading</label>
                         <input class="form-control" type="text" value="<?php echo $trip_info['0']['start_meter_reading']  ?>" readonly/>
                      </div>
                  </div>

                 <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>End Meter Reading</label>
                          <input class="form-control"  type="number" name="end_meter_reading" onkeypress='return ValidateNumberOnly()'  />
                      </div>
                  </div>


                  <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>Fuel</label>
                          <input class="form-control" placeholder="Fuel Consumption"  type="number" name="fuel" onkeypress='return ValidateNumberOnly()' />
                      </div>
                  </div>


              <div class="col-lg-3 paddinglr5">           
                <div class="form-group"> 
                  <label>STN Number</label>
                    <input class="form-control"  type="number" name="stn_no" onkeypress='return ValidateNumberOnly()'  />
                </div>
             </div>

      </div>            
    </div>

      <!--Add Product -->
                
         <div class="panel panel-default" style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px;">
          <div class="panel-heading"><i class="fa fa-bus" aria-hidden="true"></i>
           Add Product </div>

          <div class="panel-body paddinglr0" style="padding-top:0px;padding-bottom:0px;">

            <div class="col-lg-12" style="margin-top: 20px">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      </tr>
                    
                    </tbody>
                  </table>                      
            </div>  
         
          </div>
        </div>
        <!-- panel-body -->
           
     </div>
     <!-- col-lg-12 -->  
        <div id="addpro" class="col-md-12" style="display: none">
          <div class="row" style="padding-left: 5px; padding-right: 5px; margin-top: 10px">
              <div class="panel panel-default">
              <div class="panel-heading">Products View</div>
                <div class="panel-body" style="padding-left: 0">

                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Product Quantity</th>
                      <th>Product Temperature</th>
                      <th>Product Gravity</th>
                      <th>Destination</th>
                      <th>Freight Rate</th>
                      <th>Carriage Commission</th>
                      <th>Withholding Tax</th>
                      <th>Company Commission</th>
                      <th>Remaining Commission</th>
                    </tr>
                  </thead>
                  <tbody id="prod_info" >
                
                  </tbody>
                </table>

                </div>
              </div>
                    
              </div>

            </div>


    </div>
  <!-- col-lg-7 -->  

        <!-- ============================================================= -->


      <div class="col-lg-3 paddinglr5">
      
            <div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-car" aria-hidden="true"></i> Drivers & Helpers  Info </div>
               <div class="panel-body paddinglr0">
                   
                      <div class="form-group paddinglr5">                      
                        <div class="col-md-10 paddinglr5">
                            <p><Strong>Driver</Strong>: <?php echo $trip_info['0']['drivername']; ?></p>
                           
                        </div>  
                      </div>



                     <div class="form-group paddinglr5">                      
                        <div class="col-md-10 paddinglr5">
                            <p><Strong>Helper</Strong>: <?php echo $helper['name']; ?></p>
                        </div>  


                      </div>
                         


                </div>
                <!-- panel-body -->
              </div>
              <!-- panel panel-default -->
            

 
            <div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-clock-o" aria-hidden="true"></i> Date</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <p><Strong>Entry Date</Strong>: <?php echo $trip_info['0']['entry_date']; ?></p>                      
                    </div>  

                    <div class="form-group">
                      <p><Strong>Email Date</Strong>: <?php //echo $trip_info['0']['email_date']; ?></p>                        
                    </div> 

                     <div class="form-group">
                      <p><Strong>Filling date</Strong>: <?php echo $trip_info['0']['filling_date']; ?></p>
                    </div> 

                   <div class="form-group">    
                      <p><Strong>Filled By</Strong>: <?php //echo $trip_info['0']['filled_by']; ?></p>
                    </div>

      
                  </div>
                  <!-- panel-body -->
                </div>
                <!-- panel panel-default -->



         <div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-clock-o" aria-hidden="true"></i> Closing Date</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label>Entry Date</label>
                      <?php  $date = date('Y-m-d'); ?>
                      <input class="form-control" type="date" name="entry_date" value="<?php echo $date; ?>" palceholder="" >
                    </div>  

                    <div class="form-group">
                      <label>Email Date</label>
                      <input class="form-control" type="date" name="email_date" value="<?php echo $date; ?>" >
                    </div> 

                     <div class="form-group">
                      <label>Uncanned date</label>
                      <input class="form-control" type="date" name="filling_date" value="<?php echo $date; ?>" >
                    </div> 


                    <div class="form-group">    
                        <label>Uncanned By</label>
                          <select  class="form-control" name="filled_by" >
                             <option value="">Select Options</option>       
                              <?php if(!empty($driver1)){
                              foreach ($driver1 as $v){  ?>      
                              <option value="<?php  echo  $v["id"];?>"   >
                              <?php  echo  $v["name"];?>
                              </option>               
                              <?php }} ?>
                          </select> 
                      </div>


                       
                  </div>
                  <!-- panel-body -->
                </div>
                <!-- panel panel-default -->
         
         

        </div>
        <!-- col-lg-4 -->

            <div class="col-lg-12 col-md-12 col-sm-12" style="margin: 10px 0">
                <input id="trip_close" class="btn btn-primary" type="submit" name="register" value="Close Trip" />
            </div>  

        </form>
     </div>
  <!-- box-body -->
   </div>
  <!-- box -->
</section>

  <!-- =================================================    -->



<script>
  
$(document).ready(function() {
    var max_fields      = 2; //maximum input boxes allowed
    var wrapper         = $("#add_helper"); //Fields wrapper
    var add_button      = $("#addhelper"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group paddinglr5"><div class="col-md-10 paddinglr5"><label>Helper</label><select class="form-control" name="helper[]" required><option value="">Select Options</option><?php if(!empty($helperinformation)){  foreach ($helperinformation as $v){  ?><option value="<?php  echo  $v["id"];?>"   ><?php  echo  $v["name"];?></option><?php }} ?></select></div><div class="col-md-2 paddinglr5"><button  style="margin-top: 30px" id="helper"><i class="fa fa-minus" aria-hidden="true"></i></button></div></div>'); 
            //add input box
        }
    });
    
    $(wrapper).on("click","#helper", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
    })

    });
  
</script>


<script>
// add more driver 
$(document).ready(function() {
    var max_fields      = 2; //maximum input boxes allowed
    var wrapper         = $("#driver_1"); //Fields wrapper
    var add_button      = $("#driver1"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group paddinglr5"><div class="col-md-10 paddinglr5"><label>Driver</label><select id="helper" class="form-control" name="driver[]" required><option value="">Select Options</option><?php if(!empty($driver1)){  foreach ($driver1 as $v){  ?><option value="<?php  echo  $v["id"];?>"   ><?php  echo  $v["name"];?></option><?php }} ?></select></div><div class="col-md-2 paddinglr5"><button style="margin-top: 30px" id="p_driver"><i class="fa fa-minus" aria-hidden="true"></i></button></div></div>'); 
            //add input box
        }
    });

    //user click on remove text
    $(wrapper).on("click","#p_driver", function(e){ 
        e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
    })
});





</script>
<script>


</script>
<script>

$(document).ready(function() {
  $('#veh').change(function(event) {
     var id =  $(this).val();

     
    $.ajax({
      url: '<?php echo base_url(); ?>Vehicle/get_vehicle_by_id/'+id,
      type: 'POST',
      success:  function (response) {
      var result = eval(response);
        
        $('.vechinfo').removeClass('vechinfo');

        vech_info = "<div><strong>Chassis Number:</strong>" +"&nbsp;"+ result['chassisno'] +"&nbsp&nbsp&nbsp<strong> Engine Number: </strong>" +"&nbsp"+ result['engineno'] +"</div>"
        
        $('#vech_info').html(vech_info);

           
        }
    })
 
    

  });
});




</script>


<!-- add product ajax -->
<script>

    $(document).ready(function() { 
      $("#add_pro").on('click', function(e){
      var product_id = $("#product_id option:selected").val();
      var product_name = $("#product_id option:selected").text();
      var source_id = $("#source option:selected").val();
      var source_name = $("#source option:selected").text();
      var destination_id = $("#destination option:selected").val();
      var destination_name = $("#destination option:selected").text();
      var product_quantity = $("#product_quantity").val();
      var product_temperature = $("#product_temperature").val();
      var product_gravity = $("#product_gravity").val();
      var freight_rate = $("#freight_rate").val();
      var carriage_commission = $("#carriage_commission").val();
      var withholding_tax = $("#withholding_tax").val();
      var companycommission = $("#companycommission").val();
      var remaining_commission = $("#remaining_commission").val();


      var proInfo = "<tr><td><input type='hidden' class='proSource' name='source[]'  value='' >"+ source_name +"</td><td><input type='hidden' class='proDest' name='destination[]'  value='' >"+ destination_name +"</td><td><input type='hidden' id='proID' class='proID' name='product_id[]'  value=''>"+ product_name +"</td><td><input type='hidden' class='proQty' name='product_quantity[]'  value=''>"+ product_quantity +"</td><td><input type='hidden' class='proTemp' name='product_temperature[]'  value=''>"+ product_temperature +"</td><td><input type='hidden' class='proGrav' name='product_gravity[]'  value=''>"+ product_gravity +"</td><td><input type='hidden' class='proFret' name='freight_rate[]'  value=''>"+ freight_rate +"</td><td><input type='hidden' class='proCarrg' name='carriage_commission[]'  value=''>"+ carriage_commission +"</td><td><input type='hidden' class='proWtax' name='withholding_tax[]'  value=''>"+ withholding_tax +"</td><td><input type='hidden' class='proCC' name='companycommission[]'  value=''>"+ companycommission +"</td><td><input type='hidden' class='proRecomm' name='remaining_commission[]'  value=''>"+ remaining_commission +"</td></tr>";


        $("#addpro").removeAttr('style');

        if (product_id == "") {
          alert("Please fill all fields");
        }else{

         $('#prod_info').append(proInfo);

        }


        $(".proID").val(product_id);
        $(".proSource").val(source_id);
        $(".proDest").val(destination_id);
        $(".proQty").val(product_quantity);
        $(".proTemp").val(product_temperature);
        $(".proGrav").val(product_gravity);
        $(".proFret").val(freight_rate);
        $(".proCarrg").val(carriage_commission);
        $(".proWtax").val(withholding_tax);
        $(".proCC").val(companycommission);
        $(".proRecomm").val(remaining_commission);


        $("#product_id").val("");
        $("#source").val("");
        $("#destination").val("");
        $("#product_quantity").val("");
        $("#product_temperature").val("");
        $("#product_gravity").val("");
        $("#freight_rate").val("");
        $("#carriage_commission").val("");
        $("#withholding_tax").val("");
        $("#companycommission").val("");
        $("#remaining_commission").val("");


        $("#trip_save").removeAttr('disabled');

    });
  });



$(document).ready(function() {
  $('#myform').on('submit', function (e) {   
        console.log($("#proID").length);
      if($("#proID").length == 0){  
        alert("Please add atleat one product !");
        e.preventDefault();
      }
      else{
        $(this).unbind('submit').submit();
        $(this).submit();
      }


    });

});


</script>



<script>

function ValidateNumberOnly()
{
if ((event.keyCode < 45 || event.keyCode > 57)) 
{
   event.returnValue = false;
}
}

</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#myform')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                type: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                company_id: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                    contractor_id: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

               vehicle_id: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

                 entry_date: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                 email_date: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                 filling_date: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                 filled_by: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
              start_meter_reading: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

              end_meter_reading: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

             'driver[]': {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

            'helper[]': {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },



              // Add product

              source: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                destination: {
                   trigger:'change    blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
              product_id: {
                   trigger:'change    blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
                product_quantity: {
                   trigger:'change blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
              product_temperature: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
               product_gravity: {
                   trigger:'change blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

              freight_rate: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },
             carriage_commission: {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

            'withholding_tax': {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                },

           'company_comission': {
                   trigger:'change  blur',
                    validators: {
                        notEmpty: {
                            message: 'field  is required and cannot be empty'
                        }
                    }
                }


            }
        });
});





</script>

