<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            Manage Language
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
                            <li class="active breadcrumb-item">Manage Language</li>
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



<!-- my language setting -->

<select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>French</option>
    <option value="german" <?php if($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>German</option>
     <option value="spanish" <?php if($this->session->userdata('site_lang') == 'spanish') echo 'selected="selected"'; ?>>Spanish</option>
    <option value="bangla" <?php if($this->session->userdata('site_lang') == 'bangla') echo 'selected="selected"'; ?>>Bangla</option>    
</select>
<p><?php echo $this->lang->line('welcome_message'); ?></p>
<p><?php echo $this->lang->line('mahbub'); ?></p>

<!-- my language setting end-->
      




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

