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
            <div class="mt-5"><h2><strong>Nova postagem</strong></h2></div>
            <hr>
            
                <form action="/", method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <strong><label for="textPost" style="margin:10px">Título</label></strong>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
                        <strong><label for="textPost" style="margin:10px">Postagem</label></strong>
                        <textarea type="text" class="form-control" name="texto" id="texto" placeholder="Descrição da postagem" style="height: 200px"></textarea>
                        

                    </div>
                <button type="submit" class="btn btn-dark btn-sm " style="width: 70px">Salvar</button>

        </div>      
        
    </body>
</html>
