<div>
    {{--<h1>{{$countdown->format('%s')}}</h1>--}}
    <div wire:poll.1000ms.visible class="row text-center">
        <div class=col-lg-1></div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%M')}}</h4> Months
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%d')}}</h4> Days
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%H')}}</h4> Hours
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%i')}}</h4> Minutes
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%s')}}</h4> Seconds
        </div>
        <div class=col-lg-1></div>
    </div>
</div>
