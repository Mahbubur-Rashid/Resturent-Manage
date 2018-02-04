<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            New Merchant 
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Merchant
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



</div>


 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurant Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Membership</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
  </li>
  
  
  <li class="nav-item">
    <a class="nav-link" id="google-tab" data-toggle="tab" href="#google" role="tab" aria-controls="google" aria-selected="false">Google Map</a>
  </li>
</ul>
<!--  -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
     <form action="<?php echo base_url();?>merchantlist/do/restaurantinformation" method="post">
         <div class="form-group row">
          <label for="rtsulg" class="col-sm-2 col-form-label">Restaurant Slug</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="rtsulg" value="<?php echo $result->rtsulg; ?>">
             <?php echo form_error('rtsulg','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="rtname" class="col-sm-2 col-form-label">Restaurant name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="rtname" value="<?php echo $result->rtname; ?>">
             <?php echo form_error('rtname','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="rtphone" class="col-sm-2 col-form-label">Restaurant phone</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" id="inputEmail3" name="rtphone" value="<?php echo $result->rtphone; ?>">
             <?php echo form_error('rtphone','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="contactname" class="col-sm-2 col-form-label">Contact name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="contactname" value="<?php echo $result->contactname; ?>">
             <?php echo form_error('contactname','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Contact phone</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" id="inputEmail3" name="contactphone" value="<?php echo $result->contactphone; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Contact email</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="inputPassword3" name="contactemail" value="<?php echo $result->contactemail; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
           <div class="col-sm-6">
         <select onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" name ="country" value="<?php echo $result->country; ?>"></select>
           </div>
        
        
        </div>
       
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Street address</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="staddress" value="<?php echo $result->staddress; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="city" value="<?php echo $result->city; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Post code/Zip code</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="postcode" value="<?php echo $result->postcode; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">State/Region</label>
          <div class="col-sm-6">
           <select name ="state" id ="state" class="form-control" value="<?php echo $result->state; ?>"></select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Pick Up or Delivery?</label>
          <div class="col-sm-6">
            
            <select type="text" class="form-control" id="inputPassword3" name="pickup" value="<?php echo $result->pickup; ?>">
              <option value="volvo">Delivery Only</option>
              <option value="saab">PickUp Only</option>
            </select>
          </div>
        </div>

         <div class="form-group row">
          <label for="status" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-6">
            
            <select type="text" class="form-control" id="inputPassword3" name="status" value="<?php echo $result->status; ?>">
              <option value="active">active</option>
              <option value="suspended">suspended</option>
              <option value="blocked">blocked</option>
              <option value="expired">expired</option>
            </select>
          </div>
        </div><br>



     
      


         <div class="form-group row" >
         <div class="col-sm-6">
        <button type="submit" class="btn btn-primary" style="margin-left:65%; width:200px; height:35px;" >Submit</button>
        </div>
          </div>
      </form>

  </div>
  <!-- Login Information -->
  <br><div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <form action="<?php echo base_url();?>merchantlist/do/logininformation" method="post">
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="username" value="<?php echo $result->username; ?>" >
             <?php echo form_error('username','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label" >Email</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="email" value="<?php echo $result->email; ?>">
             <?php echo form_error('email','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label" >Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="<?php echo $result->password; ?>">
             <?php echo form_error('password','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="col-sm-6">
        <button type="submit" class="btn btn-primary" <?php if(!$this->session->ins_id){echo "disabled";}?>>Submit</button>
        </div>
    </form>
  </div>
  <!-- Membership -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> 
       

     <form action="<?php echo base_url();?>merchantlist/do/member" method="post">    

      <div class="form-group row">
          <label for="pkgname" class="col-sm-4 col-form-label">Package Name</label>
          <div class="col-sm-6">
            
            <select type="text" class="form-control" id="inputPassword3" name="pkgname" value="<?php echo $result->pkgname; ?>">
              <option value="Free Package">Free Package</option>
              <option value="Premium Packag">Premium Package</option>
              
            </select>
          </div>
        </div><br>

          <div class="form-group row">
          <label for="expdate" class="col-sm-4 col-form-label">Membership Expired On</label>
          <div class="col-sm-6">
            <input type="date" class="j_date hasDatepicker valid" id="inputPassword3" name="expdate" value="<?php echo $result->expdate; ?>">
            
          </div>
        </div>

         <div class="col-sm-6">
        <button type="submit" class="btn btn-primary" <?php if(!$this->session->ins_id){echo "disabled";}?>>Submit</button>
        </div>

      </form>

  </div>
  <!--Featured  -->
   <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="profile-tab">
     
        <form action="<?php echo base_url();?>merchantlist/do/featured" method="post">  
          <div class="form-check">
             
            

             <input type="checkbox" class="form-check-input" id="exampleCheck4"  style="margin-left:20%;" name="check5"  <?php  if($result->country) echo "checked"; ?>>
            <label class="form-check-label" for="exampleCheck1">Featured?</label><br><br>
           <p>Check this if you want this merchant featured on homepage</p>
            <div class="form-group row" >
                 <div class="col-sm-6">
                <button type="submit" class="btn btn-primary" style="margin-left:65%; width:200px; height:35px;" <?php if(!$this->session->ins_id){echo "disabled";}?>>Submit</button>
                </div>
            </div>
       
   
     </div>
  </form>

   </div>
   <!--  -->
  <!--  -->
   
   <!-- Google Map  -->
      <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="contact-tab">
       <form action="<?php echo base_url();?>merchantlist/do/googlemap" method="post">   
        <div class="form-group row">
              <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputEmail3" name="latitude" value="<?php echo $result->latitude; ?>">
                <?php echo form_error('latitude','<p class="text-danger">','</p>');  ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputPassword3" name="longitude" value="<?php echo $result->longitude; ?>">
                <?php echo form_error('longitude','<p class="text-danger">','</p>');  ?>
              </div>
            </div>

            <div class="form-group row" >
             <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" style="margin-left:65%; width:200px; height:35px;" <?php if(!$this->session->ins_id){echo "disabled";}?>>Submit</button>
            </div>
          </div>
        </form>
      </div>
  <!--  -->
</div>

<!--  -->
<!-- <form action="<?php echo base_url();?>merchantlist/do/Add" method="post" enctype="multipart/form-data">

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Dish Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="inputEmail3" name="sts" >
      </div>
    </div>
    <div>
   

 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="inputEmail3" name="sts" >
      </div>
    </div>
 <div class="col-sm-6">
    <button type="submit" class="btn btn-success" name="add" value="Add">Save</button>
     </div>
</form> -->


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
   <!--  <script type="text/javascript" src="<?php echo base_url()?>js/countries_dropdown.js"></script>
    <script type="text/javascript">countriesDropdown("countries");</script> -->
    <script type= "text/javascript" src = "<?php echo base_url()?>js/countries3.js"></script>
    <script language="javascript">print_country("country");</script>
<script>
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

</script>