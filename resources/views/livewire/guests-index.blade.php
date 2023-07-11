<div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">#</th>
            <th scope="col">Mesa</th>
            <th scope="col">Confirmado</th>
            <th scope="col">Link</th>
            <th scope="col">C</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($guests as $guest)
          <tr>
            <th scope="row">{{$guest->name_g}}</th>
            <td>{{$guest->tickets_g}}</td>
            <td>{{$guest->table_g}}</td>
            <td>
                @if ($guest->confirmed_g == 1)
                    Si
                @else
                    No
                @endif
            </td>
            <td id="cop-{{$guest->id}}">invitation.test/guest/{{$guest->id}}</td>
            <td>
                <button class="copy-btn" data-clipboard-target="#cop-{{$guest->id}}">C</button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
