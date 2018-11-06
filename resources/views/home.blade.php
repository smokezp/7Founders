@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="progress-container">
                            <div class="progress">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 25%"
                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-status">
                                25% Complete
                            </div>

                        </div>
                    </div>
                    <div class="second-row row">
                        <img class="big-avatar" src="{{ asset('images/userImg.png')}}">
                    </div>
                    <div class="row float-right">
                        <button type="button" class="btn btn-outline-light profile-btn">
                            <span class="glyphicon glyphicon-download"></span>Import LinkedIN Data
                        </button>
                        <button type="button" class="btn btn-outline-light profile-btn">
                            <span class="glyphicon glyphicon-cog"></span>Investment Preferences
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-6 pt-3 m-auto">
                        <div class="row text-center">
                            <div class="col-sm">
                                {{auth()->user()->name}}
                            </div>

                        </div>
                        <div class="row text-center">
                            <div class="col-sm">
                                Full Stack Developer
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col-sm">
                                London, Great Britain
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row button-section">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8 m-auto">
                            <div class="row">
                                <div class="col-sm text-center">
                                    <a href="#">CV Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Capital</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm text-center">
                                    <a href="#">Section</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="custom-btn">
                                @svg('svg/eye.svg', 'Cloud')Preview
                            </button>
                        </div>

                    </div>
                    <div class="col-md-8 m-auto profile-body">
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About Me</label>
                                    <span class="glyphicon glyphicon-eye-close"></span>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="email" class="form-control custom-input" id="aboutMe"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="work_experience">Work Experience</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="work_experience"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="skills"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--endform--}}
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="network">Network</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="network"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--endform--}}
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="education">Education</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="education"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--endform--}}
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="recommendations">Recommendations</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="recommendations"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--endform--}}
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="projects">Projects</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="projects"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--endform--}}
                        <form action="" method="post">
                            <div class="input-wrapper">
                                <div class="form-group">
                                    <label for="languages">Languages</label>
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="text" class="form-control custom-input" id="languages"
                                                   placeholder="Write a short intro about yourself">
                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="circle-btn float-right">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
