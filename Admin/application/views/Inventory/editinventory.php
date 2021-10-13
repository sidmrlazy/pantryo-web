<div class="container">
  <div class="row mt-5">
       
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
       <div class="card mt-2">
           <div class="card-header">
           <div class="card-heading">
            <h4>Edit Inventory</h4>
           </div> 
           </div>
           
         <div class="card-body">
         <form class="row g-3" action="<?php echo base_url('Home/editInventory')?>" method="post">
            <div class="col-md-6">
                <label for="partner_category_id" class="form-label">Category</label>
                <select  class="form-control" name="partner_category_id" id="editinventorydatashow">
                 <option selected value="<?php echo $editinventory[0]->partner_category_name;?>"><?php echo $editinventory[0]->partner_category_name;?></option>                
                </select>
            </div>
            <div class="col-md-6">
                <label for="pantryo_main_category_id" class="form-label">Main Category</label>
                <select  class="form-control" name="pantryo_main_category_id" id="pantryo_main_category_id" value="<?php echo $editinventory[0]->pantryo_main_category_id;?>">
                 <!-- <option value="">Select Main Category</option> -->
                 <option value="<?php echo $editinventory[0]->pantryo_main_category_id;?>"><?php echo $editinventory[0]->pantryo_main_category_name;?></option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="pantryo_item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="pantryo_item_name" id="pantryo_item_name" value="<?php echo $editinventory[0]->pantryo_item_name;?>">
            </div>
            <div class="col-md-6">
                <label for="pantryo_brand_name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name="pantryo_brand_name" id="pantryo_brand_name" value="<?php echo $editinventory[0]->pantryo_brand_name;?>">
            </div>
            <div class="col-md-6">
                <label for="pantryo_item_qty" class="form-label">Item Qty</label>
                <input type="text" class="form-control" name="pantryo_item_qty" id="pantryo_item_qty" value="<?php echo $editinventory[0]->pantryo_item_qty;?>">
            </div>
            <div class="col-md-6">
                <label for="pantryo_item_unit" class="form-label">Item Unit</label>
                <input type="text" class="form-control" name="pantryo_item_unit" id="pantryo_item_unit" value="<?php echo $editinventory[0]->pantryo_item_unit;?>">
            </div>
            <div class="col-md-6">
                <label for="pantryo_item_price" class="form-label">Item Price</label>
                <input type="text" class="form-control" name="pantryo_item_price" id="pantryo_item_price" value="<?php echo $editinventory[0]->pantryo_item_price;?>">
            </div>
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                <label for="inputtext4" class="form-label" style="color:white;">editinventory</label>
                <button type="submit" class="btn btn-primary form-control">Edit Inventory</Inp></button>
                </div>
                </div>
            </div>
            <input type="hidden" value="<?php echo $editinventory[0]->pantryo_inventory_id;?>" name="pantryo_inventory_id">
       <hr>

         </form>
        </div>
        </div>
    </div>
     
    <div class="col-sm-3">

    </div>
  </div>
</div>
<input type="hidden" value="<?php echo base_url();?>" id="base_url">