<div class="container">
    <div class="orders">
        <div class="orders-header">
            <?php echo message_box('success'); ?>
            <?php echo message_box('error'); ?>
            <p>All Pantryo Customer</p>

        </div>
        <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($customer_details)) {
                        foreach ($customer_details as $row) {
                            // print_r($row);
                    ?>

                            <tr class="tablefont">
                                <th><?php echo $row->customer_id; ?></th>
                                <th><?php echo $row->customer_name ?></th>
                                <th><?php echo $row->customer_mobile ?></th>

                                <th> <a href="<?php echo base_url('Home/customerBlock/') . base64_encode($row->customer_id) . '/' . base64_encode($row->customer_status) ?>">
                                        <?php
                                        if ($row->customer_status == 1) {
                                        ?>
                                            <button type="button" class="btn btn-info tablefont blockuserbuttonstyle"><?php echo $row->customer_status == 2 ? 'UnBlock' : 'Block' ?></button>
                                        <?php
                                        } else {
                                        ?>
                                            <button type="button" class="btn btn-info tablefont"><?php echo $row->customer_status == 2 ? 'UnBlock' : 'Block' ?></button>
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