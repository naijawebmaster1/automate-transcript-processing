<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.6.1/tailwind.min.css"
        integrity="sha512-+hjqMzr0op6/yUD+yMhBVhPe9IT5WutCAh31OO1tZ4TTCgsaBkfQ68q6Y4xcyE1Qqq9AsORgHWeIfNAeMdo4/w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased">
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">

            <div class="px-6 py-12 md:px-12 text-gray-800 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 flex items-center">
                        <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                            <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                                style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                                <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight mb-12">Automated
                                    Clearance System <br /><span class="text-blue-600">For Students</span></h1>
                                <a style="background-color: blue; padding: 12px 10px 12px 10px; text-decoration:none"
                                    class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" href="register"
                                    role="button">Get
                                    started</a>
                                <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" href="login" role="button">
                                    Login</a>
                            </div>
                        </div>
                        <div class="md:mb-12 lg:mb-0">
                            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                                class="w-full rounded-lg shadow-lg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
</body>

</html>