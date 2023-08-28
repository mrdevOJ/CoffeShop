@extends('layout.layout')
@section('title','Book Your Table')
@section('content')



<!-- Reservation Start -->
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
                        <form class="mb-5" action="{{route('store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                                     />
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                    />
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                                @error('date')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="table" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option selected>choose your Table</option>
                                    <option value="1">Table 1</option>
                                    <option value="2">Table 2</option>
                                    <option value="3">Table 3</option>
                                    <option value="4">Table 4</option>
                                </select>                                @error('table')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select name="time" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option selected>choose your </option>
                                    <option value="09:00 - 12:00">09:00 - 12:00</option>
                                    <option value="12:00 - 15:00">12:00 - 15:00</option>
                                    <option value="15:00 - 18:00">15:00 - 18:00</option>
                                    <option value="18:00 - 21:00">18:00 - 21:00</option>
                                    <option value="21:00 - 00:00">21:00 - 00:00</option>
                                </select>                                @error('time')
                                    <span class="text-danger" role="alert">
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
                                    <span class="text-danger" role="alert">
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
</div>
<!-- Reservation End -->

@endsection