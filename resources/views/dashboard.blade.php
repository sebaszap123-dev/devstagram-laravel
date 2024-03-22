@extends('layouts.app')
@section('title')
    @if (auth()->user()->username == $user->username)
        My profile: {{ $user->username }}
    @else
        Profile: {{ $user->username }}
    @endif
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="User image">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:items-start md:justify-center py-10 md:py-10">
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
                <p class="text-gray-700 text-sm font-bold mb-3 mt-3">
                    0
                    <span class="font-normal">Followers</span>
                </p>
                <p class="text-gray-700 text-sm font-bold mb-3">
                    0
                    <span class="font-normal">Following</span>
                </p>
                <p class="text-gray-700 text-sm font-bold mb-3">
                    0
                    <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>
@endsection
