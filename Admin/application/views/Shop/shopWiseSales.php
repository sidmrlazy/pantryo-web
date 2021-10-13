<div class="container">
    <div class="orders">
        <div class="orders-header mb-5">
            <p>Shop Wise Sales</p>

        </div>
        <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ShopName</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">PinCode</th>
                        <th scope="col">Shop Address</th>
                        <th scope="col">Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($partner_details)) {
                        foreach ($partner_details as $row) {
                            // print_r($row);
                    ?>

                            <tr class="tablefont">
                                <th><?php echo $row->partner_id; ?></th>
                                <th><?php echo $row->partner_shopName ?></th>
                                <th><?php echo $row->partner_contactNumber ?></th>
                                <th><?php echo $row->partner_pincode ?></th>
                                <th><?php echo $row->partner_shopaddress ?></th>
                                <th>₹10560</th>
                                <!-- <th><a href="<?php echo base_url('Home/pendingVerification') ?>"> <button type="button" class="btn btn-info tablefont font-weight-bold"><?php echo $row->customer_status = 2 ? 'Incomplete' : 'Complete' ?></button></a></th> -->
                            </tr>
                        <?php
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

        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>
    <a href="<?php echo base_url('home/login') ?>"> <button type="button" id="default" class="btn btn-info mt-4">Back</button></a>

</div>