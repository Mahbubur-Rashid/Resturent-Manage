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

<button type="button" class="btn" > <a href="<?=base_url('orderstatus/do')?>"><i class="fa fa-plus"></i>Add New</a></button>
<button type="button" class="btn" > <a href="<?=base_url('orderstatus')?>"><i class="fa fa-list"></i>List</a></button><br><br>

<form action="<?php echo base_url();?>orderstatus/do/Add" method="post">
 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="inputEmail3" name="sts" >
      </div>
    </div>
 <div class="col-sm-6">
    <button type="submit" class="btn btn-success" name="add" value="Add">Save</button>
     </div>
</form>
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

