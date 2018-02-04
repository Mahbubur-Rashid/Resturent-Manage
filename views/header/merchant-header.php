<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-dark">
         <a class="user-link" href="">

                  
            <?php $data = $this->AdminSettingModel->setResult(); ?>
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url().'uploads/images/'.$data->dlogo ?>">
            <p class="text-white user-info">Welcome Merchant</p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue dker">
      <li class="<?php if (uri_string() == 'dashboard') echo "active";?>">
          <a href="<?=base_url('dashboard')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
     
      <li class="<?php if (uri_string() == 'merchant-info') echo "active";?>">
          <a href="<?=base_url('merchant-info')?>">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Merchant Info</span>
         </a>
      </li>

       

      

      

       <li class="<?php if (uri_string() == 'order-status') echo "active";?>">
          <a href="<?=base_url('order-status')?>">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Order Status</span>
         </a>
      </li>

      <li class="<?php if (uri_string() == 'setting') echo "active";?>">
          <a href="<?=base_url('setting')?>">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Setting</span>
         </a>
      </li>

      

     
      
   </ul>
   <!-- /#menu -->
</div>

