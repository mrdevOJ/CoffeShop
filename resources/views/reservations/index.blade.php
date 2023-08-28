@extends('layout.layout')
@section('title','Home')
@section('content')

  <!-- About Start -->
  <div class="container-fluid py-5"  >
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" data-bs-spy="scroll" id="scrollspyHeading2" style="letter-spacing: 5px;">About Us</h4>
            <h1 class="display-4">Serving Since 1999</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5" >
                <h1 class="mb-3">Our Story</h1>
                <h5 class="mb-3">For over two decades, M-COFE has been a beloved cornerstone of our community.</h5>
                <p> Since our humble beginnings in 1999, we have proudly upheld our commitment to providing the best prices without compromising on quality.</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Vision</h1>
                <p>At M-COFE, our vision extends far beyond serving exceptional coffee. Since our establishment in 1999, we've been driven by a powerful aspiration – to create a space where connections are nurtured and moments are savored, one cup at a time.</p>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>A Gathering Place</h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Fueling Passion</h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>A Microcosm of Community</h5>
                <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid pt-5" data-bs-spy="scroll" >
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase"  style="letter-spacing: 5px;">Our Services</h4>
            <h1 class="display-4" id="scrollspyHeading3">Fresh & Organic Beans</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="col-sm-7" >
                        <h4><i class="fa fa-truck service-icon"></i>Fastest Door Delivery</h4>
                        <p class="m-0">we understand that life can get busy, and your favorite cup of coffee shouldn't be out of reach. That's why we're thrilled to introduce our fastest door delivery service, designed to bring the aroma and taste of our exceptional coffee right to your doorstep in record time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-coffee service-icon"></i>Fresh Coffee Beans</h4>
                        <p class="m-0">we're passionate about delivering an unparalleled coffee experience, and it all begins with the heart of your cup – our exceptional, fresh coffee beans. Our commitment to quality starts at the source, ensuring that each sip embodies the rich flavors and aromas that define the perfect cup of coffee.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-award service-icon"></i>Best Quality Coffee</h4>
                        <p class="m-0">Indulge in the artistry of flavor, the richness of aroma, and the essence of perfection with the best quality coffee that M-COFE proudly serves. For over two decades, our dedication to delivering an unparalleled coffee experience has been unwavering, making us the destination for those who seek the utmost in coffee excellence.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-table service-icon"></i>Online Table Booking</h4>
                        <p class="m-0">We understand that finding the perfect spot to savor your coffee and create memories is essential. That's why we're delighted to introduce our online table booking service at M-COFE . Elevate your coffee experience by reserving a table in advance, ensuring that your favorite corner is waiting for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom" >
    <div class="container py-5">
        <h1 class="display-3 text-primary mt-3">50% OFF</h1>
        <h1 class="text-white mb-3" id="scrollspyHeading4">Sunday Special Offer</h1>
        <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2024</h4>
        <h4 class="text-white font-weight-normal mb-4 pb-3">This service will be available soon</h4>
        <form class="form-inline justify-content-center mb-4">
            <div class="input-group">
                <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Offer End -->


<!-- Menu Start -->
<div class="container-fluid pt-5" data-bs-spy="scroll" >
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
            <h1 class="display-4">Competitive Pricing</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Hot Coffee</h1>
                <div class="row align-items-center mb-5" id="scrollspyHeading5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        <h5 class="menu-price">12DH</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Black Coffee</h4>
                        <p class="m-0">Un café noir est une boisson réalisée à partir de grains de café torréfiés. Les grains sont moulus et infusés dans de l'eau, libérant ainsi leur saveur, leur couleur, leur teneur en caféine et leurs nutriments. Connu pour son goût fort et riche, le café noir est généralement servi sans lait ni sucre. </p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-7.jpg" alt="">
                        <h5 class="menu-price">27DH</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Chocolete Coffee</h4>
                        <p class="m-0">refers to a beverage that combines the flavors of coffee and chocolate. There are several ways to create a chocolate coffee, and the resulting drink can vary in terms of taste, texture, and preparation method.</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                        <h5 class="menu-price">21DH</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Cappuccino</h4>
                        <p class="m-0">Le cappuccino est une préparation de café, à base de café expresso, mélangé avec du lait et coiffé d'une mousse de lait crémeuse (préalablement chauffé à la vapeur jusqu'à le faire mousser), sucré, et servi dans une grande tasse à café, éventuellement avec un effet artistique de latte art.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Cold Coffee</h1>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-5.jpg" alt="">
                        <h5 class="menu-price">17DH</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Cafe Glace</h4>
                        <p class="m-0">Le café glacé1 est une recette répandue de boisson au café, à base de café froid ou chaud servi glacé (avec des glaçons), variante des café frappé, affogato (avec glace à la vanille), café liégeois (crème glacée et crème chantilly), ice cappuccino, ou thé glacé</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-6.jpg" alt="">
                        <h5 class="menu-price">32DH</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Chocolete Coffee</h4>
                        <p class="m-0">refers to a beverage that combines the flavors of coffee and chocolate. There are several ways to create a chocolate coffee, and the resulting drink can vary in terms of taste, texture, and preparation method. </p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-4">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-4.jpg" alt="">
                        <h5 class="menu-price">15DH</h5>
                    </div>
                   <div class="col-8 col-sm-9">
                        <h4>Coffee With Milk</h4>
                        <p class="m-0"> typically refers to a beverage made by adding milk to coffee. The combination of coffee and milk is quite popular and comes in various forms and ratios, depending on personal preferences and regional traditions. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->


<!-- Reservation Start --><a  class="nav-item nav-link" href="{{route('create')}}">
<div class="container-fluid my-5" data-bs-spy="scroll" >
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom" id="scrollspyHeading6">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4" >
                            <h1 class="display-3 text-primary">30% OFF</h1>
                            <h1 class="text-white">For Online Reservation</h1>
                        </div>
                        <p class="text-white">Your coffee experience at M-COFE just got even more convenient and personalized with our easy-to-use online reservation system. Say goodbye to waiting times and uncertainty – now you can secure your spot and enjoy a seamless coffee journey from the moment you step through our doors.</p>
                     <p  class="text-light fs-4"> Note:<p class="text-danger fs-5">*If you do not come at the same time from the reservation your table will be reserved for someone else </p></p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Effortless Booking</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Customized Experience</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>No More Guesswork</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                        <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                        <form class="mb-5" action="{{route('store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                                     />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                    />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="time" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="person" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option selected>Person</option>
                                    <option value="1">Person 1</option>
                                    <option value="2">Person 2</option>
                                    <option value="3">Person 3</option>
                                    <option value="3">Person 4</option>
                                </select>
                            </div>
                            @error('person')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" >Book Now</button>
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div></a>
<!-- Reservation End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5" data-bs-spy="scroll" >
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
            <h1 class="display-4" id="scrollspyHeading7">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                    <div class="ml-3">
                        <h4>Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <p class="m-0">"I've been a loyal customer of M-COFE for years, and I can confidently say they have the best quality coffee in town. The aroma and taste are consistently amazing, and the cozy ambiance keeps me coming back for more."</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                    <div class="ml-3">
                        <h4>Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <p class="m-0"> "I recently used the online table booking service at M-COFE, and it was a game-changer. No more waiting for a table – I walked in, and my reserved spot was ready. The convenience and personalized experience were top-notch!"</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                    <div class="ml-3">
                        <h4>Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <p class="m-0">"The staff at M-COFE are incredible. They remember my name and my usual order, making me feel like a part of their coffee-loving family. It's the attention to detail and the warm atmosphere that set them apart."</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="img/testimonial-4.jpg" alt="">
                    <div class="ml-3">
                        <h4>Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <p class="m-0">"My friends and I recently celebrated my birthday at M-COFE, and it was a fantastic experience. The online reservation made planning a breeze, and the staff went above and beyond to make the day special. The blend of great coffee and exceptional service is why I'll keep coming back."</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


@endsection