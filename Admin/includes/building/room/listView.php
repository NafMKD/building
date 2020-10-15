<?php
$roomAll = $obj_fetchNormal->fetchNormalRooms("ALL");
if(isset($_POST['btnStatFilter'])){
    $selected = $_POST['statFilterSelect'];
    header("location: home.php");
}
?>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Rooms:</h3>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Filter :</h3>
                <ul class="nav nav-pills ml-auto p-2 mr-5">
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRoom']) && isset($_GET['floor'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRoom&floor">Floor</a></li>
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRoom']) && isset($_GET['stat'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRoom&stat">Status</a></li>
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
                    <th>Room Number</th>
                    <th>Floor Number </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_GET['listView'])): 
                    foreach($roomAll as $key){
                    $floor_id = $obj_fetchNormal->fetchNormalFloor("INDIVIDUAL", $key['floor_id']);
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($key['roomNumber']); ?></td>
                        <td><?php echo htmlspecialchars($floor_id[0]['floorNumbr']); ?></td>
                        <td>
                            <a href="room.php?listViewRoom&view=<?php echo htmlspecialchars($key['renter_id']); ?>">
                                <button class="btn btn-primary btn-sm btn-flat">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button>
                            </a>
                            <a href="room.php?listViewRoom&edit=<?php echo htmlspecialchars($key['renter_id']); ?>">
                                <button class="btn btn-primary btn-sm btn-flat">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php }endif ?>
            </tbody>
        </table>
    </div>
</div>