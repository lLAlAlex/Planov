@extends('master')

@section('title', 'New Note Page')

@section('css')
    .col-3 {
        display: flex;
        flex-direction: column;
        align-items: left;
        background-color: #3A3FC8;
        min-height: 100%;
    }
    .nav-link {
        color: white;
    }
    .nav-link:hover {
        color: black;
    }
    ul.nav.flex-column {
        margin-top: 25vh;
    }
    .nav-item {
        font-size: 2.5vh;
    }
    #note {
        background-color: white;
        border-radius: 5vh;
    }
    .square {
        height: 3vw;
        width: 3vw;
        background-color: blue;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        border-radius: 0.3vw;
        color: white;
        margin-top: -1vw;
        margin-left: 1vw;
        font-size: 2vw;
    }
    #deadlines {
        height: 12vw;
        width: 40vw;
        background-color: lightblue;
        margin-bottom: 1.5vw;
        margin-left: 3vw;
        border-radius: 1vw;
    }
    .deadlinedate {
        font-size: 1.2vw;
        margin-top: 5vw;
        margin-left: 2vw;
    }
    .deadlinetitle {
        font-size: 1.5vw;
        margin-top: 2vw;
    }
    .deadlinedesc {
        font-size: 1vw;
        color: grey;
    }
    #notes {
        height: 20vw;
        width: 20vw;
        background-color: white;
        margin-bottom: 1.5vw;
        margin-left: 3vw;
        border-radius: 1vw;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .notetitle {
        font-size: 1.5vw;
        padding-left: 2vw;
        padding-top: 2vw;
    }
    .notecontent {
        font-size: 1vw;
        padding-left: 2vw;
        padding-right: 2vw;
    }
    .discountad {
        position: relative;
    }
    .image-container {
        position: relative;
        display: inline-block;
    }
    .image-container img {
        display: block;
        width: 40vh;
        height: 40vh;
        margin-top: 10vh;
        margin-left: 4vh;
        margin-bottom: 6vh;
    }
    .image-container .adtitle {
        position: absolute;
        top: 40%;
        left: 55%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 3vh;
    }
    .image-container .adsale {
        position: absolute;
        top: 50%;
        left: 55%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 9vh;
    }
    .image-container .adtitle2 {
        position: absolute;
        top: 62%;
        left: 55%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 3vh;
    }
    #titlerow {
        padding-left: 5vh;
        padding-top: 5vh;
    }
    #title {
        width: 130vh;
        height: 5vh;
        font-size: 3vh;
        border-radius: 1vh;
    }
    #contentrow {
        padding-left: 5vh;
        padding-top: 5vh;
    }
    #content {
        width: 130vh;
        height: 80vh;
        font-size: 2vh;
        border-radius: 1vh;
    }
    #newnotebtn {
        margin-top: 2vh;
        margin-left: 76vh;
        width: 20vh;
        height: 5vh;
        border-radius: 1vh;
        font-size: 2vh;
    }
    #fontsizeinput {
        width: 5vh;
        margin-left: 2vh;
        text-align: center;
    }
@endsection

@section('js')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="fs-1 m-3 fw-bold mt-5 ms-5">
                    <img src="" style="display: inline;">
                    <p style="color:white; display: inline-block; font-size: 6vh;">Planov</p>
                </div>
                <ul class="nav flex-column mt-5">
                    <li class="nav-item ms-5 ps-3 me-3" id="home">
                        <i class="fa-solid fa-house" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/">Home</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="deadline">
                        <i class="fa-solid fa-clock" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/deadline">Deadline</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="list">
                        <i class="fa-solid fa-list-check" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/todolist">To-do List</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="note">
                        <i class="fa-solid fa-file" style="color: #000000; display: inline;"></i>
                        <a class="nav-link" style="color: #000000; display: inline-block;" aria-current="page" href="/note">Notes</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="vbl">
                        <i class="fa-solid fa-play" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/vbl">VBL</a>
                    </li>
                    <li class="nav-item mt-5 ms-5 ps-3 me-3" id="logout">
                        <i class="fa-solid fa-right-from-bracket" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/logout">Logout</a>
                    </li>
                </ul>
                <div class="discountad">
                    <a href="/subscription">
                        <div class="image-container">
                            <img src="{{ URL::asset('storage/bulan.png') }}">
                            <p class="adtitle fw-bold">Subscribe</p>
                            <p class="adsale fw-bold">30%</p>
                            <p class="adtitle2 fw-bold">Off</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col" style="background-color: white">
                <form enctype="multipart/form-data" action="{{ route('newnote') }}" method="POST">
                    @csrf
                    <div class="row" id="titlerow">
                        <input id="title" placeholder="Title" name="title">
                    </div>
                    <div class="row" id="contentrow">
                        <textarea id="content" placeholder="Content" name="content"></textarea>
                    </div>
                    <i onclick="bold()" style="margin-top: 3vh; margin-left: 4vh; cursor: pointer;" class="fa-solid fa-bold fa-xl"></i>
                    <i onclick="italic()" style="margin-left: 4vh; cursor: pointer;" class="fa-solid fa-italic fa-xl"></i>
                    <i onclick="underline()" style="margin-left: 4vh; cursor: pointer;" class="fa-solid fa-underline fa-xl"></i>
                    <i onclick="decreasefontsize()" style="margin-left: 4vh; cursor: pointer;" class="fa-solid fa-minus fa-xl"></i>
                    <input type="text" id="fontsizeinput" name="fontsize" readonly>
                    <i onclick="increasefontsize()" style="margin-left: 2vh; cursor: pointer;" class="fa-solid fa-plus fa-xl"></i>
                    <button id="newnotebtn" class="btn btn-primary" type="submit">Make New Note</button>
                <form>
            </div>
        </div>
    </div>
@endsection
