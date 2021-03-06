<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="./../scripts/cliente.js"></script>
    <script src="./../scripts/index.js"></script>
    <script>
        $(document).ready( function () {
            EditarClienteDados();
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
                    <span class="text-2xl italic">Dados Cliente</span>
                </div>
                <form class="flex flex-col" action="#" method="POST" id="CLienteForm">
                    <input type="hidden" id="id" value="0">
                    <div class="grid grid-cols-3 gap-x-5 gap-y-3">
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
                                Email:
                            </span>
                            <input type="Email" required placeholder="Email" name="email" id="email"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Email.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                CPF:
                            </span>
                            <input type="text" required placeholder="CPF" name="cpf" id="cpf"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um CPF.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                RG:
                            </span>
                            <input type="text" required placeholder="RG" name="rg" id="rg"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um RG.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class=" block text-sm font-medium text-slate-700">
                                CNPJ:
                            </span>
                            <input type="text" placeholder="CNPJ" name="cnpj" id="cnpj"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um CNPJ.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                CEP:
                            </span>
                            <input type="text" required placeholder="CEP" name="cep" id="cep"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um CEP.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Estado:
                            </span>
                            <input type="text" required placeholder="Estado" name="estado" id="estado"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Estado.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Cidade:
                            </span>
                            <input type="text" required placeholder="Cidade" name="cidade" id="cidade"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Cidade.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Bairro:
                            </span>
                            <input type="text" required placeholder="Bairro" name="bairro" id="bairro"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Bairro.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Rua:
                            </span>
                            <input type="text" required placeholder="Rua" name="rua" id="rua"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Rua.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                N??mero:
                            </span>
                            <input type="text" required placeholder="Numero" name="numero" id="numero"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um N??mero.
                            </p>
                        </label>
                        
                        <label class="grow block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Celular:
                            </span>
                            <input type="text" required placeholder="Celular" name="telefone" id="telefone"
                            class="w-full peer appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                                text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"/>
                            <p class="mt-2 invisible peer-default:visible text-pink-600 text-sm">
                                Por favor insira um Celular.
                            </p>
                        </label>
                    </div>
                    
                    <div class="mt-5 mb-0 py-6 flex-1 flex justify-end border-solid border-0 border-t -2 border-[rgba(113 113 122 0.9)]">
                        <button id="upload" type="button" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm hidden" 
                            >Upload</button>

                        <button type="button" id="BtnSalvar" class="bg-[#C1E8FA] appearance-none relative block px-10 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm ml-5" 
                            >Salvar</button>
                    </div>  
                </form>
            </div>
        </div>

        <div class="bg-[#FFFFFF] mx-16 mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]" id="DivProcessos">
                <div class="flex justify-start p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Processos</span>
                </div>
                <table class="display w-full h-fit min-h-[90%] relative" id = "TableProcessosClientes">
                    <thead>
                        <tr>
                            <th>C??digo</th>
                            <th>Processo</th>
                            <th>Cliente</th>
                            <th>Tipo de processo</th>
                            <th>Fase</th>
                            <th>Prazo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>C??digo</td>
                            <td>Processo</td>
                            <td>Cliente</td>
                            <td>Tipo de processo</td>
                            <td>Fase</td>
                            <td>Prazo</td>
                        </tr>
                        <tr>
                            <td>C??digo</td>
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