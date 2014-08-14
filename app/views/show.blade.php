@extends ('layout')
@section('title') Usuario @stop

@section('content')

<h2>
Product {{$user->id}}
</h2>

<p>
	Nombre: {{$user->tipo}}
</p>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>	


<!-- Nav tabs -->

   <div id="edit">
   <div id="edit_img">
  

   <li class="img_show_1"><img src="{{$user->imagen}}" width ="400px" height="400px"><a>{{$user->imagen}}</a></li>
 <li class="img_show"><img src="{{$user->imagen_1}}" width ="400px" height="400px"><a>{{$user->imagen_1}}</a></li>
 <li class="img_show"><img src="{{$user->imagen_2}}" width ="400px" height="400px"><a>{{$user->imagen_2}}</a></li>
 <li class="img_show"><img src="{{$user->imagen_3}}" width ="400px" height="400px"><a>{{$user->imagen_3}}</a></li>
   </div>



 
  <li class="edit_t"><img src="{{$user->imagen_1}}" width ="100px" height="100px"><a>{{$user->imagen_1}}</a></li>
   <li class="edit_t"><img src="{{$user->imagen_2}}" width ="100px" height="100px"><a>{{$user->imagen_2}}</a></li>
   <li class="edit_t"><img src="{{$user->imagen_3}}" width ="100px" height="100px"><a>{{$user->imagen_3}}</a></li>

</div>

<div id="edit_detalle">
</div>

<script>
$(document).ready(function(){
$(".img_show_1 a").hide();
$(".edit_t a").hide();
$(".img_show").hide();
$( ".edit_t" ).click(function() {

  var val = $(this).text().toLowerCase();
console.log(val);


$(".img_show a").hide();
$(".img_show").hide();
       $(".img_show").each(function()
      {

      var text= $(this).text().toLowerCase();
      //console.log(text);

        if (text.match(val))
      {
        $(this).show();
        $(".img_show_1").hide();
       //console.log($(this).show());
      } 

       });

});

});
</script>

<p><a href="/products/{{$user->id}}/edit" class="btn btn-primary">Editar</a></p>
@stop

