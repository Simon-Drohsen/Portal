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
        <section class="p-4 bg-gradient-to-r from-sky-700 to-indigo-300">
            <nav>
                <div>
                    <div class=" grid md:grid-cols-4 xl:grid-cols-5 justify-items-center">
                        <div class="mb-4 md:mb-0 l:w-fit flex flex-wrap content-center mr-4">
                            <h1 class="text-4xl text-neutral-100">Customers</h1>
                        </div>
                        <div class="mb-4 md:mb-0 flex l:w-fit flex-wrap content-center text-neutral-100">
                            <a href="<?= $routes->get('product')->getPath(); ?>">Back to Customers</a>
                        </div>
                        <div class="my-5 md:mb-0 l:w-96 md:w-full h-full w-72">
                            <form method="POST">
                                <input type="text" placeholder="Search" name="search" class="lg:flex
                                        items-center text-sm leading-6 text-sky-700 bg-neutral-100 w-full
                                        ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300" >
                            </form>
                        </div>
                        <div class="col-span-2 invisible 2xl:visible">
                            <a class="w-full" href="https://w-vision.ch/de">
                                <img class="w-full" alt="w-vision Logo" src="../public/assets/images/wvision_rgb.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section>
            <div class="mx-auto my-32 w-11/12 md:w-2/3 xl:w-2/5">
                <div>
                    <div class="w-full bg-white p-8 shadow-lg divide-y divide-neutral-500">
                        <div class="pb-3">
                            <div>
                                <p>Id: <?= $values['id']; ?></p>
                            </div>
                        </div>

                        <div class="pt-3">
                            <form method="POST">
                                <label for="editCompanyName">Name:</label>
                                <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                       type="text" value="<?= $values['companyName']; ?>" name="editCompanyName" required>

                                <label for="editAddress">Address:</label>
                                <div class="flex">
                                    <div class="w-5/6 mr-10">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                        type="text" value="<?= $values['address']; ?>" name="editAddress" required>
                                    </div>
                                    <div class="w-fit">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4" type="text" value="<?=
                                        $values['number']; ?>" name="editNumber" required>
                                    </div>
                                </div>

                                <label for="editPlz">PLZ/Location:</label>
                                <div class="flex">
                                    <div class="w-fit">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                               type="text" value="<?= $values['plz']; ?>" name="editPlz" required>
                                    </div>
                                    <div class="w-5/6 ml-10">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5" type="text" value="<?=
                                        $values['place']; ?>" name="editPlace" required>
                                    </div>
                                </div>

                                <label for="editMail">E-mail:</label>
                                <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2 bg-neutral-100
                                 ring-1 ring-slate-900/10 shadow-sm py-1.5  mb-4" type="email" value="<?=
                                $values['mail']; ?>" name="editMail" required>

                                <label for="editPhone">Phone:</label>
                                <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2 bg-neutral-100
                                ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4" type="tel" value="<?=
                                $values['phone']; ?>" name="editPhone" required>

                                <label for="editOk">Head:</label>
                                <div class="flex">
                                    <div class="w-1/2">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4"
                                               type="text" value="<?= $values['ok']; ?>" name="editOk" required>
                                    </div>
                                    <div class="w-1/2 ml-10">
                                        <input class="w-full lg:flex items-center text-sm leading-6 p-2 mt-2
                                        bg-neutral-100 ring-1 ring-slate-900/10 shadow-sm py-1.5 mb-4" type="text" value="<?=
                                        $values['okFirst']; ?>" name="editOkFirst" required>
                                    </div>
                                </div>

                                <p>Status:</p>
                                <div>
                                    <label><input type="radio" value="1" <?=
                                        $values['status'];?> name="editStatus" <?php if ($values['status'] == 1)
                                            :?> checked <?php endif;?>> &emsp; On</label>
                                </div>
                                <div>
                                    <label><input class="mb-8" type="radio" value="0" <?=
                                        $values['status'] ?> name="editStatus" <?php if ($values['status'] == 0)
                                            :?> checked <?php endif;?>> &emsp; Off</label>
                                </div>

                                <div class="flex">
                                    <div class="w-fit">
                                        <button class="block text-blue-500 bg-white border-2 border-blue-500 hover:bg-blue-600
                                         hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
                                         text-sm px-5 py-2.5 text-center" type="submit" name="done" id="done">done
                                        </button>
                                    </div>

                                    <div class="w-fit ml-10">
                                        <button id="delete-button" class="block text-red-500 bg-white border-2 border-red-500
                                         hover:bg-red-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300
                                          font-medium text-sm px-5 py-2.5 text-center" type="button">Delete
                                        </button>
                                    </div>
                                </div>

                                <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden
                                 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <div class="relative bg-white shadow">
                                            <div class="p-6 text-center">
                                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14"
                                                     fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg"><path stroke-width="2"
                                                     d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete this product?</h3>
                                                <a href="/delete/<?= $values['id'] ?>" data-modal-hide="popup-modal"
                                                   type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4
                                                    focus:outline-none focus:ring-red-300 font-medium text-sm inline-flex
                                                    items-center px-5 py-2.5 text-center mr-2">Yes, I'm sure
                                                </a>
                                                <button data-modal-hide="popup-modal" type="button" id="close-button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4
                                                        focus:outline-none focus:ring-gray-200 border border-gray-200
                                                        text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="../public/assets/script/script.js"></script>
    </body>
</html>