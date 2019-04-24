@extends('layouts.app_layout')

@section('content')
        @include('layouts.header')
        <section class="nav-banner">
                @include('menus.nav')   
                @include('registration.messages')
                <div class="container">
                        <h1>Signu up as a Teacher in BD Model Test</h1>
                        {!! Form::open(['action' => 'RegistrationController@store']) !!}
                        <div class="form_group">
                                {{ Form::label('name', 'Full Name') }}
                                {{ Form::text('full_name', '', ['class' => 'form-control', 'placeholder' => 'Full Name', 'id' => 'full_name'])}}                                
                        </div>
                        <div class="form_group">
                                {{ Form::label('email', 'Email address') }}
                                {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email address', 'id' => 'email'])}}                                
                        </div>
                        <div class="form_group">
                                {{ Form::label('phone', 'Phone Number') }}
                                {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number', 'id' => 'phone'])}}                                
                        </div>
                        <div class="form_group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password'])}}                                
                        </div>
                        <div class="form_group">
                                {{ Form::label('confirm_pass', 'Confirm Password') }}
                                {{ Form::password('confirm_pass',  ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'id' => 'confirm_pass'])}}                                
                        </div>
                        <div class="form_group">
                                {{ Form::label('user_type', 'User Type') }}
                                {{ Form::select('user_type',  ['class' => 'form-control', 'placeholder' => 'Select User Type', 'id' => 'user_tye'])}}                                
                        </div>

                        {{ Form::submit('submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}                                
                                
                        {!! Form::close() !!}
                        </div>            
        </section>
        
@endsection
