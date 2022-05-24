<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="./../scripts/usuario.js"></script>

</head>
    <body class='bg-[#c6e6f5] min-h-screen h-fit text-zinc-700'>
        <?php
            include('menu.php')
        ?>
            <!-- Processo Index -->
        <div class="w-screen relative flex flex-col h-[94.1%]">
            
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-4 h-fit min-h-[90%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Dados do Usuário</span>
                </div>
                <form class="grid grid-cols-4 gap-x-5 gap-y-3" action="#" method="POST">
                    
                    <div class="flex items-center">
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Nome:</span>
                            <input type="text" name="Nome" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Nome" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um nome.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Email:</span>
                            <input type="text" name="Email" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Email" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um email.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">CPF:</span>
                            <input type="text" name="CPF" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="CPF" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um CPF.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">RG:</span>
                            <input type="text" name="RG" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="RG" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um RG.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Login:</span>
                            <input type="text" name="Login" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Login" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Login.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Senha:</span>
                            <input type="text" name="Senha" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Senha" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Senha.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Repetir Senha:</span>
                            <input type="text" name="RepetirSenha" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="RepetirSenha" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Repetir Senha.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Telefone:</span>
                            <input type="text" name="Telefone" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Telefone" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Telefone.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">País:</span>
                            <input type="text" name="Pais" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Pais" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um País.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Estado:</span>
                            <input type="text" name="Estado" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Estado" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Estado.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Cidade:</span>
                            <input type="text" name="Cidade" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Cidade" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Cidade.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Bairro:</span>
                            <input type="text" name="Bairro" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Bairro" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Bairro.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Rua:</span>
                            <input type="text" name="Rua" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Rua" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Rua.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">Logradouro:</span>
                            <input type="text" name="Logradouro" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Logradouro" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um Logradouro.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">                        
                        <label class="block grow">
                            <span class="block text-sm font-medium text-slate-700 my-3">CEP:</span>
                            <input type="text" name="CEP" class="peer w-full appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="CEP" required/>
                            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Por favor digite um CEP.
                            </p>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <button class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            >Cadastrar</button>
                    </div>  
                </form>
            </div>
        </div>

    </body>
</html>