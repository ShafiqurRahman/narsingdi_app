@extends('layouts.app_layout')

@section('content')
{{ $headline = "BD Model Test",
$slogan = "A handy tool to test your skills"}}
        @include('layouts.header')
        <section class="nav-banner">
                @include('menus.nav')               
        </section>
        <section class="content">
                <div class="container">
                        <h1 class="center-text">Division</h1>
                        <div class="col-xs-6">
                                <p>Insert Division of Bangladesh</p>
                                {!! Form::open(['id'=>'division_form', 'action' => 'DivisionController@store', 'method'=>'Post']) !!}
                                <div class="form_group">
                                        {{ Form::label('division_name', 'Division Name') }}
                                        {{ Form::text('division_name', '', ['class' => 'form-control', 'placeholder' => 'Division Name', 'id' => 'division_name'])}}                                
                                </div>
                                <div class="form_group">
                                        {{ Form::label('division_name_bangla', 'Division Name Bangla') }}
                                        {{ Form::text('division_name_bangla', '', ['class' => 'form-control', 'placeholder' => 'Division Name Bangla', 'id' => 'division_name_bangla'])}}                                
                                </div>
                                <div class="form_group">
                                        {{ Form::label('division_code', 'Division Code') }}
                                        {{ Form::text('division_code', '', ['class' => 'form-control', 'placeholder' => 'Division Code', 'id' => 'division_code'])}}                                
                                </div>
                                
                                {{ Form::submit('submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}                                
                                
                                {!! Form::close() !!}
                        </div>                
                        <div class="col-xs-6">
                                <div class="data_table">
                                        <table class="table table-striped table-bordered">
                                                <thead>
                                                        <tr>
                                                                <th>SL</th>
                                                                <th>Division Name</th>
                                                                <th>Bangla Division Name</th>
                                                                <th>Division Code</th>
                                                                <th>Edit/Delete</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        @if (count($divisions) > 0)
                                                                <?php $i=1;?>
                                                                @foreach ($divisions as $division)
                                                                <tr>
                                                                        <td>{{$i}}</td>
                                                                        <td>{{$division->division_name}}</td>
                                                                        <td>{{$division->division_name_bangla}}</td>
                                                                        <td>{{$division->division_code}}</td>
                                                                        <td><a href="/division/{{$division->id}}/edit" class="eidt ">Edit</a> || <a href="/update/{{$division->id}}" class="eidt ">Delete</a> </td>
                                                                </tr>
                                                                <?php $i++;?>
                                                                @endforeach                                    
                                                        @endif
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                </div>
        </section>        
@endsection
