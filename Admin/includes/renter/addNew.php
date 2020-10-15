<?php
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Renter Information</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Renter Files</h3>
                </div>
                <div class="card-body">
                    <hr>
                    <span class="ml-3">Renter Photo (upload or capture):</span>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="btn btn-primary btn-file">
                                        Select File
                                        <input type="file" name="attachment">
                                    </div>
                                    <p class="help-block">Max. 10MB</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <button class="btn btn-info" onclick="return capturePhoto()"><i class="fas fa-camera"></i> Capture</button>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                        </div>
                    </form>
                    <hr>
                    <span class="ml-3">Upload Files:</span>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="btn btn-primary btn-file">
                                        Select File
                                        <input type="file" name="attachment">
                                    </div>
                                    <p class="help-block">Max. 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                        </div>
                    </form>
                </div>
                <!--<div class="overlay">
                    <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                </div>-->
            </div>

        </div>



    </div>
</div>