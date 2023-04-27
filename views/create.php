<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.png">
        <title>Simple PHP MVC</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../public/assets/css/style.css">
    </head>

    <body>
        <section class="p-4 bg-gradient-to-r from-sky-500 to-indigo-500">
            <nav>
                <div>
                    <div class="grid grid-cols-5 w-fit justify-items-center">
                        <div class="w-fit flex flex-wrap content-center mr-4">
                            <h1 class="text-4xl text-neutral-100">Customers</h1>
                        </div>
                        <div class="flex flex-wrap content-center text-neutral-100">
                            <a href="<?= $routes->get('product')->getPath(); ?>">Back to Customer &emsp;</a>
                        </div>
                        <div class="w-96">
                            <form method="POST">
                                <input type="text" placeholder="Search" name="search" class="hidden w-full lg:flex items-center text-sm leading-6 text-sky-700 bg-neutral-100
                                                ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300" >
                            </form>
                        </div>
                        <div class="w-fit flex flex-wrap content-center">
                            <form action="products" method="post">
                                <input class="px-3 bg-neutral-100 hover:text-neutral-100 hover:border border-neutral-100 hover:bg-gradient-to-r hover:from-sky-500 hover:to-indigo-500 w-32 h-12" type="submit" name="view" value="Compact View">
                            </form>
                        </div>
                        <div>
                            <a class="w-fit" href="https://w-vision.ch/de">
                                <img class="w-fit" alt="w-vision Logo" src="../public/assets/images/wvision_rgb.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section>
            <div class="mx-96 px-48">
                <div>
                    <div class="w-full bg-white p-8 shadow-lg divide-y divide-neutral-500">
                        <div class="my-3">
                            <form method="POST">
                                <div>
                                    <p>Company:</p>
                                    <input  class="hidden w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                            bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                            type="text" placeholder="z.B w-vision AG" name="createCompany" required>

                                    <p>Address:</p>
                                    <div class="flex">
                                        <div class="w-5/6 mr-10">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                                   type="text" placeholder="z.B Sandgruebestrasse" name="createAddress">
                                        </div>
                                        <div class="w-fit">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                                   type="text" placeholder="z.B 4" name="createStreetNumber" required>
                                        </div>
                                    </div>

                                    <p>PLZ/Location:</p>

                                    <div class="flex">
                                        <div class="w-fit">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                                   type="number" placeholder="z.B 6210" name="createPlz" required>
                                        </div>
                                        <div class="w-5/6 ml-10">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5"
                                                   type="text" placeholder="z.B Sursee" name="createPlace" required>
                                        </div>
                                    </div>

                                    <p>E-mail:</p>
                                    <input class="hidden w-full lg:flex items-center text-sm leading-6 p-2 mt-2 bg-neutral-100
                                           ring-1 ring-slate-900/10 shadow-sm py-1.5  mb-4"
                                           type="email" placeholder="z.B s.drohsen@w-vision.ch" name="createMail" required>

                                    <p>Phone:</p>
                                    <input class="hidden w-full lg:flex items-center text-sm leading-6 p-2 mt-2 bg-neutral-100
                                           ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                           type="tel" pattern="^\+(\s|([0-9]))+$" placeholder="z.B +41 41 926 07 20" name="createPhone" required>

                                    <p>Head:</p>

                                    <div class="flex">
                                        <div class="w-1/2">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                                   type="text" placeholder="z.B Adrian" name="createOk" required>
                                        </div>
                                        <div class="w-1/2 ml-10">
                                            <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                                   bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                                   type="text" placeholder="z.B Hess" name="createOkFirst" required>
                                        </div>
                                    </div>

                                    <p>Status:</p>
                                    <div>
                                        <label><input type="radio" value="1" name="createStatus">&emsp; On</label>
                                    </div>
                                    <div>
                                        <label><input type="radio" value="0" name="createStatus">&emsp; Off</label>
                                    </div>

                                    <button class="block text-blue-500 bg-white border-2 border-blue-500 hover:bg-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mt-4"  type="submit" name="create" id="create">
                                        create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>