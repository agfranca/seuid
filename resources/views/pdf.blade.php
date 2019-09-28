<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF - SESC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


    <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

           

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div style="color: black;" class="content">

            <div id="Q1"  style="border-style: solid; margin: 50px 200px;">
                <p><strong style="font-size: 15px;">Envelope 1</strong><br>
                Concurso: Melhor Estudo Preliminar e Memorial Conceitual - SESC/SE<br>
                <strong style="font-size: 18px;"> Código: {{$codigo->code}} {{$codigo->created_at->format('d/m/Y H:i:s')}}</strong> </p><br>
            </div> 

            
            <div id="Q2"  style="border-style: solid; margin: 50px 200px;">
                <p><strong style="font-size: 15px;">Envelope 2</strong><br>
                Concurso: Melhor Estudo Preliminar e Memorial Conceitual - SESC/SE<br>
                <strong style="font-size: 18px;"> Código: {{$codigo->code}} {{$codigo->created_at->format('d/m/Y H:i:s')}}</strong> </p><br>
            </div>
            
            <div id="Q3" style="border-style: solid; margin: 50px 200px;">           
                        
                <p><strong style="font-size: 15px;">SERVIÇO SOCIAL DO COMÉRCIO - SESC</strong><br>
                Administração Reginal no Estado de Sergipe<br>
                Rua Dom José Thomaz, 235<br>
                São José – Aracaju/SE<br>
                CEP:49015-090</p>
            </div>
            <p></p>
            <div id="Q4"  style="border-style: solid; margin: 50px 200px;">
            Remetente
            <p style="font-size: 20px;">Código: {{$codigo->code}} {{$codigo->created_at->format('d/m/Y H:i:s')}} <p><br>
            </div>
            </div>

    </body>
</html>
