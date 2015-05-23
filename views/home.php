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
        <!-- Starts header -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img alt="logo" src="...">
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Ends header -->
        <!-- Starts section -->
        <section class="col-xs-12 col-md-8 container-fluid">
            <div class="row">
                <div>
                    <h1>Actualités Web</h1>
                    <?php foreach ($items as $item) : ?>
                        <article class="media jumbotron">
                            <div class="media-body">
                                <p><?= $item->getDescription(); ?></p>
                            </div>
                            <div class='pull-left'>
                                <h5 class="text-info">Article du <?= $item->getDate()->format('d/m/Y'); ?></h5>
                            </div>
                            <div class='text-right'>
                                <a href="<?= $item->getLink(); ?>" target="_blank" class='btn btn-primary btn-lg'>Lire l'article</a>
                            </div>
                        </article>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
        <!-- Ends section -->
        <!-- Starts aside -->
        <aside class="col-xs-6 col-md-4 container-fluid">
            <div class="row">
                <h1>Ma colonne de droite</h1>
            </div>
        </aside>
        <!-- Ends aside -->
</body>
</html>
