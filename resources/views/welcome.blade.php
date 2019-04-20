@extends('layouts.master')

@section('title')
ByteFreaks Social Network

@endsection


@section('content')

    Welcome to ByteFreaks Social Network

    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="#" method="post">
              <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="first_name">Your Email</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your Email</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Your Email</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endsection
