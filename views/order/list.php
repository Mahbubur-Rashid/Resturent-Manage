

<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Order Status List
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
            <li class="active breadcrumb-item">Order Status List</li>
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
                  <button type="button" class="btn" > 
                        <a href="orderAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="order-status" class="uk-button"><i class="fa fa-list"></i> List</a>
                  </button>
            </div>


<div class="something">
    <label>Search: 
     <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" >
     </label>
     <div id="suggestions">
         <div id="autoSuggestionsList"></div>
    </div>
</div>

              <div>
                <div>



                  <?php
    //flash messages 
                  if($this->session->flashdata('message'))
                  {
                    echo '<div class="alert alert-success">';
                    echo '<a class="close" data-dismiss="alert">×</a>';
                    echo $this->session->flashdata('message');
                    echo '</div>';       
                  }else if($this->session->flashdata('message2'))
                  {
                    echo '<div class="alert alert-danger">';
                    echo '<a class="close" data-dismiss="alert">×</a>';
                    echo $this->session->flashdata('message2');
                    echo '</div>';       
                  }
                  ?>




                  <?php $attr= array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms');?>
                  <?php echo form_open_multipart('order-status', $attr);?>
                  <label>Show 
                    <?php $options = array(
                      '1'  => '1',
                      '3'  => '3',
                      '10'  => '10',
                      '25'    => '25',
                      '50'  => '50',
                      '100'    => '100',
                    );
                    echo form_dropdown('pack_limit', $options, '10');
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
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>

                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   <?php foreach($order_list as $row): ?>
                    <tr>
                      <td><?php echo $row['order_id']; ?></td>
                      <td><?php echo $row['order_status']; ?></td>
                      <td><?php echo $row['order_date']; ?></td>


                      <td class="crud-actions">

                        <i class="fa fa-pencil fa-fw" aria-hidden="true" type="button"  data-toggle="modal" data-target="#myModal<?php echo  $row['order_id'];?>"></i>

                        <i class="fa fa-trash-o fa-1x" aria-hidden="true" type="button"  data-toggle="modal" data-target="#myModalDel<?php echo  $row['order_id'];?>"></i>



                      </td>
                    </tr>



                    <!-- model  delet -->
                    <div id="myModalDel<?php echo  $row['order_id'];?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            <h4 class="modal-title">Are you want to delete the Order ?</h4>
                          </div>

                          <div class="modal-body">
                            <form action="order/del/<?php echo  $row['order_id'];?>" method="post">

                              <div class="form-group">

                               <input class="form-control" name="tId" type="hidden"
                               value="<?php echo $row['order_id'];?>" >

                             </div>

                             <input class="btn btn-md btn-danger btn-block" type="submit" name="del" value="Delete" style="width: 100px;"> 


                           </form>

                         </div>
                         <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div> 
                  </div>
                  <!-- model for delet  end -->

 <!-- my modal tor update data start  -->

         <div id="myModal<?php echo  $row['order_id'];?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Uptate Your Order</h4>
              </div>
              <div class="modal-body">
               <form action="order/edit/<?php echo  $row['order_id'];?>" method="post">

                <div class="form-group">
                  <label>Status</label>
                  <input class="form-control" type="text" name="order_status" 
                    value="<?php echo $row['order_status']?>" >
                </div>


                <div class="form-group">
                  <input class="form-control" name="tId" value="<?php echo $row['order_id']?>" type="hidden">
                </div>

               <input class="btn btn-md btn-success btn-block" type="submit" name="update" value="Update" style="width: 100px;"> 

             </form>

           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>


    <!-- myModal topic -->   

                <?php endforeach; ?>

              </tbody>
            </table>


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








<!-- for auto-complete search -->


<script type="text/javascript">

function ajaxSearch()
{
    var input_data = $('#search_data').val();

    if (input_data.length === 0)
    {
        $('#suggestions').hide();
    }
    else
    {

        var post_data = {
            'search_data': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>AdminOrder/myautocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').addClass('auto_list');
                   //alert(data);
                    $('#autoSuggestionsList').html(data);
                }
            }
         });

     }
 }
</script>
