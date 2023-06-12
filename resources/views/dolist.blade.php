@extends('master')

@section('title', 'To-Do List Page')

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
    #list {
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
        width: 120vh;
        height: 8vh;
        background-color: #3A3FC8;
        margin-left: 5vh;
        margin-top: 5vh;
        margin-bottom: 3vh;
        border-radius: 1vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .addlistbtn {
        width: 10vh;
        height: 8vh;
        background-color: #3A3FC8;
        margin-top: 5vh;
        border-radius: 1vh;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .liststatus {
        width: 10vh;
        height: 8vh;
        background-color: #3A3FC8;
        margin-top: 2vh;
        border-radius: 1vh;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .lists {
        width: 120vh;
        height: 8vh;
        background-color: #3A3FC8;
        margin-top: 2vh;
        padding-left: 5vh;
        border-radius: 1vh;
        display: flex;
        align-items: center;
        justify-content: left;
        margin-left: 5vh;
    }
    .circle {
        width: 3.5vh;
        height: 3.5vh;
        background-color: white;
        border-radius: 10vh;
    }
    .circlegreen {
        width: 3.5vh;
        height: 3.5vh;
        background-color: green;
        border-radius: 10vh;
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
                        <i class="fa-solid fa-list-check" style="color: #000000; display: inline;"></i>
                        <a class="nav-link" style="color: #000000; display: inline-block;" aria-current="page" href="/todolist">To-do List</a>
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
                            <p style="font-size: 4vh; color:white; margin: 0px;">To-Do List<p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="addlistbtn">
                            <a href="/newdolist" style="text-decoration: none;"><p style="font-size: 4vh; color:white">+<p></a>
                        </div>
                    </div>
                </div>
                @foreach ($todolists as $t)
                    <div class="row">
                        <div class="col">
                            <div class="lists">
                                @if($t->status == 'unfinished')
                                    <p style="font-size: 3vh; color:white">{{ $t->dolist }}<p>
                                @elseif($t->status == 'finished')
                                    <p style="font-size: 3vh; color:white; text-decoration: line-through;">{{ $t->dolist }}<p>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="liststatus">
                                <form action="" method="POST">
                                    @csrf
                                    @if($t->status == 'unfinished')
                                        <a href="/todolist/{{ $t->id }}"><div class="circle"></div></a>
                                    @elseif($t->status == 'finished')
                                        <a href="/todolist/{{ $t->id }}"><div class="circlegreen"></div></a>
                                    @endif

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
