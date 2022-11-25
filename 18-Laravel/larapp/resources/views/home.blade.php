@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>


                <div class="w-full p-6 flex lg:flex-col items-center gap-8 my-6">
                    {{--  --}}
                    <div class="bg-white rounded-lg shadow2 lg:flex lg:max w-lg">
                        <img src="{{ asset('images/users.svg')}}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                        <div class="p-6 flex gap-4 flex-col">
                            <h2 class="mb-2 text-2xl flex gap-2 items-center font-bold text-[#614883]">                              
                                users
                                </h2>
                                <p class="text-[#614883]">Admin users</p>
                                <a href="{{url('users')}}" class="p-4 bg-[#614883] text-white text-center rounded-md md">
                                    Admin
                                </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow2 lg:flex lg:max w-lg">
                        <img src="{{ asset('images/category.svg')}}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                        <div class="p-6 flex gap-4 flex-col">
                            <h2 class="mb-2 text-2xl flex gap-2 items-center font-bold text-[#614883]">
                                Category
                                </h2>
                                <p class="text-[#614883]">Admin users</p>
                                <a href="{{url('category')}}" class="p-4 bg-[#614883] text-white text-center rounded-md md">
                                    Admin
                                </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow2 lg:flex lg:max w-lg">
                        <img src="{{ asset('images/games.svg')}}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                        <div class="p-6 flex gap-4 flex-col">
                            <h2 class="mb-2 text-2xl flex gap-2 items-center font-bold text-[#614883]">                                 
                                Games
                                </h2>
                                <p class="text-[#614883]">Admin users</p>
                                <a href="{{url('games')}}" class="p-4 bg-[#614883] text-white text-center rounded-md md">
                                    Admin
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
