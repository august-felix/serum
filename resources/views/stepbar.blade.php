<div class="row mt-5">
    <div class="col-md-11">
        <ul class="progressbar">
            <li class="@if(Route::current()->getName() === 'prequiz') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('prequiz')}}">A</a>
            </li>
            <li class="@if(Route::current()->getName() === 'interview') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('interview')}}">B</a>
            </li>

            <li class="@if(Route::current()->getName() === 'tests') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('tests')}}">C</a>
            </li>
            <li class="@if(Route::current()->getName() === 'diagnosis') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('diagnosis')}}">D</a>
            </li>
            <li class="@if(Route::current()->getName() === 'orders') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('orders')}}">E</a>
            </li>
            <li class="@if(Route::current()->getName() === 'lasttest') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('lasttest')}}">F</a>
            </li>
            <li class="@if(Route::current()->getName() === 'quz') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('quz')}}">G</a>
            </li>
            <li class="@if(Route::current()->getName() === 'caseInterview') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('caseInterview')}}">H</a>
            </li>
        </ul>
    </div>
    <a href="{{ $next }}" class="col-md-1 d-flex justify-content-end align-items-center">
        <button class="btn btn-primary py-3">Continue</button>
    </a>
</div>
