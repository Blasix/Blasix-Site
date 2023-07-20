<!doctype html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blasix">
    <meta name="description" content="Blasix - send a mail to the company blasix">
    <meta name="keywords" content="mail, contact, blasix">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>Blasix | Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link href="./css/output.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body class="dark:bg-[rgb(20,20,20)] dark:text-white/90 overflow-hidden font-quicksand">
    <img src="assets/backrounds/contact.svg" alt="contact" class="fixed -z-10 w-screen h-screen object-cover">
    <div class="flex justify-center items-center sm:px-16 px-6">
        <div class="xl:max-w-[1920px] w-full xl:h-screen">
            <!-- navbar -->
            <nav id="navbar" class="w-full flex justify-between items-center text-2xl lg:text-3xl xl:pt-10 pt-6 dark:text-white/80 z-10">

                <!-- big screen navbar -->
                <img src="./assets/logo/logoTextSide.svg" alt="NavLogo" class="h-10 lg:h-14 object-contain">
                <ul class="hidden lg:flex gap-4 lg:gap-8 list-none items-center">
                    <li><a href="index">Home</a></li>
                    <li><a href="projects">Projects</a></li>
                    <li><a href="contact" class="dark:text-white font-semibold">Contact</a></li>
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
                                <li><a href="contact" class="dark:text-white font-semibold">Contact</a></li>
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
            <div id="body" class="h-screen flex flex-col justify-center items-center font-bold z-10">
                <h1 class="xl:text-6xl text-4xl">Contact Blasix</h1>
                <hr class="xl:w-96 w-60  h-1 mx-auto my-4  border-0 rounded md:my-8 dark:bg-white/20">
                <?php
                // TODO: add database that stores ip and strikes
                // info for database


                // users ip
                $ip = $_SERVER['REMOTE_ADDR'];

                // check if ip has 3 strikes
                if (false) {
                    // show error message
                    echo '<div class="flex flex-col justify-center items-center text-center">
                            <div class="bg-red-600/70 text-white px-4 py-2 rounded-lg border-2 border-white/20">You are a robot.</div>
                            <a href="contact" class="rounded-t-none rounded-lg border-x-2 border-b-2 border-white/20 bg-[rgb(23,23,23)]/70 px-4 py-2 hover:bg-white/5">Try again</a>
                        </div>';
                    die();
                }

                if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

                    // get reCAPTCHA response
                    if (isset($_POST['g-recaptcha-response'])) {
                        $token = $_POST['g-recaptcha-response'];
                        $url = 'https://www.google.com/recaptcha/api/siteverify';
                        $env = parse_ini_file('.env');
                        $secret_key = $env['RECAPTCHA_SECRET_KEY'];
                        $data = array(
                            'secret' => $secret_key,
                            'response' => $token
                        );

                        $options = array(
                            'http' => array(
                                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                                'method' => 'POST',
                                'content' => http_build_query($data)
                            )
                        );

                        $context  = stream_context_create($options);
                        $result = file_get_contents($url, false, $context);
                        $response = json_decode($result);

                        // Take action based on the score returned:
                        if ($response->success && $response->score >= 0.5) {
                            // Verified - send email
                            // Get the form fields
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            // Set the recipient email address
                            $to = 'knock@blasix.com';

                            // Set the email subject
                            $subject = 'New message from ' . $name;

                            // Set the email headers
                            $headers = "From: $email\r\n";
                            $headers .= "Reply-To: $email\r\n";
                            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

                            // Send the email using the mail() function
                            if (mail($to, $subject, $message, $headers)) {
                                // Show a success message
                                echo '<div class="flex flex-col justify-center items-center text-center">
                                        <div class="bg-green-600/70 text-white px-4 py-2 rounded-lg border-2 border-white/20">Your message has been sent!</div>
                                        <a href="contact" class="rounded-t-none rounded-lg border-x-2 border-b-2 border-white/20 bg-[rgb(23,23,23)]/70 px-4 py-2 hover:bg-white/5">Send another mail</a>
                                    </div>';
                            } else {
                                // Show an error message
                                echo '<div class="flex flex-col justify-center items-center text-center">
                                        <div class="bg-red-600/70 text-white px-4 py-2 rounded-lg border-2 border-white/20">There was an error sending your message.</div>
                                        <a href="contact" class="rounded-t-none rounded-lg border-x-2 border-b-2 border-white/20 bg-[rgb(23,23,23)]/70 px-4 py-2 hover:bg-white/5">Try again</a>
                                    </div>';
                            }
                        } else {
                            // add bot strike to database with ip

                            // Show an error message
                            echo '<div class="flex flex-col justify-center items-center text-center">
                                    <div class="bg-red-600/70 text-white px-4 py-2 rounded-lg border-2 border-white/20">You are a robot.</div>
                                    <a href="contact" class="rounded-t-none rounded-lg border-x-2 border-b-2 border-white/20 bg-[rgb(23,23,23)]/70 px-4 py-2 hover:bg-white/5">Try again</a>
                                </div>';
                        }
                    }
                } else {
                    // Show the form
                    echo '<form method="POST" id="contactForm">
                    <div class="flex flex-col border border-white/20 bg-[rgb(23,23,23)]/70 rounded-3xl p-3 gap-3 text-xl">
                        <div class="flex xl:flex-row  flex-col gap-3 ">
                            <input class="rounded-xl border border-white/20 bg-[rgb(23,23,23)]/70 xl:w-1/3 px-3 py-1" type="text" id="name" name="name" placeholder="Name" required>
                            <input class="rounded-xl border border-white/20 bg-[rgb(23,23,23)]/70 xl:w-2/3 px-3 py-1" type="email" id="email" name="email" placeholder="Email" required>
                        </div>

                        <textarea class="rounded-xl border border-white/20 bg-[rgb(23,23,23)]/70 resize-none overflow-hidden px-3 py-1" rows="4" placeholder="Message" id="message" name="message" required></textarea>
                    </div>

                    <div class="flex mx-4 justify-between xl:justify-end mt-2 gap-3">
                        <button type="submit" class="bg-green-600/70 border rounded-full border-white/20 px-3 py-1 g-recaptcha" data-sitekey="6Le3JzgnAAAAALVTbh2NGrtRxxk-7gjE5FQCen_Q" data-callback="onSubmit">Submit</button>
                        <button type="reset" class="bg-red-600/70 border rounded-full border-white/20 px-3 py-1">Clear</button>
                    </div>
                </form>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

<script src="./js/navbar.js"></script>
<script>
    function onSubmit(token) {
        var form = document.getElementById("contactForm");
        if (form.checkValidity()) {
            form.submit();
        } else {
            grecaptcha.reset();
            form.reportValidity();
        }
    }
</script>

</html>