<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Add Packages
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
            <li class="active breadcrumb-item">Add Packages</li>
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
                        <a href="packagesAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>

                  <button type="button" class="btn" > 
                        <a href="packages" class="uk-button"><i class="fa fa-list"></i> List</a>
                  </button>
                  
                  <button type="button" class="btn" > 
                        <a href="packages/sort" class="uk-button">
                              <i class="fa fa-sort-alpha-asc"></i> Sort</a>
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

<?php $attributes = array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms');?>
<?php echo form_open_multipart('add', $attributes);?>
		
    <div class="form-group row">
			  <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-6">
			  <?php 
              $data = array(
                'name'        => 'title',
                'id'          => 'title',
                'value'       => set_value('title'),
                'class'       => 'form-control',
              );
              echo form_input($data);
              echo form_error('title','<span class="text-danger">','</span>');
        ?>
		    </div>
    </div>


        <div class="form-group row">
          <label for="description" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-6">
            <textarea type="text" class="form-control" id="description" name="description" ></textarea>
             <?php echo form_error('description','<p class="text-danger">','</p>');  ?>
          </div>
        </div>

		<div class="form-group row">
			<label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-6">
    			  <?php 
                $data = array(
                  'name'        => 'price',
                  'id'          => 'price',
                  'value'       => set_value('price'),
                );
                echo form_input($data);
                echo form_error('price','<span class="text-danger" >','</span>');
            ?>
          
        </div>
		</div>

		<div class="form-group row">
			<label for="promo_price" class="col-sm-2 col-form-label">Promo Price</label>
			<div class="col-sm-6">
    			<?php 
                $data = array(
                  'name'        => 'promo_price',
                  'id'          => 'promo_price',
                  'value'       => '',
                );
                echo form_input($data);
                echo form_error('promo_price','<span class="text-danger">','</span>');
          ?>
            
        </div>
		</div>

		<div class="form-group row">
			<label for="expiration_type" class="col-sm-2 col-form-label">Type</label>
      <div class="col-sm-6">
            <?php $options = array(
			                  'days'  => 'Days',
			                  'year'    => 'Year',
                             );
               echo form_dropdown('expiration_type', $options, 'days');
            ?>
		</div>
  </div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Expiration (no. of days or Year)</label>
      <div class="col-sm-6">
			<?php $data = array(
              'name'        => 'expiration',
              'id'          => 'expiration',
            );

            echo form_input($data);
            echo form_error('expiration','<span class="text-danger">','</span>');

        ?>
		</div>
  </div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Usage</label>
      <div class="col-sm-6">
			<?php   $options = array(
			                  'unlimited'  => 'Unlimited',
			                  'limited'    => 'Limited', );
                    echo form_dropdown('unlimited_post', $options, '2');
            ?>
		</div>
  </div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Number of Food Item Can Add</label>
      <div class="col-sm-6">
			<?php $data = array(
              'name'        => 'post_limit',
              'id'          => 'post_limit',
              'value'       => '',
            );
            echo form_input($data);?>
		</div>
  </div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Limit merchant by sell</label>
      <div class="col-sm-6">
			<?php $data = array(
              'name'        => 'sell_limit',
              'id'          => 'sell_limit',
              'value'       => '',
            );
            echo form_input($data);?>Per month
         </div>
       </div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-6">

			<?php   
              $js = array(
                'class'=>'form-control',
              );

              $options = array(
        			                  'publish'  => 'Publish',
        			                  'pending'    => 'Pending for review',
        			                  'draft'    => 'Draft', ); 
              echo form_dropdown('status', $options, '', $js);
            ?>

		</div>
  </div>



		<div class="col-sm-6">
			<label class="col-sm-2 col-form-label"></label>
			<input type="submit" value="Save" class="btn btn-success col-lg-12 ">
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

