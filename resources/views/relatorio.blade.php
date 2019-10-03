<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Relatório - SESC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<style type="text/css">
        .container {
    width: 100vw;
    height: 100vh;
    
    display: flex;
    flex-direction: row;
    justify-content: center;
    
}
.box {
    width: 95%;
    
    
    background: #fff;
}

</style>


    </head>
    <body>

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

            <div class="container">
                <div class="box">
            
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
                <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>








    <script type="text/javascript">
                $(document).ready( function () {

                

                $('#table_id').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                    'print'
                    ],
                      
                   "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                      },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                      }
                    }
                }); } );
        </script>


            <h1>Relatório - SESC</h1>
            
            <table id="table_id" class="display" style="width:100%">
                <thead> 
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Data</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($codigos as $codigo)
                 <tr>
                 <td scope="row">
                  {!!$codigo->code!!}
                 </td>
                 <td scope="row">
                  {!!$codigo->created_at->format('d/m/Y H:i:s')!!}
                 </td>
               </tr>
                 @endforeach
                </tbody>
            </table>
            </div>
            </div>



    </body>
</html>
