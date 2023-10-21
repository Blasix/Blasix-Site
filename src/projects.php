<!doctype html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blasix">
    <meta name="description" content="Blasix - all projects made by blasix">
    <meta name="keywords" content="projects, web, discord, mobile, app, group planner, danzr">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Blasix | Projects</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link href="./css/output.css" rel="stylesheet">
    <link href="./css/card.css" rel="stylesheet">
</head>

<body class="dark:bg-[rgb(20,20,20)] dark:text-white/90 font-quicksand">
    <img src="assets/backrounds/projects.svg" alt="projects" class="fixed -z-10 w-screen h-screen object-cover">
    <div class="flex justify-center items-center sm:px-16 px-6">
        <div class="xl:max-w-[1920px] w-full ">
            <!-- navbar -->
            <nav id="navbar" class="w-full flex justify-between items-center text-2xl lg:text-3xl xl:pt-10 pt-6 dark:text-white/80 z-10">

                <!-- big screen navbar -->
                <img src="./assets/logo/logoTextSide.svg" alt="NavLogo" class="h-10 lg:h-14 object-contain">
                <ul class="hidden lg:flex gap-4 lg:gap-8 list-none items-center">
                    <li><a href="index">Home</a></li>
                    <li><a href="projects" class="dark:text-white font-semibold">Projects</a></li>
                    <li><a href="contact">Contact</a></li>
                    <hr class="w-1 h-10 mx-auto border-0 rounded dark:bg-white/20">
                    <a href="https://discord.gg/73fj8ez9nC">
                        <img src="./assets/socials/discord.svg" alt="discord" class="h-8">
                    </a>
                </ul>

                <!-- small screen navbar (burger menu) -->
                <button id="menu_button" class="lg:hidden cursor-pointer">
                    <img src="./assets/buttons/menu.svg" alt="menu_button_img">
                </button>

                <div id="menu" class="hidden lg:hidden absolute w-full h-full top-0 right-0 bg-stone-950/20 backdrop-blur-md">
                    <div class="flex flex-col absolute top-0 right-0 px-6 py-4 m-6 sm:mx-16 w-auto rounded-xl dark:bg-stone-800/90 gap-4">
                        <div class="flex text-start items-start gap-20">
                            <ul class="flex-col flex gap-1">
                                <li><a href="index">Home</a></li>
                                <li><a href="projects" class="dark:text-white font-semibold">Projects</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                            <button id="close_button" class="cursor-pointer pt-2">
                                <img src="./assets/buttons/close.svg" alt="close_button_img">
                            </button>
                        </div>
                        <hr class="w-full  h-1 mx-auto   border-0 rounded  dark:bg-white/20">
                        <!-- buttons -->
                        <div class="mx-auto mt-1">
                            <a href="https://discord.gg/73fj8ez9nC">
                                <img src="./assets/socials/discord.svg" alt="discord" class="h-7">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- body -->
            <div class="flex justify-center 2xl:mt-24 xl:mt-20 mt-10 flex-row font-bold z-10 ">

                <div class="text-center flex flex-col gap-3 h-auto">
                    <h1 class="2xl:text-8xl xl:text-7xl text-6xl">Projects</h1>
                    <hr class="xl:w-96 w-60  h-1 mx-auto my-4  border-0 rounded md:my-8 dark:bg-white/20">
                    <div class="flex flex-wrap gap-4 justify-center pb-10" id="cards">
                        <a href="https://groupplanner.blasix.com" class="dark:bg-white/10 rounded-[30px] relative card">
                            <div class="h-[calc(100%-2px)] w-[calc(100%-2px)] bg-[rgb(23,23,23)] m-[1px] flex flex-col text-left p-4 card-content max-w-[298px]">
                                <img src="assets/projects/groupplanner.png" alt="groupplanner" class="w-[266px] h-[160]">
                                <h2 class="dark:text-white/60 text-2xl">Plan events in a group</h2>
                                <h1 class="text-3xl">Groupy</h1>
                            </div>
                        </a>
                        <a href="https://github.com/Blasix/danzr_py" class="dark:bg-white/10 rounded-[30px] relative card">
                            <div class="h-[calc(100%-2px)] w-[calc(100%-2px)] bg-[rgb(23,23,23)] m-[1px] flex flex-col text-left p-4 card-content max-w-[298px]">
                                <img src="assets/projects/danzr.png" alt="danzr" class="w-[266px] h-[160]">
                                <h2 class="dark:text-white/60 text-2xl">Open source music bot</h2>
                                <h1 class="text-3xl">Danzr</h1>
                            </div>
                        </a>
                        <a href="https://chexagon.blasix.com/index.html" class="dark:bg-white/10 rounded-[30px] relative card">
                            <div class="h-[calc(100%-2px)] w-[calc(100%-2px)] bg-[rgb(23,23,23)] m-[1px] flex flex-col text-left p-4 card-content max-w-[298px]">
                                <img src="assets/projects/chexagon.png" alt="danzr" class="w-[266px] h-[160]">
                                <h2 class="dark:text-white/60 text-2xl">Chess with hexagons</h2>
                                <h1 class="text-3xl">Chexagon</h1>
                            </div>
                        </a>
                        <a href="https://blasix.com" class="dark:bg-white/10 rounded-[30px] relative card">
                            <div class="h-[calc(100%-2px)] w-[calc(100%-2px)] bg-[rgb(23,23,23)] m-[1px] flex flex-col text-left p-4 card-content max-w-[298px]">
                                <img src="assets/projects/blasix.png" alt="blasix" class="w-[266px] h-[160]">
                                <h2 class="dark:text-white/60 text-2xl">This website</h2>
                                <h1 class="text-3xl">Blasix.com</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<script src="./js/navbar.js"></script>
<script src="./js/cards.js"></script>

</html>