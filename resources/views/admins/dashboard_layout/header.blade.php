<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Include google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    {{-- Include js font awesome --}}
    <script src="https://kit.fontawesome.com/6ee88e74a6.js" crossorigin="anonymous"></script>
    {{-- Dashboard CSS File --}}
    <link rel="stylesheet" href="assist/style/dashboard/main.css">
    <title>@yield('title','Unknown')</title>
</head>
<body> 
    @section('dashboard-navbar')
        <nav class="dashboard-master-navbar">
            <div class="navbar-container">
                <div class="navbar-content">
                    <div class="navbar-box">
                            <div class="logo">Logo</div>
                                <div class="buttons-control">
                                    <ul class="buttons-control-list">
                                        <a href="/">
                                            <li class="buttons-control-item">Home</li>
                                        </a>
                                        <a href="upload_products">
                                            <li class="buttons-control-item">Add Product</li>
                                        </a>
                                        <a href="">
                                            <li class="buttons-control-item">Logout</li>
                                        </a>
                                    </ul>
                         </div>
                    </div>    
                </div>    
            </div>   
        </nav>
    @show                                   
    @section('show-menu-icon')
        <div class="show-left-menu-icon-container">
            <div class="show-left-menu-icon-content">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    @show
    @section('content')
        <div class="content-container">
            <div class="content-content">
                {{-- Menu List --}}
                <div class="dashboard-content">
                    <div class="menu-container">
                        <div class="menu-content">
                            <div class="menu">
                                {{-----------}}
                                <div class="menu-header-container">
                                    <div class="menu-header-content">
                                        <div class="menu-user-avatar"><img src="assist/images/avatar/user.jpg" alt="User Avatar"></div>
                                        <div class="menu-user-name"><span>Mustafa Gamal</span></div>
                                    </div>
                                </div>
                                
                                {{-----------}}
                                <div class="menu-link-container">
                                    <div class="menu-link-content">
                                            <ul class="navabr-list">
                                                <a href="dashboard"><li class="navbar-item"><i class="fa-solid fa-home"></i> Dashboard</li></a>
                                                <span class="department-title">Users</span>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-users"></i> Users</li></a>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-user-gear"></i> Users managment</li></a>
                                                <span class="department-title">Products</span>
                                                <a href=""><li class="navbar-item"><i class="fa-brands fa-product-hunt"></i> Products</li></a>  
                                                <a href="manage_products"><li class="navbar-item"><i class="fa-solid fa-bars-progress"></i> Products management </li></a>

                                                <span class="department-title">Ads</span>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-rectangle-ad"></i> Ads</li></a>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-bars-progress"></i> Ads management</li></a>
                                                
                                                <span class="department-title">Dashboard</span>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-code-branch"></i> Version</li></a>
                                                <a href=""><li class="navbar-item"><i class="fa-brands fa-themeco"></i> Themes</li></a>
                                                <a href=""><li class="navbar-item"><i class="fa-solid fa-gears"></i> Script settings</li></a>
                                            </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @show

   {{-- Content View --}}
   <div class="dashboard-content">
        @yield('center-content')
    </div>         


    @yield('management-products')
    @yield('management-products-edit-form')
        