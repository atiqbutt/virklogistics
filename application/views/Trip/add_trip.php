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
  height: 150vh !important;
}

</style>
 

<section class="content paddinglr0">
  <div class="box">

    <div class="box-header" style=" padding-bottom: 0;margin-bottom: 0;">
        <h3 style="font-weight:bold; padding-top: 10px;" class="box-title pull-left">Start Trip
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
                   Trip Information
           
                   </div>
                  <div class="panel-body paddinglr0" style="padding-top:0px;padding-bottom:0px;">
<div class="col-lg-3 paddinglr5" style="padding-top:0px;padding-bottom:0px;">
                    <div class="form-group">
                      <label>Type</label>
                      <select class="form-control" name="type" > 
                          <option value="">Select Options</option>       
                          <option value="Self-Long">Self-Long</option>                                     
                          <option value="Self-Short">Self-Short</option>
                          <option value="General-Long">General-Long</option>                                     
                          <option value="General-Short">General-Short</option>
                      </select>
                    </div>
</div>        
<div class="col-lg-3  paddinglr5">
                     <div class="form-group"> 
                        <label>Company</label>

                          <select class="form-control" name="company_id" selected="selected" >

                          <option value="">Select Options</option>       
                           <?php  if(!empty($customer)){
                            foreach ($customer as $c){ ?>        
                            <option value="<?php  echo  $c["id"];?>"   >
                            <?php  echo  $c["name"];?>
                            </option>               
                            <?php }} ?>
                          </select> 
                      </div>
</div>        
<div class="col-lg-3 paddinglr5">
                    <div class="form-group">    
                        <label>Contractor</label>

                        <select class="form-control" name="contractor_id" selected="selected" >          
                       <option value="">Select Options</option>       

                         <?php  if(!empty($contractor)){
                            foreach ($contractor as $con){   ?>       
                            <option value="<?php  echo  $con["id"];?>"   >
                            <?php  echo  $con["name"];?>
                            </option>               
                            <?php }} ?>
                        </select> 
                    </div>

                </div>    

                  <div class="col-lg-3  paddinglr5">
                      <div class="form-group">    
                        <label>Vehicle</label>
                          <select id="veh" class="form-control" name="vehicle_id" >
                             <option value="">Select Options</option>       
                              <?php if(!empty($vehicle)){
                              foreach ($vehicle as $v){  ?>      
                              <option value="<?php  echo  $v["id"];?>"   >
                              <?php  echo  $v["registerationno"];?>
                              </option>               
                              <?php }} ?>
                          </select> 
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
                          <label>Source </label>
                            <select class="form-control sel" name="source" selected="selected" required> 
                            <option value="">Select Options</option>       


 <!--                        
                       <div class="form-group"> 
                          <label>Product </label>
                            <select id="pro" class="form-control" name="product_id" selected="selected" required> 
                            <option value="">Select Options</option>       

                             <?php  if(!empty($product)){
                             foreach ($product as $p){   ?>      
                                <option value="<?php  echo  $p["id"];?>"   >
                              <?php  echo  $p["heading"];?>
                                </option>               
                                <?php }} ?>
                            </select> 
                        </div>

     

                        <div class="form-group"> 
                          <label>Destination </label>
                            <select class="form-control" name="destination" selected="selected" required> 
                            <option value="">Select Options</option>       

                             <?php  if(!empty($source)){
                             foreach ($source as $p){   ?>      
                                <option value="<?php  echo  $p["id"];?>"   >
                              <?php  echo  $p["name"];?>
                                </option>               
                                <?php }} ?>
                            </select> 
                        </div>
                         
                     </div>
                    -->                                                  
          
                   <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>Start Meter Reading</label>
                          <input class="form-control"  type="number" name="start_meter_reading" onkeypress='return ValidateNumberOnly()'  />
                      </div>
                  </div>
<!-- 
                 <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>End Meter Reading</label>
                          <input class="form-control"  type="number" name="end_meter_reading" onkeypress='return ValidateNumberOnly()'  />
                      </div>
                  </div> -->


             <!--      <div class="col-lg-3 paddinglr5">           
                      <div class="form-group"> 
                        <label>Fuel</label>
                          <input class="form-control" placeholder="Fuel Consumption"  type="number" name="fuel" onkeypress='return ValidateNumberOnly()' />
                      </div>
                  </div> -->


        <!--       <div class="col-lg-3 paddinglr5">           
                <div class="form-group"> 
                  <label>Net Meter</label>
                    <input class="form-control"  type="text" name="net_meter" onkeypress='return ValidateNumberOnly()'  readonly/>
                </div>
             </div> -->

      </div>            
    </div>

      <!--Add Product -->
                
         <div class="panel panel-default" style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px;">
          <div class="panel-heading"><i class="fa fa-bus" aria-hidden="true"></i>
           Add Product 
   
           </div>
            <div class="panel-body paddinglr0" style="padding-top:0px;padding-bottom:0px;">

            <div class="col-lg-12">
              <div class="row">

                    <div class="col-lg-3 paddinglr2">
                        <div class="form-group"> 
                          <label>Source </label>
                            <select id="source" class="form-control" name="source" selected="selected" > 
                            <option value="">Select Options</option>       

                             <?php  if(!empty($source)){
                             foreach ($source as $p){   ?>      
                                <option value="<?php  echo  $p["id"];?>"   >
                              <?php  echo  $p["name"];?>
                                </option>               
                                <?php }} ?>
                            </select> 
                        </div>
                  </div>

                    
                  <div class="col-lg-3 paddinglr2">
                    <div class="form-group"> 
                            <label>Destination </label>
                              <select id="destination" class="form-control" name="destination" selected="selected" > 
                              <option value="">Select Options</option>       

                               <?php  if(!empty($source)){
                               foreach ($source as $p){   ?>      
                                  <option value="<?php  echo  $p["id"];?>"   >
                                <?php  echo  $p["name"];?>
                                  </option>               
                                  <?php }} ?>
                              </select> 
                          </div>
                      </div>
                             

                    <div class="col-lg-3 paddinglr2" style="float:left;">
                      <div class="form-group">
                      <label>Product </label>
                      <select id="product_id"  class="form-control product" name="product_id"  ><option value="">Select Options</option><?php  if(!empty($product)){foreach ($product as $p){   ?><option value="<?php  echo  $p["id"];?>" ><?php  echo  $p["heading"];?></option><?php }} ?>
                      </select>
                      </div>
                    </div>
                    <div class="col-lg-3 paddinglr2">
                    <div class="form-group"><label>Quantity</label><input onkeyup="sum1()" id="product_quantity"  class="quantity form-control"  type="number" name="product_quantity" />
                    </div>
                    </div>
             </div>
         <div class="row">
         
              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Temperature</label><input class="form-control" id="product_temperature"   type="number" name="product_temperature"    />
              </div>
              </div>
              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Gravity</label>
              <input id="product_gravity" class="form-control"  type="number" name="product_gravity"   />
              </div>
              </div> 
              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Freight Rate</label>
              <input id="freight_rate" class="form-control"   type="number" id="freight_rate" name="freight_rate"   />
              </div> 
              </div>
              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Carriage Commission</label><input id="carriage_commission" class="form-control"  type="number" name="carriage_commission"  />
              </div>
              </div>

          </div>

          <div class="row">

              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Withholding Tax</label><input class="form-control" id="withholding_tax" type="number" name="withholding_tax"   />
              </div>
              </div>

              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Company Comission</label><input onkeydown="sum1()"  id="companycommission" class="form-control companycommission"     type="number" name="company_comission"  />
              </div>
              </div>

              <div class="col-lg-3 paddinglr2">
              <div class="form-group"><label>Remaining (For Customer)</label><input class="form-control" id="remaining_commission"  type="number" name="remaining_commission"  readonly /><span ></span>
              </div>  
              </div>
              
              <div  class="col-lg-3 paddinglr2">
              <a id="add_pro" style="margin-top:25px; " class="remove_field btn btn-success">Add Product</a>
              </div>

            </div>
          

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
                            <label>Driver</label>


                          <select class="form-control driver" name="driver[]">

                             <option value="">Select Options</option>       
                              <?php if(!empty($driver1)){
                              foreach ($driver1 as $v){  ?>      
                              <option value="<?php  echo  $v["id"];?>"   >
                              <?php  echo  $v["name"];?>
                              </option>               
                              <?php }} ?>
                          </select>
                        </div>  
                        
                        <div class="col-md-2 paddinglr5">  
                         <button href="javascript:" style="margin-top: 30px" id="driver1" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    <div class="paddinglr0" id="driver_1"></div>


                     <div class="form-group paddinglr5">                      
                        <div class="col-md-10 paddinglr5">
                            <label>Helper</label>

                <select  class="form-control" name="helper[]" >

                             <option value="">Select Options</option>       
                              <?php if(!empty($helperinformation)){
                              foreach ($helperinformation as $v){  ?>      
                              <option value="<?php  echo  $v["id"];?>"   >
                              <?php  echo  $v["name"];?>
                              </option>               
                              <?php }} ?>
                          </select>
                        </div>  

                        <div class="col-md-2 paddinglr5">  
                         <button style="margin-top: 30px" id="addhelper" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                      </div>
                         
                        

                    <div class="paddinglr0" id="add_helper"></div>

                </div>
                <!-- panel-body -->
              </div>
              <!-- panel panel-default -->
            

 
            <div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-clock-o" aria-hidden="true"></i> Date</div>
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
                      <label>Filling date</label>
                      <input class="form-control" type="date" name="filling_date" value="<?php echo $date; ?>" >
                    </div> 


                    <div class="form-group">    
                        <label>Filled By</label>

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

            <div class="col-lg-12 col-md-12 col-sm-12">
                <input id="trip_save" class="btn btn-primary" type="submit" name="register" value="Save Trip" />
            </div>  

        </form>
     </div>
  <!-- box-body -->
   </div>
  <!-- box -->
</section>

  <!-- =================================================    -->




<script>
    function sum1()
          {
   //    document.getElementById('2d').innerHTML =document.getElementById("quantity").value;
//alert("#2d");
//        document.getElementById('2d').innerHTML =document.getElementById("result").value;
 //alert(2d);      
//    document.getElementById('4d').innerHTML =document.getElementById("numb").value;
       // document.getElementById('customertype').innerHTML =document.getElementById("customertype").value;
 // alert("hi");
// var name= $('.product').val();
// var name1= $('.companycommission').val();
//alert(name1);
      //var quantity = document.getElementsByName("quantity")[0].value;
      //var discountPrct = document.getElementsByName("percent")[0].value;
//             var total = document.myform.quantity.value;
   //alert(quantity);
  //           var n = document.myform.number1.value;
          //   alert(n);
    //   var sum11 = parseInt(name)*parseInt(name1);
//document.getElementsByClassName('sum1')[0].value=sum11;            
    // document.myform.b.value = sum1;
//alert(sum1[0].value);   
   }


</script>
<!-- <input type="hidden" onkeydown="sum1()">                   
<label Class="c"></label>
<label Class="c1"></label>
<label Class="sum1"></label> -->


<script>
$('.sel').select2({
      // tags: "true",
    // minimumResultsForSearch: 20 ,
    selectOnClose: true,
   placeholder: "Select an option",
    allowClear: true

});

</script>
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
            $(wrapper).append('<div class="form-group paddinglr5"><div class="col-md-10 paddinglr5"><label>Helper</label><select class="form-control sel" name="helper[]" required><option value="">Select Options</option><?php if(!empty($helperinformation)){  foreach ($helperinformation as $v){  ?><option value="<?php  echo  $v["id"];?>"   ><?php  echo  $v["name"];?></option><?php }} ?></select></div><div class="col-md-2 paddinglr5"><button  style="margin-top: 30px" id="helper"><i class="fa fa-minus" aria-hidden="true"></i></button></div></div>'); 
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

              // end_meter_reading: {
              //      trigger:'change  blur',
              //       validators: {
              //           notEmpty: {
              //               message: 'field  is required and cannot be empty'
              //           }
              //       }
              //   },

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

<script>
//   $(document).on('keyup','#freight_rate',function(){
//     var freight=$(this).val();
//     var quantity=$(this).parent().parent().parent().find('.quantity').val();
// //    var price=$(this).parent().parent().parent().find('.price').val();
//     var remaining=$(this).parent().parent().parent().find('.remaining');
//     //console.log(remaining);
//     //console.log(freight,quantity,price);
//     remaining.val((parseFloat(quantity)*parseFloat(freight)*(100))/(100));
    
//   });
//   $(document).on('keyup','.quantity',function(){
//     var quantity=$(this).val();
//     var freight=$(this).parent().parent().parent().find('#freight_rate').val();
//     var price=$(this).parent().parent().parent().find('.price').val();
//     var remaining=$(this).parent().parent().parent().find('.remaining');
    
//     remaining.val((parseFloat(quantity)*parseFloat(freight)*(100))/(100));
    
//   });
// });



// $(document).ready(function() {
//   $(document).on('change','#pro',function(event) {
//      var id =  $(this).val();
//    var pro=$(this);

     
//     $.ajax({
//       url: '<?php echo base_url(); ?>Vehicle/get_productprice_by_id/'+id,
//       type: 'POST',
//       success:  function (response) {
//       var result = eval(response);
    
//     var price=pro.parent().parent().parent().find('.pro_info');
//     console.log(price);
//     pro_info = "<input type='hidden' class='price' value='"+result['price']+"' />";
//   //  pro_info = "<div><p>Product Price&nbsp <input type="text" /></p></div>"

//    price.html(pro_info);}
//     })
//   });
// });



   // $(document).ready(function(){
    //     $("#p").keyup(function(){
    //         alert($(this).val());
    //     });
    // })

</script>