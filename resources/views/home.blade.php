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
                                <div class="col-sm">
                                    <a href="#">CV Section</a>
                                </div>
                                <div class="col-sm">
                                    <a href="#">Capital</a>
                                </div>
                                <div class="col-sm">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm">
                                    <a href="#">Section</a>
                                </div>
                                <div class="col-sm">
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
                    <div class="col-md-8 m-auto pt-4">


                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Example select</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <fieldset class="form-group">
                            <legend>Radio buttons</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                    Option three is disabled
                                </label>
                            </div>
                        </fieldset>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
