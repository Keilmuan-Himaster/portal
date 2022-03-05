<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Himaster</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo-dark.ico')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</head>
<body class="bg-[url('/img/himaster.gif')] bg-cover	">

    <nav class="flex items-center justify-between p-6 container mx-auto">
        <a href="#">
            <img class="w-10 h-10" src="{{asset('img/HIMASTER.png')}}" alt="Logo Himaster">
        </a>
        <div class="text-lg text-gray-600 hidden lg:flex">
            <a href="#" class="block mt-4 lg:inline-block text-teal-600 lg:mt-0 mr-10">
                Home
            </a>
            <a href="#" class="block mt-4 lg:inline-block hover:text-gray-700 lg:mt-0 mr-10">
                Services
            </a>
            <a href="#" class="block mt-4 lg:inline-block hover:text-gray-700 lg:mt-0 mr-10">
                Portfolio
            </a>
        </div>
        <div class="flex items-center">
            <div class="mr-5 lg:mr-0">
                <button class="py-2 px-6 rounded-md text-gray-600 hover:text-gray-700 text-lg">Sign in</button>
                <button class="py-2 px-6 bg-amber-800 hover:bg-amber-900 rounded-md text-white text-lg">Sign up</button>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-4 py-3 border rounded text-teal-500 border-teal-500 focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <main class="mt-12 lg:mt-32">
        <section class="container mx-auto px-6">
            <!-- hero section content goes here -->
            <div class="w-full lg:flex items-center">
                <div class="w-full lg:w-1/2">
                    <!-- hero section description goes here -->
                    <h2 class="text-md lg:text-2xl text-gray-600">Himaster present</h2>
                    <h1 class="text-5xl lg:text-6xl font-bold text-amber-900 mb-2 lg:mb-6">PORTAL WEB HIMASTER</h1>
                    <p class="text-md lg:text-xl font-light text-gray-800 mb-8">Website yang menyediakan shortcut untuk seluruh web <a class="text-blue-400"href="https://himaster.id" target="_blank">Himaster</a>.</p>

                </div>
                <div class="w-full lg:w-1/2 lg:pl-24">
                    <!-- sign-up form goes here -->
                    <ul>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-white focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Himaster
                                </span>
                              </button>
                        </li>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Screen
                                </span>
                              </button>
                        </li>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    LFS
                                </span>
                              </button>
                        </li>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Presensi
                                </span>
                              </button>
                        </li>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Bank Soal
                                </span>
                              </button>
                        </li>
                        <li>
                            <button class="w-4/6 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-800 via-amber-900 to-orange-200 group-hover:from-blue-200 group-hover:via-blue-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-400">
                                <span class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Himaster
                                </span>
                              </button>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
    </main>
    <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="https://himaster.id" target="_blank"
            class="transform duration-500 ease-in-out animate-bounce bg-amber-800 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4 text-white">
            <img class="w-8 h-8 rounded"
                src="https://img.buymeacoffee.com/api/?name=Ejul&size=300&bg-image=bmc&background=5F7FFF"
                alt="buymeacoffee">
                &copy; Himaster by Keilmuan Himaster 2021-2022
        </a>
    </div>
</body>
</html>
