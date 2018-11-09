@extends('layouts.app')

@section('content')
<public-profile :user="{{$user}}"></public-profile>
@endsection
