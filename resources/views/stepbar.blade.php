<div class="row mt-5">
    <div class="col-md-11">
        <ul class="progressbar">
            <li class="@if(Route::current()->getName() === 'interview') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('interview')}}">Interview</a>
            </li>
            <li class="@if(Route::current()->getName() === 'introduction') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('introduction')}}">Introduction</a>
            </li>
            <li class="@if(Route::current()->getName() === 'tests') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('tests')}}">Tests</a>
            </li>
            <li class="@if(Route::current()->getName() === 'diagnosis') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('interview')}}">Diagnosis</a>
            </li>
            <li class="@if(Route::current()->getName() === 'orders') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('orders')}}">Orders</a>
            </li>
            <li class="@if(Route::current()->getName() === 'quz') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('quz')}}">Quiz</a>
            </li>
            <li class="@if(Route::current()->getName() === 'caseInterview') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="{{route('caseInterview')}}">Case Review</a>
            </li>
        </ul>
    </div>
    <a href="{{ $next }}" class="col-md-1 d-flex justify-content-end align-items-center">
        <button class="btn btn-primary py-3">Continue</button>
    </a>
</div>
