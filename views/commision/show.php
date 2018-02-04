<?php 
//echo "<pre>"; var_dump($result);die;

//echo $result->admin_exclude_cod_balance;

$d1 = $result[0]['admin_exclude_cod_balance'];
$d2 = $result[0]['admin_commission_enabled'];
$d3 = $result[0]['admin_disabled_membership_signup'];
$d4 = $result[0]['admin_disabled_membership'];
$d6 = $result[0]['admin_include_merchant_cod'];
$d7 = $result[0]['admin_commision_type'];
$d8 = $result[0]['admin_commision_percent'];
$d9 = $result[0]['admin_commision_ontop'];

$d5 = $result[0]['total_commission_status'];
$tcs =  explode("," , $d5);
// print_r($tcs);
// die;

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
                      <input value="1" class="icheck" type="checkbox" <?php if($d1==1){echo 'checked';} ?> name="admin_exclude_cod_balance" 
                      id="admin_exclude_cod_balance" /> 
                    </div>

                    <h3>Merchant Signup Settings</h3>



                    <div class="uk-form-row">
                      <label class="uk-form-label">Enabled Commission?</label>
                      <input value="yes" class="icheck" type="checkbox" <?php if($d2=='yes'){echo 'checked';} ?> name="admin_commission_enabled" 
                      id="admin_commission_enabled" /> 
                    </div>



                    <div class="uk-form-row">
                      <label class="uk-form-label">Disabled Membership Signup?</label>
                      <input value="1" class="icheck" type="checkbox" <?php if($d3==1){echo 'checked';} ?> name="admin_disabled_membership_signup" id="admin_disabled_membership_signup" /> 
                    </div>




                    <div class="uk-form-row">
                      <label class="uk-form-label">Disabled Membership?</label>
                      <input value="1" class="icheck" type="checkbox" <?php if($d4==1){echo 'checked';} ?> name="admin_disabled_membership" id="admin_disabled_membership" /> 
                    </div>


                    


                    <div class="uk-form-row">
                      <label class="uk-form-label">Include Cash Payment on merchant balance?</label>
                      <input value="yes" class="icheck" type="checkbox" <?php if($d6=='yes'){echo 'checked';} ?> name="admin_include_merchant_cod" id="admin_include_merchant_cod" /> 
                    </div>


                    <div class="uk-form-row">
                      <label class="uk-form-label">Commission on orders</label>
                      <select name="admin_commision_type" id="admin_commision_type">
                        <option value="percentage" <?php if($d7=='percentage'){echo 'selected';} ?> >Percentage</option>
                        <option value="fixed" <?php if($d7=='fixed'){echo 'selected';} ?> >Fixed</option>
                      </select>
                      <label for="admin_commision_percent" ></label>
                      <input class="uk-form-width-small numeric_only" type="text" value="<?php echo $d8;?>" 
                       name="admin_commision_percent" id="admin_commision_percent">
                    </div>


                    <div class="uk-form-row">
                      <label class="uk-form-label">Set commission on</label>  
                    </div>

                    <div class="uk-form-row">
                      <input value="1" class="icheck" type="radio" <?php if($d9==1){echo 'checked';}?> name="admin_commision_ontop" id="admin_commision_ontop" >
                      <label class="uk-form-label">Commission on Sub total order</label> 
                    </div>
                    <div class="uk-form-row">
                      <input value="2" class="icheck" type="radio" <?php if($d9==2){echo 'checked';}?>  name="admin_commision_ontop" id="admin_commision_ontop" >
                      <label class="uk-form-label">Commission on Total order</label> 
                    </div>






                    <h3>Total Commission</h3>

                    <div class="uk-form-row">
                      <label class="uk-form-label" >Compute Total Commission base on the following order status</label>
                      <select class="chosen uk-form-width-large" multiple="multiple" name="total_commission_status[]" 
                      id="total_commission_status">

                      <option value="pending" <?php if (in_array("pending", $tcs)) { echo "selected";}?>>Pending</option>
                      <option value="cancelled" <?php if (in_array("cancelled", $tcs)) { echo "selected";}?>>Cancelled</option>
                      <option value="delivered" <?php if (in_array("delivered", $tcs)) { echo "selected";}?>>Delivered</option>
                      <option value="paid" <?php if (in_array("paid", $tcs)) { echo "selected";} ?>>Paid</option>
                      <option value="decline" <?php if (in_array("decline", $tcs)) { echo "selected";} ?>>Decline</option>
                      <option value="accepted" <?php if (in_array("accepted", $tcs)) { echo "selected";} ?>>Accepted</option>
                    </select>
                  </div>

  <select class="my_select_box" data-placeholder="Select Your Options">
    <option value="1">Option 1</option>
    <option value="2" selected>Option 2</option>
    <option value="3" disabled>Option 3</option>
  </select>




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

<script type="text/javascript">
    $(".my_select_box").chosen({
    disable_search_threshold: 10,
    no_results_text: "Oops, nothing found!",
    width: "95%"
  });
</script>