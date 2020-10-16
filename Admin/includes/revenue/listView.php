<?php
$allTransaction = $obj_fetchNormal->fetchNormalRentRevenue("ALL");
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
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRevenue']) && isset($_GET['floor'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRevenue&floor">Floor</a></li>
                    <li class="nav-item"><a class="nav-link <?php if (isset($_GET['listViewRevenue']) && isset($_GET['month'])) {
                                                                echo "active";
                                                            } ?>" href="?listViewRevenue&month">Month</a></li>
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
        <?php elseif(isset($_GET['month'])): ?>
            <form method="post">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Select Month:</label>
                            <select name="" id="" class="form-control select2">
                                <option value="0">January</option>
                                <option value="1">February </option>
                                <option value="2">March </option>
                                <option value="3">April </option>
                                <option value="4">May </option>
                                <option value="5">June </option>
                                <option value="6">July  </option>
                                <option value="7">August   </option>
                                <option value="8">September </option>
                                <option value="9">October  </option>
                                <option value="10">November </option>
                                <option value="11">December </option>
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
                    <th>Renter Full Name</th>
                    <th>Payment Method </th>
                    <th>Amount</th>
                    <th>Mounth Date For</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_GET['listViewRevenue'])): 
                    foreach($allTransaction as $key){
                        $renter = $obj_fetchNormal->fetchNormalRenterPerson("INDIVIDUAL", $key['renter_id'])[0];
                        $feeType = $obj_fetchNormal->fetchNormalFeeType("INDIVIDUAL", $key['fee_type'])[0];
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($renter['fullName']); ?></td>
                        <td><?php echo htmlspecialchars($feeType['name']); ?></td>
                        <td><?php echo htmlspecialchars($key['feeAmount']); ?></td>
                        <td><?php echo htmlspecialchars($key['monthPaidFor']); ?></td>
                        <td>
                            <a href="?evenue.php?listViewRevenue&view=<?php echo htmlspecialchars($key['revenue_id']); ?>">
                                <button class="btn btn-primary btn-sm btn-flat">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button>
                            </a>
                            <a href="?evenue.php?listViewRevenue&edit=<?php echo htmlspecialchars($key['revenue_id']); ?>">
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