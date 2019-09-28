<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            <div class="content container">
                <div class="title m-b-md">
                <strong>Seu Código de Participação</strong>
                <input style="font-size: 45px; text-align: center"; " type="text" id="link" class="validate" name="link" value={{$codigo}} >
                </div>
                <div>
                <p><strong>
                    Com a finalidade de preservar a identidade de cada participante o código único e intransferível para ser usados no Envelope do Remetente, do envelope I (Proposta Arquitetônica), envelope II (Documentos de Habilitação) e endereço do destinatário, conforme disposto no Instrumento Convocatório, porém cada licitante será identificada por apenas um único código.
                </strong></p>
                </div>

                <div class="links">
                    <button class="btn waves-effect waves-light" onClick="copiarTexto()">Copiar Código</button>

                    <a style="color: white;" class="btn waves-effect waves-light" href='PDF/{{$codigo}}'>Baixar PDF</a>
                </div>
            </div>
        </div>

        <script>
    function copiarTexto() {
        var textoCopiado = document.getElementById("link");
        textoCopiado.select();
        document.execCommand("Copy");
        //alert("Texto Copiado: " + textoCopiado.value);
    }
    </script>
    </body>
</html>
