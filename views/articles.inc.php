<?php 
include_once "src/rss/source.php";

foreach ($items as $item) : ?>
    <article class="media jumbotron">
        <?php if($display == "jdn" || $display == "internetactu" || $display == "zdnet"){ ?>
        <div class="media-heading">
            <p><strong><?= $item->getTitle(); ?></strong></p>
        </div>
        <?php } ?>
        <div class="media-body">            
            <p><?= $item->getDescription(); ?></p>
        </div>
        <div class='pull-left'>
            <h5 class="text-info">Article du <?= $item->getDate()->format('d/m/Y'); ?></h5>
        </div>
        <div class='text-right'>
            <a href="<?= $item->getLink(); ?>" target="_blank" class='btn btn-info btn-lg'>Lire l'article sur "<?php echo $site_name; ?>"</a>
        </div>
    </article>
<?php endforeach ?>
