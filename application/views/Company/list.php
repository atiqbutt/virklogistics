<!-- /.row -->
  <!-- DataTables -->
 
 <section class="content">  
    <div class="row">
      <?php if ($this->session->flashdata('msg' )): ?>
             <div class="alert alert-success">
             <?php echo $this->session->flashdata('msg'); ?>  
          </div>
          <?php endif; ?>
        <div class="col-lg-12">
           
              <div style="padding-left:0px;" class="panel-heading">
                  <a class="btn btn-success" href="<?php echo base_url(); ?>Defination/addcompany" alt="View">
                    Add Company </i>  
                  </a>
              </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Company</h3>
              
             
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Sr#</th>
                                     <th>Company Name</th>
                                    <th>Company Number</th>
                                    <th>Company Email</th>
                                     <th>Company Cnic</th>
                                      <th>Status</th>
                                    <th>Action</th>
                                   
                                   
                </tr>
                </thead>
                <?php
                            if(!empty($customer))
                            {
                            $i=1;foreach($customer as $val){ ?>
                                <tr class="odd gradeX">
                               <td><?php echo $i++;?></td>
                
                                <td><?php echo $val["name"];?></td>
                                <td><?php echo $val["number"];?></td>
                                <td><?php echo $val["email"];?></td>
                                <td><?php echo $val["cnic"];?></td>
                                 <td>
                                     <a href="<?php echo base_url()?>Defination/status_company/<?php echo $val['id'];?>">
                    <?php echo ($val['status']==0) ? "<img src='../assets/Images/2.png' width='20px'>":"<img src='../assets/Images/3.png' width='20px'>"?>
                   </a>
                                    
                                </td>
                                
                                <td> 
                                  <?php
                                $st=$val['status'];
                                if($st==1)
                                {
                                  ?>
                                   <a href="<?php echo base_url();?>Defination/eyecompany/<?php echo $val['id']; ?>"><i class="fa fa-eye"></i>
                                      <?php
                                    }

                                    else{
                                      ?>
                                        <a href="<?php echo base_url();?>Defination/eyecompany/<?php echo $val['id']; ?>"><i class="fa fa-eye"></i>
      
                                    <a href="<?php echo base_url();?>Defination/editcompany/<?php echo $val['id']; ?>"><i class="fa fa-edit"></i>
                                    
                                    </a>
                                
                                <a href="<?php echo base_url();?>Defination/deletecompany/<?php echo $val['id']; ?>"><i class="fa fa-trash"></i>
                                <?php
                              }
                              ?>
                                
                                
                                
                                </td>
                                
                              
                            </tr>
                            <?php }
                            
                            
                            
                                    }?>
                           
                            </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col-lg-12 -->
    </div>
            
 </section>
 
<!--  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
     $('.eye').click(function(){
         var id=$(this).attr('data-id');
        $.ajax({
            
            url: "<?php echo base_url(); ?>"+"Defination/eyecustomer",
            type:"POST",
            data:{id:id},
            success:function(data)
  { 
      //$('#myModal').html(data).modal('show');
      $("#getCode").html(data);
       Jquery("#myModal").modal('show');
  }

        })
        
    });
    });
  </script>
  
  
  -->

          