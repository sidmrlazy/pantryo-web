<div class="container">
  <div class="row mt-5">
    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/showcustomer') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/PantryoLogo2.png" class="imageheight" />

                <span class="dashboardspan">
                  <h6>Customers</h6>

                  <?php
                  if (!empty($customer_count)) {
                    echo $customer_count;
                  } else {
                    echo "00";
                  }
                  ?>

                </span>

              </div>
            </div>
          </div>
        </div>
      </a>
    </div>


    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/monthlyearning') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/PantryoLogo2.png" class="imageheight" />

                <span class="dashboardspan">
                  <h6>Daily Earning</h6>

                  <?php
                  if (!empty($daily_earning_count)) {
                    echo $daily_earning_count;
                  } else {
                    echo "00";
                  }
                  ?>

                </span>

              </div>
            </div>
          </div>
        </div>
      </a>
    </div>


    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/monthlyearning') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/PantryoLogo2.png" class="imageheight" />

                <span class="dashboardspan">
                  <h6>Monthly Earning</h6>

                  <?php
                  if (!empty($monthly_earning_count)) {
                    echo $monthly_earning_count;
                  } else {
                    echo "00";
                  }
                  ?>

                </span>

              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="row mt-5 dashboard-headings">
    <h1>PantrYo Shops</h1>
    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/showshop') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/partner.png" class="imageheight" />
                <span class="dashboardspan">
                  <h6>Unverified Shops</h6>
                  <?php
                  if (!empty($shopPartner_count)) {
                    echo $shopPartner_count;
                  } else {
                    echo "00";
                  }
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/showshop') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/partner.png" class="imageheight" />
                <span class="dashboardspan">
                  <h6>Verified Shops</h6>
                  <?php
                  if (!empty($shopPartner_count)) {
                    echo $shopPartner_count;
                  } else {
                    echo "00";
                  }
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="row mt-5 dashboard-headings">
    <h1>PantrYo Delivery Partners</h1>
    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/showdelivery') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/PantryoDelivery.png" class="imageheight" />
                <span class="dashboardspan">
                  <h6>Verified Partners</h6>
                  <?php
                  if (!empty($deliveryPartner_count)) {
                    echo $deliveryPartner_count;
                  } else {
                    echo "00";
                  }
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-4">
      <a style="text-decoration: none;" href="<?php echo base_url('Home/showdelivery') ?>">
        <div class="card mt-2 borderradius">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-start align-items-center">
                <img src="<?php echo base_url() ?>assets/logo/PantryoDelivery.png" class="imageheight" />
                <span class="dashboardspan">
                  <h6>Unverified Partners</h6>
                  <?php
                  if (!empty($deliveryPartner_count)) {
                    echo $deliveryPartner_count;
                  } else {
                    echo "00";
                  }
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

  </div>

</div>

<div class="container mb-5">
  <div class="orders">
    <div class="orders-header mb-4">
      <p>Ongoing Orders (Today)</p>

    </div>
    <div class="table-responsive mt-5">
      <table id="table_id" class="display" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Customer</th>
            <th scope="col">Numbers Of Item</th>
            <th scope="col">Weight</th>
            <th scope="col">Shop</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Status</th>
            <th scope="col">View All</th>
          </tr>
        </thead>
        <tbody class="table table-striped table-hover">
          <?php if (!empty($order_details)) {
            foreach ($order_details as $row1) {
              foreach ($row1 as $row) {
                // print_r($row);
          ?>
                <tr class="tablefont">
                  <th><?php echo $row->orderId; ?></th>
                  <th><?php echo $row->customerDeliveryToName ?></th>
                  <th>
                    <?php
                    $this->load->model('HomeModel', 'home');
                    $data = $this->home->getallitem($row->orderId);
                    $totalitem = 0;

                    foreach ($data as $item) {
                      $totalitem += $item->numberOfProduct;
                    }
                    echo $totalitem;
                    ?></th>
                  <th>
                    <?php
                    $this->load->model('HomeModel', 'home');
                    $data = $this->home->getallunit($row->orderId);
                    $totalgm = 0;
                    $totalkg = 0;
                    foreach ($data as $unit) {
                      if ($unit->productUnit == 'gm') {
                        $totalgm += $unit->productQty;
                      } else {
                        $totalkg += $unit->productQty;
                      }
                    }
                    $convertkgtogm = $totalkg * 1000;
                    $totalgramm = $totalgm + $convertkgtogm;
                    if ($totalgramm < 999) {
                      echo $totalgramm . "&nbsp;Gm";
                    } else {
                      echo $totalgramm / 1000 . "&nbsp;Kg";
                    }
                    ?></th>
                  <th><?php echo $row->shopName ?></th>
                  <th><?php echo $row->productPrice ?></th>
                  <th><?php echo $row->billingStatus = 1 ? 'Complete' : 'Incomplete' ?></th>
                  <th> <a href="<?php echo base_url('Home/showorderdetails/' . base64_encode($row->orderId)) ?>"><button type="button" class="btn btn-info viewbutton">View</button></a></th>
                </tr>
            <?php
              }
            }
          } else {
            ?>
            <tr center>
              <th colspan="6">data not found
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