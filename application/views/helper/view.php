<section class="content">
      <div class="row">
      
        <div class="col-md-12" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Helper Information</h3>
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
                             <td style="padding-right:170px"><?php if(isset($view)){echo ucfirst($view->name);}  ?></td>
                      </tr>
                        
                        <tr>
                       <td><strong>Address:</strong></td>
                       <td><?php if(isset($view)){echo ucfirst($view->address);}  ?></td>
                      </tr>
                      
                      <td><strong>Phone Number:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->number);}  ?>
                        </td>
                      
                        <tr>
                       <td><strong>Religion:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->religion);}  ?></td>
                      </tr>
                      
                        <tr>
                       <td><strong>Date of Birth:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->dob);}  ?></td>
                      </tr>
                      
                      
                        <tr>
                       <td><strong>Date of Joining:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->doj);}  ?></td>
                      </tr>
                      
                      
                       <tr>
                       <td><strong>Cnic:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->cnic);}  ?></td>
                      </tr>
                     
                       <tr>
                       <td><strong>Driver License:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->dl);}  ?></td>
                      </tr>
                     

                        
                      <tr>
                       <td><strong>Created At:</strong></td>
                       <td><?php if(isset($view)){echo ucfirst($view->createdAt);}  ?></td>
                      </tr>
                      
                      <td><strong>Created By:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->first." ".$view->last);}  ?>
                        </td>
                      
                       
                        <tr>
                       <td><strong>Modified At:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->modifiedAt);}  ?></td>
                      </tr>
                      
                      
                        <tr>
                       <td><strong>Modified By:</strong></td>
                        <td><?php if(isset($view)){echo ucfirst($view->first." ".$view->last);}  ?></td>
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
                 
                <a type="submit" name="register" href='<?php echo base_url()?>Defination/index'; class="btn btn-danger"><i class="fa fa-reply"></i></a>
                 <a class="btn btn-primary" float:right href="<?php echo $base_url; ?>Defination/printhelper/<?php echo $view->id; ?>" target="_blank"><i class="fa fa-print"></i></a>
                 
                 
                 
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



