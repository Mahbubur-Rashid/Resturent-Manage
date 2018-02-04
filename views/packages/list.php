<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Packages
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
            <li class="active breadcrumb-item">Packages</li>
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
                        <a href="packagesAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="packages" class="uk-button"><i class="fa fa-list"></i> List</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="packages/sort" class="uk-button"><i class="fa fa-sort-alpha-asc"></i> Sort</a>
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
               <!-- //all codes goes here -->
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
                            <?php echo form_open_multipart('packages', $attr);?>


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


                  <div id="package_div">
                    <?php $this->load->view('admin/packages/package_div');?>
                  </div>








<!-- 
<div>
<ul id="sortable">
    <li id="item-1">Item 1</li>
    <li id="item-2">Item 2</li>
</ul>
Query string: <span></span>

</div> -->









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
$(document).ready(function () {
    $('ul').sortable({
        axis: 'y',
        stop: function (event, ui) {
          var data = $(this).sortable('serialize');
            $('span').text(data);
            // $.ajax({
            //     data: oData,
            //     type: 'POST',
            //     url: '/your/url/here'
            // });
  }
    });
});
</script>











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
            url: "<?php echo base_url(); ?>AdminPackages/myautocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                
                if (data.length > 0) {
                     $(".table-dark").empty();
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


