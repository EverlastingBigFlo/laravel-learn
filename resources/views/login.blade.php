@extends('layout')
@section('content')

<form action="{{route('getLogin')}}" method="POST">
    @csrf
<input type="text" name="email" placeholder="Enter your Email" value="{{old('email')}}">
    <span>
        @error('email')
            {{$message}}
        @enderror
    </span>
<br>
<input type="password" name="password" placeholder="Enter your password" value="{{old('password')}}">
    <span>
        @error('password')
            {{$message}}
        @enderror
    </span>
<br>
<input type="password" name="password_confirmation" placeholder="Confirm your password" value="{{old('password_confirmation')}}">

    <span>
        @error('password_confirmation')
            {{$message}}
        @enderror
    </span>
<br>

<button>Login</button>
</form>
@endsection