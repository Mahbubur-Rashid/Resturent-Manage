<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                           Custom Page List
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Page List
                                </a>
                            </li>
                            <li class="active breadcrumb-item">List</li>
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

<button type="button" class="btn" > <a href="<?=base_url('custom-page/do')?>"><i class="fa fa-plus"></i>Add New</a></button>
<button type="button" class="btn" > <a href="<?=base_url('custom-page/do1')?>"><i class="fa fa-plus"></i>Add New Custom Link</a></button>
<button type="button" class="btn" > <a href="<?=base_url('custom-page')?>"><i class="fa fa-list"></i>List</a></button>
<button type="button" class="btn" > <a href="<?=base_url('dishes')?>"><i class="fa fa-list"></i>Assine Page</a></button><br><br>



  <form action="<?php echo base_url();?>custom-page/save" method="post">
     <div class="form-group row">
          <label for="pageName" class="col-sm-2 col-form-label">Page Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="pageName" value="<?php echo $result->pageName?>">
             <?php echo form_error('pageName','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="icon" class="col-sm-2 col-form-label">Icon</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="icon" placeholder="eg. fa fa-info-circle" value="<?php echo $result->icon?>">
             <?php echo form_error('icon','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="content" class="col-sm-2 col-form-label">Content</label>
          <div class="col-sm-6">
            <textarea type="text" class="form-control" id="inputPassword3" name="content" ><?php echo $result->content?></textarea>
             <?php echo form_error('content','<p class="text-danger">','</p>');  ?>
          </div>
        </div><br>
        <h3>SEO</h3><br>
        <div class="form-group row">
          <label for="seoTi" class="col-sm-2 col-form-label">SEO Title</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="seoTi" value="<?php echo $result->seoTi?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="metaDes" class="col-sm-2 col-form-label">Meta Description</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="metaDes" value="<?php echo $result->metaDes?>"><br>
          
          </div>
        </div>
        <div class="form-group row">
          <label for="metaKey" class="col-sm-2 col-form-label">Meta Keywords</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputEmail3" name="metaKey" value="<?php echo $result->metaKey?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="status" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-6">
             <select type="text" class="form-control" id="inputPassword3" name="status" value="<?php echo $result->status?>">
              <option value="active">Publish</option>
              <option value="suspended">Pending For Review</option>
              <option value="blocked">Draft</option>
              
            </select>
          
          </div>
        </div>

         <div class="form-group row">
          <label for="linkName" class="col-sm-2 col-form-label">Link Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="inputPassword3" name="linkName"  value="<?php echo $result->linkName?>">
             <?php echo form_error('linkName','<p class="text-danger">','</p>');  ?>
          </div>
        </div>
        
          <label for="basic-url" >Your vanity URL</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="link"  value="<?php echo $result->link?>">
          </div>
          <br>

       <div class="form-group row" >
         <div class="col-sm-6">
        <button type="submit" class="btn btn-primary" style="margin-left:60%; width:200px; height:35px;" >Submit</button>
        </div>
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

