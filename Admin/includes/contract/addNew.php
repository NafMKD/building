<?php
?>

<div class="container-fluid">
    <?php if (!isset($_GET['addNewContractSecondStep'])) : ?>
        <div class="row">
            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Renter Information</h3>
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
                            <label>Room Number</label>
                            <input type="text" name="renterInfoPhoneReg" class="form-control" placeholder="Enter Phone Number">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Contract Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                        <div class="form-group">
                            <label>Ende Date</label>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 mt-2">
                <button type="submit" class="btn btn-success float-right"> <i class="fas fa-plus mr-2"></i> Add Contract</button>
            </div>
        </div>
    <?php elseif (isset($_GET['addNewContractSecondStep'])) : ?>
        <div class="row">
            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>File Name</label>
                            <input type="text" class="form-control" placeholder="Enter File Name">
                        </div>
                        <div class="form-group">
                            <div class="btn btn-primary btn-file">
                                Select File
                                <input type="file" name="attachment">
                            </div>
                            <p class="help-block">Max. 10MB</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endif ?>
</div>