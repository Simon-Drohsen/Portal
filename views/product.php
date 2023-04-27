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
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body class="bg-neutral-100">
        <section class="p-4 bg-sky-700 mb-4">
            <nav>
                <div>
                    <div class="grid grid-cols-5 w-fit justify-items-center">
                        <div class="w-fit flex flex-wrap content-center mr-4">
                            <h1 class="text-4xl text-neutral-100">Customers</h1>
                        </div>
                        <div class="flex flex-wrap content-center text-neutral-100">
                            <a class="" href="<?= $routes->get('product')->getPath(); ?>">Back to Customer &emsp;</a>
                            <a class="" href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                        </div>
                        <div class="w-96">
                            <form method="POST">
                                <input type="text" placeholder="Search" name="search" class="hidden w-full lg:flex items-center text-sm leading-6 text-sky-700 bg-neutral-100
                                rounded-md ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300" >
                            </form>
                        </div>
                        <div class="w-fit flex flex-wrap content-center">
                            <form action="products" method="post">
                                <input class="px-3 rounded bg-neutral-100 hover:text-neutral-100 hover:border border-neutral-100 hover:bg-sky-700" type="submit" name="view" value="Compact View">
                            </form>
                        </div>
                        <div>
                            <a href="https://w-vision.ch/de">
                                <img alt="w-vision Logo" src="../assets/images/wvision_rgb.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section class="px-28 mt-4">
            <div class="<?php if ($_SESSION['count'] % 2 !== 0) {echo "";} else {echo "";}?>">
                <div>
                    <div class="<?php if ($_SESSION['count'] % 2 == 0) {echo "grid gap-8 grid-cols-4";} else {echo "";}?>">
                        <?php if ($_SESSION['count'] % 2 !== 0) :?>
                            <ul class="w-full divide-y divide-neutral-400">
                                <?php foreach($arrCustomers as $customer): ?>
                                    <li class="py-2.5">
                                        <div>
                                            <div class="grid gap-8 grid-cols-4">
                                                <div>
                                                    <p><?php print_r($customer['companyName']) ?></p>
                                                </div>
                                                <div>
                                                    <p>Head: <?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                                </div>
                                                <div>
                                                    <p>Status: <?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                                </div>
                                                <div>
                                                    <a class="mt-4 rounded text-neutral-100 bg-sky-700 w-fit p-2.5 px-3.5" href="/edit/<?= $customer['id'] ?>">edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <?php foreach($arrCustomers as $customer): ?>
                                <figure class="w-full bg-white rounded-xl p-8 shadow-lg">
                                    <div class="">
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
                                                    <a class="mt-4 rounded text-neutral-100 bg-sky-700 w-fit p-2.5 px-3.5" href="/edit/<?= $customer['id'] ?>">edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($_POST["search"])) : ?>
                        <a class="rounded-none" href="<?php echo $routes->get('product')->getPath(); ?>">Back to products</a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </body>
</html>

<?php /*
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<section>
    <?php if ($_SESSION['count'] % 2 == 0) :?>
        <nav class="uk-navbar-container uk-margin-bottom">
            <div uk-navbar>
                <div class="uk-navbar-left uk-margin-left">
                    <ul class="uk-navbar-nav">
                        <h1 class="uk-margin-small-top">Customers</h1>
                        <li>
                            <a class="uk-margin-left" href="<?= $routes->get('product')->getPath(); ?>">Back to Customer</a>
                        </li>
                        <li>
                            <a class="uk-margin-left" href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</section>

<section class="uk-section uk-section-primary uk-section-small">
    <div class="uk-container uk-container-small">
        <div class="uk-grid uk-child-width-expand">
            <div>
                <form method="POST">
                    <input class="uk-input" type="text" placeholder="Search" name="search">
                </form>
            </div>
            <div>
                <form action="products" method="post">
                    <input class="uk-button uk-button-secondary" type="submit" name="view" value="Compact View">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-section-small">
    <?php if ($_SESSION['count'] % 2 !== 0) :?>
        <div class="uk-width-medium uk-position-center-left uk-position-fixed uk-margin-left">
            <ul class="uk-nav-default uk-nav-divider" uk-nav>
                <li class="uk-active">
                    <h1 class="uk-margin-small-top">Customers</h1>
                </li>
                <li>
                    <a class="uk-margin-left" href="<?= $routes->get('product-create')->getPath(); ?>">Create Company</a>
                </li>
                <li>
                    <a class="uk-margin-left" href="<?= $routes->get('product')->getPath(); ?>">Back to Customer</a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
    <div class="uk-container <?php if ($_SESSION['count'] % 2 !== 0) {echo "uk-container-large";} else {echo "uk-container-expand";}?>">
        <div>
            <div class="uk-grid uk-grid-match uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-flex-center" data-uk-grid>
                <?php if ($_SESSION['count'] % 2 !== 0) :?>
                    <ul class="uk-list uk-list-divider uk-width-1-1">
                        <?php foreach($arrCustomers as $customer): ?>
                            <li class="uk-child-width-1-1">
                                <div>
                                    <div class="uk-grid uk-child-width-expand@s">
                                        <div class="uk-text-left">
                                            <p class="uk-text-baseline"><?php print_r($customer['companyName']) ?></p>
                                        </div>
                                        <div class="uk-text-center">
                                            <p class="uk-text-middle">Head: <?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                        </div>
                                        <div class="uk-text-center">
                                            <p class="uk-text-middle">Status: <?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                        </div>
                                        <div class="uk-text-right">
                                            <a class="uk-button uk-button-secondary" href="/edit/<?= $customer['id'] ?>">edit</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <?php foreach($arrCustomers as $customer): ?>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <h2><?php print_r($customer['companyName']) ?></h2>
                                    <p>Id: <?php print_r($customer['id']); $id = $customer['id']; ?></p>
                                </div>
                                <div class="uk-card-body">
                                    <p>Address:<br><?= $customer['address'] . " " . $customer['number'] . ", "
                                        . $customer['plz'] . " " . $customer['place']?></p>
                                    <p>E-mail:<br><?= $customer['mail'] ?></p>
                                    <p>Phone:<br><?= $customer['phone'] ?></p>
                                    <p>Head:<br><?= $customer['ok'] . " " . $customer['okFirst'] ?></p>
                                    <p>Status:<br><?php if($customer['status'] == 1) {echo "On";} else { echo "Off";}?></p>
                                    <a class="uk-button uk-button-secondary" href="/edit/<?= $customer['id'] ?>">edit</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php if(isset($_POST["search"])) : ?>
                <a class="uk-button uk-button-default uk-margin-top" href="<?php echo $routes->get('product')->getPath(); ?>">Back to products</a>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit-icons.min.js"></script>
</body>
</html>
 */?>
