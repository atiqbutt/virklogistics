
           
            <?php
            if(!empty($tripmanagement)){
            foreach($tripmanagement as $amb){ 
               if ($amb['status'] == 0 ){ ?>
                 
                <tr class="odd gradeX" style="background: #98FB98">
                  <?php }else {?>
                                  <tr class="odd gradeX" >
                                    <?php } ?>
                
                <td> <?php echo $amb["id"];?>  </td>
                <td> <?php echo $amb["type"];?>  </td>
                <td> <?php echo $amb["productname"];?>  </td>
                <td> <?php echo $amb["comname"];?>  </td>
                <td> <?php echo $amb["conname"];?>  </td>
                <td> <?php echo $amb["source"];?>  </td>
                <td> <?php
                $newDate = date("d/m/Y", strtotime($amb["filling_date"]));
                 echo $newDate;?> </td>
                <td> <?php echo $amb["temperature"];?> </td>
                <td> <?php echo $amb["start_meter_reading"];?> </td>
                <td> <?php echo $amb["gravity"];?> </td>
                <td> <?php echo $amb["vehicleregisterationno"];?> </td>
                <td> <?php echo $amb["quantity"];?> </td>
                <td> <?php echo $amb["freight_rate"];?> </td>
                <td> <?php echo $amb["carriage"];?> </td>
                <td> <?php echo $amb["withholdingtax"];?> </td>
                <td> <?php echo $amb["remaining_commission"];?> </td>
                <td> <?php echo $amb["servicecharges"];?></td>
            
                      
<!--                    <td>
                      <?php if ($amb["status"]=="0"){?>                  
                      <a style="font-size:18px;" class="text-custom1" href="<?php echo base_url();?>trip/states/<?php echo $amb['id'];?>">
                      <i class="fa fa-check"></i></a>
                      <?php } elseif($amb["status"]=="1") {?>
                      <a class="text-custom1" href="<?php echo base_url();?>trip/active/<?php echo $amb['id'];?>"><i class="fa fa-window-close-o" aria-hidden="true"></i></a>
                      <?php } ?>                
                   </td>
                   <td>
                      <a style="font-size:18px;" href="<?php echo base_url();?>trip/close_trip/<?php echo $amb['id'];?>"><i class="fa fa-window-close" aria-hidden="true"></i></a> 
                    </td> -->
                    <td>

                      <div  class="" data-backdrop="static" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                       <a href="#"><i  style="font-size:18px; color:#3C8DBC;" class="fa fa-flask" aria-hidden="true"></i></a>
                      </div>


                        <form name="myform" id="myform" action="<?php echo base_url() ?>trip/expenseadd/<?php echo $amb['id'];?>" method="post" enctype="multipart/form-data">

                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
<input type="hidden" name="id" value="<?php echo $amb['id']?>">
                          
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Add New Expense</h4>
                        </div>
                        <div class="modal-body">
                        <!-- <?php //echo $amb['id'];?> -->
                         
                                  <div class="col-lg-12">
                                        <div class="col-md-10">
                                            <label>Expense Type</label>

                                          <select  class="form-control alertbox" name="" id="Expense" required>
                                             <option value="">Select Options</option>       
                                              <?php if(!empty($expensetype)){
                                              foreach ($expensetype as $e){  ?>      
                                              <option value="<?php  echo  $e["id"];?>"   >
                                              <?php  echo  $e["name"];?>
                                              </option>               
                                              <?php }} ?>
                                          </select>
                                        </div>  

<!--                                         <div class="col-md-10"><label>Expense Amount</label><input name="amount[]" type="text" class="form-control"></div> -->

                                        <div class="col-md-2">  
                                         <button style="margin-top: 30px" id="addhelper" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                  </div>


                                  <div class="col-lg-12" style="margin-top:20px;">       
                                    <div id="add_helper"></div>
                                  </div>

                                  <br />

                                <div class="modal-footer" style="padding-top:20px;margin-top:20px;">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <input id="add" class="btn btn-primary" value="add">
                                </div>

                                </div>
                              </div>
                            </div>
                        </form> 

                     </td>
                </tr>
  
            <?php } }?>

               
            