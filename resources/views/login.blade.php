<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="h-screen flex items-center justify-center bg-gray-100">
        <form action="{{route('login')}}" class="w-96 shadow-lg p-14 bg-white" method="POST">
            @csrf
            <h3 class="font-bold">Iniciar Sesión</h3>
            <div class="">
                <label for="email" class="block mt-4 mb-4 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mt-5">
                <label for="password" class="block mt-4 mb-4 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" name="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>

            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 mt-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                Iniciar Sesión</button>
        </form>
    </div>
</body>

</html>
