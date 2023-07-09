<!-- npx tailwindcss -i ./src/css/input.css -o ./src/css/output.css --watch -->
<!-- https://github.com/Blasix/Blasix-Site/tree/bc133fc90a55d3c7f37316df5d3d91a3432d5c3e -->

<!DOCTYPE html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blasix">
    <meta name="description" content="Blasix - Full stack mobile and web development">
    <meta name="keywords" content="Blasix, blasix, BLASIX, Bas, Bas Lazaroms, Web development, websites, mobile, app, full stack, developer">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Blasix</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link href="./css/output.css" rel="stylesheet">
</head>

<body class="dark:bg-[rgb(20,20,20)] dark:text-white/90 overflow-hidden font-quicksand ">
    <img src="assets/backrounds/index.svg" alt="index" class="fixed -z-10 w-screen h-screen object-cover">
    <div class="flex justify-center items-center sm:px-16 px-6">
        <div class="xl:max-w-[1920px] w-full xl:h-screen">
            <!-- navbar -->
            <nav id="navbar" class="w-full flex justify-between items-center text-2xl lg:text-3xl xl:pt-10 pt-6 dark:text-white/80 z-10">

                <!-- big screen navbar -->
                <img src="./assets/logo/logoTextSide.svg" alt="NavLogo" class="h-10 lg:h-14 object-contain">
                <ul class="hidden lg:flex gap-4 lg:gap-8 list-none items-center">
                    <li><a href="index" class="dark:text-white font-semibold">Home</a></li>
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
                            <li><a href="index" class="dark:text-white font-semibold">Home</a></li>
                            <li><a href="projects">Projects</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                        <button id="close_button" class="cursor-pointer pt-2">
                            <img src="./assets/buttons/close.svg" alt="close_button_img">
                        </button>
                    </div>
                </div>
            </nav>

            <!-- body -->
            <div id="body" class=" h-screen flex lg:justify-between justify-center items-center flex-row font-bold z-10">
                <div class="text-center flex flex-col gap-3">
                    <h1 class="2xl:text-8xl xl:text-7xl sm:text-6xl text-5xl">Software <br> Development</h1>
                    <hr class="xl:w-96 w-60  h-1 mx-auto my-4  border-0 rounded md:my-8 dark:bg-white/20">
                    <h2 class="dark:text-white/60 2xl:text-5xl xl:text-4xl sm:text-3xl text-2xl">Blasix, We fire through all <br> software problems
                    </h2>
                </div>
                <img src="./assets/home.svg" alt="Home" class="lg:flex hidden w-[500px] xl:w-[600px] 2xl:w-[700px]">
            </div>
        </div>
    </div>
</body>
<script src="./js/navbar.js"></script>

</html>