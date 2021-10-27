<div class="container">
  <div class="row mt-5">
       
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6"> 
       <div class="card mt-2">
           <div class="card-header">
           <div class="card-heading">
            <h4>Partner Pending KYC </h4>
           </div> 
           </div>
         <div class="card-body">
         <form class="row g-3" action="<?php echo base_url('Home/partnerpendingfrom')?>" method="post">
          
            <div class="col-md-6">
                <label for="partnername" class="form-label">Partner Name</label>
                <input type="text" class="form-control" name="partnername"  readonly id="partnername" value="<?php echo $partner_details[0]->partner_shopName;?>">
            </div>
            <div class="col-md-6">
                <label for="partnermobile" class="form-label">Partner Mobile</label>
                <input type="text" class="form-control" name="partnermobile" readonly  id="partnermobile" value="<?php echo $partner_details[0]->partner_contactNumber;?>">
            </div>
            <div class="col-md-6">
                <label for="bankAccountNumber" class="form-label">Bank Account Number</label>
                <input type="text" class="form-control" name="bankAccountNumber" readonly  id="bankAccountNumber" value="<?php echo $partner_details[0]->partner_accountNumber;?>">
            </div>
            <div class="col-md-6">
                <label for="bankIFSCCode" class="form-label">Bank IFSC Code</label>
                <input type="text" class="form-control" name="bankIFSCCode" readonly  id="bankIFSCCode" value="<?php echo $partner_details[0]->partner_bankISFCCode;?>">
            </div>
            <div class="col-md-6">
                <label for="bankAccountType" class="form-label">Bank Account Type</label>
                <input type="text" class="form-control" name="bankAccountType" readonly  id="bankAccountType" value="<?php echo $partner_details[0]->partner_account_type;?>">
            </div>
           
            <div class="col-md-6">
                <label for="partnerAcountId" class="form-label">Account Id <span style="color:red">*</span></label>
                <?php
                if(!empty($partner_account[0]->account_id))
                    {
                ?>
                <input type="text" class="form-control" name="partnerAcountId"  id="partnerAcountId" required value="<?php echo $partner_account[0]->account_id;?>">
                <?php
                    }
                else
                {
                ?>
                 <input type="text" class="form-control" name="partnerAcountId"  id="partnerAcountId" required">
                 <?php
                }
                ?>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                 <button type="submit" class="btn btn-primary form-control">Add</Inp></button>
                </div>
            </div>
            <input type="hidden" value="<?php echo $partner_details[0]->partner_id;?>" name="partner_id">
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