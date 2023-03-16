<label for="NombreReal">Nombre Real </label>
    <input type="text" name="NombreReal" value="{{isset($superheroes->NombreReal)?$superheroes->NombreReal:' '}}" id="NombreReal"> 
    <br>
    <label for="NombreConocido">Nombre Conocido </label>
    <input type="text" name="NombreConocido" value="{{isset($superheroes->NombreConocido)?$superheroes->NombreConocido:' '}}"id="NombreConocido"> 
    <br>
    <label for="InformaciónAdicional">Información Adicional</label>
    <input type="text" name="InformaciónAdicional" value="{{isset($superheroes->InformaciónAdicional)?$superheroes->InformaciónAdicional:' '}}" id="InformaciónAdicional"> 
    <br>
    <label for="Foto">Foto</label>
    @if(isset($superheroes->Foto))
    <img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroes->Foto)}}"/>
    @endif
    <input type="file" name="Foto" value="" id="Foto"> 
    <br>
    <input type="submit" value="Guardar datos"> 
    <br>
    <a href="{{url('/superheroes/')}}"> REGRESAR </a>
