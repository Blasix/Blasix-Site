<!doctype html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blasix">
    <meta name="description" content="Blasix - everything important about blasix">
    <meta name="keywords" content="info, about, starting">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Blasix | About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link href="./css/output.css" rel="stylesheet">
</head>

<body class="dark:bg-[rgb(20,20,20)] dark:text-white/90 md:overflow-hidden font-quicksand">
    <img src="assets/backrounds/about.svg" alt="about" class="fixed -z-10 w-screen h-screen object-cover">
    <div class="flex justify-center items-center sm:px-16 px-6">
        <div class="xl:max-w-[1920px] w-full xl:h-screen">
            <!-- navbar -->
            <nav id="navbar" class="w-full flex justify-between items-center text-2xl lg:text-3xl xl:pt-10 pt-6 dark:text-white/80 z-10">

                <!-- big screen navbar -->
                <img src="./assets/logo/logoTextSide.svg" alt="NavLogo" class="h-10 lg:h-14 object-contain">
                <ul class="hidden lg:flex gap-4 lg:gap-8 list-none items-center">
                    <li><a href="index">Home</a></li>
                    <li><a href="about" class="dark:text-white font-semibold">About</a></li>
                    <li><a href="projects">Projects</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>

                <!-- small screen navbar (burger menu) -->
                <button id="menu_button" class="lg:hidden cursor-pointer">
                    <img src="./assets/buttons/menu.svg" alt="menu_button_img">
                </button>

                <div id="menu" class="hidden lg:hidden absolute w-full h-full top-0 right-0 bg-stone-950/20 backdrop-blur-md">
                    <div class="flex text-start items-start gap-20 p-6 absolute top-0 right-0 m-6 sm:mx-16 w-auto rounded-xl dark:bg-stone-800/90 ">
                        <ul class="flex-col flex gap-1">
                            <li><a href="index">Home</a></li>
                            <li><a href="about" class="dark:text-white font-semibold">About</a></li>
                            <li><a href="projects">Projects</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                        <button id="close_button" class="cursor-pointer pt-2">
                            <img src="./assets/buttons/close.svg" alt="close_button_img">
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Maby Later -->

        </div>
    </div>
</body>

<script src="./js/navbar.js"></script>

</html>