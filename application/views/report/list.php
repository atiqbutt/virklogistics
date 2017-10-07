
<style>
.content{
  background-color: #ecf0f5;
    height: 200vh !important;

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

.triplist th{

  background: #fff !important;
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
                        <select class="form-control sel" name="productid" id="producttype">
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
                        <select class="form-control sel" name="">
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
                            if($vechileid==$value['id']){
                              ?>
                                <option value="<?php echo $value['id']?>" selected="selected"><?php echo $value['heading']?></option>
                              <?php
                            }else{
                            
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['heading']?></option>
                          <?php
                        }}
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
                          <input class="form-control" type="date" style="border-radius:5px !important;border:1px solid grey !important" name=""/>
                         </div>
                      </div>



                </div>
               <!-- col-md-6 -->

                  <div class="col-md-6">

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Trip Type
                    </label>
                    <div class="col-md-9 col-sm-6 col-xs-12">
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
                     <select class="form-control" name="productname" id="productid" style="border-radius:5px !important;border:1px solid grey !important height:5px">
                        <option value="">Select Product</option>
                          
                        </select>
                        </div>
                    </div>

                    
                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contractor
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">                              
                        <select class="form-control sel" name="">
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
                        <select class="form-control sel" name="">
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
                        <select class="form-control sel" name="">
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
                        <input class="form-control" style="border-radius:5px !important;border:1px solid grey !important" type="date"  name=""/>
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
  <div class="box-body "  id="list">
 <a href="#" id="btn-print" class="btn btn-default pull-right actions" data-toggle="tooltip" title="Print" data-placement="bottom" style="margin-top:10px"><i class="fa fa-print"></i></a>
<table class="table table-bordered p" style="width:2100px;border:2px solid grey" >
  <thead style="background-color:#0292e0;color:white;border:1px solid grey">
    <tr class="triplist l">
      <th> <input type="checkbox" value="col1"   name="col1" checked></th>
      <th> <input type="checkbox" value="col2"   name="col2"  checked></th>
      <th> <input type="checkbox" value="col3"   name="col3"  checked></th>
      <th> <input type="checkbox" value="col4"   name="col4"  checked></th>
      <th> <input type="checkbox" value="col5"   name="col5"  checked></th>
      <th> <input type="checkbox" value="col6"   name="col6"  checked></th>
      <th> <input type="checkbox" value="col7"   name="col7"  checked></th>
      <th> <input type="checkbox" value="col8"   name="col8"  checked></th>
      <th> <input type="checkbox" value="col9"   name="col9"  checked></th>
      <th> <input type="checkbox" value="col10"  name="col10"  checked></th>
      <th> <input type="checkbox" value="col11"  name="col11"  checked></th>
      <th> <input type="checkbox" value="col12"  name="col12"  checked></th>
      <th> <input type="checkbox" value="col13"  name="col13"  checked></th>
      <th> <input type="checkbox" value="col14"  name="col14"  checked></th>
      <th> <input type="checkbox" value="col15"  name="col15"  checked></th>
      <th> <input type="checkbox" value="col16"  name="col16"  checked></th>
      <th> <input type="checkbox" value="col17"  name="col17"  checked></th>
      <th> <input type="checkbox" value="col18"  name="col18"  checked></th>
      <th> <input type="checkbox" value="col19"  name="col19"  checked></th>
      <th> <input type="checkbox" value="col20"  name="col20"  checked></th>
      <th> <input type="checkbox" value="col21"  name="col21"  checked></th>
      <th> <input type="checkbox" value="col22"  name="col22"  checked></th>
    </tr>
    <tr>
      <th class="col1">#</th>
      <th class="col2">Type</th>
      <th class="col3">P Name</th>
      <th class="col4">Meter Reading</th>
       <th class="col5">Filling Date</th>
      <th class="col6">Gravity</th>
       <th class="col7">Carriage</th>
      <th class="col8">W.H.T</th>
       <th class="col9">Temperature</th>
      <th class="col10">Freight rate</th>
       <th class="col11">Quantity</th>
      <th class="col12">Charges</th>
       <th class="col13">Remaining Commission</th>
      <th class="col14">Status</th>
       <th class="col15">Vehicle Reg</th>
      <th class="col16">Chasis No</th>
       <th class="col17">Vehicle Name</th>
      <th class="col18">Engine</th>
       <th class="col19">Source</th>
      <th class="col20">Destination</th>
       <th class="col21">Company</th>
      <th class="col122">Name</th>
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
      <td><?php echo $i ?></td>
      <td class="col1"><?php echo $value['type']?></td>
      <td class="col2"><?php echo $value['productname']?></td>
      <td class="col3"><?php echo $value['meter_reading']?></td>
      <td class="col4"><?php echo $value['filling_date']?></td>
      <td class="col5"><?php echo $value['gravity']?></td>
      <td class="col6"><?php echo $value['carriage']?></td>
      <td class="col7"><?php echo $value['withholdingtax']?></td>
      <td class="col8"><?php echo $value['temperature']?></td>
      <td class="col9"><?php echo $value['freight_rate']?></td>
      <td class="col11"><?php echo $value['quantity']?></td>
      <td class="col12"><?php echo $value['servicecharges']?></td>
      <td class="col13"><?php echo $value['remaining_commission']?></td>
      <td class="col14"><?php echo $value['status']?></td>
      <td class="col15"><?php echo $value['vehicleregisterationno']?></td>
      <td class="col16"><?php echo $value['vehiclename']?></td>
      <td class="col17"><?php echo $value['vehicleengineno']?></td>
      <th class="col18"><?php echo $value['vehicleengineno']?></th>
      <td class="col19"><?php echo $value['source']?></td>
      <td class="col20"><?php echo $value['destination']?></td>
      <td class="col21"><?php echo $value['comname']?></td>
      <td class="col22"><?php echo $value['conname']?></td>


    </tr>
  
    <?php $i +=1;  }  ?>

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
<script src="<?php echo base_url() ?>assets/dist/js/jQuery.print.js"></script>
<script type="text/javascript">
$(document).on('change','#producttype',function(){
var prod=$('#producttype').val();
 $.post("<?php echo base_url(); ?>Report/changeproduct/"+prod,{},function(data){
      $("#productid").html('');
      $("#productid").html(data);


})
});



$("#btn-print").click(function () {
           
             var tripData = [];
            $.each($("input:checkbox:not(:checked)"), function(){            
              dat="."+$(this).val();
              $(dat).hide();
            });
            $(".l").hide();
            $(".p").print();
            $.each($("input:checkbox:not(:checked)"), function(){            
              dat="."+$(this).val();
              $(dat).show();
            });
            $(".l").show();
            $(".col1").show();
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






