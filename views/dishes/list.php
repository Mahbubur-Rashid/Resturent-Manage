
<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Dishes
          </h4>
        </div>
        <div class="col-sm-6 col-12">
          <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
            <li class="breadcrumb-item">
              <a href="<?=base_url()?>dashboard">
                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                Dashboard
              </a>
            </li>
            <li class="active breadcrumb-item">Dishes</li>
          </ol>
        </div>
      </div>
    </div>
  </header>
  <div class="outer">
    <div class="inner bg-light lter bg-container cal_btn_hov">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-block m-t-35">
              <div id="calendar"></div>




              <div class="uk-width-1">
                <a href="<?php echo base_url();?>dishesAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                <a href="<?php echo base_url();?>manage-dishes" class="uk-button"><i class="fa fa-list"></i> List</a>
              </div>
              <div class="dataTables_filter" id="table_list_filter">
                      <label>Search: 
                        <input type="text" aria-controls="table_list">
                      </label>
              </div>

              <div>
                  <div>
            
                  <?php $attr= array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms');?>
                            <?php echo form_open_multipart('manage-dishes', $attr);?>
                             <label>Show 
                                    <?php $options = array(
                                              '1'  => '1',
                                              '3'  => '3',
                                              '10'  => '10',
                                              '25'    => '25',
                                              '50'  => '50',
                                              '100'    => '100',
                                            );
                                          echo form_dropdown('per_pagedata', $options, '10');
                                    ?>
                                  
                              </label>entries
                            <div class="uk-form-row">
                                <label class="uk-form-label"></label>
                                <input type="submit" value="Go" class="uk-button uk-form-width-medium uk-button-success">
                            </div>
                 <?php echo form_close();?>
                              
                  </div>



                  


               <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Dishes Name</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Date Created</th>

                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php 
           // print_r($topics);die;
                 ?>

                 <?php foreach($dishes_list as $row): ?>
                  <tr>
                    <td><?php echo $row['dishes_id']; ?></td>
                    <td><?php echo $row['dishes_name']; ?></td>
                    
                    <td>
                      <img src="<?php echo base_url();?>uploads/images/<?php echo $row['dishes_icon'];?>" 
                       alt="" height="70" width="70">
                    </td>
                    <td><?php echo $row['dishes_date']; ?></td>


                    <td class="crud-actions">

                        <a href= "<?php echo 'dishes/edit/'.$row['dishes_id']?> ">
                           <i class="fa fa-pencil fa-fw" aria-hidden="true" type="button"></i>
                         </a>
                        <a href= "<?php echo 'dishes/del/'.$row['dishes_id']?> ">
                         <i class="fa fa-trash-o fa-1x" aria-hidden="true" type="button"  data-toggle="modal">
                          </i>
                        </a>
                    </td>
                 </tr>


                 <?php endforeach; ?>

               </tbody>
             </table>


<?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?> 

             <!-- code end here  -->
           </div>

           
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- /.outer -->
</div>
<!-- /#content -->
</div>

