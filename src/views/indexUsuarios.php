
    
<?php
    include('menu.php')
    // include('./src/scripts/processo.js')
?>

<script src="./src/scripts/usuario.js"></script>
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
                <label for="Cargo" class="sr-only">Cargo</label>
                <input id="Cargo" name="Cargo" autocomplete="Cargo" 
                class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                    text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                    placeholder="Cargo">
            </div>
            <div class="flex items-center">
                <button class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                    text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                    >Buscar</button>
            </div>  
        </form>
    </div>
    
    <div class="bg-[#FFFFFF] mx-16 relative rounded-2xl px-14 py-4 h-fit min-h-[80%]">
        <div class="flex justify-between p-4 border-solid border-0 border-b-2 border-[rgba(113 113 122 0.6)] mb-5 items-center	">
            <span class="text-2xl italic">Lista de Usuarios</span>
            <a href="#">Adicionar Usuario</a>
        </div>
        <table class="display w-full h-fit min-h-[90%]  relative" id = "TableUsuario">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Cargo</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>                    
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
                <tr> 
                    <td>Nome</td>
                    <td>Login</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Cargo</td>
                    <td>Telefone</td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>