
<style>
.content{
  background-color: #ecf0f5;
}

body    {
  overflow-x:scroll;
  background-color: #ecf0f5 !important;
}

.wrapper{

  overflow-x:unset !important;
  overflow-y:unset !important;
}

.box{
border:none !important;
box-shadow:none !important;
}


#list{
   width: 100%;
}
td,th{
  border: 1px solid grey !important;
}

.content-wrapper{

  background-color: #fff !important;
}

</style>


 <section class="content" >
   <div class="row">
        <div class="col-lg-12" style="width: auto !important">
          <div class="box col-sm-3" >

            <div class="box-body">

             <div class="col-md-5">
                   <form class="form-horizontal" id="shippingForm"  onsubmit="return validateForm(this)" action="<?php echo base_url()?>Report/trip_reports" method="post" enctype="multipart/form-data">
                        
                    <div class="col-md-6">

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trip id
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                             <input class="form-control" type="text" placeholder="trip" name="id"/>
                       </div>
                      </div>

                     

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Type
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <select class="form-control sel" name="productname" id="type">
                           <option value="">Select Product Type</option>
                          <?php
                          foreach ($protype as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                       
                        </select>
                       </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Agent
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">                            
                        <select class="form-control sel" name="agent">
                        <option value="">Select Agent</option>
                         <?php
                          foreach ($agent as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                        </div>
                      </div>


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Driver
                      </label>
                      <div class="col-md-8 col-sm-6 col-xs-12">
                      <select class="form-control sel" name="driverid">
                      <option value="">Select Driver</option>
                       <?php
                          foreach ($driver as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                      </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">            
                        <select class="form-control sel" name="vechileid">
                        <option value="">Select Vehicle</option>
                         <?php
                          foreach ($vehicle as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['heading']?></option>
                          <?php
                        }
                          ?>
                        </select>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Source 
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <select class="form-control sel" name="sourceid">
                        <option value="">Select Source</option>
                        <?php
                          foreach ($source as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                         </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date From 
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input class="form-control" type="date" style="border-radius:5px !important;border:1px solid grey !important" name="datefrom"/>
                         </div>
                      </div>



                </div>
               <!-- col-md-6 -->

                  <div class="col-md-6">

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Trip Type
                    </label>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                      <select class="form-control" name="triptype">
                        <option value="">Select Trip Type</option>
                        <option value="Self-Short">Self-Short</option>
                        <option value="Self-Long">Self-Long</option>
                        <option value="General-Short">General-Short</option>
                        <option value="General-Long">General-Long</option>
                      </select>
                      </div>
                    </div>

                   <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product
                      </label>
                      <div class="col-md-9 col-sm-6 col-xs-12">
                     <select class="form-control" name="productid" id="productid" style="border-radius:5px !important;border:1px solid grey !important height:5px">
                        <option value="">Select Product</option>
                          
                        </select>
                        </div>
                    </div>

                    
                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contractor
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">                              
                        <select class="form-control sel" name="contractor_id">
                        <option value="">Select Contractor</option>
                         <?php
                          foreach ($contratctor as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Helper 
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">                                                    
                        <select class="form-control sel" name="helper">
                        <option value="">Select Helper</option>
                         <?php
                          foreach ($helper as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle Type
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                        <select class="form-control sel" name="vehicletype">
                        <option value="">Select Vehicle Type</option>
                        <?php
                          foreach ($vehicletype as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['heading']?></option>
                          <?php
                        }
                          ?>
                        </select>
                      </div>
                    </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Destination 
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                          <select class="form-control sel" name="destinationid">
                        <option value="">Select Destination</option>
                         <?php
                          foreach ($source as $value) {
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                          <?php
                        }
                          ?>
                        </select>
                         </div>
                      </div>



                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date To
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                        <input class="form-control" style="border-radius:5px !important;border:1px solid grey !important" type="date"  name="dateto"/>
                      </div>
                      </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Company
                             </label>
                            <div class="col-md-9 col-sm-6 col-xs-12">         
                              <select class="form-control sel" name="companyid">
                              <option value="">Select Company</option>
                               <?php
                                  foreach ($comp as $value) {
                                    ?>
                                    <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                                  <?php
                                }
                                  ?>
                               </select>
                            </div>
                          </div>

                        </div>
                        <!-- col-md-6 -->

                        <div class="row">
                          <div class="col-md-6 col-md-offset-5">
                            <input class="btn btn-success" type="submit" name="register" value="submit" />
                          </div>
                        </div>


                    </div>
                    <!-- col-md-12 -->  
            </div>
            <!-- body -->
         
       </form>
    
  
  
  <div class="row">

  <div class="box-header">
    <h3 class="box-title"><b>List </b></h3>
  </div>
   

  <!-- /.box-header -->
  <div class="box-body"  id="list">
 
<table class="table table-bordered" style="width:2100px;border:2px solid grey" >
  <thead style="background-color:#0292e0;color:white;border:1px solid grey">
    <tr>
      <th>#</th>
      <th>Type</th>
      <th>P Name</th>
      <th>Meter Reading</th>
       <th>Filling Date</th>
      <th>Gravity</th>
       <th>Carriage</th>
      <th>W.H.T</th>
       <th>Temperature</th>
      <th>Freight rate</th>
       <th>Quantity</th>
      <th>Charges</th>
       <th>Remaining Commission</th>
      <th>Status</th>
       <th>Vehicle Reg</th>
      <th>Chasis No</th>
       <th>Vehicle Name</th>
      <th>Engine</th>
       <th>Source</th>
      <th>Destination</th>
       <th>Company</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody >
    <?php
      $i=1;foreach ($data as $value)  { 
        if($i%2==1){
                            ?>

   
    <tr class="odd gradeX" style="background-color:#ffffff;border:1px solid black">
<?php
}else{?>
    <tr class="odd gradeX" style="background-color:#f4f4f4">
      <?php }?>
      <td><?php echo $i?></td>
      <td><?php echo $value['type']?></td>
      <td><?php echo $value['productname']?></td>
      <td><?php echo $value['meter_reading']?></td>
      <td><?php echo $value['filling_date']?></td>
      <td><?php echo $value['gravity']?></td>
      <td><?php echo $value['carriage']?></td>
      <td><?php echo $value['withholdingtax']?></td>
      <td><?php echo $value['temperature']?></td>
      <td><?php echo $value['freight_rate']?></td>
      <td><?php echo $value['quantity']?></td>
      <td><?php echo $value['servicecharges']?></td>
      <td><?php echo $value['remaining_commission']?></td>
      <td><?php echo $value['status']?></td>
      <td><?php echo $value['vehicleregisterationno']?></td>
      <td><?php echo $value['vehiclename']?></td>
      <td><?php echo $value['vehicleengineno']?></td>
      <th><?php echo $value['vehicleengineno']?></th>
      <td><?php echo $value['source']?></td>
      <td><?php echo $value['destination']?></td>
      <td><?php echo $value['comname']?></td>
      <td><?php echo $value['conname']?></td>


    </tr>
    <?php
    $i +=1;
  }
  ?>
   
  </tbody>
</table> 




                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
            </section>

<script type="text/javascript">
$(document).on('change','#type',function(){
var prod=$('#type').val();
 $.post("<?php echo base_url(); ?>Report/changeproduct/"+prod,{},function(data){
      $("#product").html('');
      $("#product").html(data);


})
});

function validateForm(form) {
  
  var isValid=false;
  $("form").eq(0).find(':text').each(function() {
    if(this.value!=undefined && this.value!= "")
    {
      isValid=true;
      return false;
    }
  });
  
  $("form").eq(0).find(':selected').each(function() {
    if(this.value!=undefined && this.value!= "")
    {
      isValid=true;
      return false;
    }
  });
  
  if(!isValid){
    alert("Kindly provide some search criteria");
    return false;
  }
}


</script>
</div>
</section>



<script>
$('.sel').select2({
      // tags: "true",
    // minimumResultsForSearch: 20 ,
    selectOnClose: true,
   placeholder: "Select an option",
    allowClear: true

});

</script>



</script>


