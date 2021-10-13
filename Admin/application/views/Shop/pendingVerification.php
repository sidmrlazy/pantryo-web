<div class="container">
    <div class="orders">
        <div class="orders-header">
            <p>Ongoing orders</p>
        </div>
        <div class="table-responsive">
            <table id="table_id" class="display w-100">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ShopName</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">PinCode</th>
                        <th scope="col">Shop Address</th>
                        <th scope="col">View All</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($details)) {
                        foreach ($details as $row) {
                            // foreach($row1 as $row){
                            // print_r($row);
                    ?>
    

                            <tr class="tablefont">
                                <th><?php echo $row->partner_id; ?></th>
                                <th><?php echo $row->partner_shopName ?></th>
                                <th><?php echo $row->partner_contactNumber ?></th>
                                <th><?php echo $row->partner_pincode ?></th>
                                <th><?php echo $row->partner_shopaddress ?></th>
                                <th><a href="<?php echo base_url('Home/pendingVerificationshowform/'.base64_encode($row->partner_id)) ?>"> <button type="button" class="btn btn-info"><?php echo $row->partner_kycStatus == 1 ? 'Show Details' : 'Complete' ?></button></a></th>
                            </tr>
                        <?php
                        }
                    }
                    // }
                    else {
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
    <a href="<?php echo base_url('home/login') ?>"> <button type="button" id="default" class="btn btn-info mt-4">Back</button></a>
</div>