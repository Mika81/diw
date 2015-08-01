<aside class="col-xs-6 col-md-4 container-fluid">
    <div class="m_top_50 p_30">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Choisir la source</h3>
            </div>
            <div class="panel-body">
                <form method="post">
                    <select class="form-control" name="source">
                        <option <?php if(isset($_POST) && $_POST['source'] == 'Journal du net'){ print 'selected="selected"';} ?>>Journal du net</option>
                        <option <?php if(isset($_POST) && $_POST['source'] == 'Développez.com'){ print 'selected="selected"';} ?>>Développez.com</option>
                        <option <?php if(isset($_POST) && $_POST['source'] == 'Internet Actu'){ print 'selected="selected"';} ?>>Internet Actu</option>
                        <option <?php if(isset($_POST) && $_POST['source'] == 'ZDnet.fr'){ print 'selected="selected"';} ?>>ZDnet.fr</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-block m_top_20">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
    <div class="p_30">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">A propos</h3>
            </div>
            <div class="panel-body">
                <div class="thumbnail w_50_100 f_l">
                    <img src="/src/img/mika.jpg" alt="Mika">
                </div>
                <div class="w_40_100 f_l m_l_10">
                    <p><span class='t_dec_und'>L'objectif en bref</span>:<br>Résumer toutes l'actualité web en un seul endroit<br>Bonne lecture.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="p_30">
        <blockquote class="pull-right">
            <p>C'est en codant qu'on devient coderon !</p>
            <small>Someone <cite title="Source Title">somewhere</cite></small>
        </blockquote>
    </div>
</aside>
