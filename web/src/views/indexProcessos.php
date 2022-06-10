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

</head>
    
    <body class='bg-[#c6e6f5] min-h-screen h-fit text-zinc-700'>
    <?php
        include('menu.php')
    ?>
    <!-- Processo Index -->
        <div class="w-screen relative flex flex-col h-[94.1%]">
            <!--Filtro -->
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-5">
                <form class="grid grid-cols-4 gap-x-5 gap-y-3" action="#" method="POST">
                    <div class="flex items-center">
                        <label for="codigo" class="sr-only">Código</label>
                        <input id="codigo" name="codigo" type="text" autocomplete="codigo" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Código">
                    </div>
                    <div class="flex items-center">
                        <label for="processo" class="sr-only">Processo</label>
                        <input id="processo" name="processo" type="text" autocomplete="processo" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Processo">
                    </div>
                    <div class="flex items-center">
                        <label for="tipoProcesso" class="sr-only">Selecione o tipo do processo</label>
                        <select id="tipoProcesso" name="tipoProcesso" autocomplete="tipoProcesso" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Selecione o tipo do processo">
                            <option value="">Selecione o tipo do processo</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label for="fase" class="sr-only">Fase</label>
                        <input id="fase" name="fase" type="text" autocomplete="fase" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Fase">
                    </div>
                    <div class="flex items-center">
                        <label for="cliente" class="sr-only">Selecione Cliente</label>
                        <input id="cliente" name="cliente" autocomplete="cliente" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Selecione Cliente">
                    </div>
                    <div class="flex items-center">
                        <label for="dataInicio" class="sr-only">Data de Início</label>
                        <input id="dataInicio" name="dataInicio" type="date" autocomplete="dataInicio" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="dataInicio">
                    </div>
                    <div class="flex items-center">
                        <label for="dataFim" class="sr-only">Data Final</label>
                        <input id="dataFim" name="dataFim" type="date" autocomplete="dataFim" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Data Final">
                    </div>
                    <div class="flex items-center">
                        <!-- <button id="email" name="email" type="email" autocomplete="email" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Email"> -->
                        <button class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
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
                            <th>Fase</th>
                            <th>Prazo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>
    </body>
</html>