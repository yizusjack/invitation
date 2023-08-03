<div> 
  <div class="row">
      <div class="col-lg-6">
        <label for="nameFilter" class="d-inline-block">Nombre</label>
        <input type="text" wire:model='nameFilter' name="nameFilter" id="nameFilter" class="form-control">
      </div>
      <div class="col-lg-5">
        <label for="confirmedFilter">Confirmado</label>
        <select wire:model='confirmedFilter' name="confirmedFilter" id="confirmedFilter" class="form-control">
          <option value="">--Seleccione</option>
          <option value="1">Si</option>
          <option value="false">No</option>
        </select>
      </div>
      <div class="col-lg-1">
        <br>
        <a href="{{route('guest.create', $event)}}"><button class="btn btn-success">+</button></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">#</th>
              <th scope="col">Confirmado</th>
              <th scope="col">Link</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($guests as $guest)
            <tr>
              <th scope="row">{{$guest->name_g}}</th>
              <td>{{$guest->tickets_g}}</td>
              <td>
                  @if ($guest->confirmed_g == 1)
                      Si
                  @else
                      No
                  @endif
              </td>
              <td id="cop-{{$guest->id}}">www.lovesnnipets.com/event/{{$event}}/guest/{{$guest->id}}</td>
              <td>
                <a href="{{route('guest.edit', [$event, $guest->id])}}"><button class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></button></a>
              </td>
              <td>
                <form action="{{route('guest.destroy', [$event, $guest->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button  class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
              <td>
                  <button class="copy-btn btn btn-primary" data-clipboard-target="#cop-{{$guest->id}}"><i class="fa-regular fa-copy"></i></button>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
    {{$guests->links()}}
    <div class="row">
      <p class="text-secondary">{{$confirmed}} confirmados, {{$unconfirmed}} sin confirmar</p>
    </div>

    <br>

    <div class="row">
      <div class="col-1">
        <button class='btn btn-outline-warning' wire:click="$set('display', true)"><i class="fa-solid fa-circle-question"></i></button>
      </div>
    </div> 

    <x-dialog-modal wire:model='display'>
      <x-slot name='title'>
        <div class="row text-center">
          <h1>Guía rapida de la interfaz de Love snnipets</h1>
        </div>
      </x-slot>
      <x-slot name='content'>
        <div class='row'>
          Gracias por confiar en nosotros para tu evento, a continuación se muestra una breve guía sobre como utilizar nuestro sitio
        </div>
        <br>
        <div class="row">
          Las columnas superiores tienen como finalidad filtrar los invitados por nombre y por confirmación de asistencia:
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label for="nameFilter" class="d-inline-block">Nombre</label>
            <input type="text" placeholder="Nombre a buscar" name="nameFilter" id="nameFilter" class="form-control">
          </div>
          <div class="col-lg-6">
            <label for="confirmedFilter">Confirmado (Selecciona entre Si o no)</label>
            <select name="confirmedFilter" id="confirmedFilter" class="form-control">
              <option value="">--Selecciona</option>
              <option value="1">Si</option>
              <option value="false">No</option>
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          Esto limitará los resultados mostrados a los criterios señalados.
        </div> <br>
        <div class="row text-center">
          <h1>Botones</h1>
        </div>
        <br>
        <div class="row">
          <div class="col-1">
            <button class="btn btn-success">+</button>
          </div>
          <div class='col-5'>Agregar nuevo invitado</div>

          <div class="col-1">
            <button class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></button>
          </div>
          <div class='col-5'>Editar info de invitado</div>
        </div>
        <br>
        <div class="row">
          <div class="col-1">
            <button  class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
          </div>
          <div class='col-5'>Eliminar invitado</div>

          <div class="col-1">
            <button class="copy-btn btn btn-primary"><i class="fa-regular fa-copy"></i></button>
          </div>
          <div class='col-5'>Copiar enlace de invitado</div>
        </div>
        <br>
        <div class="row">
          Ya que todas las invitaciones son personalizadas con el nombre y número de pases por invitado, hay un enlace especial para cada invitado.
          El botón de copiar enlace facilita su manejo, haciendo que se pueda copiar el enlace para ser enviado únicamente con un click.
        </div>

        <br>

        <div class="row">
          <p>Para su seguridad, solo la cuenta asociada con la invitación y el administrador tienen acceso a las funciones de administración 
          sobre la información de los invitados.</p>
          <br>
          <p>Para cualquier duda sobre la interfaz o inconvenientes con esta, favor de comunicarse con el administrador: <a class="d-inline-block" href="mailto: yizussawyer@gmail.com">yizussawyer@gmail.com</a></p>
        </div>
        
      </x-slot>
      <x-slot name='footer'>
        <button wire:click="$set('display', false)" class="btn btn-secondary">Cerrar</button>
      </x-slot>
    </x-dialog-modal>

</div>
