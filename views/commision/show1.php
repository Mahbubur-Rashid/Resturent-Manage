<?php

//echo'<pre>'; var_dump($result );die;
  
?>


<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Commission Settings
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
            <li class="active breadcrumb-item">Commission Settings</li>
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

                  <div id="error-message-wrapper"></div>


                  <form action="<?php echo base_url();?>commisionSave" method="post" class="uk-form uk-form-horizontal forms has-validation-callback" id="forms">

                    <input type="hidden" value="commissionSettings" name="action" id="action">


                    <h3>Admin Commission Settings</h3>
                    <div class="uk-form-row">
                      <label class="uk-form-label">Exclude All Offline Payment from admin balance</label>
                      <input value="<?php echo $result->admin_exclude_cod_balance; ?>" class="icheck" 
                      type="checkbox"  name="admin_exclude_cod_balance" 
                      id="admin_exclude_cod_balance" /> 
                    </div>

                    <h3>Merchant Signup Settings</h3>

<?php //echo $result->country; ?>

                    <div class="uk-form-row">
                      <label class="uk-form-label">Enabled Commission?</label>
                      <input value="yes" class="icheck" type="checkbox" checked="checked" name="admin_commission_enabled" 
                      id="admin_commission_enabled" /> 
                    </div>




                    <div class="uk-form-row">
                      <label class="uk-form-label">Disabled Membership Signup?</label>
                      <input value="1" class="icheck" type="checkbox" name="admin_disabled_membership_signup" id="admin_disabled_membership_signup" /> 
                    </div>




                    <div class="uk-form-row">
                      <label class="uk-form-label">Disabled Membership?</label>
                      <input value="1" class="icheck" type="checkbox" name="admin_disabled_membership" id="admin_disabled_membership" /> 
                    </div>


                    


                    <div class="uk-form-row">
                      <label class="uk-form-label">Include Cash Payment on merchant balance?</label>
                      <input value="yes" class="icheck" type="checkbox" name="admin_include_merchant_cod" id="admin_include_merchant_cod" /> 
                    </div>


                    <div class="uk-form-row">
                      <label class="uk-form-label">Commission on orders</label>

                      <select name="admin_commision_type" id="admin_commision_type">
                        <option value="percentage" selected="selected">Percentage</option>
                        <option value="fixed">Fixed</option>
                      </select>

                      <label for="admin_commision_percent" ></label>
                      <input class="uk-form-width-small numeric_only" type="text" value="2" name="admin_commision_percent" id="admin_commision_percent">
                     <?php echo form_error('admin_commision_percent','<p class="text-danger">','</p>');?>
                    </div>

                    <div class="uk-form-row">
                      <label class="uk-form-label">Set commission on</label>  
                    </div>


                    <div class="uk-form-row">
                      <input value="1" class="icheck" type="radio" checked="checked" name="admin_commision_ontop" id="admin_commision_ontop" >
                      <label class="uk-form-label">Commission on Sub total order</label> 
                    </div>

                    <div class="uk-form-row">
                      <input value="2" class="icheck" type="radio"  name="admin_commision_ontop" id="admin_commision_ontop" >
                      <label class="uk-form-label">Commission on Total order</label> 
                    </div>






                    <h3>Total Commission</h3>

                    <div class="uk-form-row">
                      <label class="uk-form-label" >Compute Total Commission base on the following order status</label>
                      <select class="chosen uk-form-width-large" multiple="multiple" name="total_commission_status[]" 
                      id="total_commission_status">

                      <option value="pending">Pending</option>
                      <option value="cancelled">Cancelled</option>
                      <option value="delivered">Delivered</option>
                      <option value="paid" selected="selected">Paid</option>
                      <option value="decline">Decline</option>
                      <option value="accepted">Accepted</option>
                    </select>
                  </div>


                  <div class="col-sm-6">
                    <label class="col-sm-2 col-form-label"></label>
                    <input type="submit" value="Save" class="btn btn-success col-lg-6 ">
                  </div>


                </form>      
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

