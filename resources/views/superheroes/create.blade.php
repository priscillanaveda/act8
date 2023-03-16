Formulario de creación 

<form action="{{ url('/superheroes')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('superheroes.form')
</form>