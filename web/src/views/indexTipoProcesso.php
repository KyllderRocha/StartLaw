<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Processo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="./../scripts/tipoProcesso.js"></script>
    <script src="./../scripts/index.js"></script>
    <script>
        $(document).ready( function () {
            atualizarTabelaTipoProcesso();
        } );
    </script>


</head>
    
    <body class='bg-[#c6e6f5] min-h-screen h-fit text-zinc-700'>
    <?php
        include('menu.php')
    ?>
    <!-- Processo Index -->
        <div class="w-screen relative flex flex-col h-[94.1%]">
            <!--Filtro -->
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-5">
                <form class="grid grid-cols-4 gap-x-5 gap-y-3" action="#" method="POST" id="buscaTipoProcessoForm">
                    <div class="flex items-center">
                        <label for="nome" class="sr-only">Nome</label>
                        <input id="nome" name="nome" type="text" autocomplete="Nome" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Nome">
                    </div>
                    <div class="flex items-center">
                        <label for="descricao" class="sr-only">Descrição</label>
                        <input id="descricao" name="descricao" type="text" autocomplete="Descrição" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Descrição">
                    </div>
                    <div class="flex items-center">
                        <!-- <button id="email" name="email" type="email" autocomplete="email" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Email"> -->
                        <button id="BtnBuscarTipoProcesso" class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            >Buscar</button>
                    </div>  
                </form>
            </div>
            
            <div class="bg-[#FFFFFF] mx-16  mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Tipos de Processos</span>
                    <a href="/StartLaw/web/src/views/tipoProcesso.php">Adicionar Tipo Processo</a>
                </div>
                <table class="display w-full h-fit min-h-[90%]  relative" id = "TableTipoProcesso">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                </table>    
            </div>
        </div>
    </body>
</html>