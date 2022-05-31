<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="./../scripts/processo.js"></script>

</head>
    <body class='bg-[#c6e6f5] min-h-screen text-zinc-700'>
        <?php
            include('menu.php')
        ?>
        <div class="w-full flex flex-col ">
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-4 h-fit min-h-[90%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Dados Cliente</span>
                </div>
                <form class="flex flex-col" action="#" method="POST">
                    <div class="grid grid-cols-4 gap-x-5 gap-y-3">
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Nome:
                            </span>
                            <input type="text" required placeholder="Nome" name="Nome"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Nome.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Tipo de Processo:
                            </span>
                            <input type="text" required placeholder="Tipo de Processo" name="TipoProcesso"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Tipo de Processo.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Prazo:
                            </span>
                            <input type="date" required placeholder="Prazo" name="Prazo"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Prazo.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Fase:
                            </span>
                            <input type="text" required placeholder="Fase" name="Fase"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Fase.
                            </p>
                        </label>
                        
                        
                    </div>
                    
                    <label class="grow block h-40">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Descrição:
                        </span>
                        <textarea type="text" placeholder="Descrição" name="Descricao"
                        class="w-full h-[75%] peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea> 
                        <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                            Por favor insira um Descrição.
                        </p>
                    </label>
                        
                    <label class="grow block h-20">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Observação:
                        </span>
                        <textarea type="text" required placeholder="Observação" name="Observacao"
                        class="w-full h-[75%] peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea> 
                        <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                            Por favor insira um Observação.
                        </p>
                    </label>

                    <div class="mt-10 mb-0 py-6 flex-1 flex justify-end border-solid border-0 border-t -2 border-[rgba(113 113 122 0.9)]">
                        <button id="upload" type="button" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm hidden" 
                            >Upload</button>

                        <button type="submit" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm ml-5" 
                            >Salvar</button>
                    </div>  
                </form>
            </div>
            
            <div class="bg-[#FFFFFF] mx-16 mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Lançamentos</span>
                    <a href="#">Adicionar Lançamento</a>
                </div>
                <table class="display w-full h-fit min-h-[90%] relative" id = "TableLancamento">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Descrição</th>
                            <th>Criado Por</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Data</td>
                            <td>Status</td>
                            <td>Descrição</td>
                            <td>Criado Por</td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Status</td>
                            <td>Descrição</td>
                            <td>Criado Por</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>

    </body>
</html>