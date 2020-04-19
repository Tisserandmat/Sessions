<?php


$catalog = [
    46 => [
        'name' => 'Pecan nuts',
        'description' => 'Cooked by Penny !',
    ],
    36 => [
        'name' => 'Chocolate chips',
        'description' => 'Cooked by Bernadette !',
    ],
    58 => [
        'name' => 'Full chocolate cookie',
        'description' => 'Cooked by Bernadette !',
    ],
    32 => [
        'name' => 'M&M\'s&copy; cookies',
        'description' => 'Cooked by Penny !',
    ],
];

if (!empty($_GET['add_to_cart'])){

    switch ($_GET["add_to_cart"])
    {
        case "46":
            if (empty($_COOKIE['panier']['pecanNuts'])){
                setCookie("panier[pecanNuts]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["pecanNuts"]++;
            setCookie("panier[pecanNuts]",$_COOKIE["panier"]["pecanNuts"]);
            break;



        case "36":
            if (empty($_COOKIE['panier']['chocolateChips'])){
                setCookie("panier[chocolateChips]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["chocolateChips"]++;
            setCookie("panier[chocolateChips]",$_COOKIE["panier"]["chocolateChips"]);
            break;



        case "58":
            if (empty($_COOKIE['panier']['chocolateCookie'])){
                setCookie("panier[chocolateCookie]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["chocolateCookie"]++;
            setCookie("panier[chocolateCookie]",$_COOKIE["panier"]["chocolateCookie"]);
            break;



        case "32":
            if (empty($_COOKIE['panier']['mmsCookies'])){
                setCookie("panier[mmsCookies]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["mmsCookies"]++;
            setCookie("panier[mmsCookies]",$_COOKIE["panier"]["mmsCookies"]);
            break;
    }
}
