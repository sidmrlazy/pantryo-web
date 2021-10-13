<div class="container-fluid">
    <div class="orders">
        <div class="orders-header">
            <p>Delivery Partner Traker</p>


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
                        <th scope="col">Track</th>
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
                                <th><button type="button" class="btn btn-info tablefont">Track</button></th>
                                <th> <button type="button" class="btn btn-info tablefont"><?php echo $row->userStatus == 2 ? 'Incomplete' : 'Complete' ?></button></th>
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