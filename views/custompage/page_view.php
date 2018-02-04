<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                           Custom Page List
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Page List
                                </a>
                            </li>
                            <li class="active breadcrumb-item">List</li>
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

<div>
<button type="button" class="btn" > <a href="<?=base_url('custom-page/do')?>"><i class="fa fa-plus"></i>Add New</a></button>
<button type="button" class="btn" > <a href="<?=base_url('custom-page/do1')?>"><i class="fa fa-plus"></i>Add New Custom Link</a></button>
<button type="button" class="btn" > <a href="<?=base_url('custom-page')?>"><i class="fa fa-list"></i>List</a></button>
<button type="button" class="btn" > <a href="<?=base_url('dishes')?>"><i class="fa fa-list"></i>Assine Page</a></button><br>


           
</div>
<!--  -->
<div class="something">
     <input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" >
     <div id="suggestions">
         <div id="autoSuggestionsList"></div>
     </div>
</div>


<!--  -->
<table  id="example" class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Slug</th>
          <th scope="col">Page Title</th>
          <th scope="col">Content</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        <?php foreach($res as $data){?>
        <tr>
          <td ><?php echo $data['id'];?></td>
          <td><?php echo $data['link'];?></td>
          
         <td ><?php echo $data['seoTi'];?></td>
          <td><?php echo $data['content'];?></td>

           <td><a href="custom-page/edit/<?php echo $data['id']; ?>">Edit</a>|<a href="custom-page/delete/<?php echo $data['id']; ?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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

<link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/tables.css" />
    <script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pages/users.js"></script>  

<script>
$(document).ready(function() {
   $('#example').DataTable( {
        
    } );

});
</script>
<!--  -->
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
            url: "<?php echo base_url(); ?>CustomPage/autocomplete/",
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
<!--  -->