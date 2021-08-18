
</style>
<div class="banner_2">
    <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
    <div class="banner_2_container">
        <div class="banner_2_dots"></div>
        <!-- Banner 2 Slider -->

        <div class="owl-carousel owl-theme banner_2_slider">

            <!-- Banner  Slider Item -->
            @foreach ($mid_sliders as $mid_slider)


            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">{{ $mid_slider->Category_name }}</div>
                                    <div class="banner_2_title">{{ $mid_slider->product_name }}</div>
                                    {{-- <div class="banner_2_text">
                                        {!!  $mid_slider->proeduct_details !!}
                                    </div> --}}
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div>
                                    <div><img class="w" src="/{{  $mid_slider->image_one }}"   alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
