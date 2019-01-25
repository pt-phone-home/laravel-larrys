@extends('master')

@section('title')

@endsection

@section('content')
    <div class="banner">
        <h1 class="title_1">Larry's</h1>
        <h1 class="title_2">DIY</h1>
        <h3>Specialists in wood cutting</h3>
    </div>

    <div class="overview-container">
        <div class="overview">
            <h1>What can we help you with?</h1>
            <div class="overview-1 card-container">
                <div class="card">
                    <div class="front">
                        <i class="fas fa-home"></i>
                        <h3>Home &amp; Garden</h3>
                        <p>Our materials and expertise can be used to help with a wide variety of jobs around your home and garden.</p>
                    </div>
                    <div class="back">
                        <h4>Around The House</h4>
                       <div class="house">
                           <h5>New Wardrobes</h5>
                           <h5>Kitchen Presses</h5>
                           <h5>Storage Boxes</h5>
                           <h5>Shelving Units</h5>
                           <h5>Household Repairs</h5>
                           <h5>Boxing Piles</h5>
                           <h5>Boxing ESB Meters</h5>
                           <h5>... &amp; much more</h5>
                       </div>
                       <h4>Around The Garden</h4>
                       <div class="garden">
                           <h5>Side Gates</h5>
                           <h5>Shed Doors</h5>
                           <h5>Garden Storage</h5>
                           <h5>Garden Planters</h5>
                           <h5>... &amp; much more</h5>
                           
                       </div>
                    </div>
                </div>
            </div>
            <div class="overview-2 card-container">
                <div class="card">
                    <div class="front">
                        <i class="fas fa-drafting-compass"></i>
                        <h3>Projects &amp; Arts and Crafts</h3>
                        <p>We can supply a variety of materials for your Design Project, Arts &amp; Crafts.</p>
                    </div>
                    <div class="back">
                        <h4>Design Projects</h4>
                        <div class="design">
                            <h5>Stage Sets</h5>
                            <h5>Window Displays</h5>
                            <h5>Wood Panelling</h5>
                            <h5>School &amp; College Projects</h5>
                            <h5>Shop Signs</h5>
                        </div>
                        <h4>Arts &amp; Crafts</h4>
                        <div class="arts">
                            <h5>Drawing Boards</h5>
                            <h5>Boards for Paintings &amp; Mosaics</h5>
                        </div>
                        <h5>Boards for Flower Arranging</h5>
                        <h5>Boards for Flower Jigsaws</h5>
                        <h5>Cake Boards</h5>

                    </div>
                </div>
    
            </div>
        </div>
        
    </div>
    <div class="services-divider">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441 215.71"><rect x="0.5" y="0.5" width="1440" height="107.86" fill="#e8e8e8" stroke="#e8e8e8" stroke-miterlimit="10"/><rect x="0.5" y="109.21" width="1440" height="106" fill="#f99637" stroke="#f99637" stroke-miterlimit="10"/><rect x="1224.5" y="0.5" width="216" height="108" fill="#f99637" stroke="#f99637" stroke-miterlimit="10"/><path d="M1299.93,327.29c-26.58,11.54-53.46,15.83-75.93,13.51-24.77-2.55-44.18-13.14-51.88-30.9-10-23,2.18-52,28.46-75.9h177.13C1381.39,266.28,1349.51,305.78,1299.93,327.29Z" transform="translate(0.5 -233.5)" fill="#e8e8e8" stroke="#e8e8e8" stroke-miterlimit="10"/></svg>
    </div>
    <div class="services-heading-container">
        <div class="services-heading">
            <h1>Our Services</h1>
        </div>
    </div>

    <div class="services-container">
        <div class="services">
            <div class="services-wood">
                <img src="/images/woodcut.jpg" alt="">
                <h2 class="btn">Wood Cutting</h2>
                <p>We offer a wide range of wood cutting services for all your requirements, no matter how big or small.</p>

            </div>
            <div class="services-diy">

            </div>
            <div class="services-advice">

            </div>
            <div class="services-fuel">

            </div>

        </div>
    </div>
@endsection