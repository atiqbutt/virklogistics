 
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


/*html, body{
    width: 100%; height: 100%;
    margin: 0; padding: 0;
}*/

.content-wrapper{

  background-color: #fff !important;
}

</style>


 <section class="content" >

<div class="row">
        <div class="col-lg-12" style="width: auto !important">
          <div class="box col-sm-3" >

                <div class="row">
           <div class="col-md-12">
          
        <div class="col-xs-12">
          <div class="box col-sm-12">
            <div class="box-header" >
           
              <h3 class="box-title">Filter</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="col-md-12">
                   <form class="form-horizontal" id="shippingForm" action="<?php echo base_url()?>Defination/" method="post" enctype="multipart/form-data">
                        
                    <div class="col-md-6">

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trip id
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control" type="text" placeholder="trip" name="tripid"/>
                       </div>
                      </div>

                     

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Type
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="producttype" id="producttype">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                        <select class="form-control" name="agent">
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
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="driver">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">            
                        <select class="form-control" name="vehicle">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="source">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" type="date" name="datefrom"/>
                         </div>
                      </div>
                    
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         </div>
                      </div>

                        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-9">
                          <input class="btn btn-success" type="submit" name="register" value="submit" />
                          
                        </div>
                      </div>


                    
                    
                    


                    </div>

                       <div class="col-md-6">



               <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Trip Type
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
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
                    <div class="col-md-6 col-sm-6 col-xs-12">
                   <select class="form-control" name="product" id="product">
                      <option value="">Select Product</option>
                        
                      </select>
                      </div>
                      </div>

                    
                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contractor
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                        <select class="form-control" name="contractor">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">                                                    
                        <select class="form-control" name="helper">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="vehicletype">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="destination">
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control" type="date"  name="dateto"/>
                      </div>
                      </div>

<<<<<<< HEAD
=======

                     


                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Company
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                                                    
                      <select class="form-control" name="company">
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




                       



                    

                       

>>>>>>> 81dc6296cb281bc0f67bb7fd4be835064a8f49f2
                    </div>
            
                      </form>
                </div>
                
                
                
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
            
  <div class="box-header">
    <h3 class="box-title"><b>List </b></h3>
  </div>
   

  <!-- /.box-header -->
  <div class="box-body"  id="list">
 
<table class="table table-bordered" >
  <thead>
    <tr>
      <th>#</th>
      <th>Type</th>
      <th>P Name</th>
      <th>Meter Reading</th>
       <th>Filling Date</th>
      <th>Gravity</th>
       <th>Carriage</th>
      <th>Holding Tax</th>
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
  <tbody>
    <?php
      $i=1;foreach ($data as $value)  { 
                            ?>

    <tr class="odd gradeX">
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
      <td><?php echo $value['source']?></td>
      <td><?php echo $value['destination']?></td>
      <td><?php echo $value['comname']?></td>
      <td><?php echo $value['conname']?></td>


    </tr>
    <?php
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
            

<script type="text/javascript">
$(document).on('change','#producttype',function(){
var prod=$('#producttype').val();
 $.post("<?php echo base_url(); ?>Report/changeproduct/"+prod,{},function(data){
                        $("#product").html('');
                        $("#product").html(data);


})
});

<<<<<<< HEAD

</section>
=======
</script>
>>>>>>> 81dc6296cb281bc0f67bb7fd4be835064a8f49f2
