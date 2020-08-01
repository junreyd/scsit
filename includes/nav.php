<nav class="navbar navbar-default">
    <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-3" id="link-effect-3">
            <ul class="nav navbar-nav">
            <?php if (!isset($_SESSION['auth']['student'])) { ?>
                <li><a href="<?= SITE_URL ?>" data-hover="Home">Home</a></li>
                <li><a href="<?= SITE_URL ?>about.php" data-hover="Aboput us">About Us</a></li>
                <li><a href="<?= SITE_URL ?>gallery.php" data-hover="Gallery">Gallery</a></li>
                <li><a href="<?= SITE_URL ?>contact.php" data-hover="Contact us">Contact Us</a></li>
                <?php } else { ?>
                    <li><a href="<?= SITE_URL ?>register.php" data-hover="Mail Us">Register</a></li>
                    <li><a href="<?= SITE_URL ?>student.php" data-hover="Mail Us">Profile</a></li>
                    <li><a href="<?= SITE_URL ?>actions/logout.php" data-hover="Mail Us">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</nav>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="register-wthree" id="signup">
                    <div class="container">
                        <div class="col-md-6 regstr-r-w3-agileits">
                            <div class="form-bg-w3ls">
                                <h3>Fill the Sign Up form</h3>
                                <p class="para-w3-agile white-w3ls">fell free to sign up</p>

                                <form action="actions/signup.php" method="post">
                                    <input type="text" name="fullname" placeholder="Enter your Fullname" required=""/>
                                    <input type="email" name="email" placeholder="Enter your Email" required=""/>
                                    <input type="text" name="password" placeholder="Enter your Password" required=""/>

                                    <input type="submit" value="Sign Up" class="button-w3layouts hvr-rectangle-out">
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>