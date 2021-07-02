<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kellis Le Louër | Web Developer</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css"
          integrity="sha512-vJu7D5BpjnNXVpLBrl9LKLvmXBNjiLwge8EOZ/YS9XwiChpfKLAlydwIZvoJaDE3LI/kr3goH0MzDzNbBgyoOQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-gray-900 overflow-x-hidden">
<header class="bg-transparent w-full h-28 flex items-center absolute z-10">
    <div class="container mx-auto px-4">
        <div class="bg-purple-900 h-24 w-24"></div>
    </div>
</header>
<main>
    <div class="bg-gradient-to-b from-gray-800 to-gray-900 w-full h-3/5 absolute"></div>

    <div class="absolute w-full hidden lg:block">
        <div class="container w-full mx-auto pt-28">
            <div class="px-4 relative w-full pt-28">
                <div class="pt-28 w-full h-screen" style="max-height:660px">
                    <div style="background: url('/assets/images/back_particle.svg') no-repeat; background-size: contain;"
                         class="h-1/4 w-full absolute opacity-10 left-0 top-20"></div>
                    <div style="background: url('/assets/images/back_particle.svg') no-repeat; background-size: contain;  transform: rotate(180deg);"
                         class="h-2/5 w-full h-max absolute opacity-20 -right-1/4 top-20"></div>
                    <div style="background: url('/assets/images/back_particle.svg') no-repeat; background-size: contain;"
                         class="h-2/5 w-full absolute opacity-10 left-0 top-2/3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 relative w-full pt-28">
        <section class="header relative sm:items-center pt-24 flex h-screen" style="max-height:660px">
            <div class="sm:items-center flex flex-wrap sm:flex-nowrap sm:space-x-8">
                <div class="w-full sm:w-1/2">
                    <div class="sm:text-left text-center">
                        <h2 class="font-semibold text-4xl text-white uppercase">Kellis Le Louër | Web Developer</h2>
                        <p class="mt-4 text-lg leading-relaxed text-gray-300">
                            <?php echo date('Y') - date('Y', 1049336966); ?> years old kid who kinda likes web backend
                            and data manipulation.
                        </p>
                        <p class="mt-4 text-lg leading-relaxed text-gray-300">
                            I am an independent software developer and the creator of several projects. Most of my work
                            is open source and publicly available on <a
                                    class="text-purple-400 hover:text-purple-300 transition duration-200"
                                    href="https://github.com/Gumbraise"
                                    target="_blank">GitHub</a>.
                            If you need me on your project send me a mail at <a
                                    class="text-purple-400 hover:text-purple-300 transition duration-200"
                                    href="mailto:dev@kellis.fr"
                                    target="_blank">dev@kellis.fr</a>.
                        </p>
                        <div class="mt-8">
                            <a
                                    class="get-started text-white font-bold px-6 py-4 rounded-full outline-none focus:outline-none mr-1 mb-1 bg-purple-500 focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-400 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-200"
                                    href="/learning-lab/tailwind-starter-kit/documentation/download">My biggest projects
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mt-24">
                    <img src="/assets/images/computer.svg" class="w-full" alt="Flat Isometric Computer">
                </div>
            </div>
        </section>
    </div>
</main>
</body>
</html>