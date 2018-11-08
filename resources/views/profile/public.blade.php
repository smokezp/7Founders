@extends('layouts.app')

@section('content')
    <div class="modal-mask public-profile-modal-mask">
        <div class="row justify-content-center public-profile">
            <div class="card w-100">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md">
                            <img class="big-avatar ml-5" src="{{ asset('images/userImg.png')}}">
                        </div>
                        <div class="col-md">
                            {{$user->name}}
                            <br><span class="blue-text">Full Stack Developer</span>
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
                    <div class="user-section" id="smart_capital_offering">
                        <label class="profile-label">My Smart Capital Offering</label>
                        <div class="col-md-11 m-auto">
                            <div class="row bottom-line">
                                <div class="col-3 m-auto text-left p-0">Professional Experience</div>
                                <div class="col-9 p-0">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 25px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 m-auto text-left p-0">Size of Network</div>
                                <div class="col-9 p-0">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 15px;">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 m-auto text-left p-0">Size of Team</div>
                                <div class="col-9 p-0">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 15px;">
                                            <div class="progress-bar" role="progressbar" style="width: 30%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 m-auto text-left p-0">Size of Total Skill Pool</div>
                                <div class="col-9 p-0">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 15px;">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--end-id--}}
                    <div class="user-section" id="about_me">
                        <label class="profile-label">About Me</label>
                        <div class="col-md-11 m-auto">
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                            HHKJHKJHKJHKHkdjfhskdljfhkdjhflkfhkhsdkhfkhsdkfhhdsfhdsfhfjhsdfhhdsfhfdhdfssfdksdfhhlkdflh
                        </div>
                    </div>
                    {{--end-id--}}

                    <div class="user-section" id="work_experience">
                        <label class="profile-label">Work Experience</label>
                        <div class="col-md-11 m-auto work">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/bag.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-6 m-auto">
                                    Facebook Inc.
                                    <br><span class="blue-text">Driver</span>
                                </div>
                                <div class="col-4 float-right text-right m-auto">
                                    Oct. 2015 - current
                                    <span class="glyphicon glyphicon-ok-circle"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 m-auto work">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/bag.jpg')}}">
                                    </div>
                                </div>
                                <div class="col-6 m-auto">
                                    Facebook Inc.
                                    <br><span class="blue-text">Driver</span>
                                </div>
                                <div class="col-4 float-right text-right m-auto">
                                    Oct. 2015 - current
                                    <span class="glyphicon glyphicon-ok-circle"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-light profile-btn profile-show-more-btn">
                        <span class="glyphicon glyphicon-ok-circle"></span>Show More
                    </button>
                    {{--end-id--}}

                    <div class="user-section" id="my_skills">
                        <label class="profile-label">My Skills</label>
                        <div class="col-md-11">
                            <div class="row mt-3 mb-3">
                                <div class="col-md">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="float-left">Grow Hacker</span>
                                        <span class="float-right">10+ years Expert</span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="float-left">Grow Hacker</span>
                                        <span class="float-right">10+ years Expert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-md">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="float-left">Grow Hacker</span>
                                        <span class="float-right">10+ years Expert</span>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="progress-container">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="float-left">Grow Hacker</span>
                                        <span class="float-right">10+ years Expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-light profile-btn profile-show-more-btn">
                        <span class="glyphicon glyphicon-ok-circle"></span>Show More
                    </button>
                    {{--end-id--}}
                    <div class="user-section" id="education">
                        <label class="profile-label">Education</label>
                        <div class="col-md-11 m-auto education">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/education.png')}}">
                                    </div>
                                </div>
                                <div class="col-6 m-auto">
                                    University.
                                    <br><span class="blue-text">Name of Course</span>
                                </div>
                                <div class="col-4 float-right text-right m-auto">
                                    2015 - 2018
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 m-auto education">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/education.png')}}">
                                    </div>
                                </div>
                                <div class="col-6 m-auto">
                                    University
                                    <br><span class="blue-text">Name of Course</span>
                                </div>
                                <div class="col-4 float-right text-right m-auto">
                                    2000 - 2013
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--end-id--}}
                </div>
            </div>
        </div>
    </div>
@endsection
