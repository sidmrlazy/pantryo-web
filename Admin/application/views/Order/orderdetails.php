<div class="container">
    <div class="orders">
        <div class="orders-header mb-5">
            <p>Ongoing orders</p>
        </div>
        <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Numbers Of Item</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Shop</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">View All</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($details)) {
                        foreach ($details as $row) {
                            // foreach($row1 as $row){
                            // print_r($row);
                    ?>


                            <tr class="tablefont">
                                <th><?php echo $row->orderId; ?></th>
                                <th><?php echo $row->customerDeliveryToName ?></th>
                                <th>
                                    <?php
                                    echo $row->numberOfProduct . "&nbsp;&nbsp;&nbsp;(" . $row->productName . ")";

                                    ?></th>
                                <th>
                                    <?php
                                    echo $row->productQty . "&nbsp;" . $row->productUnit;

                                    ?></th>
                                <th><?php echo $row->shopName ?></th>
                                <th>₹<?php echo $row->productPrice ?></th>
                                <th><?php echo $row->billingStatus == 1 ? 'Complete' : 'Incomplete' ?></th>
                                <!-- <th><button type="button" class="btn btn-info viewbutton">View</button></th> -->
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
    <a href="<?php echo base_url('home/login') ?>"><button type="button" id="default" class="btn btn-info mt-4">Back</button></a>
</div>