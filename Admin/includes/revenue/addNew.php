<?php
$renterAll = $obj_fetchNormal->fetchNormalRenterPerson("ALL");
$feeTypeAll = $obj_fetchNormal->fetchNormalFeeType("ALL");
$bankAll = $obj_fetchNormal->fetchNormalBank("ALL");
?>

<div class="container-fluid">
    <div class="row">

        <section class="col-lg-6 connectedSortable">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Revenue Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Renter Name</label>
                        <select name="" id="" class="form-control select2">
                            <?php foreach ($renterAll as $key) { ?>
                                <option value="<?php echo  htmlspecialchars($key['renter_id']); ?>"><?php echo  htmlspecialchars($key['fullName']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fee Type</label>
                        <select name="" id="selectFeeTypeAddNew" class="form-control select2">
                            <?php foreach ($feeTypeAll as $key) { ?>
                                <option value="<?php echo  htmlspecialchars($key['fee_type']); ?>"><?php echo  htmlspecialchars($key['name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mounth Paid For</label>
                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yyyy" data-mask>
                    </div>
                </div>
            </div>

        </section>

        <section class="col-lg-6 connectedSortable d-none" id="bankInfo">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bank Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Bank Name</label>
                        <select name="" id="" class="form-control select2">
                            <?php foreach ($bankAll as $key) { ?>
                                <option value="<?php echo  htmlspecialchars($key['bank_id']); ?>"><?php echo  htmlspecialchars($key['name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Recipt Number</label>
                        <input type="text" class="form-control" placeholder="Enter Recipt Number">
                    </div>
                    <div class="form-group">
                        <label>Recipt Date</label>
                        <input type="text" class="form-control" placeholder="Enter Recipt Date">
                    </div>
                    <div class="form-group">
                        <label>Recipt Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Recipt Amount">
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="row">
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-success float-right"> <i class="fas fa-plus mr-2"></i> Add Revenue</button>
        </div>
    </div>
</div>