@extends('login.layout.main')
@section('content')

    <section class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">


        <div class="col-md-12">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="row p-2">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('images/login.svg') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4 for="" class="fw-bold fs- text-center">KPTCL Employees <br> Cooperative Society</h4>
                        </div>
                        <div class="form-group p-2 mb-2">
                            <label for="email" class="form-label fw-bold">Email *</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group p-2 mb-2">
                            <label for="password" class="form-label fw-bold">Password *</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-12 p-2 " style="background-color: black">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
