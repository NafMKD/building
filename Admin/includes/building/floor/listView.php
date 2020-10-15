<?php
$floorAll = $obj_fetchNormal->fetchNormalFloor("ALL");

?>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Rooms:</h3>
    </div>
    <div class="card-body">
        <hr>
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Floor Number</th>
                    <th>Room Amount (<em class="text-green">How Many</em>)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_GET['listView'])): 
                    foreach($floorAll as $key){
                ?>
                    <tr>
                        <td>Floor Number - <?php echo htmlspecialchars($key['floorNumbr']); ?></td>
                        <td><?php echo htmlspecialchars($key['roomAmount']); ?></td>
                        <td>
                            <a href="floor.php?listViewFloor&view=<?php echo htmlspecialchars($key['floor_id']); ?>">
                                <button class="btn btn-primary btn-sm btn-flat">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button>
                            </a>
                            <a href="floor.php?listViewFloor&edit=<?php echo htmlspecialchars($key['floor_id']); ?>">
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