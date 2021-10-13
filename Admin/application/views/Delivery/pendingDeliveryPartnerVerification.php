<div class="container">
    <div class="orders">
    <div class="row orders-header mb-5">
          
            <div class="col-sm-12">
                <p><span>Pending Delivery Partner Verification</span><span style="float:right;"><?php echo message_box('success'); ?>
                <?php echo message_box('error'); ?></span>
                <p>
            </div>
    </div>
          
               
        <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Kyc Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($delivery_details)) {
                        foreach ($delivery_details as $row) {
                            // print_r($row);
                    ?>

                            <tr class="tablefont">
                                <th><?php echo $row->delivery_id; ?></th> 
                                <th><?php echo $row->fullname ?></th>
                                <th><?php echo $row->contactNumber ?></th>
                                <th><?php echo $row->email ?></th>
                                <th><?php echo $row->address ?></th>
                                <!-- <th> <button type="button" class="btn btn-info tablefont"><?php echo $row->userStatus == 1 ? 'Incomplete' : 'Complete' ?></button></th> -->
                                <th><a href="<?php echo base_url('Home/pendingDelveryPartner/' . base64_encode($row->delivery_id)); ?>"><button type="button" class="btn btn-info tablefont"><?php echo $row->userVerificationStatus == 1 ? 'Show Details' : 'Complete' ?></button></a></th>
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
    <a href="<?php echo base_url('home/login') ?>"> <button type="button" id="default" class="btn btn-info mt-4">Back</button></a>

</div>