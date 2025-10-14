<?php include('header.php'); ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Admin <span class="inner-text">Login</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="sec-area">
                        <h2 class="h3 text-center mb-4">Glow Beauty Admin Access</h2>
                        <form action="login_handler.php" method="POST" class="form-style6 bg-light p-5 rounded-1 shadow-sm">
                            <div class="form-group">
                                <label for="username">Username or Email*</label>
                                <input type="text" name="username" id="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <p class="form-messages text-danger"></p>
                            </div>
                            <button class="vs-btn w-100" type="submit">Secure Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>