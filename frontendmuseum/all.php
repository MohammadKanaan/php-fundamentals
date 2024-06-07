        <?php include "header_inc.php";
include 'data/data.php';
foreach ($exhibits as $exhibit):
?>
        <article>
            <h2><?php echo $exhibit["title"] ?></h2>
            <p><?php echo $exhibit["description"] ?></p>
            <img src= "gallery/<?php echo $exhibit["image"] ?>"
                    fetchpriority="high" decoding="sync">
        </article>
        <?php endforeach;
include "footer_inc.php"?>