 <!-- /.row -->
 <section class="content">
      <div class="row">
            <?php if ($this->session->flashdata('msg' )): ?>
             <div class="alert alert-success">
             <?php echo $this->session->flashdata('msg'); ?>  
          </div>
          <?php endif; ?>
        <div class="col-xs-12">
          <div style="padding-left:0px;"  class="panel-heading">
                <a class="btn btn-success" href="<?php echo base_url(); ?>defination/addexpensetype" alt="View">
                    Add Expense Type</i>  
                  </a>
              </div>
          <div class="box col-sm-3">
            <div class="box-header" >
              <h3 class="box-title">Expense</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="users table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          
                          <th>Remarks</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php 
                         $data=$this->db->where('is_delete',0)->get('expensetype')->result_array();
                        if(!empty($data))
                        {
                        $i=1;foreach ($data as $value)  { 
                            ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          
                          <td><?php echo $value['name']; ?></td>
                          <td><?php echo $value['remarks']; ?></td>
                          
                          <td>
                            <a class="text-custom1" href="<?php echo base_url();?>Defination/expensetype_eye/<?php echo $value['id'];?>"><i class="fa fa-eye"></i></a>
                            <a href="<?php echo $base_url; ?>Defination/editexpensetype/<?php echo $value['id']; ?>"><i class="fa fa-edit"></i></a> 
                            <a href="<?php echo $base_url; ?>Defination/deleteexpensetype/<?php echo $value['id']; ?>"><i class="fa fa-trash"></i></a>
                          </td>
                           <?php  
                          }
                             }
                            
                          else{
                                 echo '';    
                          }
                           ?>
                        </tr>
                      </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 