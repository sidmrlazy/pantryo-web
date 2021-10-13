<div class="container">
    <div class="orders">
        <div class="row orders-header mb-5">
            <!-- <span>
                <p>Show Inventory</p>
            </span>
            <span>
                <p>Show Inventory</p>
            </span> -->
            <div class="col-sm-12">
                <p><span>Show Inventory</span><span style="float:right;"><a href="<?php echo base_url('Home/inventoryadd') ?>"><button type="button" class="btn btn-info viewbutton defaultbutton">Add</button></a></span>
                <p>
                    <!-- <p>Show Inventory</p> -->
            </div>
            <!-- <div class="col-sm-1">
            <p><a href="<?php echo base_url('Home/inventoryadd') ?>"><button type="button" class="btn btn-info viewbutton defaultbutton">Add</button></a>
            </p>   
          </div> -->
        </div>
        <div class="table-responsive">
            <table id="table_id" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Qty/Unit</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($inventory)) {
                        foreach ($inventory as $row) {
                            // print_r($row);
                    ?>

                            <tr>
                                <th><?php echo $row->pantryo_inventory_id; ?></th>
                                <th><?php echo $row->pantryo_item_name ?></th>
                                <th><?php echo $row->pantryo_brand_name ?></th>
                                <th><?php echo $row->pantryo_item_qty . "/" . $row->pantryo_item_unit ?></th>
                                <th><?php echo $row->pantryo_item_price ?></th>
                                <th><?php echo $row->pantryo_item_status = '2' ? 'In Stock' : 'Out of Stock' ?></th>
                                <th> <a href="<?php echo base_url('Home/inventoryedit/' . base64_encode($row->pantryo_inventory_id)) ?>"><button type="button" class="btn btn-info viewbutton" id="editinventorydata">Edit</button></a></th>
                                <th> <a href="<?php echo base_url('Home/inventorydelete/' . base64_encode($row->pantryo_inventory_id)) ?>"><button type="button" class="btn btn-info viewbutton">Delete</button></a></th>
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
</div>