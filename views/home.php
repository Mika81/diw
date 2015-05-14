<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>DIW.fr | News</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/src/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/src/css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="/src/css/bootstrap/css/flatly.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h1>Actualités Web</h1>
                    <?php foreach($items as $item) : ?>
                        <article>
                            <a href="<?= $item->getLink(); ?>"><h2><?= $item->getTitle(); ?></h2></a>
                            <div><img src="<?= $item->getPicture(); ?>"/></div>
                            <p><?= $item->getDate()->format('d/m/Y'); ?></p>
                            <p><?= $item->getDescription(); ?></p>
                        </article>
                    <?php endforeach ?>
                </div>
                <div class="col-xs-6 col-md-4">
                    <h1>Ma colonne de droite</h1>
                </div>
            </div>
        </div>
    </body>
</html>
