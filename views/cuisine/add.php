<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Cuisine Add
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
            <li class="active breadcrumb-item">Cuisine Add</li>
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

<div class="content_wrap">
		
            <div class="uk-width-1">
                  <button type="button" class="btn" > 
                        <a href="cuisineAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="manage-cuisine" class="uk-button"><i class="fa fa-list"></i> List</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="cuisine/sort" class="uk-button"><i class="fa fa-sort-alpha-asc"></i> Sort</a>
                  </button>
            </div>



			<div class="spacer"></div>

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

<?php $attributes = array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms3');?>
<?php echo form_open_multipart('NewCuisineAdd', $attributes);?>


		<div class="form-group row">
			<label for="cuisine_name" class="col-sm-2 col-form-label">Cuisine Name</label>
        <div class="col-sm-6">
    			<?php 
                $data = array(
                  'name'        => 'cuisine_name',
                  'id'          => 'cuisine_name',
                  'value'       => set_value('cuisine_name'),
                  'class'       => 'form-control',
                );
                echo form_input($data);
                echo form_error('cuisine_name','<p class="text-danger">','</p>');
          ?>
	   </div>
   </div>


    <div class="col-sm-6">
      <label class="col-sm-2 col-form-label"></label>
      <input type="submit" value="Save" class="btn btn-success col-lg-6 ">
    </div>

<?php echo form_close(); ?>
	<!-- </form>   -->
</div>
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

