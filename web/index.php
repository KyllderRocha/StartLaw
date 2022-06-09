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

</head>
    <body class='bg-[#FFFFFF] min-h-screen h-fit text-zinc-700 flex'>
        
    <?php
        // include('./src/views/indexProcessos.php')
    ?>
        <div class="flex-1 bg-[#c6e6f5] flex items-center justify-center">
            <img src="https://advocaciatrento.adv.br/wp-content/uploads/2020/12/LOGO.png" alt="" width="400" height="400">
        </div>
        <form class="flex-1 flex flex-col items-center justify-center w-full space-y-5">
            <span class="w-[60%] text-5xl text-center h-16">Acesse o Sistema</span>
            <div class="w-[60%] flex items-center">
                <label for="Login" class="sr-only">Login</label>
                <input id="Login" name="Login" type="text" autocomplete="Login" 
                class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                    text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-lg" 
                    placeholder="Login">
            </div>
            <div class="w-[60%] flex items-center">
                <label for="Senha" class="sr-only">Senha</label>
                <input id="Senha" name="Senha" type="text" autocomplete="Senha" 
                class="grow appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                    text-gray-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-lg" 
                    placeholder="Senha">
            </div>
            <div class="w-[60%] flex items-center">
                <button class="grow bg-[#C1E8FA] appearance-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500
                    text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-lg" 
                    >Buscar</button>
            </div>  
        </form>

    </body>
</html>