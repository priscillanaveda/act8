<a href="{{url('/superheroes/create')}}"> Agregar nuevo superheroe</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre Real</th>
                <th>NombreConocido</th>
                <th>InformaciónAdicional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superheroes) 
            <tr>
             <td>{{$superheroes->id}}</td>
             <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroes->Foto)}}"/>
             {{$superheroes->Foto}}
            
            
            </td>
             <td>{{$superheroes->NombreReal}}</td>
             <td>{{$superheroes->Nombre Conocido}}</td>
             <td>{{$superheroes->InformaciónAdicional}}</td>
             <td>

             <a href="{{url('/superheroes/'.$superheroes->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/superheroes/'.$superheroes->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>