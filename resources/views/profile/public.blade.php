@extends('layouts.app')

@section('content')
    <div class="modal-mask">
        <div class="row justify-content-center public-profile">
            <div class="card w-100">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md">
                            <img class="big-avatar ml-5" src="{{ asset('images/userImg.png')}}">
                        </div>
                        <div class="col-md">
                            {{$user->name}}
                            <br><span class="user-role">Full Stack Developer</span>
                        </div>
                    </div>

                </div>
                <div class="profile-body">
                    <div class="row user-panel text-center">
                        <div class="col-md">
                            <a href="#">
                                Smart Capital Offering
                            </a>

                        </div>
                        <div class="col-md">
                            <a href="#">
                                Work
                            </a>
                        </div>
                        <div class="col-md">
                            <a href="#">
                                Skills
                            </a>
                        </div>
                        <div class="col-md">
                            <a href="#">
                                Recommendation
                            </a>
                        </div>
                        <div class="col-md">
                            <a href="#">
                                Projects
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <label>My Smart Capital Offering</label>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
