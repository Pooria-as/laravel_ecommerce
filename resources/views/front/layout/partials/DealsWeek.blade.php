<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Deals of the Week</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">

                            <!-- Deals Item -->
                            @foreach ($hot_deals as $hot_deal)

                            <div class="owl-item deals_item">
                                <div class="deals_image"><img src="/{{ $hot_deal->image_one }}" width="30" alt=""></div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">{{ $hot_deal->Brand_name }}</a></div>
                                        <div class="deals_item_price_a ml-auto"><del>${{ $hot_deal->selling_price }}</del></div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">{{ $hot_deal->product_name }}</div>
                                        <div class="deals_item_price ml-auto">${{ $hot_deal->discount_price }}</div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Available: <span>{{ $hot_deal->product_quantity }}</span></div>
                                            <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>Trend</li>
                                <li>Best Rated</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Featured Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                @foreach ($Features as $Feature)

                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{ $Feature->image_one  }}" width="80" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price discount">{{ $Feature->discount_price }}$<span><strike>{{ $Feature->selling_price }}$</strike></span></div>
                                            <div class="product_name"><div><a href="product.html">{{ $Feature->product_name }}</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">

                                            @if($Feature->discount_price == NULL)
                                            <li class="product_mark product_discount" style="background: blue;">New</li>
                                            @else
                                                            <li class="product_mark product_discount">
                                                            @php
                                                              $amount = $Feature->selling_price - $Feature->discount_price;
                                                              $discount = $amount/$Feature->selling_price*100;

                                                            @endphp

                                                            {{ intval($discount) }}%

                                                           </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Trend Panel -->

                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                @foreach ($Trends as $Trend)

                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{ $Trend->image_one  }}" width="80" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price discount">{{ $Trend->discount_price }}$<span><strike>{{ $Trend->selling_price }}$</strike></span></div>
                                            <div class="product_name"><div><a href="product.html">{{ $Trend->product_name }}</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">


                                            @if($Trend->discount_price == NULL)
                                            <li class="product_mark product_discount" style="background: blue;">New</li>
                                            @else
                                                            <li class="product_mark product_discount">
                                                            @php
                                                              $amount2 = $Trend->selling_price - $Trend->discount_price;
                                                              $discount2 = $amount2/$Trend->selling_price*100;

                                                            @endphp

                                                            {{ intval($discount2) }}%

                                                           </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Best Rated Panel -->

                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                @foreach ($Best_rates as $Best_rate)

                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/{{ $Best_rate->image_one  }}" width="80" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price discount">{{ $Best_rate->discount_price }}$<span><strike>{{ $Best_rate->selling_price }}$</strike></span></div>
                                            <div class="product_name"><div><a href="product.html">{{ $Best_rate->product_name }}</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">


                                            @if($Best_rate->discount_price == NULL)
                                            <li class="product_mark product_discount" style="background: blue;">New</li>
                                            @else
                                                            <li class="product_mark product_discount">
                                                            @php
                                                              $amount3 = $Best_rate->selling_price - $Best_rate->discount_price;
                                                              $discount3 = $amount3/$Best_rate->selling_price*100;

                                                            @endphp

                                                            {{ intval($discount3) }}%

                                                           </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>







