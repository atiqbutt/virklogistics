<section class="content">
      <div class="row">
      
        <div class="col-md-12" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Vehicle Information</h3>
            </div>

            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3" align="center">
                   <?php if (empty($view->image1)): ?>
                    <img src="<?php echo base_url() ?>assets/Images/placeholder.jpg">   
                  <?php else : ?>
                   <img alt="User Pic" src="<?php echo base_url().$view->image1; ?>" width="300" height="400" class="img-responsive img-thumbnail">
                 <?php endif ?>
                 </div>
                
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     
                         <tr>
                             <td><strong>Name:</strong></td>
                             <td style="padding-right:170px"><?php if(isset($view)){echo ucfirst($view->heading);}  ?></td>
                      </tr>
                        
                        <tr>
                       <td><strong>Vehicle Type:</strong></td>
                       <td><?php if(isset($view)){echo ucfirst($view->vehicle_type);}  ?></td>
                      </tr>
                      
                      <td><strong>Registration No:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->registerationno);}  ?>
                        </td>
                      
                       
                        <tr>
                       <td><strong>Chasis No:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->chassisno);}  ?></td>
                      </tr>
                      
                      
                        <tr>
                       <td><strong>Engine No:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->engineno);}  ?></td>
                      </tr>
                      
                      
                       <tr>
                       <td><strong>Number Of Chamber:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->numberofchamber1);}  ?></td>
                      </tr>


                        <tr>
                       <td><strong>Capacity Of Chamber:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->capacityofchamber);}  ?></td>
                      </tr>

                       <tr>
                       <td><strong>Total Fuel Capacity:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->totalfuelcapacity);}  ?></td>
                      </tr>


                       <tr>
                       <td><strong>Colour:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->color);}  ?></td>
                      </tr>

                       <tr>
                       <td><strong>Company:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->company);}  ?></td>
                      </tr>

                       <tr>
                       <td><strong>Model:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->model);}  ?></td>
                      </tr>

                       <tr>
                       <td><strong>Vehicle Image:</strong></td>
                        <td>
                          <?php
                          if(!empty($view->vehicleimage))
                          {
                            ?>
                           <img src="<?php echo base_url().$view->vehicleimage?>">
                           <?php
                         }
                          else{
                            ?>
                        <img src="">  
                        
<?php
}
?>                          
                      </tr>

                       

<tr>
                       <td><strong>Status:</strong></td>
                        <td>
                          <?php

                          $status=$view->st;
                          if($status==0)
                          {
                            ?>
                             <h4 style="color:red;"><span class="abel label-success">Active</span></h4>
                          <?php
                        
                      }
                        else{
                          ?>
                            <h4 style="color:red;"><span class="label label-danger">De Active</span></h4>
                        <?php
                      }

                          ?>

                        </td>
                      </tr>
                  
                     
                    
                     
                    </tbody>
                  </table>
                    <a type="submit" name="register" href='<?php echo $base_url()?>Vehicle/show_vehicle'; class="btn btn-danger"><i class="fa fa-reply"></i></a>
                 <a class="btn btn-primary" float:right href="<?php echo $base_url; ?>Vehicle//<?php echo $view->id; ?>" target="_blank"><i class="fa fa-print"></i></a>
                 
                 
                 
                </div>
                <!-- col-md-9 col-lg-9 -->
              </div>
                   <!-- row -->        
            </div>
                <!--  panel-body -->
          </div>
          <!-- panel panel-info -->

        </div>
        <!-- col-md-12 -->
      </div>
   <!-- row -->


</section>


           