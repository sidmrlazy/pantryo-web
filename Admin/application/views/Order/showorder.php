<div class="container">
    <div class="orders">
        <div class="orders-header mb-4">
            <p>Ongoing orders</p>
            <!-- <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    10
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">20</a></li>
                    <li><a class="dropdown-item" href="#">50</a></li>
                </ul>
            </div>  -->
        </div>
        <div class="table-responsive">
            <!-- <table class="table"> -->
            <!-- <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
            <!-- <table class="table table-striped table-hover" id="order-listing">    -->
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Shop</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($order_details)) {
                        foreach ($order_details as $row) {
                            // print_r($row);
                    ?>

                            <tr class="tablefont">
                                <th><?php echo $row->orderId; ?></th>
                                <th><?php echo $row->customerDeliveryToName ?></th>
                                <th><?php echo $row->numberOfProduct ?></th>
                                <th><?php echo $row->shopName ?></th>
                                <th><?php echo $row->numberOfProduct ?></th>
                                <th><?php echo $row->billingStatus == 1 ? 'Complete' : 'Incomplete' ?></th>
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

        <!-- <nav aria-label="...">
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
        </nav> -->

    </div>
</div>