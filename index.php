<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kellis Le Louër | Web Developer</title>
    <link rel="stylesheet" href="/assets/css/tailwind.css"/>
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
                         class="h-2/5 w-full absolute opacity-10 left-0 bottom-0"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 relative w-full py-28">
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
                                    class="get-started text-white font-bold px-6 py-4 rounded-full outline-none focus:outline-none mr-1 mb-1 bg-purple-700 focus:outline-none focus:ring focus:ring-opacity-75 focus:ring-purple-400 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-200"
                                    href="#projects">My biggest projects
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mt-24">
                    <img src="/assets/images/computer.svg" class="w-full" alt="Flat Isometric Computer">
                </div>
            </div>
        </section>
        <section id="projects" class="relative sm:items-center pt-48 flex h-auto lg:px-32">
            <div class="flex flex-wrap h-auto justify-center">

                <div class="w-full h-max md:w-4/12 p-4 text-center">
                    <div class="h-full border-0 outline-none hover:outline-none hover:ring hover:ring-opacity-75 hover:ring-purple-900 space-y-5 relative flex flex-col min-w-0 break-words bg-gray-900 w-full shadow-lg rounded-lg transform duration-200">
                        <div class="px-4 py-5 mx-auto">
                            <div class="h-24 w-24 rounded-full bg-center bg-cover"
                                 style="background-image: url('/assets/images/projects/palamazon.jpg');"></div>
                        </div>
                        <div class="px-4 flex-auto">
                            <p class="text-xl text-white font-semibold">Palamazon</p>
                            <p class="mt-2 mb-4 text-gray-200">
                                A marketplace for the video game: Paladium. Players come in the website to buy and sell
                                their in-game items against in-game money. The website is created with VueJS, NuxtJS,
                                AdonisJS and Tailwindcss.
                            </p>

                        </div>
                        <a href="https://palamazon.fr/">
                            <div class="px-6 py-3 rounded-b-lg hover:to-purple-500 bg-gradient-to-b from-gray-900 to-purple-700 transition duration-200">
                                <div class="flex font-bold w-full text-gray-100 text-center uppercase justify-center">
                                    Visit the website
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full h-max md:w-4/12 p-4 text-center">
                    <div class="h-full border-0 outline-none hover:outline-none hover:ring hover:ring-opacity-75 hover:ring-purple-900 space-y-5 relative flex flex-col min-w-0 break-words bg-gray-900 w-full shadow-lg rounded-lg transform duration-200">
                        <div class="px-4 py-5 mx-auto">
                            <div class="h-24 w-24 rounded-full bg-center bg-cover"
                                 style="background-image: url('/assets/images/projects/teaos.jpg');"></div>
                        </div>
                        <div class="px-4 flex-auto">
                            <p class="text-xl text-white font-semibold">TeaOS</p>
                            <p class="mt-2 mb-4 text-gray-200">
                                A online operating system where you can surf on the web or upload your files as a cloud.
                                You can install applications and create applications for the marketplace of TeaOS.
                            </p>

                        </div>
                        <a href="https://teaos.software/">
                            <div class="px-6 py-3 rounded-b-lg hover:to-purple-500 bg-gradient-to-b from-gray-900 to-purple-700 transition duration-200">
                                <div class="flex font-bold w-full text-gray-100 text-center uppercase justify-center">
                                    Visit the website
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full h-max md:w-4/12 p-4 text-center">
                    <div class="h-full border-0 outline-none hover:outline-none hover:ring hover:ring-opacity-75 hover:ring-purple-900 space-y-5 relative flex flex-col min-w-0 break-words bg-gray-900 w-full shadow-lg rounded-lg transform duration-200">
                        <div class="px-4 py-5 mx-auto">
                            <div class="h-24 w-24 rounded-full bg-center bg-cover"
                                 style="background-image: url('/assets/images/projects/gumbraise.png');"></div>
                        </div>
                        <div class="px-4 flex-auto">
                            <p class="text-xl text-white font-semibold">Gumbraise</p>
                            <p class="mt-2 mb-4 text-gray-200">
                                My web development society. I opened it the day of my 18th birthday, the 3rd of April
                                2021. I always wanted to open my society, so I did it as quickly as possible.
                            </p>

                        </div>
                        <a href="https://gumbraise.fr/">
                            <div class="px-6 py-3 rounded-b-lg hover:to-purple-500 bg-gradient-to-b from-gray-900 to-purple-700 transition duration-200">
                                <div class="flex font-bold w-full text-gray-100 text-center uppercase justify-center">
                                    Visit the website
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full h-max md:w-4/12 px-4 text-center">
                    <div class="h-full border-0 outline-none hover:outline-none hover:ring hover:ring-opacity-75 hover:ring-purple-900 space-y-5 relative flex flex-col min-w-0 break-words bg-gray-900 w-full shadow-lg rounded-lg transform duration-200">
                        <div class="px-4 py-5 mx-auto">
                            <div class="h-24 w-24 rounded-full bg-center bg-cover"
                                 style="background-image: url('/assets/images/projects/devsaregenius.svg');"></div>
                        </div>
                        <div class="px-4 flex-auto">
                            <p class="text-xl text-white font-semibold">DevsAreGenius</p>
                            <p class="mt-2 mb-4 text-gray-200">
                                A website which developers visit to get the ideas of users who made their development
                                ideas online on DevsAreGenius (aka. DRG). Made with WordPress and Tailwindcss for purely
                                educational purposes.
                            </p>

                        </div>
                        <a href="http://dimi202208.fimlab.fr/drg">
                            <div class="px-6 py-3 rounded-b-lg hover:to-purple-500 bg-gradient-to-b from-gray-900 to-purple-700 transition duration-200">
                                <div class="flex font-bold w-full text-gray-100 text-center uppercase justify-center">
                                    Visit the website
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>
<footer class="h-1/6 bg-transparent z-10 shadow-xl">
    <div class="footer-1 py-8 container mx-auto px-4 ">
        <div class="container mx-auto">
            <div class="py-4 my-4 relative">
                <div class="w-full justify-center flex flex-wrap px-4">
                    <img alt="" src="/assets/images/logo_lg_dark.f87084f.png" class="h-10">
                </div>
            </div>
            <!--                <div class="justify-center flex flex-wrap w-full space-x-8 absolute">-->
            <!--                    <div class="px-4 mt-8 sm:mt-0"><p-->
            <!--                                class="text-md font-medium tracking-wider text-gray-500 uppercase">Ressources</p>-->
            <!--                    </div>-->
            <!--                    <div class="px-4 mt-8 md:mt-0"><p-->
            <!--                                class="text-md font-medium tracking-wider text-gray-500 uppercase">Ressources</p>-->
            <!--                    </div>-->
            <!--                    <div class="px-4 mt-8 md:mt-0"><p-->
            <!--                                class="text-md font-medium tracking-wider text-gray-500 uppercase">Ressources</p>-->
            <!--                    </div>-->
            <!--                </div>-->
        </div>
        <hr class="mb-5 opacity-25">
        <div class="flex flex-col"><p class="font-light text-center text-gray-500">
                © <?php echo date('Y'); ?> Gumbraise. All rights reserved.
            </p>
            <div class="flex flex-row align-middle space-x-8 text-2xl text-gray-500 justify-center mt-4">
                <a
                        href="mailto:contact@kellis.fr" target="_blank">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8 relative -top-1">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </a>
                <a href="https://discord.gg/SScn47mp5F" target="_blank">
                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                        <path d="M19.54 0c1.356 0 2.46 1.104 2.46 2.472v21.528l-2.58-2.28-1.452-1.344-1.536-1.428.636 2.22h-13.608c-1.356 0-2.46-1.104-2.46-2.472v-16.224c0-1.368 1.104-2.472 2.46-2.472h16.08zm-4.632 15.672c2.652-.084 3.672-1.824 3.672-1.824 0-3.864-1.728-6.996-1.728-6.996-1.728-1.296-3.372-1.26-3.372-1.26l-.168.192c2.04.624 2.988 1.524 2.988 1.524-1.248-.684-2.472-1.02-3.612-1.152-.864-.096-1.692-.072-2.424.024l-.204.024c-.42.036-1.44.192-2.724.756-.444.204-.708.348-.708.348s.996-.948 3.156-1.572l-.12-.144s-1.644-.036-3.372 1.26c0 0-1.728 3.132-1.728 6.996 0 0 1.008 1.74 3.66 1.824 0 0 .444-.54.804-.996-1.524-.456-2.1-1.416-2.1-1.416l.336.204.048.036.047.027.014.006.047.027c.3.168.6.3.876.408.492.192 1.08.384 1.764.516.9.168 1.956.228 3.108.012.564-.096 1.14-.264 1.74-.516.42-.156.888-.384 1.38-.708 0 0-.6.984-2.172 1.428.36.456.792.972.792.972zm-5.58-5.604c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332.012-.732-.54-1.332-1.224-1.332zm4.38 0c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332 0-.732-.54-1.332-1.224-1.332z"></path>
                    </svg>
                </a>
                <a href="https://github.com/gumbraise" target="_blank">
                    <svg fill="currentColor" viewBox="0 0 511 511.9" xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6">
                        <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"></path>
                        <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"></path>
                        <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"></path>
                    </svg>
                </a>
                <a href="https://twitter.com/gumbraise" target="_blank">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
                <a href="https://linkedin.com/in/gumbraise" target="_blank">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </div>
</footer>
</body>
</html>