    @extends('layout.header')

    @section('title')Home @endsection







       {{-- Right Menu --}}
        {{-- <div class="right-menu-icon-container">
            <div class="right-menu-icon-content">
                <div class="right-menu">

                </div>
            </div>
        </div> --}}
        
        @section('right-menu-content')
            <div class="right-menu-container">
                <div class="right-menu-content">
                    <div class="right-menu">
                        <ul class="right-menu-list">
                            <span class="depratment-title">Department`s</span>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/skin.svg" alt="Icon"> Skin Care</li></a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/hair.svg" alt="Icon"> Hair Care</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/body.svg" alt="Icon"> Body Care</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/nail.svg" alt="Icon"> Nail Care</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/makeup.svg" alt="Icon"> Make Up</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/perfume.svg" alt="Icon"> Perfume</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/women_a.svg" alt="Icon"> Women`s Accessories</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/ramadan_a.svg" alt="Icon"> Ramadan Accessories</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/man_a.svg" alt="Icon"> Man`s Accessories</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/woman_bages.svg" alt="Icon"> Women`s Bages</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/womens_clothes.svg" alt="Icon"> Women`s Clothes</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/toys.svg" alt="Icon"> Toys</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/gifts.svg" alt="Icon"> Gifts</li> </a>
                            <a href=""> <li class="right-menu-item"><img style="position: relative; width:20px; height:20px; top:3px;" src="assist/images/public_icon/others.svg" alt="Icon"> Others</li> </a>
                        </ul>
                    </div>
                </div>
            </div>
        @endsection


        {{-- Home Products Content --}}
        @section('home-product-content')
        {{--**************************************************************--}}
                        {{-- Start Skin Care Products --}}
        {{--**************************************************************--}}
        
        <div class="home-content-container">
            <div class="home-content-content">
               @if (count($skin_care_products) > 0)
                <div class="department-title">
                    {{-- <img src="assist/images/public_icon/product_department_icon.svg" alt="Product Department Icon"> --}}
                    <span><i class="fa-solid fa-cart-shopping"></i> Skin Care</span>
                </div>
               @endif
                <div class="home-content">
                    <div class="content">

                        @foreach ($skin_care_products as $skin_care_items)
                        <div class="all-products-container">
                            <div class="all-products-content">

                                <div class="all-products">
                                    <a href="show_details/{{ $skin_care_items['id'] }}/{{ $skin_care_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $skin_care_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $skin_care_items['id'] }}/{{ $skin_care_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $skin_care_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $skin_care_items['id'] }}/{{ $skin_care_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $skin_care_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $skin_care_items['id'] }}/{{ $skin_care_items['products_title'] }}">
                                        <div class="all-products-price"><span> EGP :  {{ $skin_care_items->products_price }}</span></div>
                                     </a> 
                                     <a href="show_details/{{ $skin_care_items['id'] }}/{{ $skin_care_items['products_title'] }}">
                                        <div class="all-products-discount"><span>EGP : {{ $skin_care_items->products_discount }}</span></div>
                                     </a>     
                                </div>
                              
                            </div>
                        </div>
                       @endforeach

                    </div>
                </div>
            </div>
        </div>
        
        
        {{--**************************************************************--}}
                        {{-- Start Hair Care Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($hair_care_products) > 0)
                <div class="department-title">
                    {{-- <img width="30px" src="assist/images/public_icon/product_department_icon.svg" alt="Product Department Icon"> --}}
                    <span><i class="fa-solid fa-cart-shopping"></i> Hair Care</span>
                </div>
                @endif
                <div class="home-content">
                    <div class="content">

                        @foreach ($hair_care_products as $hair_care_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                           
                           
                                <div class="all-products">
                                    <a href="show_details/{{ $hair_care_items['id'] }}/{{ $hair_care_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $hair_care_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $hair_care_items['id'] }}/{{ $hair_care_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $hair_care_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $hair_care_items['id'] }}/{{ $hair_care_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $hair_care_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $hair_care_items['id'] }}/{{ $hair_care_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $hair_care_items->products_price }}</span></div>
                                     </a>   
                                </div>
                              
                            </div>
                        </div>
                       @endforeach

                    </div>
                </div>
            </div>
        </div>
   
        {{--**************************************************************--}}
                        {{-- Start Body Care Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($body_care_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Body Care</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($body_care_products as $body_care_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                           
                           
                                <div class="all-products">
                                    <a href="show_details/{{ $body_care_items['id'] }}/{{ $body_care_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $body_care_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $body_care_items['id'] }}/{{ $body_care_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $body_care_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $body_care_items['id'] }}/{{ $body_care_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $body_care_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $body_care_items['id'] }}/{{ $body_care_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $body_care_items->products_price }}</span></div>
                                     </a>   
                                </div>
                              
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Nail Care Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($nail_care_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Nail Care</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($nail_care_products as $nail_care_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                           
                           
                                <div class="all-products">
                                    <a href="show_details/{{ $nail_care_items['id'] }}/{{ $nail_care_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $nail_care_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $nail_care_items['id'] }}/{{ $nail_care_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $nail_care_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $nail_care_items['id'] }}/{{ $nail_care_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $nail_care_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $nail_care_items['id'] }}/{{ $nail_care_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $nail_care_items->products_price }}</span></div>
                                     </a>   
                                </div>
                              
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>


        {{--**************************************************************--}}
                        {{-- Start Make Up Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($make_up_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Make Up</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($make_up_products as $make_up_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $make_up_items['id'] }}/{{ $make_up_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $make_up_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $make_up_items['id'] }}/{{ $make_up_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $make_up_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $make_up_items['id'] }}/{{ $make_up_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $make_up_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $make_up_items['id'] }}/{{ $make_up_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $make_up_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>


        
        {{--**************************************************************--}}
                        {{-- Start Perfume Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($perfume_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Perfume</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($perfume_products as $perfume_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $perfume_items['id'] }}/{{ $perfume_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $perfume_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $perfume_items['id'] }}/{{ $perfume_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $perfume_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $perfume_items['id'] }}/{{ $perfume_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $perfume_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $perfume_items['id'] }}/{{ $perfume_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $perfume_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Women`s Accessories Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($womens_accessories_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Women`s Accessories</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($womens_accessories_products as $womens_accessories_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $womens_accessories_items['id'] }}/{{ $womens_accessories_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $womens_accessories_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_accessories_items['id'] }}/{{ $womens_accessories_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $womens_accessories_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_accessories_items['id'] }}/{{ $womens_accessories_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $womens_accessories_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_accessories_items['id'] }}/{{ $womens_accessories_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $womens_accessories_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Ramadan Accessories Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($ramadan_accessories_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Ramadan Accessories</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($ramadan_accessories_products as $ramadan_accessories_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $ramadan_accessories_items['id'] }}/{{ $ramadan_accessories_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $ramadan_accessories_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $ramadan_accessories_items['id'] }}/{{ $ramadan_accessories_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $ramadan_accessories_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $ramadan_accessories_items['id'] }}/{{ $ramadan_accessories_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $ramadan_accessories_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $ramadan_accessories_items['id'] }}/{{ $ramadan_accessories_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $ramadan_accessories_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Man`s Accessories Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($mans_accessories_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Man`s Accessories</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($mans_accessories_products as $mans_accessories_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $mans_accessories_items['id'] }}/{{ $mans_accessories_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $mans_accessories_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $mans_accessories_items['id'] }}/{{ $mans_accessories_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $mans_accessories_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $mans_accessories_items['id'] }}/{{ $mans_accessories_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $mans_accessories_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $mans_accessories_items['id'] }}/{{ $mans_accessories_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $mans_accessories_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Womens Bages Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($womens_bages_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Womens Bages</span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($womens_bages_products as $womens_bages_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $womens_bages_items['id'] }}/{{ $womens_bages_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $womens_bages_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_bages_items['id'] }}/{{ $womens_bages_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $womens_bages_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_bages_items['id'] }}/{{ $womens_bages_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $womens_bages_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_bages_items['id'] }}/{{ $womens_bages_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $womens_bages_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>



        {{--**************************************************************--}}
                        {{-- Start Womens Clothes Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($womens_clothes_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Womens Clothes </span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($womens_clothes_products as $womens_clothes_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $womens_clothes_items['id'] }}/{{ $womens_clothes_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $womens_clothes_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_clothes_items['id'] }}/{{ $womens_clothes_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $womens_clothes_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_clothes_items['id'] }}/{{ $womens_clothes_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $womens_clothes_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $womens_clothes_items['id'] }}/{{ $womens_clothes_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $womens_clothes_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>
        




        {{--**************************************************************--}}
                        {{-- Start Toys  Products --}}
        {{--**************************************************************--}}

        <div class="home-content-container">
            <div class="home-content-content">
                @if (count($toys_products) > 0)
                    <div class="department-title">
                        <span><i class="fa-solid fa-cart-shopping"></i> Toys </span>
                    </div>
                @endif
                <div class="home-content">
                    <div class="content">
                        @foreach ($toys_products as $toys_items)
                        <div class="all-products-container">
                            <div class="all-products-content">
                                <div class="all-products">
                                    <a href="show_details/{{ $toys_items['id'] }}/{{ $toys_items['products_title'] }}">
                                        <div class="all-products-img">
                                            <img src="{{ $toys_items->products_img }}" alt="Product Image">
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $toys_items['id'] }}/{{ $toys_items['products_title'] }}">
                                        <div class="all-products-title">
                                            <h5>{{ $toys_items->products_title }}</h5>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $toys_items['id'] }}/{{ $toys_items['products_title'] }}">
                                        <div class="all-products-description">
                                            <p>{{ $toys_items->products_decrption }} </p>
                                        </div>
                                     </a>
                                     <a href="show_details/{{ $toys_items['id'] }}/{{ $toys_items['products_title'] }}">
                                        <div class="all-products-price"><span> ${{ $toys_items->products_price }}</span></div>
                                     </a>   
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                </div>
            </div>
        </div>





        @endsection



    </body>
</html>