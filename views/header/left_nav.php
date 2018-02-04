<?php 
$this->db->select('dlogo');
$this->db->from('tbl_setting');

$query = $this->db->get();
$path = $query->result();
foreach ($path as $key ) {
  $logo = $key->dlogo;
}




?>
<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-dark">


         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?php echo base_url().'uploads/images/'.$logo ?>">
            <p class="text-white user-info"><?php echo $this->lang->line('welcome_admin');?></p>
         </a>


         

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue dker">
      <li class="<?php if (uri_string() == 'dashboard') echo "active";?>">
          <a href="<?=base_url('dashboard')?>">
         <i class="fa fa-home"></i>
   <!--       <span class="link-title">&nbsp;Dashboard</span> -->


<span class="link-title">&nbsp;<?php echo $this->lang->line('dashboard');?></span>





         </a>
      </li>
     
     <!--  <li class="<?php// if (uri_string() == 'merchantlist') echo "active";?>">
          <a href="<?//=base_url('merchantlist')?>">
         <i class="fa fa-cutlery" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Merchant List</span>
         <span class="link-title">&nbsp;<?php //echo $this->lang->line('merchantlist');?></span>
         </a>
      </li>  -->

      <li class="<?php if (uri_string() == 'packages') echo "active";?>">
          <a href="<?=base_url('packages')?>">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         <!-- <span class="link-title">&nbsp;Packages</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('packages');?></span>
         </a>
      </li>


       
      
      <li class="<?php if (uri_string() == 'manage-cuisine') echo "active";?>">
          <a href="<?=base_url('manage-cuisine')?>">
         <i class="fa fa-list-alt"></i>
         <!-- <span class="link-title">&nbsp;Cuisine</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('cuisine');?></span>
         </a>
      </li>
     
      <li class="<?php if (uri_string() == 'admin-dishes') echo "active";?>">
          <a href="<?=base_url('admin-dishes')?>">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
        <!--  <span class="link-title">&nbsp;Dishes</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('dishes');?></span>
         </a>
      </li>

       <!-- <li class="<?php //if (uri_string() == 'custom-page') echo "active";?>">
          <a href="<?//=base_url('custom-page')?>">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Custom Page</span>
         </a>
      </li> -->
       <li class="<?php if (uri_string() == 'manage-currency') echo "active";?>">
          <a href="<?=base_url('manage-currency')?>">
         <i class="fa fa-usd" aria-hidden="true"></i>
        <!--  <span class="link-title">&nbsp;Manage currency</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('manage_currency');?></span>
         </a>
      </li>

       <li class="<?php if (uri_string() == 'manage-language') echo "active";?>">
          <a href="<?=base_url('manage-language')?>">
         <i class="fa fa-flag-o" aria-hidden="true"></i>
         <!-- <span class="link-title">&nbsp;Manage language</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('manage_language');?></span>
         </a>
      </li>

       <li class="<?php if (uri_string() == 'order-status') echo "active";?>">
          <a href="<?=base_url('order-status')?>">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         <!-- <span class="link-title">&nbsp;Order Status</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('order_status');?></span>
         </a>
      </li>

      <li class="<?php if (uri_string() == 'setting') echo "active";?>">
          <a href="<?=base_url('setting')?>">
         <i class="fa fa-gear" aria-hidden="true"></i>
         <!-- <span class="link-title">&nbsp;Setting</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('setting');?></span>
         </a>
      </li>

      <li class="<?php if (uri_string() == 'commisionsettings') echo "active";?>">
          <a href="<?=base_url('commisionsettings')?>">
         <i class="fa fa-cc-paypal" aria-hidden="true"></i>
         <!-- <span class="link-title">&nbsp;Commission Settings</span> -->
         <span class="link-title">&nbsp;<?php echo $this->lang->line('commission_setting');?></span>
         </a>
      </li>

   </ul>
   <!-- /#menu -->
</div>

