<?php
$fetchfloor = $obj_fetchNormal->fetchNormalFloor("ALL");
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Room Information</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Room Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Room Number">
                                </div>
                                <div class="form-group">
                                    <label>Room Amount (<em class="text-green">Br.</em>)</label>
                                    <input type="text" class="form-control" placeholder="Enter Room Amount">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Select Floor Number</label>
                                    <select class="form-control select2">
                                        <?php foreach($fetchfloor as $key){ ?>
                                            <option value="<?php echo $key['floor_id'] ?>"> Floor Number - <?php echo htmlspecialchars($key['floorNumbr']) ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>