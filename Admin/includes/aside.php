<?php 
if(!isset($_SESSION['id'])){
    header("location: error.php?session");
}
error_reporting(0);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link text-sm">
        <img src="../assets/dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADMINISTRATOR</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/sLogo.png" class="img-circle elevation-2" alt="User Image" style="opacity: .8">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b>Saba</b>-<em>Studio</em></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="home.php" class="nav-link <?php if (isset($dashactive)) {
                                                            echo ($dashactive);
                                                        } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview <?php if (isset($builactive)) {
                                                            echo "menu-open";
                                                        } ?>">
                    <a href="#" class="nav-link <?php if (isset($builactive)) {
                                                            echo ($builactive);
                                                        } ?>">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Building
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="room.php?addNewRoom" class="nav-link <?php if(isset($_GET['addNewRoom'])) echo "active"; ?>">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Room</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="floor.php?addNewFloor" class="nav-link <?php if(isset($_GET['addNewFloor'])) echo "active"; ?>">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Floor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="room.php?listViewRoom" class="nav-link <?php if(isset($_GET['listViewRoom'])) echo "active"; ?>">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Room List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="floor.php?listViewFloor" class="nav-link <?php if(isset($_GET['listViewFloor'])) echo "active"; ?>">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Floor List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?php if (isset($rentactive)) {
                                                            echo "menu-open";
                                                        } ?>">
                    <a href="#" class="nav-link <?php if (isset($rentactive)) {
                                                            echo ($rentactive);
                                                        } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Renters
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="renter.php?addNewRenter" class="nav-link <?php if(isset($_GET['addNewRenter'])) echo "active"; ?>">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>New Renter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="renter.php?listViewRenter" class="nav-link <?php if(isset($_GET['listViewRenter'])) echo "active"; ?>">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Renters List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?php if (isset($contractive)) {
                                                            echo "menu-open";
                                                        } ?>">
                    <a href="#" class="nav-link <?php if (isset($contractive)) {
                                                            echo ($contractive);
                                                        } ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Contract
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="contract.php?addNewContract" class="nav-link <?php if(isset($_GET['addNewContract'])) echo "active"; ?>">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>New Contract</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contract.php?listViewContract" class="nav-link <?php if(isset($_GET['listViewContract'])) echo "active"; ?>">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Contract List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?php if (isset($revactive)) {
                                                            echo "menu-open";
                                                        } ?>">
                    <a href="#" class="nav-link <?php if (isset($revactive)) {
                                                            echo ($revactive);
                                                        } ?>">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>
                            Revenue
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="revenue.php?addNewRevenue" class="nav-link <?php if(isset($_GET['addNewRevenue'])) echo "active"; ?>">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Revenue</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="revenue.php?listViewRevenue" class="nav-link <?php if(isset($_GET['listViewRevenue'])) echo "active"; ?>">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Revenue List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="cost.php" class="nav-link <?php if (isset($costactive)) {
                                                            echo ($costactive);
                                                        } ?>">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                            Costs
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="notification.php" class="nav-link <?php if (isset($notactive)) {
                                                                    echo ($notactive);
                                                                } ?>">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Notification
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>