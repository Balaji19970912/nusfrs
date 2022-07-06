<ul>
        <li><a id="logo" href="index.php"><img src="img/nus-logo-2020.svg" alt="NUS Consulting Group Logo"></a>
        <li><a class="hoverHome" href="addhome.php">Home</a></li>
            <?php
                if($_SESSION['role'] == 'Admin' || $_SESSION['role'] == 'NUS Manager' || $_SESSION['role'] == 'NUS User') {       
            ?>
                <li><a class="hoveraddCompany"href="addcompany.php">Company</a></li>
            <?php
            }
            ?>
        <li><a class="hoversupplyContract" href="addsupplycontract.php">Supply Contract</a></li>
            <?php
                if($_SESSION['role'] == 'Admin' || $_SESSION['role'] == 'NUS Manager' || $_SESSION['role'] == 'NUS User') {
            ?>
            <li><a class="hoverenterTrade" href="entertrade.php">Enter Trade</a></li>
            <?php
            }
            ?>
        <li><a class="hovergenerateReport" href="generatereport.php">Generate Report</a></li>
        <?php
            if($_SESSION['role'] == 'Admin') {
        ?>
            <li><a class="hoveruserManagement" href="usermanagement.php">User Management</a></li>
        <?php
        }
        ?>
        <li><a class="hoverlogOut" href="logout.php">Logout</a></li>
</ul>