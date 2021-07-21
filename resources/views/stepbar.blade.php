<div class="row mt-5">
    <div class="col-md-11">
        <ul class="progressbar">
            <li class="@if(Route::current()->getName() === 'interview') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('interview')}}">Introduction</a>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Introduction</a>
            </li>
            <li class="@if(Route::current()->getName() === 'tests') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('tests')}}">Page 1</a>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 1</a>
            </li>

            <li class="@if(Route::current()->getName() === 'diagnosis' || Route::current()->getName() === 'diagnosis-answer') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 2</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('diagnosis')}}">Page 2</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'stage') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 3</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('stage')}}">Page 3</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'quiz-1' || Route::current()->getName() === 'answer-1') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 4</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('quiz-1')}}">Page 4</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'orders') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 5</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('orders')}}">Page 5</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'page6' || Route::current()->getName() === 'page6-fact') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 6</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('page6')}}">Page 6</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'page7') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 7</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('page7')}}">Page 7</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'lasttest') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 8</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('lasttest')}}">Page 8</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'quiz-2' || Route::current()->getName() === 'answer-2') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 9</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('quiz-2')}}">Page 9</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'quiz-3' || Route::current()->getName() === 'answer-3') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 10</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('quiz-3')}}">Page 10</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'afterquiz' || Route::current()->getName() === 'after-answer-1') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 11</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('quiz-3')}}">Page 11</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'afterquiz1' || Route::current()->getName() === 'after-answer-2') active @endif">
                {{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 12</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('quiz-3')}}">Page 12</a>--}}
            </li>
            <li class="@if(Route::current()->getName() === 'caseInterview') active @endif">
{{--                <img class="mb-4" src="{{ asset('img/interview.jpg') }}" width="100px"/>--}}
                <a class="d-flex align-items-center justify-content-around" href="#">Page 13</a>
{{--                <a class="d-flex align-items-center justify-content-around" href="{{route('caseInterview')}}">Page 13</a>--}}
            </li>
        </ul>
    </div>
    <a href="{{ $next }}" class="col-md-1 d-flex justify-content-end align-items-center">
        <button class="btn btn-primary py-3 btn-continue">Continue</button>
    </a>
</div>
