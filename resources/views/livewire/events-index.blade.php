<div>
    <p>One thing about me, I'm the baddest alive</p>

    <div class="row text-left">
        <div class="col-12">
            <button class="btn btn-success" wire:click="$set('dispInsert', 'true')">+</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                    <th>Link</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <th scope="row">{{$event->name_e}}</th>
                    <td>{{$event->date_e}}</td>
                    <td>{{$event->places->name_p}}</td>
                    <td id="cop-{{$event->id}}">www.lovesnnipets.com/event/{{$event->id}}</td>
                    <td>
                        <button class="copy-btn btn btn-primary" data-clipboard-target="#cop-{{$event->id}}">
                            <i class="fa-regular fa-copy"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-secondary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-dialog-modal wire:model='dispInsert'>
        <x-slot name='title'>
          <div class="row text-center">
            <h2>Agregar</h2>
          </div>
        </x-slot>
        <x-slot name='content'>
          <form wire:submit.prevent="save" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="name_e">Nombre:</label> <br>
                    <input type="text" class="form-control" id="name_e" name="name_e" wire:model.defer='name_e' required>
                    @error('name_e')
                        <h5>{{$message}}</h5>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="date_e">Fecha:</label> <br>
                    <input type="datetime-local" name="date_e" id="date_e" class="form-control" wire:model.defer="date_e" required>
                    @error('date_e')
                        <h5>{{$message}}</h5>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="hassits_e">Con lugares:</label> <br>
                    <input type="radio" id="Yes" name="hassits_e" value={{true}} wire:model="hassits_e">
                    <label for="Yes"> Si</label> <br>
                    <input type="radio" id="No" name="hassits_e" value=0 wire:model="hassits_e" selected>
                    <label for="No"> No</label>
                    @error('hassits_e')
                        <h5>{{$message}}</h5>
                    @enderror
                </div>
                @if ($hassits_e==1)
                    <div class="col-md-6">
                        <label for="numsits_e">Numero de asientos</label>
                        <input type="number" name="numsits_e" id="numsits_e" class="form-control" wire:model.defer="numsits_e" value="1" >
                        @error('numsits_e')
                            <h5>{{$message}}</h5>
                        @enderror
                    </div>
                @endif
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="places_id">Lugar</label> <br>
                    <select name="places_id" id="places_id" class="form-control" wire:model.defer="places_id">
                        <option value="">--Selecione</option>
                        @foreach ($places as $place)
                            <option value="{{$place->id}}">{{$place->name_p}}</option>
                        @endforeach
                    </select>
                    @error('places_id')
                        <h5>{{$message}}</h5>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="users_id">Usuario</label> <br>
                    <select name="users_id" id="users_id" class="form-control" wire:model.defer="users_id">
                        <option value="">--Selecione</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('users_id')
                        <h5>{{$message}}</h5>
                    @enderror
                </div>
            </div>
            <br>
            <div class="col-12 text-center">
                <button wire.click="insert" type="submit" class="btn btn-outline-success">Enviar</button>
                <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                
            </div>
          </form>
        </x-slot>
        <x-slot name='footer'>
          <button wire:click="$set('dispInsert', false)" class="btn btn-secondary">Cerrar</button>
        </x-slot>
      </x-dialog-modal>

</div>
