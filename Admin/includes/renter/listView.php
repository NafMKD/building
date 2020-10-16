<?php
$renterAll = $obj_fetchNormal->fetchNormalRenterPerson("ALL");
if(isset($_POST['btnStatFilter'])){
    $selected = $_POST['statFilterSelect'];
    header("location: home.php");
}
?>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Renters:</h3>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Filter :</h3>
                <ul class="nav nav-pills ml-auto p-2 mr-5">
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRenter']) && isset($_GET['floor'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRenter&floor">Floor</a></li>
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRenter']) && isset($_GET['stat'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRenter&stat">Status</a></li>
                </ul>
            </div>
        </div>
        <?php if(isset($_GET['floor'])): ?>
            <form>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Select Floor:</label>
                            <select name="" id="" class="form-control select2">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Filter <i class="fas fa-filter"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        <?php elseif(isset($_GET['stat'])): ?>
            <form method="post">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Select Status:</label>
                            <select name="statFilterSelect" id="" class="form-control">
                                <option value="0">Not Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnStatFilter" class="btn btn-info">Filter <i class="fas fa-filter"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif ?>
        <hr>
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Phone </th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_GET['listViewRenter'])): 
                $cnt = 1;
                    foreach($renterAll as $key){
                        
                    $contractID = $obj_fetchNormal->fetchNormalContract("INDIVIDUAL", $key['contract_id']);
                    $roomId = $obj_fetchNormal->fetchNormalRooms("ROOM", $contractID[0]['room_id']);
                    $floor_id = $obj_fetchNormal->fetchNormalFloor("INDIVIDUAL", $roomId[0]['floor_id']);
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cnt); ?></td>
                        <td><?php echo htmlspecialchars($key['fullName']); ?></td>
                        <td><?php echo htmlspecialchars($key['phone']); ?></td>
                        <td>
                            <a href="<?php echo htmlspecialchars($roomId[0]['room_id']); ?>">
                                <?php echo htmlspecialchars($roomId[0]['roomNumber']); ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo htmlspecialchars($floor_id[0]['floor_id']); ?>">
                                <?php echo htmlspecialchars($floor_id[0]['floorNumbr']); ?>
                            </a>
                        </td>
                        <td>
                            <a href="?renter.php?listViewRenter&view=<?php echo htmlspecialchars($key['renter_id']); ?>">
                                <button class="btn btn-primary btn-sm btn-flat btn-xs">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button>
                            </a>
                            <a href="?renter.php?listViewRenter&edit=<?php echo htmlspecialchars($key['renter_id']); ?>">
                                <button class="btn btn-info btn-sm btn-flat btn-xs">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php $cnt=$cnt+1;}endif ?>
            </tbody>
        </table>
    </div>
</div>