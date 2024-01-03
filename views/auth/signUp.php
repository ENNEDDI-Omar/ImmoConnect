<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link href="../../public/css/tailwind.css" rel="stylesheet">
    <link href="../../public/css/sign_login.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
=======
    <link href="/ImmoConnect/public/css/tailwind.css" rel="stylesheet">

    <link href="/ImmoConnect/public/css/sign_login.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
>>>>>>> 6ce1c33bd637ee5b402c1bcb4d7f2c31b028ba84
</head>


<body>


    <section class="img-background p-0 m-0">

        <div class="form-container max-w-sm mx-auto mt-20">
            <form id="signupForm" class="max-w-sm mx-auto">
                <h1 class="text-3xl text-white font-bold text-center">
                    Sign Up
                </h1>
                <p class="text-white font-sans text-center">Create your account for free</p>
                <div class="form-input mb-2 pt-5">
                    <input type="text" id="full-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Full name" required>
                    <span id="fullNameError" class="error-message"></span>
                </div>
                <div class="form-input mb-2 pt-2">
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
                    <span id="emailError" class="error-message"></span>
                </div>
                <div class="form-input mb-2 pt-2">
                    <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" required>
                    <span id="passwordError" class="error-message"></span>
                </div>
                <div class="form-input mb-5 pt-2">
                    <input type="text" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="phone number" required>
                    <span id="phoneNumberError" class="error-message"></span>
                </div>

                <div class="form-input mb-5 pt-2">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    </section>
    
</body>

<script src="../../public/js/sign_login.js"></script>
</html>