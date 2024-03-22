@extends('layouts.app')

@section('title')
    Login into Devstagram!
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="Una persona haciendo programación en un computador">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf

                @if (session('message'))
                    <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ session('message') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember" /> <label
                        class="uppercase text-gray-500 font-bold text-sm" for="remember">Remember me</label>
                </div>

                <input type="submit" value="Login"
                    class="bg-sky-600 hover:bg-sky-700 cursor-pointer uppercase font-bold text-white w-full rounded-lg p-3" />
            </form>
        </div>
    </div>
@endsection
