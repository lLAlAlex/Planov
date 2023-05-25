@extends('master')

@section('title', 'Register')

@section('css')
    .container-fluid {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-wrap: wrap;
        width: 100%;
        margin: 0;
        padding: 0;
    }
    .left-column {
        display: flex;
        flex-direction: column;
        align-items: left;
        justify-content: center;
        flex: 1;
        padding-left: 25vh;
        padding-right: 25vh;
    }
    .right-column {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #403ccc;
        flex: 3;
        height: 100%;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: left;
        justify-content: center;
        width: 100%;
        max-width: 54vh;
        margin-top: 5vh;
    }
    input[type="email"], input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }
    button[type="submit"] {
        padding: 0.5rem;
        background-color: #1e90ff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 10vh;
    }
    button[type="button"] {
        width: 45vh;
    }
    img {
        max-width: 100%;
        max-height: 100%;
    }
    @media only screen and (max-width: 768px) {
        .left-column, .right-column {
            flex-basis: 100%;
        }
    }
@endsection

@section('js')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="left-column">
            <p class="fs-2 fw-bold m-0">Register</p>
            <p>Hi, Welcome to Planov!</p>

            <form enctype="multipart/form-data" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="password" placeholder="Enter password">
                </div>
                @if($errors->any())
                    <p class="m-0" style="color:red">{{ $errors->first() }}</p>
                @endif
                <button type="submit">Register</button>
            </form>
            <a href="/login"><button type="button" class="mt-2 btn btn-outline-secondary">Login</button></a>
        </div>
        <div class="right-column">
            <img src="{{ URL::asset('storage/bulan.png') }}" alt="Login Image">
        </div>
    </div>
@endsection
