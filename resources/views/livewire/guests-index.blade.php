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
              <td id="cop-{{$guest->id}}">invitation.test/event/{{$event}}/guest/{{$guest->id}}</td>
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

</div>
