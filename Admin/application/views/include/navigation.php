<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url() ?>assets/logo/PantryoIcon.png" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo base_url('dashboard/login') ?>">Home</a>
                </li>
                <!-- ======== Business ======== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Business
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="dropdown-row">
                            <ion-icon id="basic-icon" name="bag-outline"></ion-icon><a class="dropdown-item" href="<?php echo base_url('home/order') ?>">Orders</a>
                        </li>
                        <li class="dropdown-row">
                            <ion-icon id="basic-icon" name="paper-plane-outline"></ion-icon><a class="dropdown-item" href="<?php echo base_url('home/transfers') ?>">Transfers</a>
                        </li>
                        <li class="dropdown-row">
                            <ion-icon id="basic-icon" name="wallet-outline"></ion-icon><a class="dropdown-item" href="<?php echo base_url('home/revenue') ?>">Revenue</a>
                        </li>
                        <li class="dropdown-row">
                            <ion-icon id="basic-icon" name="apps-outline"></ion-icon><a class="dropdown-item" href="<?php echo base_url('home/inventory') ?>">Inventory</a>
                        </li>
                        <li class="dropdown-row">
                            <ion-icon name="logo-firebase" id="firebase"></ion-icon><a class="dropdown-item" href="<?php echo base_url('home/sendnotification') ?>">Send Notification</a>
                        </li>
                    </ul>
                </li>
                <!-- ======== Business ======== -->

                <!-- ======== Customers ======== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Customer
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('home/details') ?>">Details</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/reviews') ?>">Reviews</a></li>
                    </ul>
                </li>
                <!-- ======== Customers ======== -->

                <!-- ======== Shops ======== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shops
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('home/pendingVerification') ?>">Pending Verifications</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/showshop') ?>">All Shops</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/shopWiseSales') ?>">Shop-Wise Sales</a></li>
                    </ul>
                </li>
                <!-- ======== Shops ======== -->

                <!-- ======== Delivery Partners ======== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Delivery Partners
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('home/pendingDeliveryPartnerVerification') ?>">Pending Delivery Partner Verifications</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/showdelivery') ?>">All Delivery Partners</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('home/Track') ?>">Track</a></li>
                    </ul>
                </li>
                <!-- ======== Shops ======== -->


            </ul>
        </div>
        <a class="navbar-brand" href="index.php">
            <!-- <img src="<?php echo base_url() ?>assets/logo/PantryoLogo.png" /> -->
            <li class="nav-item d-flex justify-content-center align-items-center">
                <ion-icon name="log-out-outline" id="logout-btn"></ion-icon>
                <a class="nav-link" aria-current="page" href="<?php echo base_url('Home') ?>">Logout</a>
            </li>
        </a>
    </div>
</nav>


<script type="text/javascript">
function a() {
    const idleDurationSecs = 300;
    const redirectUrl = '<?php echo base_url('Home') ?>';
    let idleTimeout;

    const resetIdleTimeout = function() {
        if(idleTimeout) clearTimeout(idleTimeout);
        idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
    };
	
	// Key events for reset time
    resetIdleTimeout();
    window.onmousemove = resetIdleTimeout;
    window.onkeypress = resetIdleTimeout;
    window.click = resetIdleTimeout;
    window.onclick = resetIdleTimeout;
    window.touchstart = resetIdleTimeout;
    window.onfocus = resetIdleTimeout;
    window.onchange = resetIdleTimeout;
    window.onmouseover = resetIdleTimeout;
    window.onmouseout = resetIdleTimeout;
    window.onmousemove = resetIdleTimeout;
    window.onmousedown = resetIdleTimeout;
    window.onmouseup = resetIdleTimeout;
    window.onkeypress = resetIdleTimeout;
    window.onkeydown = resetIdleTimeout;
    window.onkeyup = resetIdleTimeout;
    window.onsubmit = resetIdleTimeout;
    window.onreset = resetIdleTimeout;
    window.onselect = resetIdleTimeout;
    window.onscroll = resetIdleTimeout;

}a();
</script>