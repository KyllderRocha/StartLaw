<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script src="./../scripts/cliente.js"></script>
</head>
    <body class='bg-[#c6e6f5] min-h-screen h-fit text-zinc-700'>
        <?php
            include('menu.php')
            // include('./src/scripts/processo.js')
        ?>
            <!-- Processo Index -->
        <div class="w-screen relative flex flex-col h-[94.1%]">
            <!--Filtro -->
            <div class="bg-[#FFFFFF] mx-16 my-6 relative rounded-2xl px-14 py-5">
                <form class="grid grid-cols-4 gap-x-5 gap-y-3" action="#" method="POST">
                    <div class="flex items-center">
                        <label for="Nome" class="sr-only">Nome</label>
                        <input id="Nome" name="Nome" type="email" autocomplete="Nome" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Nome">
                    </div>
                    <div class="flex items-center">
                        <label for="Email" class="sr-only">Email</label>
                        <input id="Email" name="Email" type="text" autocomplete="Email" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="Email">
                    </div>
                    <div class="flex items-center">
                        <label for="CPF" class="sr-only">CPF</label>
                        <input id="CPF" name="CPF" type="text" autocomplete="CPF" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="CPF">
                    </div>
                    <div class="flex items-center">
                        <label for="RG" class="sr-only">RG</label>
                        <input id="RG" name="RG" type="text" autocomplete="RG" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="RG">
                    </div>
                    <div class="flex items-center">
                        <label for="CNPJ" class="sr-only">CNPJ</label>
                        <input id="CNPJ" name="CNPJ" autocomplete="CNPJ" 
                        class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            placeholder="CNPJ">
                    </div>
                    <div class="flex items-center">
                        <button class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                            text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                            >Buscar</button>
                    </div>  
                </form>
            </div>
            
            <div class="bg-[#FFFFFF] mx-16  mb-10 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]">
                <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
                    <span class="text-2xl italic">Lista de Clientes</span>
                    <a href="/StartLaw/web/src/views/cliente.php">Adicionar Cliente</a>
                </div>
                <table class="display w-full h-fit min-h-[90%]  relative" id = "TableCliente">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>CNPJ</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                    
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                        <tr> 
                            <td>Nome</td>
                            <td>Login</td>
                            <td>CPF</td>
                            <td>RG</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>

    </body>
</html>