<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            Order Status
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Order Status
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Input</li>
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
                                    <div>
                                    	
<!-- //all codes goes here -->

<button type="button" class="btn" > <a href="<?=base_url('dishes/do')?>"><i class="fa fa-plus"></i>Add New</a></button>
<button type="button" class="btn" > <a href="<?=base_url('admin-dishes')?>"><i class="fa fa-list"></i>List</a></button><br><br>

 

<div class="something">
    <label>Search: 
     <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" >
     </label>
     <div id="suggestions">
         <div id="autoSuggestionsList"></div>
    </div>
</div>
                            

    <table  class="table table-border">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Dish Name</th>
          <th scope="col">Icon</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        <?php foreach($res as $data){?>
        <tr>
          <td ><?php echo $data['id'];?></td>
          <td><?php echo $data['dishName'];?></td>
          
         <td ><img src="<?php echo base_url().'/assets/uploads/'.$data['image'] ?>" style="height: 70px; width: 70px;"></td>

           <td><a href="dishes/edit/<?php echo $data['id']; ?>">Edit</a>|<a href="dishes/delete/<?php echo $data['id']; ?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
       <?php }?>
        </tr>
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
            url: "<?php echo base_url(); ?>AdminDishes/myautocomplete/",
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


