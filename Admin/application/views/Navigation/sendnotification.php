<div class="container">
  <div class="row mt-5">

    
    <div class="col-sm-6">
      <div class="card mt-2">
        <div class="card-header">
          <div class="card-heading d-flex justify-content-start align-items-center">
            <ion-icon name="logo-firebase" id="firebase" style="font-size: 24px; margin-right: 10px"></ion-icon>
            <div>
              <h2 style="font-family: 'Open Sans', sans-serif; margin-bottom: -5px ">Firebase</h2>
              <h4 style="font-family: 'Open Sans', sans-serif; font-weight: bold">Notification</h4>
            </div>
          </div>
        </div>

        <div class="card-body">
          <form class="row g-3" action="<?php echo base_url('Home/sendingnotification') ?>" method="post" enctype="multipart/form-data">
          <div class="row g-3">
          
          <div class="col-md-6 w-100">
              <label for="partner_category_id" class="form-label">Partner</label>
              <select class="form-control" name="partners" id="showtext">
                <option value="">Select Partner</option>
                <option value="allshop">All Shops</option>
                <option value="alldelivery">All Delivery</option>
                <option value="allcustomer">All Customers</option>
                <option value="mobiledrop">Or Mobile Number</option>
              </select>
            </div>
            <div class="col-md-6 w-100" id="divpartner" style="display: none">
              <label for="partner_category_id" class="form-label" style="visibility: hidden;">Or Mobile Number</label>
              <select class="form-control" name="usertype">
                <option value="">Select Type</option>
                <option value="customer">Customer</option>
                <option value="shop">Pantryo Shop</option>
                <option value="partner">Pantryo Partner</option>
              </select>
              <br>
              <input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number">
            </div>

            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter notification title">
            </div>
            <div class="col-md-12">
              <label for="body" class="form-label">Body</label>
              <textarea type="text" class="form-control" name="body" placeholder="Enter notification body"></textarea>
            </div>

            <div class="col-md-12">
              <label for="body" class="form-label">Image</label>
              
              <input type="file" class="form-control" name="image">
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">

                  <button type="submit" class="btn btn-primary form-control">send Notification</Inp></button>
                </div>
              </div>
              <hr>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="orders-header mb-5">
          <p>Notification History</p>
      </div>
      <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Image</th> 
                <th scope="col">Sent To</th>
                <th scope="col">Time</th> 
                <th scope="col">Delete Action</th>         
              </tr>
                </thead>
                <tbody>
                    <?php if (!empty($notification_list)) {
                        foreach ($notification_list as $row) {
                            // print_r($row);
                    ?>

                            <tr>
                                <td><?php echo $row->notification_title; ?></td>
                                <td><?php echo $row->notification_message; ?></td>
                                <td><?php echo "<img src='$row->notification_image' style='width:30%'"; ?>;</td>
                                <td><?php echo $row->sent_to; ?></td>
                                <td><?php echo $row->notification_time; ?></td>
                                <td><a href="<?php echo base_url('Home/deletenotification/' . base64_encode($row->notification_id)) ?>"><center><ion-icon name="trash-outline" style="color:red"></ion-icon></center></a></th></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr center>
                            <th colspan="6">No Notification
                            <th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
  </div>
</div>
<input type="hidden" value="<?php echo base_url(); ?>" id="base_url">


<script type="text/javascript">
  $(function() {
    $("#showtext").change(function() {
      if ($(this).val() == "mobiledrop") {
        $("#divpartner").show();
      } else {
        $("#divpartner").hide();
      }
    });
  });
</script>