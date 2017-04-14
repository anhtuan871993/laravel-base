@extends('admin::layouts.master')

@section('content')
    <h1>Login admin</h1>
    <form method="post">
        {{ csrf_field() }}
        <input type="text" name="email"/>
        <input type="text" name="password"/>
        <input type="submit" value="Login"/>
    </form>
@stop
