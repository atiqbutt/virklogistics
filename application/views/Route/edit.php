
<script>

function ValidateNumberOnly()
{
if ((event.keyCode < 48 || event.keyCode > 57)) 
{
   event.returnValue = false;
}
}

</script>

<style type="text/css">
    
    .ko{
        color:black;
    }
    </style> 
<!-- /.row -->
 <section class="content">
      <div class="row">
           <div class="col-md-12">
           <?php if ($this->session->flashdata('msg' )): ?>
          <div class="alert alert-success">
          <?php echo $this->session->flashdata('msg'); ?>  
          </div>
           <?php endif; ?> 
        <div class="col-xs-12">
          <div class="box col-sm-12">
            <div class="box-header" >
              <h3 class="box-title">Manage Route Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal" id="shippingForm" action="<?php echo base_url()?>Defination/updateroute" method="post">
           
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Source <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                                 <input type="name" required name="source" class="form-control" id="inputEmail3" value="<?php echo $edit->source?>">
           
                        </div>
                      </div>
                    
                    
                    
                    
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Destination <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="address" required name="dest" class="form-control" id="inputEmail3" value="<?php echo $edit->destination?>">
                  
                        </div>
                      </div>
                    
                    
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Kilometers <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="phone" name="km" class="form-control" id="inputEmail3" placeholder="Kilometers" value="<?php echo $edit->km;?>">
             
                        </div>
                      </div>
                     
                        <input type="hidden" name="id" value="<?php echo $edit->id?>">
              
                    
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Remarks <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea name="remarks" class="form-control"><?php echo $edit->description?></textarea>
                        </div>
                      </div>
                    
                    
                         
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <button type="submit" name="register" class="btn btn-success">Update</button>
            
                        </div>
                      </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 
 
 
 
 

<script type="text/javascript">
    $(document).ready(function() {
        $('#shippingForm')
            .on('init.form.bv', function(e, data) {
                //console.log(data);
            })
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The name is required'
                            }
                        }
                    },
                   
                
               
                    


                    




             
        

                    source: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The source is required'
                            }
                        }
                    },
                    
                    dest: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The destination is required'
                            }
                        }
                    },
                    
                    
                    km: {
                         trigger:'blur',
                        validators: {
                            notEmpty: {
                                message: 'The Kilometer is required'
                            }
                        }
                    },
                    
                   
                }
            });
    });
</script>



