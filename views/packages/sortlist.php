
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>




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
            Packages Sort
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

                  <button type="button" class="btn" > 
                        <a href="<?php echo base_url()?>packagesAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>

                  <button type="button" class="btn" > 
                        <a href="<?php echo base_url()?>packages" class="uk-button"><i class="fa fa-list"></i> List</a>
                  </button>
                  
                  <button type="button" class="btn" > 
                        <a href="<?php echo base_url()?>packages/sort" class="uk-button">
                              <i class="fa fa-sort-alpha-asc"></i> Sort</a>
                  </button>
			</div>

              <div>
                <div>



<form action="saveSortingData" method="post">
         <ul id="sortable">
           <?php foreach($packages_list as $row): ?>
          <li class="ui-state-default">
            <span class="ui-icon ui-icon-arrowthick-2-n-s">
            </span><?php echo $row['title']; ?>
            <input type="hidden" name="position[]" value="<?php echo $row['pack_id']?>">
          </li>
           <?php endforeach;?>
        </ul>

        <button type="submit">Save</button>
        </form>
<a href="<?php echo base_url();?>packages"> <button type="submit">Back</button></a>
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
 


  
