<?php 
    include('header.php'); 
    
    // **CRITICAL SECURITY CHECK (PHP Back-end needed):**
    // In a live environment, this code should redirect non-admin users to login.php
    // if ($_SESSION['user_role'] !== 'admin') { header('Location: login.php'); exit; }
?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Admin <span class="inner-text">Dashboard</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h3 mb-4">Content Management for Glow Beauty Emporium</h2>

                    <ul class="nav nav-tabs style1 mb-4" id="adminTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery-content" type="button" role="tab" aria-controls="gallery-content" aria-selected="true">Gallery Images</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="shop-tab" data-bs-toggle="tab" data-bs-target="#shop-content" type="button" role="tab" aria-controls="shop-content" aria-selected="false">Shop Products</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="logout_handler.php" class="nav-link bg-danger text-white">Logout</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        
                        <div class="tab-pane fade show active" id="gallery-content" role="tabpanel" aria-labelledby="gallery-tab">
                            <h4 class="h5 mb-3">Upload New Gallery Image</h4>
                            <form action="upload_gallery.php" method="POST" enctype="multipart/form-data" class="form-style6 bg-white p-4 border rounded">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="image_file">Image File*</label>
                                        <input type="file" name="image_file" id="image_file" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="image_title">Image Title (e.g., Bridal Updo)</label>
                                        <input type="text" name="image_title" id="image_title" placeholder="Image Title" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="category">Category (e.g., cat1, cat2)</label>
                                        <select name="category" id="category" class="form-select" required>
                                            <option value="cat1">Wig Installs</option>
                                            <option value="cat2">Color & Highlights</option>
                                            <option value="cat3">Extensions</option>
                                            <option value="cat4">Bridal Hair</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button class="vs-btn" type="submit">Upload Image</button>
                                    </div>
                                </div>
                            </form>

                            <h4 class="h5 mt-5 mb-3">Existing Gallery Images (AJAX Loaded)</h4>
                            <div id="existing-gallery-list" class="ajax-loading-placeholder p-4 border rounded">
                                <p class="text-center text-muted"><i class="fas fa-spinner fa-spin me-2"></i> Loading existing gallery items...</p>
                                <p class="text-center text-muted">*(This content will be replaced by data from `fetch_gallery.php` using JavaScript)*</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="shop-content" role="tabpanel" aria-labelledby="shop-tab">
                            <h4 class="h5 mb-3">Add New Product to Shop</h4>
                            <form action="manage_products.php" method="POST" enctype="multipart/form-data" class="form-style6 bg-white p-4 border rounded">
                                <input type="hidden" name="action" value="add">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="product_name">Product Name*</label>
                                        <input type="text" name="product_name" id="product_name" placeholder="Silky Straight Human Hair" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="product_price">Price (£)*</label>
                                        <input type="number" name="product_price" id="product_price" placeholder="99.00" step="0.01" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="product_category">Category*</label>
                                        <select name="product_category" id="product_category" class="form-select" required>
                                            <option value="human-hair">Human Hair</option>
                                            <option value="braided-wigs">Braided Wigs</option>
                                            <option value="hair-kits">Hair Kits</option>
                                            <option value="beauty-accessories">Beauty Accessories</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="product_image">Product Image File*</label>
                                        <input type="file" name="product_image" id="product_image" class="form-control" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="product_description">Short Description*</label>
                                        <textarea name="product_description" id="product_description" placeholder="A brief, appealing description of the product..." rows="2" required></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button class="vs-btn" type="submit">Add Product</button>
                                    </div>
                                </div>
                            </form>

                            <h4 class="h5 mt-5 mb-3">Existing Products (AJAX Loaded)</h4>
                            <div id="existing-products-list" class="ajax-loading-placeholder p-4 border rounded">
                                <p class="text-center text-muted"><i class="fas fa-spinner fa-spin me-2"></i> Loading existing shop products...</p>
                                <p class="text-center text-muted">*(This content will be replaced by data from `fetch_products.php` using JavaScript)*</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>