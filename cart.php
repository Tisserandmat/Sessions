<?php
require 'inc/head.php';
require 'inc/data/products.php';

if (empty($_SESSION["login"])) {
    header("location: login.php");
}
?>



<section class="cookies container-fluid">
    <div class="row">
        <h2>Panier</h2>
        <p>Résumé de vos achats</p>

        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($_COOKIE as $item => $id) : ?>

                <?php if ($item === "article_" . $_SESSION["login"] . "_" . $id): ?>
                     <tr>
                         <td><img style="width:100px" src="assets/img/product-<?= $id ?>.jpg"></td>
                         <td><?= $catalog[$id]['name'] ?></td>
                         <td></td>
                         <td></td>
                     </tr>
                <?php endif; ?>

             <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php require 'inc/foot.php'; ?>


