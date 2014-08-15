@extends ('layout')
@section('title') Lista de Productos @stop

@section('content')

<h2>
Lista de Productos
</h2>




<p><a href="/products/create" class="btn btn-primary">Create</a></p>


<div id="col_1">

      <input type="text" id ="search">


      <h2>Tipo</h2>

      @foreach ($products as $user)

  
       <li class="cli">{{$user->tipo}}</li>

@endforeach

   <h2>Caracteristica</h2>

@foreach ($products as $user)

  
       <li class="cli">{{$user->caracteristica}}</li>

@endforeach



</div>

<div id="col_2">

  
   
     @foreach ($products as $user)


 

  <li  class="col_2_article_1">
       
       
      <img src="{{$user->imagen}}" height="300" width="400"  alt="...">
    
        <h3>{{$user->tipo}}</h3>
        <p>{{$user->caracteristica}}</p>
       <p><a href="/products/{{$user->id}}/edit" class="btn btn-primary" role="button">Editar</a> 
       <a href="/products/{{$user->id}}" class="btn btn-default" role="button">Ver detalles</a></p>
       {{Form::open(array('method'=>'delete','route'=>['products.destroy',$user->id]))}} 

       <button type="submit">Delete</button>
       {{Form::close()}}
  
       
      	
</li>


@endforeach
        


</div>

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>


 
<script>
$(document).ready(function(){
$( ".cli" ).click(function() {

  var val = $(this).text().toLowerCase();
console.log(val);


$(".col_2_article_1").hide();
       $(".col_2_article_1").each(function()
      {

      var text= $(this).text().toLowerCase();
      console.log(text);

        if (text.match(val))
      {
        $(this).show();
       
      } 

       });

});

});
</script>



<script type="text/javascript">
 
$(document).ready(function(){

  $("#search").keyup(function()
  {

    var val = $(this).val().toLowerCase();

   /*caracter  por caracter val*/
   console.log(val);

    $(".col_2_article_1").hide();

      $(".col_2_article_1").each(function()
      {

      var text= $(this).text().toLowerCase();

      /*muestra todos text*/
      

      if (text.indexOf(val)!=-1)
      {
        $(this).show();
       
      }

       });

  });

});

</script>



@stop