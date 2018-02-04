<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="nav_top_align">
            Setting
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
            <li class="active breadcrumb-item">Setting</li>
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
                <form action="<?php echo base_url();?>setting/do" method="post" enctype="multipart/form-data">
                  <h2>Website</h2>
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="title"  value="<?php echo $result->title; ?>">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="seoTi" class="col-sm-2 col-form-label">Desktop Website Logo</label>

                    <div class="col-sm-6">
                      <input type="file"  id="picture" name="picture"  value="<?php echo $result->dlogo;?>">
                    </div>

                  </div>
                 
                <div class="form-group row">
                   <label for="seoTi" class="col-sm-2 col-form-label">Preview</label>
                   <div class="col-sm-6">
                   <img src="<?php echo base_url().'uploads/images/'.$result->dlogo ?>" style="height: 70px; width: 70px;"></td>
                   </div>
                </div>

               <!-- <div class="form-group row">
                    <label for="seoTi" class="col-sm-2 col-form-label">Mobile Website Logo</label>
                    <div class="col-sm-6">
                      <input type="file"  id="mlogo" name="mlogo"  value="<?php// echo $result->mlogo; ?>">
                    </div>
                  </div> -->



                  <h2>Address & Currency</h2>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-6">

                     <select onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" name ="country"  value="<?php echo $result->country; ?>">
                      <?php echo $result->country;?></select>

                   </div>


                 </div>

                 <div class="form-group row">
                  <label for="seoTi" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputEmail3" name="address"  value="<?php echo $result->address; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="metaDes" class="col-sm-2 col-form-label">Contact Phone Number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3" name="phnum"  value="<?php echo $result->phnum; ?>" ><br>

                  </div>
                </div>
                <div class="form-group row">
                  <label for="metaKey" class="col-sm-2 col-form-label">Contact email</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputEmail3" name="email"  value="<?php echo $result->email; ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="metaKey" class="col-sm-2 col-form-label">Global Sender email</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputEmail3" name="gmail"  value="<?php echo $result->gmail; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pkgname" class="col-sm-2 col-form-label">Currency Code</label>
                  <div class="col-sm-6">

                    <select type="text" class="form-control" id="inputPassword3" name="currency"  value="<?php echo $result->currency; ?>">
                      <option value="USD">USD</option>
                      <option value="BAM">BAM</option>
                      <option value="BDT">BDT</option>
                      <option value="RUB">RUB</option>
                      <option value="SAR">SAR</option>
                      <option value="TND">TND</option>

                    </select>
                  </div>
                </div><br>
                <div class="form-group row">
                  <label for="pkgname" class="col-sm-2 col-form-label">Currency code position</label>
                  <div class="col-sm-6">

                    <select type="text" class="form-control" id="inputPassword3" name="position"  value="<?php echo $result->position; ?>">
                      <option value="left">left</option>
                      <option value="Right">Right</option>

                    </select>
                  </div>
                </div><br>
                <div class="form-group row">
                  <label for="decimal" class="col-sm-2 col-form-label">Decimal Places</label>
                  <div class="col-sm-6">

                    <select type="text" class="form-control" id="inputPassword3" name="decimal"  value="<?php echo $result->decimal; ?>">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>

                    </select>
                  </div>
                </div><br>

                

                <div class="col-sm-6">
                  <label class="col-sm-2 col-form-label"></label>
                  <input type="submit" value="Save" class="btn btn-success col-lg-6 ">
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

<script type= "text/javascript" src = "<?php echo base_url()?>js/countries3.js"></script>
<script language="javascript">print_country("country");</script>
<script>
  // $('#myTab a').on('click', function (e) {
  //   e.preventDefault()
  //   $(this).tab('show')
  // })

</script>