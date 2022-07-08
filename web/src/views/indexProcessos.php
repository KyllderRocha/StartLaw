<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="./../scripts/processo.js"></script>
    <script src="./../scripts/index.js"></script>
    
    <script>
        $(document).ready( function () {
            atualizarTabelaProcesso();
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
                <form class="grid grid-cols-4 gap-x-5 gap-y-3" action="#" method="POST" id="buscaProcessoForm">
                    <div class="flex items-center">
                        <label for="codigo" class="sr-only">Código</label>
                        <input id="codigo" name="id" type="text" autocomplete="codigo" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Código">
                    </div>
                    <div class="flex items-center">
                        <label for="processo" class="sr-only">Processo</label>
                        <input id="processo" name="nome" type="text" autocomplete="processo" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Processo">
                    </div>
                    <div class="flex items-center">
                        <label for="tipoProcesso" class="sr-only">Selecione o tipo do processo</label>
                        <select id="tipoProcessoID" name="tipoProcessoID" autocomplete="tipoProcesso" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Selecione o tipo do processo">
                            <option value="">Selecione o tipo do processo</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label for="status" class="sr-only">Status</label>
                        <select id="statusID" name="statusID" type="text" autocomplete="status" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Status">
                            <option value="">Selecione o Status</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label for="cliente" class="sr-only">Selecione Cliente</label>
                        <select id="clienteID" name="clienteID" autocomplete="cliente" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Selecione Cliente">
                            <option value="">Selecione o Cliente</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label for="dataInicio" class="sr-only">Data de Início</label>
                        <input id="dataInicio" name="prazoInicial" type="date" autocomplete="dataInicio" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="dataInicio">
                    </div>
                    <div class="flex items-center">
                        <label for="dataFim" class="sr-only">Data Final</label>
                        <input id="dataFim" name="prazoFinal" type="date" autocomplete="dataFim" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Data Final">
                    </div>
                    <div class="flex items-center">
                        <!-- <button id="email" name="email" type="email" autocomplete="email" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Email"> -->
                        <button id="BtnBuscarProcesso" class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            >Buscar</button>
                    </div>  
                </form>
            </div>
            
            <div class="bg-[#FFFFFF] mx-16  mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Processos</span>
                    <a href="/StartLaw/web/src/views/processo.php">Adicionar Processo</a>
                </div>
                <table class="display w-full h-fit min-h-[90%]  relative" id = "TableProcesso">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Processo</th>
                            <th>Cliente</th>
                            <th>Tipo de processo</th>
                            <th>Status</th>
                            <th>Prazo</th>
                            <th>Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                </table>    
            </div>
        </div>
    </body>
</html>