<style> 
.content{
  height: 150vh !important;
 } 

</style>

<section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box">

                <div class="box-header">
                  <h3 class="box-title">Edit Vehicle</h3>
                </div>
          <form id="defaultForm" action="<?php echo base_url('Vehicle/edit_vehicle_save')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="box-body">
                      <div class="form-group">
                      <label class="control-label col-sm-3">Vehicle Type:</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="vehicle_type"  required >                  
                            <?php if(!empty($vehicletype)){ ?>
                            <option value="" > Select Options</option> 
                            <?php   foreach ($vehicletype as $v){ 
                              if($vehicle[0]['vehicle_type']==$v['id']){
                                ?>
                                <option value="<?php  echo  $v["id"]; ?>" selected="selected" ><?php  echo  $v["heading"]; 'selected'?></option>
                                <?php
                              }
                              else{
                                ?>
                             <option value="<?php  echo  $v["id"]; ?>" ><?php  echo  $v["heading"]; ?></option>         
                              <?php
                              }
                               }
                                }
                                 ?>             
                        </select>
                       </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-sm-3">Registration No:</label>
                      <div class="col-sm-9">

                        <input class="form-control"  type="text" name="registerationno" value="<?php echo $vehicle[0]['registerationno'] ; ?>"  placeholder="Registration no...." class="form-control num"  required="required"/></div> </div>
                      
                   
                      <div class="form-group">

                       <label class="control-label col-sm-3">chassis no:</label>
                        <div class="col-sm-9">
                        <input class="form-control"  type="text" name="chassisno" value="<?php echo $vehicle[0]['chassisno'] ; ?>" placeholder="Chassis no...." required="required"  />
                        </div> </div>
 
                      <div class="form-group">
                       <label class="control-label col-sm-3">Engine No:</label>
                        <div class="col-sm-9">
                        <input class="form-control"  type="text" name="engineno" value="<?php echo $vehicle[0]['engineno'] ; ?>" placeholder="Engine no...."  required="required" />
                        </div> </div> 

                      <div class="form-group">
                       <label class="control-label col-sm-3">No Of Chamber:</label>
                        <div class="col-sm-9">
                        <input name="numberofchamber" value="<?php echo $vehicle[0]['numberofchamber1'] ; ?>" placeholder="Number of chamber...." class="form-control txt_name"  onkeypress='return ValidateNumberOnly()' type="text" required="required"  /> </div></div> 
                              
                     <div class="form-group">            
                   <label class="control-label col-sm-3">Total Fuel Capacity:</label>
                        <div class="col-sm-9">
                        <input class="form-control" id="tfc"  value="<?php echo $vehicle[0]['totalfuelcapacity'] ; ?>" type="text" name="totalfuelcapacity" placeholder=""  onkeypress='return ValidateNumberOnly()' required="required" readonly /> </div> </div>  
                            
                         <div class="form-group">     
                         <label class="control-label col-sm-3">Color:</label>
                        <div class="col-sm-9">               
                        <input class="form-control" type="text" value="<?php echo $vehicle[0]['color'] ; ?>" name="color" onkeypress="return maskAlphaWithSp(this,event);" placeholder="Color...."  required="required" /> </div></div>
                       
                         <div class="form-group"> 
                        <label class="control-label col-sm-3">Company:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  type="text" value="<?php echo $vehicle[0]['company'] ; ?>" onkeypress="return maskAlphaWithSp(this,event);" name="company" placeholder="Company...."  required="required" /></div></div>
                                

                         <div class="form-group">    
                        <label class="control-label col-sm-3">Model:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  type="text" name="model" value="<?php echo $vehicle[0]['model'] ; ?>"  placeholder="Model...."  /> </div> </div>
                         
                       <div class="form-group"> 
                        <label class="control-label col-sm-3">Vehicle Image:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control" name="vehicleimage" type="file" id="file" /></div></div>
 
                         <div class="form-group">
                        <label class="control-label col-sm-3">Scan Document:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  name="scanimage" id="file" type="file" /> </div> </div> 
                     
                         <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3"> 
                               <input class="btn btn-success" type="submit" name="register" value="submit" />
                               <input class="btn btn-warning" type="reset" name="reset" value="Reset" />
                               <a class="btn btn-danger" href="<?php echo base_url() ?>Vehicle/show_vehicle">Cancel</a>
                           </div>
                        </div>                         
                    
                </div>
            </div>
        </div>

            <div class="col-lg-5">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Chambers</h3>
                    </div>
                    <div class="box-body">
                        <div class="input_fields_wrap"></div>
                    </div>
                </div>
            </div> <!-- col-lg-6 -->
    </div>
        </form>


 </section>
 
 

 
<script type="text/javascript">
    $(document).ready(function(){
    
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        
        $(".txt_name").keyup(function(){ 
        var  $num = $(this).val();
        if ($num== "") {
        $('#tfc').val("");
        } 
        var chamber= "";
        for($i=1; $i<=$num; $i++){
            chamber+='<div class="row"><div class="col-lg-3"><span style="color:red; font-size:20px; font-weight:bold;"></span><label>chamber '+$i+'</label></div><div class="col-lg-7"><input value="Chamber '+$i+'" text-align:center; readonly class="form-control" style="width:95%; float:left;margin-top:10px;" type="text" name="numberofchamber[]" required="required"/></div><div class="col-lg-3"><label>capacity '+$i+'</label></div><div class="col-lg-7"><input class="form-control fc" id="fc'+$i+'" style="width:95%; float:left;margin-top:10px;" type="text" name="capacityofchamber[]" required="required"/></div></div>'; //add input box    
            }
            $(wrapper).html(chamber);
      
        });

        var  $num = $(".txt_name").val();
        if ($num== "") {
        $('#tfc').val("");
        } 
        var chamber= "";
        for($i=1; $i<=$num; $i++){
            chamber+='<div class="row"><div class="col-lg-3"><span style="color:red; font-size:20px; font-weight:bold;"></span><label>chamber '+$i+'</label></div><div class="col-lg-7"><input value="Chamber '+$i+'" text-align:center; readonly class="form-control" style="width:95%; float:left;margin-top:10px;" type="text" name="numberofchamber[]" required="required"/></div><div class="col-lg-3"><label>capacity '+$i+'</label></div><div class="col-lg-7"><input class="form-control fc" id="fc'+$i+'" style="width:95%; float:left;margin-top:10px;" type="text" name="capacityofchamber[]" required="required"/></div></div>'; //add input box    
            }
            $(wrapper).html(chamber);


    });
      
</script>
<script>
  $(document).on("keyup", ".fc", function () {
 
    var sum = 0;

    $('.fc').each(function() {
        sum += Number($(this).val());
    });
     
    $('#tfc').val(sum);
     
});
</script>
<script src="<?php echo base_url()?>assets/commonFormValidator.js" type="text/javascript"></script>
<script>
function maskAlphaWithSp(obj, e) {
  var code = e.charCode ? e.charCode : e.keyCode;
  if (!isAlphaCharCodeWithSpaces(code) ||  code == 38 || code == 35 || code == 36 || code == 37 || code == 39 || code == 40 || code == 46) {
    return false;
    }
    return true;
  
}
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
    $('#defaultForm')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                vehicle_type: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The vehicle type Field  is required and cannot be empty'
                        }
                    }
                },
                registerationno: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Registration No Field is required and cannot be empty'
                        }
                    }
                },
                chassisno: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Price Field  is required and cannot be empty'
                        }
                    }
                },
              engineno: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Engine no Field  is required and cannot be empty'
                        }
                    }
                },
               numberofchamber: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Number of chamber Field  is required and cannot be empty'
                        }
                    }
                },

        'capacityofchamber[]': {
                   trigger:'change keyup  blur',
                    validators: {
                        notEmpty: {
                            message: 'The chamber Field  is required and cannot be empty'
                        }
                    }
                },



              color: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Color Field is required and cannot be empty'
                        }
                    }
                },
              company: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Company Field  is required and cannot be empty'
                        }
                    }
                },
              model: {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The Model Field is required and cannot be empty'
                        }
                    }
                },
            }
        });
});


</script>