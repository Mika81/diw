<!DOCTYPE html>
<html>
    <head>
        <title>DIW.fr | News</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php foreach($items as $item) : ?>
        <article>
            <h2><?= $item->getTitle(); ?></h2>
            <p><?= $item->getDate()->format('d/m/Y'); ?></p>
            <p><?= $item->getDescription(); ?></p>
        </article>
        <?php endforeach ?>
    </body>
</html>
