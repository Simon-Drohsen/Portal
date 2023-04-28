<?php
session_start();
if(isset($_POST['view'])) {
    if(!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    $_SESSION['count']++;
}
?>

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

    <body class="bg-neutral-100">
        <section class="p-4 bg-gradient-to-r from-sky-700 to-indigo-300">
            <nav>
                <div>
                    <div class=" grid md:grid-cols-4 xl:grid-cols-5 justify-items-center">
                        <div class="mb-4 md:mb-0 l:w-fit flex flex-wrap content-center mr-4">
                            <h1 class="text-4xl text-neutral-100">Customers</h1>
                        </div>
                        <div class="mb-4 md:mb-0 flex l:w-fit flex-wrap content-center text-neutral-100">
                            <a href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                        </div>
                        <div class="my-5 md:mb-0 l:w-96 md:w-full h-full w-72">
                            <form method="POST">
                                <input type="text" placeholder="Search" name="search" class="lg:flex
                                    items-center text-sm leading-6 text-sky-700 bg-neutral-100 w-full
                                    ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300" >
                            </form>
                        </div>
                        <div class="mb-4 md:mb-0 l:w-fit flex flex-wrap content-center">
                            <form action="products" method="post">
                                <input class="px-3 bg-neutral-100 hover:text-neutral-100 hover:border border-neutral-100
                                     hover:bg-sky-700 w-32 h-12" type="submit" name="view" value="<?php if ($_SESSION['count'] % 2 == 0)
                                     {echo "Compact View";} else {echo "Detail View";}?>">
                            </form>
                        </div>
                        <div class="invisible 2xl:visible">
                            <a class="w-full" href="https://w-vision.ch/de">
                                <img class="w-full" alt="w-vision Logo" src="../public/assets/images/wvision_rgb.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section class="mx-auto mt-8 w-11/12">
            <div>
                <div>
                    <div class="<?php if ($_SESSION['count'] % 2 == 0) {echo "grid gap-8 lg:grid-cols-2 2xl:grid-cols-4";} else {echo "";}?>">
                        <?php if ($_SESSION['count'] % 2 !== 0) :?>
                            <ul class="w-full divide-y divide-neutral-400">
                                <?php foreach($arrCustomers as $customer): ?>
                                    <li class="py-2.5">
                                        <div>
                                            <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 2xl:grid-cols-4">
                                                <div>
                                                    <p><?php print_r($customer['companyName']) ?></p>
                                                </div>
                                                <div class="order-2 md:order-3">
                                                    <p>Head: <?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                                </div>
                                                <div>
                                                    <p>Status: <?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                                </div>
                                                <div class="mb-4 2xl:my-4 order-4">
                                                    <a class="mt-4 text-neutral-100 hover:border border-neutral-100 bg-gradient-to-r
                                                     from-sky-500 to-indigo-500 w-14 h-12 p-2.5 px-3.5" href="/edit/<?= $customer['id'] ?>">edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <?php foreach($arrCustomers as $customer): ?>
                                <figure class="w-full bg-white p-8 shadow-lg">
                                    <div>
                                        <div>
                                            <div class="divide-y divide-neutral-500">
                                                <div class="pb-3">
                                                    <h2 class="text-2xl"><?php print_r($customer['companyName']) ?></h2>
                                                    <p>Id: <?php print_r($customer['id']); $id = $customer['id']; ?></p>
                                                </div>
                                                <div class="grid grid-cols-5 gap-0 pt-3">
                                                    <p>Address:</p>
                                                    <p class="col-span-4 text-right"><?= $customer['address'] . " " . $customer['number'] . ", "
                                                            . $customer['plz'] . " " . $customer['place']?></p>
                                                    <p>E-mail:</p>
                                                    <p class="col-span-4 text-right"><?= $customer['mail'] ?></p>
                                                    <p>Phone:</p>
                                                    <p class="col-span-4 text-right"><?= $customer['phone'] ?></p>
                                                    <p>Head:</p>
                                                    <p class="col-span-4 text-right"><?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                                    <p>Status:</p>
                                                    <p class="col-span-4 text-right"><?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                                    <a class="mt-4 text-neutral-100 hover:border border-neutral-100
                                                    bg-gradient-to-r from-sky-500 to-indigo-500 w-14 h-12 p-2.5 px-3.5"
                                                       href="/edit/<?= $customer['id'] ?>">edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($_POST["search"])) : ?>
                        <a href="<?php echo $routes->get('product')->getPath(); ?>">Back to products</a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </body>
</html>