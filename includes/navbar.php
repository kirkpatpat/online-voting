<div class="sidebar">
    <div class="content-container add-padding">
        <div class="sidebar-title">COMELEC <br> 2022</div>
        <div class="nav-item">
            <a href="<?= URLROOT ?>/">
                <div class="icon-container">
                    <i class="fas fa-home"></i>
                </div>
                <div class="nav-title-container">
                    <p>Home</p>
                </div>
            </a>
        </div>
        <div class="nav-item">
            <a href="<?= URLROOT ?>/profile.php">
                <div class="icon-container">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="nav-title-container">
                    <p>Profile</p>
                </div>
            </a>
        </div>
        <div class="<?= isset($_SESSION['voted'])  ? 'hide-bg-hover' : '' ?> nav-item">
            <a href="<?= URLROOT ?>/vote.php" style="<?= isset($_SESSION['voted'])  ? 'pointer-events: none;' : '' ?>">
                <div class="icon-container">
                    <i class="fa fa-check-square"></i>
                </div>
                <div class="nav-title-container">
                    <p>Vote</p>
                </div>
            </a>
        </div>
        <div class="nav-item">
            <a href="">
                <div class="icon-container">
                    <i class="fas fa-poll-h"></i>
                </div>
                <div class="nav-title-container">
                    <p>Election Statistics</p>
                </div>
            </a>
        </div>
        <?php if (Auth::isLoggedIn()): ?>
            <div class="nav-item">
                <a href="<?= URLROOT ?>/logout.php">
                    <div class="icon-container">
                        <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="nav-title-container">
                        <p>Logout</p>
                    </div>
                </a>
            </div>
        <?php else: ?>
            <div class="nav-item">
                <a href="<?= URLROOT ?>/login.php">
                    <div class="icon-container">
                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                    </div>
                    <div class="nav-title-container">
                        <p>Login</p>
                    </div>
                </a>
            </div>
            <div class="nav-item">
                <a href="<?= URLROOT ?>/register.php">
                    <div class="icon-container">
                        <i class="fas fa-sign-in" aria-hidden="true"></i>
                    </div>
                    <div class="nav-title-container">
                        <p>Register</p>
                    </div>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div class="footer">
        <!-- GAYAHIN YUNG NASA KODIGO.ME  -->
    </div>
</div>