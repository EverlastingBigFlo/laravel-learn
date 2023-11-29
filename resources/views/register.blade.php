@extends('layout')
@section('content')
<form action="{{route('reg')}}" method="POST">
    @if (session()->has('message'))
        <h1>{{session()->get('message')}}</h1>
    @endif
    @csrf
    <input type="text" name="name" placeholder="enter your name" value="{{old('name')}}">
    <small style="color: red">
        @error('name')
            {{$message}}
        @enderror
    </small><br>
    <input type="text" name="email" placeholder="email" value="{{old('email')}}">
    <small style="color: red">

        @error('email')
            {{$message}}
        @enderror
    </small>
    <br>
    <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
    <small style="color: red">
        @error('password')
            {{$message}}
        @enderror
    </small>
    <br>
    <button>Sign up</button>
</form>
@endsection