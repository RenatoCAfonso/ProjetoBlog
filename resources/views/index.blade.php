
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='csrf-token' content="{{csrf_token()}}">
        <link href="{{asset('css/app.css')}}" rel='stylesheet'>
        <title>Paginação</title>
        <script>
            
        </script>
    </head>
    <body style="background-color: lightblue">
        <div class="container">
            
            <div class= "card  bg-dark text-white m-3"">
                
                <a href="/form" class="btn btn-dark btn-lg container" style="width: 50px; margin-left:0px">+</a>
                
                <div class= "card-header border-dark text-center"><h2>Postagens</h2></div>
                
                <div class="card-body">
                    <h5 class="card-title text-center">     
                        @if ($postagens->previousPageUrl()!==null)
                        <a  style="margin-right: 50px; text-decoration:none; color: white" href="{{$postagens->previousPageUrl()}}"><<</a>
                        @endif
                        Exibindo {{$postagens->count()}} postagens de {{$postagens->total()}} 
                        ({{$postagens->firstItem()}} a {{$postagens->lastItem()}})
                        @if ($postagens->nextPageUrl()!==null)
                        <a  style="margin-left: 50px; text-decoration:none; color: white" href="{{$postagens->nextPageUrl()}}">>></a> 
                        @endif           
                    </h5>
                    

                         @foreach ($postagens as $post)
                         <div class= "card text-left border-light text-dark" style="margin: 50px">
                            <div class= "card-header border-light">
                                <h2><strong>{{$post->titulo}}</strong></h2>                      
                            </div>  
                            <div class="card-body border-light text-dark">
                                <p>{{$post->texto}}
                            </div>
                            <div class="card-footer border-light text-dark" style="font-size:10px">
                                 {{$post->created_at}}
                            </div>
                         </div>                                            
                         @endforeach

                
            </div>
            <div>

        </div>
        <div class="pagination justify-content-end" style="margin-right: 100px"> {{$postagens->links()}}</div>
        <script src="{{asset('js/app.js')}}" type="text/javascript">

        
    </body>
</html>
