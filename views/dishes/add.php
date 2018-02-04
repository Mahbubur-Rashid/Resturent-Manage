
<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Order Status Add
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
            <li class="active breadcrumb-item">Order Status Add</li>
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
			<a href="<?php echo base_url();?>dishesAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
			<a href="<?php echo base_url();?>manage-dishes" class="uk-button"><i class="fa fa-list"></i> List</a>
			</div>



			<div class="spacer"></div>

		<!-- 	<input type="hidden" value="packagesAdd" name="action" id="action">
			<input type="hidden" value="" name="id" id="id">
			<input type="hidden" value="/kmrs/admin/packagesAdd" name="redirect" id="redirect"> -->
<!-- 
	<form class="uk-form uk-form-horizontal forms has-validation-callback" id="forms"> -->
<?php  
	   // if($this->session->flashdata('message'))
	   // { 
	   //   echo  $this->session->flashdata('message');
	   // } 
?>


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

<?php $attributes = array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms');?>
<?php echo form_open_multipart('NewDishesAdd', $attributes);?>
		<div class="uk-form-row">
			<label class="uk-form-label">Dish Name</label>

			<?php $data = array(
              'name'        => 'dishes_name',
              'id'          => 'dishes_name',
              'value'       => set_value('dishes_name'),
              'maxlength'   => '100',
              'size'        => '50',
              'class'       => 'uk-form-width-large',
            );
            echo form_input($data);?>
		</div>

    <div class="form-actions">
                <label for="inputError" class="control-label">Upload Icon</label>
                <input class="form-control" type="file" name="picture">
            </div>
    <div class="uk-form-row">

      <label class="uk-form-label">Status</label>
      <!--  <select data-validation="required" name="expiration_type" id="expiration_type">
          <option value="days">Days</option>
          <option value="year">Year</option>
        </select> -->
            <?php $options = array(
                        'publish'  => 'Publish',
                        'Pending'    => 'Pending for review',
                        'draft'    => 'Draft',
                             );
               echo form_dropdown('dishes_status', $options, 'publish');
            ?>
    </div>

    <div class="uk-form-row">
			<label class="uk-form-label"></label>
			<input type="submit" value="Save" class="uk-button uk-form-width-medium uk-button-success">
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

