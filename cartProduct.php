<?php
require_once __DIR__ . '/db/db.php';
require_once __DIR__ . '/models/Cart.php';

$actualCart = new Cart(0, 0);
foreach ($productList as $item) {
    $actualCart->addNewProduct();
    $actualCart->addNewPrice($item->getPrice());
}
$numItems = count($productList);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php E-commerce - cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
<div class="relative overflow-x-auto">
    <table class="w-1/3 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Article
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody><?php foreach ($productList as $item) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $item->getName()?>
                </th>
                <td class="px-6 py-4">
                    <?php echo $item->getPrice()?>
                </td>
            </tr> <?php }?>
        </tbody>
        <tfoot>
            <tr class="font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-700">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3"><?php echo $actualCart?></td>
            </tr>
        </tfoot>
    </table>
</div>
</body>
</html>