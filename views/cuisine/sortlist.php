



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <script>
        $( function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
        } );
  </script>








<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            <i class="fa fa-calendar"></i>
            Cuisine Sort
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
            <li class="active breadcrumb-item">Dashboard</li>
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
                <a href="<?php echo base_url();?>cuisineAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                <a href="<?php echo base_url();?>manage-cuisine" class="uk-button"><i class="fa fa-list"></i> List</a>

                <a href="<?php echo base_url();?>cuisine/sort" class="uk-button"><i class="fa fa-sort-alpha-asc"></i> Sort</a>
              </div>
           

              <div>
                <div>



<form action="saveSortingData" method="post">
    <ul id="sortable">
   <?php foreach($cuisine_list as $row): ?>
      <li class="ui-state-default">
          <span class="ui-icon ui-icon-arrowthick-2-n-s">
          </span><?php echo $row['cuisine_name']; ?>

          <input type="text" name="position[]" value="<?php echo $row['cuisine_id']?>">
          <input type="text" name="cuisine_name[]" value="<?php echo $row['cuisine_name']?>">
      </li>
   <?php endforeach;?>
</ul>

<button type="submit">Save</button>
</form>

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
 


  
