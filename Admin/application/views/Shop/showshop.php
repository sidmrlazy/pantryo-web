<div class="container">
    <div class="orders">
        <div class="orders-header mb-5">
            <p>All Pantryo Partner</p>

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
                        <th scope="col">Kyc Status</th>
                        <th scope="col">Status</th>
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

                                <?php if($row->partner_kycStatus==1) {?>
                                <th><a href="<?php echo base_url('Home/pendingVerificationshowform/'.base64_encode($row->partner_id))?>"> <button type="button" class="btn btn-info tablefont font-weight-bold"><?php echo $row->partner_kycStatus = 1 ? 'Show Details' : 'Complete' ?></button></a></th>
                            <?php }else { ?>

                                <th><a href="<?php echo base_url('Home/pendingVerificationshowform/'.base64_encode($row->partner_id))?>"> <button type="button" class="btn btn-info tablefont font-weight-bold"><?php echo $row->partner_kycStatus = 1 ? 'Complete' : 'Complete' ?></button></a></th>
                            <?php } ?>

                                <th> <a href="<?php echo base_url('Home/shopBlock/') . base64_encode($row->partner_id) . '/' . base64_encode($row->partner_status) ?>">
                                        <?php
                                        if ($row->partner_status == 1) {
                                        ?>
                                            <button type="button" class="btn btn-info tablefont blockuserbuttonstyle"><?php echo $row->partner_status == 2 ? 'UnBlock' : 'Block' ?></button>
                                        <?php
                                        } else {
                                        ?>
                                            <button type="button" class="btn btn-info tablefont"><?php echo $row->partner_status == 2 ? 'UnBlock' : 'Block' ?></button>
                                        <?php
                                        }
                                        ?>


                                    </a></th>
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



    </div>
    <a href="<?php echo base_url('home/login') ?>"> <button type="button" id="default" class="btn btn-info">Back</button></a>

</div>