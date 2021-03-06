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
    <script src="./../scripts/index.js"></script>
    <script>
        $(document).ready( function () {
            EditarProcessoDados();
        } );
    </script>

</head>
    <body class='bg-[#c6e6f5] min-h-screen text-zinc-700'>
        <?php
            include('menu.php')
        ?>
        <input type="hidden" name="acao" id="acao" value="criar">
        <div class="w-full flex flex-col ">
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-4 h-fit min-h-[90%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Dados Processo</span>
                </div>
                <form class="flex flex-col" action="#" method="POST" id="ProcessoForm">
                    <input type="hidden" id="id" value="0">
                    <div class="grid grid-cols-5 gap-x-5 gap-y-3">
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Nome:
                            </span>
                            <input type="text" required placeholder="Nome" name="nome" id="nome"
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
                            <select type="text" required placeholder="Tipo de Processo" name="tipoProcessoID" id="tipoProcessoID"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                <option value="">Selecione o Tipo de Processo</option>
                            </select>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Tipo de Processo.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Prazo:
                            </span>
                            <input type="date" required placeholder="Prazo" name="prazo" id="prazo"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Prazo.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Status:
                            </span>
                            <select type="text" required placeholder="Status" name="statusID" id="statusID"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                <option value="">Selecione o Status</option>
                            </select>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Status.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Cliente:
                            </span>
                            <select type="text" required placeholder="Cliente" name="clienteID" id="clienteID"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                <option value="">Selecione o Cliente</option>
                            </select>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Cliente.
                            </p>
                        </label>
                        
                    </div>
                    
                    <label class="grow block h-40">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Descri????o:
                        </span>
                        <textarea type="text" required placeholder="Descri????o" name="descricao"  id="descricao"
                        class="w-full h-[75%] peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea> 
                        <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                            Por favor insira um Descri????o.
                        </p>
                    </label>
                        
                    <label class="grow block h-20">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Observa????o:
                        </span>
                        <textarea type="text" required placeholder="Observa????o" name="observacao" id="observacao"
                        class="w-full h-[75%] peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea> 
                        <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                            Por favor insira um Observa????o.
                        </p>
                    </label>

                    <div class="mt-10 mb-0 py-6 flex-1 flex justify-end border-solid border-0 border-t -2 border-[rgba(113 113 122 0.9)]">
                        <button id="upload" type="button" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm hidden" 
                            >Upload</button>

                        <button type="button" id="BtnSalvar" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm ml-5" 
                            >Salvar</button>
                    </div>  
                </form>
            </div>
            
            <div class="bg-[#FFFFFF] mx-16 mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]" id="DivLancamento" hidden>
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Lan??amentos</span>
                    <a href="#" id="BtnAdicionarLancamento">Adicionar Lan??amento</a>
                </div>
                <table class="display w-full h-fit min-h-[90%] relative" id = "TableLancamento">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Prazo</th>
                            <th>Status</th>
                            <th>Descri????o</th>
                            <th>Criado Por</th>
                            <th>A????o</th>
                        </tr>
                    </thead>
                </table>    
            </div>
        </div>

    </body>
</html>