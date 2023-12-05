@extends('layout')
@section('content')
<form action="{{route('reg')}}" method="POST">

    {{-- where to route to when the account is being register to the database --}}
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
    <input type="number" name="age" placeholder="age" value="{{old('age')}}">
    <small style="color: red">

        @error('age')
            {{$message}}
        @enderror
    </small>
    <br>
    <input type="text" name="country" placeholder="country" value="{{old('country')}}">
    <small style="color: red">

        @error('country')
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