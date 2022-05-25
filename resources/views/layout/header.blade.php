<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Include js font awesome --}}
    <script src="https://kit.fontawesome.com/6ee88e74a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assist/style/home.css">
    <link rel="stylesheet" href="assist/style/homeResponsive.css">

    <title>@yield('title')</title>
</head>
    <body>
       
        {{-- Ads Contnet --}}
        @section('ads-content')
            <div class="ads-container">
                <div class="ads-content">
                    @foreach($ads as $ads_items)
                    <div class="ads">
                        <div class="ads-image">
                            <a href="{{$ads_items->ad_url}}">
                                <img src="{{$ads_items->ad_img}}" alt="Ads Image">
                            </a>
                        </div>
                        <div class="ads-right-ads">
                            <img src="{{$ads_items->ad_img}}" alt="Ads Image">
                            <img src="{{$ads_items->ad_img}}" alt="Ads Image">
                        </div>
                        <div class="ads-company-name">
                            <h3>{{$ads_items->company_name}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @show



        {{-- Start Department Navbar --}}
        @section('departments-content')
            <div class="brand-navbar-container">
                <div class="brand-navbar-content">
                    <div class="brand-navbar">
                        <ul class="brand-navbar-list">
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/skin.svg" alt="Icon"> Skin Care</li></a>
                            <a href="hair"><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/hair.svg" alt="Icon"> Hair Care</li></a>
                            <a href="body"><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/body.svg" alt="Icon"> Body Care</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/nail.svg" alt="Icon"> Nail Care</li></a>
                            <a href="makeup"><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/makeup.svg" alt="Icon"> Make Up</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/perfume.svg" alt="Icon"> Perfume</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/women_a.svg" alt="Icon"> Women`s Accessories </li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/ramadan_a.svg" alt="Icon"> Ramadan Accessories</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/man_a.svg" alt="Icon"> Man`s Accessories</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/woman_bages.svg" alt="Icon"> Woman`s Bages</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/womens_clothes.svg" alt="Icon"> Women`s Clothes</li></a>
                            <a href=""><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/toys.svg" alt="Icon"> Toys</li></a>
                            <a href="gifts"><li class="brand-navbar-item"> <img style="position: relative; width:23px; height:23px; top:3px;" src="assist/images/public_icon/gifts.svg" alt="Icon"> Gifts</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        @show

        @yield('right-menu-content')
        @yield('home-product-content')