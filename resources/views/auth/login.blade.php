@extends('layouts.auth_layout')

@section('login-content')
    <div id="loginBackground" class="position-fixed vh-100 vw-100 d-flex flex-column justify-content-between">
        <div>
            <div class="d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="position-fixed" style="width: 50%;">
                            <img src="{{ asset('svg/Circle 6.svg') }}">
                        </div>
                        <div class="position-fixed">
                            <img src="{{ asset('svg/Line 10 (Stroke).svg') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('svg/Circle 7.svg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-between">
                <div>

                </div>
                <div>
                    <img src="{{ asset('svg/Circle 8.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="mb-5 d-flex flex-column justify-content-between">
            <div>
                <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div id="desainBawah" class="position-fixed" style="width: 10px;">
                                <img id="ml_left" src="{{ asset('svg/titik estetik.svg') }}">
                            </div>
                            <div class="position-fixed">
                                <img id="circle3" src="{{ asset('svg/Circle 3.svg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <img id="circle1" style="margin-bottom: -50px;" src="{{ asset('svg/Circle 1.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center vh-100 vw-100 position-relative">
        <div id="box" class="rounded-4">
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="container">
                    <div class="col-12">
                        <div class="row d-flex justify-content-center ">
                            <img style="width: 50%;" src="{{ asset('img/image 1.png') }}" alt="">
                        </div>
                        <div class="row">
                            <h5 style="font-size: 24px; margin-top: 27px;"
                                class=" align-content-center d-flex justify-content-center">
                                Sistem Absensi WRI
                            </h5>
                        </div>
                        <div class="row">
                            <input value="{{ old('nim') }}" type="text" class="@error('nim') is-invalid @enderror form-control p-2" id="nim" name="nim" placeholder="Nim">
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <input type="password" class="form-control p-2" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="fw-semibold mt-2">
                                <a href="{{ route('forgot-password') }}" class="text-black">
                                    Lupa Password
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                <div class="text-white fw-semibold">
                                    Masuk
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="garisVector" class="position-absolute">
            <img src="{{ asset('svg/line.svg') }}" alt="">
        </div>
    </div>
@endsection
