
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


<select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>French</option>
    <option value="german" <?php if($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>German</option>   
</select>
<p><?php echo $this->lang->line('welcome_message'); ?></p>
<p><?php echo $this->lang->line('mahbub'); ?></p>




			<div class="spacer"></div>


        <div class="container" style="margin-top:50px">    
             <br>
 
             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
 
            <h2>Currency List Insert By CSV Upload</h2>
                <form method="post" action="<?php echo base_url() ?>csvImport" enctype="multipart/form-data">
                    <input type="file" name="userfile" ><br><br>

                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-success">

                </form>
 
            <br><br>
            <table class="table table-striped table-hover table-bordered">
                <caption>Currency List</caption>
                <thead>
                    <tr>
                        <th>Currency Id</th>
                        <th>Currency Code</th>
                        <th>Currency Symbol</th>
                        <th>Currency Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($currency_list == FALSE): ?>
                        <tr><td colspan="4">There are currently No Currency List</td></tr>
                    <?php else: ?>
                        <?php foreach ($currency_list as $row): ?>
                            <tr>
                                <td><?php echo $row['currency_id']; ?></td>
                                <td><?php echo $row['currency_code']; ?></td>
                                <td><?php echo $row['currency_symbol']; ?></td>
                                <td><?php echo $row['currency_date']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
 
 
            <hr>
            <footer>
                <p>&copy;My Currency List</p>
            </footer>
 
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

