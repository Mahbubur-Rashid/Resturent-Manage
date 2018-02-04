<table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Promo Price</th>
                    <th scope="col">Expiration time(day)</th>
                    <th scope="col">Usage</th>
                    <th scope="col">Limit merchant by sell</th>
                    <th scope="col">Status</th>

                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                 <?php foreach($packages_list as $row): ?>
                  <tr>
                    <td><?php echo $row['pack_id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['promo_price']; ?></td>
                    <td><?php echo $row['expiration']; ?></td>
                    <td><?php echo $row['unlimited_post']; ?></td>
                    <td><?php echo $row['sell_limit']; ?></td>
                    <td><?php echo $row['status']; ?></td>


                  <td class="crud-actions">
                        <i class="fa fa-pencil fa-fw" aria-hidden="true" type="button"  data-toggle="modal" data-target="#myModal<?php echo  $row['pack_id'];?>"></i>

                        <i class="fa fa-trash-o fa-1x" aria-hidden="true" type="button"  data-toggle="modal" data-target="#myModalDel<?php echo  $row['pack_id'];?>"></i>
                   </td>
                 </tr>




 <!-- model for delet -->
                      <div id="myModalDel<?php echo  $row['pack_id'];?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Are you want to delete the Packages ?</h4>
                            </div>

                            <div class="modal-body">
                              <form action="packages/del/<?php echo  $row['pack_id'];?>" method="post">

                              <div class="form-group">

                               <input class="form-control" name="tId" type="hidden" 
                               value="<?php echo $row['pack_id'];?>" >

                             </div>

                             <input class="btn btn-md btn-danger btn-block" type="submit" name="del" value="Delete" style="width: 100px;"> 


                           </form>

                         </div>
                         <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div> 
                  </div>
                  <!-- model for delet topics end -->

 <!-- my modal tor update data start  -->

         <div id="myModal<?php echo  $row['pack_id'];?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Uptate Your Packages</h4>
              </div>
              <div class="modal-body">
               <form action="packages/edit/<?php echo  $row['pack_id'];?>" method="post">
                <div class="form-group">
                  <label> Title </label>
                  <input class="form-control" type="text" name="title" 
                     value="<?php echo $row['title']?>" 
                  >
                </div>

                <div class="form-group">
                  <label>Description </label>
                  <input class="form-control" type="text" name="description" 
                     value="<?php echo $row['description']?>" 
                  >
                </div>

                <div class="form-group">
                  <label>Price </label>
                  <input class="form-control" type="text" name="price" 
                     value="<?php echo $row['price']?>" 
                  >
                </div>

                <div class="form-group">
                  <label>Promo Price </label>
                  <input class="form-control" type="text" name="promo_price" 
                     value="<?php echo $row['promo_price']?>" 
                  >
                </div>

                <div class="form-group">
                  <label>Type </label>

                  <select data-validation="required" class="unlimited_post valid" name="expiration_type" id="unlimited_post">
                       <option value="<?php echo $row['expiration_type']?>" selected="selected">
                          <?php echo $row['expiration_type']?>
                        </option>
                       <option value="days" >Days</option>
                       <option value="year">Year</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Expiration (no. of days or Year)</label>
                  <input class="form-control" type="text" name="expiration" 
                     value="<?php echo $row['expiration']?>" 
                  >
                </div>

                <div class="form-group">
                  <label>Usage </label>
                  <input class="form-control" type="text" name="unlimited_post" 
                     value="<?php echo $row['unlimited_post']?>" 
                  >

                  <select data-validation="required" class="unlimited_post valid" name="unlimited_post" id="unlimited_post">
                       <option value="2" selected="selected">Unlimited</option>
                       <option value="1">Limitted</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Number of Food Item Can Add </label>
                  <input class="form-control" type="text" name="post_limit" 
                     value="<?php echo $row['post_limit']?>" 
                  >

                  <select data-validation="required" class="unlimited_post valid" name="status" id="unlimited_post">
                       <option value="<?php echo $row['status']?>" selected="selected"><?php echo $row['status']?> 
                       </option>
                       <option value="publish">Publish</option>
                       <option value="pending">Pending for review</option>
                       <option value="draft">Draft</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Limit merchant by sell </label>
                  <input class="form-control" type="text" name="cuisine_name" 
                     value="<?php echo $row['pack_id']?>" 
                  >
                </div>

                 <div class="form-group">
                  <label>Status </label>
                  <input class="form-control" type="text" name="cuisine_name" 
                     value="<?php echo $row['pack_id']?>" 
                  >
                </div>




                <div class="form-group">

                 <input class="form-control" name="tId" value="<?php echo $row['pack_id']?>" type="hidden">

               </div>

               <input class="btn btn-md btn-success btn-block" type="submit" name="update" value="Update" style="width: 100px;"> 

             </form>

           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>


    <!-- myModal topic -->





                 <?php endforeach; ?>

               </tbody>
             </table>