@extends('layouts.app')

@section('content')
<h1>Home</h1>
<div>
    {{ Form::open(array("url" => "user/login")) }}
    <input type="username" placeholder="username" />
    <input type="password" placeholder="password" />
    <button>login</button>
    {{ Form::close() }}
</div>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection