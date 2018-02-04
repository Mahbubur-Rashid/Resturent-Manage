
<?php //$merchant_list; die;
   //echo "<pre>"; var_dump($merchant_list);die;

?>

<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            <i class="fa fa-calendar"></i>
            Merchent
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
              <div>

                <!-- //all codes goes here -->


                <table class="table table-hover table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Merchant ID</th>
                      <th scope="col">Merchant Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">City</th>
                      <th scope="col">Country</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Package</th>
                      <th scope="col">Activation Code</th>
                      <th scope="col">Charges Type</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php 
           // print_r($topics);die;
                   ?>

                   <?php foreach($merchant_list as $row): ?>
                    <tr>
                      <td><?php echo $row['merchant_id']; ?></td>
                      <td><?php echo $row['merchant_name']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['country']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['package']; ?></td>
                      <td><?php echo $row['activation_code']; ?></td>
                      <td><?php echo $row['charges_type']; ?></td>
                      <td><?php echo $row['status']; ?></td>

                      <td class="crud-actions">

                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php //echo  $row['t_id'];?>">Update</button>
                       <i class="fa fa-trash-o fa-3x" aria-hidden="true" type="button"  data-toggle="modal" data-target="#myModalDel<?php //echo  $row['id'];?>"></i>
                     </td>


                   <?php endforeach; ?>

                 </tbody>
               </table>


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

