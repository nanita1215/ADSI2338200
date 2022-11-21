@extends('layouts.app')

@section('title', 'Examples Blade')

@section('content')
<div class="text-[#231832] bg-white/60 w-[-480px] p-4 rounded  mx-auto my-10">
    <h1 class="mt-10 text-center font-semibold text-4xl text-larapp">        Examples Blade     </h1>
    <h2 class="mt-10 text-center font-semibold text-2xl text-larapp">         If - Else If - Else       </h2>
    

        @if (date ('l') == 'Monday') 
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp"> Today is: Monday</h3>
            @elseif(date('l') == 'Tuesday')
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp"> Today is: Tuesday</h3>
            @elseif(date('l') == 'Wednesday')
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp" > Today is: Wednesday</h3>
            @elseif(date('l') == 'Thursday')
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp"> Today is: Thursday</h3>
            @elseif(date('l') == 'Friday')
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp"> Today is: Friday</h3>
            @elseif(date('l') == 'Saturday')
                <h3 class="mt-10 text-center font-italic text-2xl text-larapp"> Today is: Saturday</h3>
            @elseif(date('l') == 'Sunday')    
        @endif

        {{-- {{}} --}}
        <h2 class="mt-10 text-center font-italic text-2xl text-larapp "> While</h2>

        <?php $num=0?>
            @while($num < 10)
                <h1 class= "mt-10 text-center font-italic text-2xl text-larapp">El numero es:</h1>
                <h2 class="mt-10 text-center font-italic text-2xl text-larapp">{{$num}}</h2>
                <?php $num ++?>
            @endwhile


        {{-- {{}} --}}

        <h2 class="mt-10 font-semibold text-center text-2xl "> Switch</h2>

    

    </div>

@endsection