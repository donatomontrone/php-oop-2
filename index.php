<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <header class="flex justify-center w-full">
        <h1 class="text-center text-2xl p-2 m-auto">Animal shop</h1>
        <div class="icon">
            <div class="arrow">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="cartProduct.php"><i class="fa-solid fa-cart-shopping"></i><?php ?></a>
        </div>
    </header>
    <main class="">
        <ul class="flex flex-wrap"> <?php foreach ($productList as $item) { ?>
                <li class="w-full md:w-1/3 p-4">

                    <div class="border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b rounded-l  lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="">
                            <div>
                                <div class="title flex items-start">
                                    <div class="text-gray-900 font-bold text-xl mb-2 mr-5"><?php echo $item->getName() ?></div>
                                    <img class="w-6 h-6 rounded-full mr-1" src="<?php echo $item->getGenre()->getImgPath() ?>" alt="<?php echo $item->getName() ?>">
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="info">
                                    <p class="text-gray-500 text-base"><span class="text-black font-medium">Price </span> <?php echo $item->getPrice() ?></p>
                                    <?php if ($item instanceof Food) { ?>
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Ingredients: </span> <?php echo $item->getIngredients() ?></p>
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Exp. date: </span><?php echo $item->getExpireDate() ?></p>
                                    <?php } ?>
                                    <?php if ($item instanceof Kennel) { ?>
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Materials: </span> <?php echo $item->getMaterial() ?></p>
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Exp. date: </span><?php echo $item->getSize() ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>

</html>