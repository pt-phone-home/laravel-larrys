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
                <img src="/images/tools2.jpg" alt="">
                <h2 class="btn">DIY Supplies</h2>
                <p>We supply a variety of wood types and all the accessories and fixings you need to get your job done.</p>

            </div>
            <div class="services-advice">
                <img src="/images/advice.jpg" alt="">
                <h2 class="btn">Advice</h2>
                <p>Three generations of DIY experience at your service!</p>

            </div>
            <div class="services-fuel">
                <img src="/images/fuel.jpg" alt="">
                <h2 class="btn">Fuel Sales</h2>
                <p>Fuel for Stoves & Open Fires. Special offers available in store.</p>

            </div>

        </div>
    </div>
    <div class="services-divider-2">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.5 215.71"><path d="M216,416.8v1.06H0V310H62.29c-3.68,32.28,28.2,71.78,77.78,93.29C166.65,414.83,193.53,419.12,216,416.8Z" transform="translate(1 -309.5)" fill="#e8e8e8" stroke="#e8e8e8" stroke-miterlimit="10"/><path d="M267.88,385.9c-7.7,17.76-27.11,28.35-51.88,30.9V310h23.42C265.7,333.88,277.85,362.93,267.88,385.9Z" transform="translate(1 -309.5)" fill="#e8e8e8" stroke="#e8e8e8" stroke-miterlimit="10"/><rect y="418.71" width="1440" height="106" transform="translate(1441 633.93) rotate(-180)" fill="#f8f8f8" stroke="#f8f8f8" stroke-miterlimit="10"/><path d="M215.5,417.81V419H-.5V311.5H61.79C58.11,343.63,90,383,139.57,404.36,166.15,415.84,193,420.11,215.5,417.81Z" transform="translate(1 -309.5)" fill="#f8f8f8" stroke="#f8f8f8" stroke-miterlimit="10"/><path d="M216,310V417.39c-9.35,1-26,.49-36.5-.89-14.79-1.93-23.91-5.92-39.43-12.7C90.49,382.18,58.61,342.46,62.29,310Z" transform="translate(1 -309.5)" fill="#989898" stroke="#989898" stroke-miterlimit="10"/><path d="M267.88,385.9c-7.7,17.76-27.11,28.35-51.88,30.9V310h23.42C265.7,333.88,277.85,362.93,267.88,385.9Z" transform="translate(1 -309.5)" fill="#989898" stroke="#989898" stroke-miterlimit="10"/><path d="M1440,310V417.86H188l2-1.06c25.3-2.55,45.12-13.14,53-30.9,10.18-23-2.22-52-29.06-75.9Z" transform="translate(1 -309.5)" fill="#989898" stroke="#989898" stroke-miterlimit="10"/></svg>
    </div>

    <div class="about-us-heading-container">
        <div class="about-us-heading">
            <h1>About Us</h1>
        </div>
    </div>

    <div class="about-us-container">

        <div class="about-us-history">

            <div class="years">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 425.7 354"><title>time</title><polygon points="333.7 154 333.7 218 219.7 218 219.7 80 283.7 80 283.7 154 333.7 154" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l.25.29,27-31C993.63,269.85,993.57,269.72,993.51,269.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l.25.29,27-31C993.63,269.85,993.57,269.72,993.51,269.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M1293,216c0,97.75-80.59,177-180,177-2.34,0-4.68,0-7-.13V345.8q3.66.19,7.37.2c72.55,0,131.36-58,131.36-129.5S1185.92,87,1113.37,87C1051.1,87,999,129.7,985.42,187h-50C949.48,103.05,1023.63,39,1113,39,1212.41,39,1293,118.25,1293,216Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l-23.66-27.15A175.19,175.19,0,0,1,935.41,187h50a128.48,128.48,0,0,0,8.09,82.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M942.74,273.56,867.3,187h68.11a175.19,175.19,0,0,0,7.33,86.56Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M1066,187l-69.1,79.29-.25-.29-3.14,3.6a128.48,128.48,0,0,1-8.09-82.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/></svg>
                    <h3>70 Years</h3>
            </div>
            <div class="info">
                <p>Larry’s DIY is a small family run business serving the DIY trade for three generations. We pride ourselves on our high level of Customer Service and friendly advice. We have a wide range of cutting services for all your requirements no matter how big or small. We also provide a routing service.</p>
            </div>

        </div>
        <div class="about-us-divider">
                
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        {{-- <div class="about-us">
            
            <div class="about-us-timeLeft">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 425.7 354"><title>time</title><polygon points="333.7 154 333.7 218 219.7 218 219.7 80 283.7 80 283.7 154 333.7 154" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l.25.29,27-31C993.63,269.85,993.57,269.72,993.51,269.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l.25.29,27-31C993.63,269.85,993.57,269.72,993.51,269.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M1293,216c0,97.75-80.59,177-180,177-2.34,0-4.68,0-7-.13V345.8q3.66.19,7.37.2c72.55,0,131.36-58,131.36-129.5S1185.92,87,1113.37,87C1051.1,87,999,129.7,985.42,187h-50C949.48,103.05,1023.63,39,1113,39,1212.41,39,1293,118.25,1293,216Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M993.51,269.6,966.4,300.71l-23.66-27.15A175.19,175.19,0,0,1,935.41,187h50a128.48,128.48,0,0,0,8.09,82.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M942.74,273.56,867.3,187h68.11a175.19,175.19,0,0,0,7.33,86.56Z" transform="translate(-867.3 -39)" fill="#f79643"/><path d="M1066,187l-69.1,79.29-.25-.29-3.14,3.6a128.48,128.48,0,0,1-8.09-82.6Z" transform="translate(-867.3 -39)" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/><polygon points="129.6 227.29 126.38 230.98 99.35 262 99.1 261.71 126.21 230.6 129.35 227 129.6 227.29" fill="#f79643"/></svg>
                    <h3>70 Years</h3>
                    
            </div>
            <div class="about-us-timeRight">
                <p>Larry’s DIY is a small family run business serving the DIY trade for three generations. We pride ourselves on our high level of Customer Service and friendly advice. We have a wide range of cutting services for all your requirements no matter how big or small. We also provide a routing service.</p>
            </div>
            <div class="about-us-reviewsLeft">
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Need wood cut to size, Larry's is the only place to go. Great prices, excellent quick service. Can't recommend enough"</p>
                </div>
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Super place, very helpful staff, excellent and accurate wood cutting service"</p>
                </div>
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Super friendly and efficient family run business, highly recommended."</p>
                </div>
            </div>
            <div class="about-us-reviewsRight">
                <i class="fas fa-comment-alt"></i>
                <h3>Customer Reviews</h3>
            </div>
        </div> --}}
    </div>
@endsection