<div>
    {{--<h1>{{$countdown->format('%s')}}</h1>--}}
    <div wire:poll.1000ms.visible class="row text-center">
        <div class=col-lg-1></div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%M')}}</h4> Meses
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%d')}}</h4> Días
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%H')}}</h4> Horas
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%i')}}</h4> Minutos
        </div>
        <div class='col-lg-2 col-sm-2'>
            <h4>{{$countdown->format('%s')}}</h4> Segundos
        </div>
        <div class=col-lg-1></div>
    </div>
</div>