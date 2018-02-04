
<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Currency Add 
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
            <li class="active breadcrumb-item">Currency Add </li>
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
                        <a href="currencyAdd" class="uk-button"><i class="fa fa-plus"></i> Add New</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="csvImport" class="uk-button"><i class="fa fa-plus"></i>Upload Bulk CSV</a>
                  </button>
                  <button type="button" class="btn" > 
                        <a href="manage-currency" class="uk-button"><i class="fa fa-list"></i> List</a>
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

<?php $attributes = array('class' => 'uk-form uk-form-horizontal forms', 'id' => 'forms2');?>
<?php echo form_open_multipart('NewCurrencyAdd', $attributes);?>
		
    <div class="form-group row">
			<label for="currency_code" class="col-sm-2 col-form-label">Currency Code</label>
       <div class="col-sm-6">
			<?php $data = array(
              'name'        => 'currency_code',
              'id'          => 'currency_code',
              'value'       => set_value('currency_code'),
              'class'       => 'form-control',
            );
            echo form_input($data);
            echo form_error('currency_code','<p class="text-danger">','</p>');
      ?>
		</div>
  </div>

    <div class="form-group row">
      <label for="currency_symbol" class="col-sm-2 col-form-label">Currency Symbol</label>
       <div class="col-sm-6">
      <?php $data = array(
              'name'        => 'currency_symbol',
              'id'          => 'currency_symbol',
              'value'       => set_value('currency_symbol'),
              'class'       => 'form-control',
            );
            echo form_input($data);
            echo form_error('currency_symbol','<p class="text-danger">','</p>');
      ?>
      </div>
    </div>

    <div class="col-sm-6">
      <label class="col-sm-2 col-form-label"></label>
      <input type="submit" value="Save" class="btn btn-success col-lg-6 ">
    </div>


<?php echo form_close(); ?>
	<!-- </form>   -->


<p class="uk-text-muted">To get symbol refer to <a target="_blank" href="http://www.xe.com/symbols.php">http://www.xe.com/symbols.php</a></p>
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

