@extends('layouts.app')
@section('title')
    @if (auth()->user()->username == $user->username)
        Your account
    @endif
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="User image">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
            </div>
        </div>
    </div>
@endsection
