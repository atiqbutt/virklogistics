<style> 
.content{
  height: 150vh !important;
 } 
</style>
<form id="defaultForm" action="<?php echo base_url('Vehicle/save_vehicle')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
<section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box">

                <div class="box-header">
                  <h3 class="box-title">Add Vehicle</h3>
                </div>
                
                <div class="box-body">
                      <div class="form-group">
                      <label class="control-label col-sm-3">Vehicle Type:</label>
                      <div class="col-sm-9">
                        <select class="form-control sel" name="vehicle_type" selected="selected" required >                  
                            <?php if(!empty($vehicletype)){ ?>
                            <option value="" >Select Options</option> 
                            <?php   foreach ($vehicletype as $v){ ?>        
                            <option value="<?php  echo  $v["id"]; ?>" ><?php  echo  $v["heading"];?></option>         
                            <?php } } ?>             
                        </select>
                       </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-sm-3">Registration No:</label>
                      <div class="col-sm-9">

                        <input class="form-control"  type="text" name="registerationno"  placeholder="Registration no...." class="form-control num"  required="required"/></div> </div>
                      
                   
                      <div class="form-group">

                       <label class="control-label col-sm-3">chassis no:</label>
                        <div class="col-sm-9">
                        <input class="form-control"  type="text" name="chassisno" placeholder="Chassis no...." required="required"  />
                        </div> </div>
 
                      <div class="form-group">
                       <label class="control-label col-sm-3">Engine No:</label>
                        <div class="col-sm-9">
                        <input class="form-control"  type="text" name="engineno" placeholder="Engine no...."  required="required" />
                        </div> </div> 

                      <div class="form-group">
                       <label class="control-label col-sm-3">No Of Chamber:</label>
                        <div class="col-sm-9">
                        <input name="numberofchambe" placeholder="1"  class="form-control txt_name"  onkeypress='return ValidateNumberOnly()' type="text" required="required"  /> </div></div> 
                              
                     <div class="form-group">            
                   <label class="control-label col-sm-3">Total Fuel Capacity:</label>
                        <div class="col-sm-9">
                        <input class="form-control" id="tfc"  type="text" name="totalfuelcapacity" placeholder=""  onkeypress='return ValidateNumberOnly()' required="required" readonly /> </div> </div>  
                            
                         <div class="form-group">     
                         <label class="control-label col-sm-3">Color:</label>
                        <div class="col-sm-9">               
                        <input class="form-control" type="text" name="color" onkeypress="return maskAlphaWithSp(this,event);" placeholder="Color...."  required="required" /> </div></div>
                       
                         <div class="form-group"> 
                        <label class="control-label col-sm-3">Company:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  type="text" onkeypress="return maskAlphaWithSp(this,event);" name="company" placeholder="Company...."  required="required" /></div></div>
                                

                         <div class="form-group">    
                        <label class="control-label col-sm-3">Model:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  type="text" name="model"  placeholder="Model...."  /> </div> </div>
                         
                       <div class="form-group"> 
                        <label class="control-label col-sm-3">Vehicle Image:</label>
                        <div class="col-sm-9"> 
                       
         
          <input type="file" name="vehicleimage" class="form-control">
                      </div></div>
 
                         <div class="form-group">
                        <label class="control-label col-sm-3">Scan Document:</label>
                        <div class="col-sm-9"> 
                        <input class="form-control"  name="doc[]" multiple="accept" type="file" required="required" /> </div> </div> 
                     
                           <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3"> 
                               <input class="btn btn-success" type="submit" name="register" value="Submit" />
                               <input id="resetbtn" class="btn btn-warning" type="reset" name="reset" value="Reset" />
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
                    <div class="row">
                      <div class="form-group"> 
                        <div class="col-sm-3 text-right"><label class="control-label">Chamber 1</label>
                        </div>
                         <div class="col-sm-8"><input value="Chamber" text-align:center; readonly class="form-control" type="text" name="numberofchamber[]" required="required"/>
                         </div>
                     </div>

                     <div class="form-group"> 
                        <div class="col-sm-3 text-right"><label class="control-label">capacity 1</label>
                        </div>
                         <div class="col-sm-8"><input class="form-control fc"  id="fc"  type="text" name="capacityofchamber[]" onkeypress="return ValidateNumberOnly()"
                               required="required"/>
                         </div>
                     </div>

                      </div>
                    
                  

                        <div class="input_fields_wrap">

 



                        </div>
                    </div>
                </div>
            </div> <!-- col-lg-6 -->
    </div>
        


 </section>
 </form>
            
        

 
 
<script type="text/javascript">
    $(document).ready(function(){
    
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
       
        
        $(".txt_name").keyup(function(){ 
        var  $num = $(this).val();
     if ($num== "") {

         $('#tfc').val("");
         } 
        var chamber= "";
        for($i=2; $i<=$num; $i++){

            chamber+='<div class="row">'+
            '<div class="form-group">'+
            '<div class="col-sm-3 text-right"><label class="control-label">Chamber '+$i+'</label>'+
            '</div>'+
            '<div class="col-sm-8">'+
          '<input value="Chamber '+$i+'" text-align:center; readonly class="form-control" type="text" name="numberofchamber[]" required="required"/>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+ 
            '<div class="col-sm-3 text-right"><label class="control-label">capacity '+$i+'</label>'
            +'</div>'+
            '<div class="col-sm-8"><input class="form-control fc"  id="fc'+$i+'"  type="text" name="capacityofchamber[]" onkeypress="return ValidateNumberOnly()" required="required"/>'
            +'</div>'+
            '</div>'+
            '</div>'; //add input box    
            }

            $appended = $(wrapper).html(chamber);
            $newfields = $appended.find('[name="capacityofchamber[]"]');
            $('#defaultForm').bootstrapValidator('addField',$newfields);
           
        });

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
                            message: 'The Chassis no Field  is required and cannot be empty'
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
                'capacityofchamber[]': {
                   trigger:'change keyup blur',
                    validators: {
                        notEmpty: {
                            message: 'The capacity of chamber is required and cannot be empty'
                        }
                    }
                }
            }
        });
});


$("#resetbtn").click(function(){
   $('#defaultForm').bootstrapValidator("resetForm",true);    
});


</script>


<script>
$('.sel').select2({
      // tags: "true",
    // minimumResultsForSearch: 20 ,
    selectOnClose: true,
   placeholder: "Select an option",
    allowClear: true

});

</script>