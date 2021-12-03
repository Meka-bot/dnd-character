<div class="card" style="border-color:rgb(61, 86, 128); min-height:425px;">
      <div class="card-body">
        <h1 class="card-title" style="text-align:center; font-weight:700;">Personaje</h1>
        <hr style="border-color:rgb(61, 86, 128);">
        <h3 style="text-align:center; font-weight:400;">Clase</h3>
        ($personajes->clase_id as $clase)
        <h7 class="card-text"style="">{{ $clase->nombre }}</h7>
        @endforeach
        <hr style="border-color:rgb(61, 86, 128);">
        <h3 style="text-align:center; font-weight:400;">Raza</h3>
        ($personajes->raza_id as $raza)
        <h7 class="card-text"style="">{{ $raza->nombre }}</h7>
        @endforeach
        <hr style="border-color:rgb(61, 86, 128);">
        <h3 style="text-align:center; font-weight:400;">Equipamento</h3>
        ($personajes->equipamiento_id as $equipamiento)
        <h7 class="card-text"style="">{{ $equipamiento->nombre }}</h7>
        @endforeach
      </div>
</div>