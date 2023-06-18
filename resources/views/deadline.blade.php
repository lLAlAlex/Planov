@extends('master')

@section('title', 'Deadlines Page')

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
    #deadline {
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
    .titlebackground {
        width: 95vh;
        height: 8vh;
        background-color: #3A3FC8;
        margin-left: 5vh;
        margin-top: 5vh;
        margin-bottom: 5vh;
        border-radius: 1vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .deadline-container {
        display: flex;
        margin-left: 5vh;
        flex-wrap: wrap;
    }
    .deadlinelist {
        width: 45vh;
        height: 50vh;
        background-color: #F2F6FC;
        border-radius: 2vh;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        margin-right: 5vh;
        margin-bottom: 5vh;
    }
    .deadlinetitle {
        font-size: 3vh;
        font-weight: bold;
        text-align: center;
        margin-top: 3vh;
    }
    .deadlinedate {
        font-size: 3vh;
        font-weight: bold;
        text-align: center;
        margin: 1.5vh;
    }
    .deadlinecontentbg {
        width: 40vh;
        height: 25vh;
        background-color: white;
        border-radius: 1vh;
        margin-left: 2.5vh;
    }
    .deadlinecontent {
        font-size: 15vh;
        margin-left: 15vh;
        color: #3A3FC8;
        cursor: pointer;
    }
    .realdeadlinetitle {
        font-size: 3vh;
        font-weight: bold;
        vertical-align: middle;
        text-align: center;
        margin-top: 3vh;
    }
    .realdeadlinedate {
        font-size: 3vh;
        font-weight: bold;
        vertical-align: middle;
        text-align: center;
    }
    .realdeadlinecontent {
        font-size: 2vh;
        vertical-align: left;
        text-align: left;
        color: black;
        padding: 1vh;
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
                        <i class="fa-solid fa-clock" style="color: #000000; display: inline;"></i>
                        <a class="nav-link" style="color: #000000; display: inline-block;" aria-current="page" href="/deadline">Deadline</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="list">
                        <i class="fa-solid fa-list-check" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/todolist">To-do List</a>
                    </li>
                    <li class="nav-item mt-3 ms-5 ps-3 me-3" id="note">
                        <i class="fa-solid fa-file" style="color: #ffffff; display: inline;"></i>
                        <a class="nav-link" style="display: inline-block;" href="/note">Notes</a>
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
                <div class="row">
                    <div class="col">
                        <div class="titlebackground">
                            <p style="font-size: 4vh; color:white; margin: 0px;">Deadlines<p>
                        </div>
                    </div>
                </div>
                <div class="deadline-container">
                    <div class="deadlinelist">
                        <p class="deadlinetitle">Deadline Title</p>
                        <p class="deadlinedate">Deadline Date & Time</p>
                        <div class="deadlinecontentbg">
                            <a href="/newdeadline" style="text-decoration: none;">
                                <p class="deadlinecontent">+</p>
                            </a>
                        </div>
                    </div>
                    @foreach ($deadlines as $d)
                        <div class="deadlinelist">
                            <p class="realdeadlinetitle">{{ $d->title }}</p>
                            <p class="realdeadlinedate">{{ $d->deadlinedate }}</p>
                            <div class="deadlinecontentbg">
                                <p class="realdeadlinecontent">{{ Str::limit($d->description, 150) }}</p>
                            </div>
                            <a href="deletedeadline/{{ $d->id }}">
                                <i class="fa-solid fa-trash fa-xl" style="color: black; margin-left: 33vh; margin-top: 4vh; cursor: pointer;"></i>
                            </a>
                            <a href="editdeadline/{{ $d->id }}">
                                <i class="fa-solid fa-pen-to-square fa-2xl" style="color: black; margin-left: 2vh; cursor: pointer;"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
