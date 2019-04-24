@extends('layouts.master')

@section('title')
ByteFreaks Social Network

@endsection

<br>
@section('content')

    Welcome to ByteFreaks Social Network
    <br>
@if(count($errors)>0)
    <div class="row">
    <div class="col-md-6">
        <ul>
            @foreach($errors->all() as $er)
                <li>
                    {{$er}}
                </li>
                @endforeach
        </ul>
    </div>
</div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{URL('signup')}}" method="post">
                @csrf
              <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group">
                    <label for="first_name">Your Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{url('SignIn')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endsection
