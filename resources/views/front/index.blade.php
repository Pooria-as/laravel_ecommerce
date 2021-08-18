@extends("front.layout.master")



@section("content")
@include("front.layout.partials.HeaderMian")
<div class="banner">
    <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="/{{ $mid_slider->image_one }}" width="200" alt=""></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">{{ $mid_slider->product_name }}</h1>

                    <div class="banner_price">

                        <span>
                            @if ($mid_slider->discount_price==NULL)
                            @else
                            {{ $mid_slider->discount_price }}$
                            @endif
                    </span>
                        {{ $mid_slider->selling_price }}$
                    </div>
                    <div class="banner_product_name">{{ $mid_slider->brand->Brand_name }}</div>
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
