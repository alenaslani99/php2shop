@extends('layouts.layout')
@section('title') Register @endsection

@section('content')
    <!--================Register Box Area =================-->
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img h-100">
                        <div class="hover">
                            <h4>Already have an account?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="button button-account" href="{{route('login')}}">Login Now</a>
                            @if(session('success'))
                                <p>{{session('success')}}</p>
                            @endif
                            @if(session('error'))
                                <p>{{session('error')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3>Create an account</h3>
                        <form action="{{route('reg')}}" method="post" class="row login_form" >
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="street_name" name="street_name" placeholder="Street" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="street_number" name="street_number" placeholder="Street number" />
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="city">City</label>
                                <select id="city" name="city">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Register Box Area =================-->
@endsection
