<script src="<?php echo base_url()?>assets/commonFormValidator.js" type="text/javascript"></script>

<div class="container" style="padding-top:20px" >
    <div class="row">
     
           <?php if ($this->session->flashdata('msg' )): ?>
          <div class="alert alert-success">
          <?php echo $this->session->flashdata('msg'); ?>  
          </div>
           <?php endif; ?>
        <div class="col-md-11">
  <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Add Units</h2>
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="defaultForm" class="form-horizontal" action="<?php echo base_url()?>unit/save" method="post" enctype="multipart/formdata">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-6">
                      <input type="name" name="name" class="form-control" onkeypress="return maskAlphaWithSp(this,event);"  id="inputEmail3" placeholder="Name" required>
                  </div>
                </div>
                  
                  
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description </label>

                  <div class="col-sm-6">
                    <textarea name="dec" class="form-control" rows="4" cols="50"  required></textarea>
                  </div>
                </div> 
              </div>
              <!-- /.box-body -->
                        <div class="form-group" style="padding-bottom: 10px ">
                            <div class="col-sm-10 col-sm-offset-2"> 
                               <input class="btn btn-success" type="submit" name="register" value="submit" />
                               <input class="btn btn-warning" type="submit" name="reset" value="Reset" />
                               <a class="btn btn-danger"href="<?php echo base_url() ?>unit/index">Cancel</a>
                           </div>
                        </div>
                         
            </form>
          </div>
    </div>
    </div>
</div>

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
                name: {
                   trigger:'blur',
                    validators: {
                        notEmpty: {
                            message: 'The name is required and cannot be empty'
                        }
                    }
                },
            
            }
        });
});


</script>