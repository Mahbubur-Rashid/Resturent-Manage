<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            Order Status
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Order Status
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Input</li>
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

<button type="button" class="btn" > <a href="<?=base_url('merchantlist/do')?>"><i class="fa fa-plus"></i>Add New</a></button>
<button type="button" class="btn" > <a href="<?=base_url('merchantlist')?>"><i class="fa fa-list"></i>List</a></button><br><br>

<div class="table-responsive">
<table  class="table table-border">
  <thead>
    <tr>
      <th scope="col">Merchant ID</th>
      <th scope="col">Merchant Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">Contact</th>
      <th scope="col">Package</th>
       
     
     
     
      <th scope="col">Action</th>
      <th scope="col">Auto Login</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($getOrderStatus as $data){?>
    <tr>
      <td ><?php echo $data['id'];?></td>
      <td><?php echo $data['rtname'];?></td>
      <td ><?php echo $data['staddress'];?></td>
      <td><?php echo $data['city'];?></td>
      <td ><?php echo $data['country'];?></td>
      <td ><?php echo $data['contactphone'];?></td>
      <td><?php echo $data['pkgname'];?></td>
      


       <td><a href="merchantlist/edit/<?php echo $data['id']; ?>">Edit</a>|<a href="merchantlist/delete/<?php echo $data['id']; ?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>

       <td><a href="merchantlist/login/<?php echo $data['id']; ?>">Login</a></td>
      
      
     
   
   <?php }?>
    </tr>
  </tbody>
</table>
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

<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.buttons.min.js"></script>