<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>
Shop Panel
</a></div>
<div class="sl-sideleft">
  <div class="input-group input-group-search">
    <input type="search" name="search" class="form-control" placeholder="Search">
    <span class="input-group-btn">
      <button class="btn"><i class="fa fa-search"></i></button>
    </span><!-- input-group-btn -->
  </div><!-- input-group -->

  <label class="sidebar-label">Navigation</label>
  <div class="sl-sideleft-menu">
    <a href="index.html" class="sl-menu-link active">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <!-- sl-menu-link -->
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <span class="menu-item-label">Category</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route("Category.index") }}" class="nav-link">Category</a></li>
      <li class="nav-item"><a href="{{ route("SubCategory.index") }}" class="nav-link">SubCategory</a></li>
      <li class="nav-item"><a href="{{ route("Brand.index") }}" class="nav-link">Brand</a></li>

    </ul>


    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="fa fa-suitcase"></i>
        <span class="menu-item-label">Product</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route("Product.index") }}" class="nav-link">All Product</a></li>
      <li class="nav-item"><a href="{{ route("Product.create") }}" class="nav-link">Add Product</a></li>
    </ul>





    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-gift"></i>
          <span class="menu-item-label">Coupon</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route("Coupon.index") }}" class="nav-link">All Coupon</a></li>

      </ul>

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="icon ion-more"></i>
          <span class="menu-item-label">other</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route("Coupon.index") }}" class="nav-link">newsLatter</a></li>

      </ul>


      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="icon  ion-filing"></i>
          <span class="menu-item-label">Blog</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route("BlogCategory.index") }}" class="nav-link">Blog Category</a></li>
        <li class="nav-item"><a href="{{ route("Post.index") }}" class="nav-link">Add Post</a></li>
        <li class="nav-item"><a href="{{ route("Post.create") }}" class="nav-link">All Post</a></li>

      </ul>

  </div><!-- sl-sideleft-menu -->

  <br>
</div>
