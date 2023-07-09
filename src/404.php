<?php
header("HTTP/1.0 404 Not Found");
?>

<!doctype html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blasix">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Page Not Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link href="./css/output.css" rel="stylesheet">
</head>

<body class="dark:bg-[rgb(20,20,20)] dark:text-white/90 md:overflow-hidden font-quicksand">
    <div class="flex justify-center items-center sm:px-16 px-6">
        <div class="xl:max-w-[1920px] w-full xl:h-screen">
            <!-- navbar -->
            <nav id="navbar" class="w-full flex justify-between items-center text-2xl lg:text-3xl xl:pt-10 pt-6 dark:text-white/80 z-10">

                <!-- big screen navbar -->
                <img src="./assets/logo/logoTextSide.svg" alt="NavLogo" class="h-10 lg:h-14 object-contain">
                <ul class="hidden lg:flex gap-4 lg:gap-8 list-none items-center">
                    <li><a href="index">Home</a></li>
                    <li><a href="projects">Projects</a></li>
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
                                <li><a href="projects">Projects</a></li>
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
            <div id="body" class="flex justify-center items-center w-full font-bold text-center">
                <div>
                    <img src="./assets/404.svg" alt="404" class="2xl:w-[600px] xl:w-[400px] md:w-[320px] w-[260px] ">
                    <hr class="h-1 mx-auto my-4 mb-8 border-0 rounded md:my-8 md:mb-14 dark:bg-white/20">
                    <a href="index" class="border-2 rounded-3xl border-white/10 2xl:text-6xl xl:px-10 xl:py-2 xl:text-4xl px-6 py-1 text-4xl">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./js/navbar.js"></script>

</html>