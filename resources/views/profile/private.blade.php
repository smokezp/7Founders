@extends('layouts.app')

@section('content')
    <div class="container">
        <private-profile :user="{{$user}}"></private-profile>
    </div>
    {{--<post-register-modal>--}}
@endsection
