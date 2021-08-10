@extends("front.layout.master")



@section("content")




<div class="banner">
    <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">new era of smartphones</h1>
                    <div class="banner_price"><span>$530</span>$460</div>
                    <div class="banner_product_name">Apple Iphone 6s</div>
                    <div class="button banner_button"><a href="#">Shop Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Characteristics -->
@include("front.layout.partials.Characteristics")
<!-- Deals of the week -->
@include("front.layout.partials.DealsWeek")
<!-- Popular Categories -->
@include("front.layout.partials.PopularCat")
<!-- Banner -->
@include("front.layout.partials.Banner")
<!-- Hot New Arrivals -->
@include("front.layout.partials.HotNew")
<!-- Best Sellers -->
@include("front.layout.partials.BestSellers")
<!-- Adverts -->
@include("front.layout.partials.Adverts")
<!-- Trends -->
@include("front.layout.partials.Trends")
<!-- Reviews -->
@include("front.layout.partials.Reviews")
<!-- Recently Viewed -->
@include("front.layout.partials.Recently")
<!-- Brands -->
@include("front.layout.partials.Brand")
<!-- Newsletter -->
@include("front.layout.partials.NewLetter")







@endsection
