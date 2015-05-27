<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>

        #title{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <script type="text/javascript">
        function toggler(divId) {
            $("#" + divId).toggle();
        };

        function load_winner_ajax(type){
            toggler('mostraVincitori'+type);
            $.ajax({
                'url' : 'estrai/'+type,
                'type' : 'GET', //the way you want to send data to your URL
                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    var container = $('#mostraVincitori'+type); //jquery selector (get element by id)
                    if(data){
                        container.html(data);
                    }
                }
            });
        };


        function load_user_ajax(type){
            toggler('showUser'+type);
            $.ajax({
                'url' : 'get_users/'+type,
                'type' : 'GET', //the way you want to send data to your URL
                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    var container = $('#showUser'+type); //jquery selector (get element by id)
                    if(data){
                        container.html(data);
                    }
                }
            });
        };

    </script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="title">
<h1>Google I/O Extended</h1>
<h2>28 - 29 Maggio 2015</h2>
    <h2>Reggio Calabria</h2>
</div>
<a class="btn btn-default" onclick="toggler('primogiorno');"> 28 Maggio</a>
<a class="btn btn-default" onclick="toggler('secondogiorno')"> 29 Maggio</a>

<div id="primogiorno" style="display: none;">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h3>Form di registrazione</h3>
            <? echo form_open('register/primogiorno', array('id' => 'reg_form','class' => 'form-horizontal')); ?>
            <?php echo $this->session->flashdata('message'); ?>
            <div class="form-group">
            <? echo form_label('Nome','nome',array('class' => 'control-label'));?>
            <?php echo form_error('nome');?>
            <input type="text" id="nome" name="nome" required class="form-control" value="<? echo set_value('nome'); ?>">
            </div>
            <div class="form-group">
            <? echo form_label('Cognome','cognome',array('class' => 'control-label'));?>
            <?php echo form_error('cognome');?>
            <input type="text" id="cognome" name="cognome" required class="form-control" value="<? echo set_value('cognome'); ?>">
            </div>
            <div class="form-group ">
            <? echo form_label('Matricola','matricola',array('class' => 'control-label'));?>
            <?php echo form_error('matricola');?>
            <input type="number" id="matricola" name="matricola" class="form-control">
            </div>
            <div class="form-group">
            <? echo form_label('Email','email',array('class' => 'control-label'));?>
            <?php echo form_error('email');?>
            <input id="email" type="email" name="email" required class="form-control" value="<? echo set_value('email'); ?>">
            </div>
            <div class="form-group">
            <? echo form_label('Crediti','crediti',array('class' => 'control-label'));?>
            <? echo form_checkbox('crediti', 'true' , TRUE);  ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Registra</button>
            <? echo form_close(); ?>
        </div>
        <div class="col-md-6">
        <h3>Gestione partecipanti</h3>
            <a onclick="load_winner_ajax('primogiorno')" class="btn btn-success">Estrai vincitori</a>
            <a onclick="load_user_ajax('primogiorno')" class="btn btn-info">Visualizza utenti</a><br>
            <div id="mostraVincitoriprimogiorno" style="display: none;"></div>
            <div id="showUserprimogiorno" style="display: none;"></div>

        </div>
    </div>
</div>

</div> <!-- fine primogiorno div -->

<div id="secondogiorno" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Form di registrazione</h3>
                <? echo form_open('register/secondogiorno', array('id' => 'reg_form','class' => 'form-horizontal')); ?>
                <?php echo $this->session->flashdata('message'); ?>
                <div class="form-group">
                    <? echo form_label('Nome','nome',array('class' => 'control-label'));?>
                    <?php echo form_error('nome');?>
                    <input type="text" id="nome" name="nome" required class="form-control" value="<? echo set_value('nome'); ?>">
                </div>
                <div class="form-group">
                    <? echo form_label('Cognome','cognome',array('class' => 'control-label'));?>
                    <?php echo form_error('cognome');?>
                    <input type="text" id="cognome" name="cognome" required class="form-control" value="<? echo set_value('cognome'); ?>">
                </div>
                <div class="form-group ">
                    <? echo form_label('Matricola','matricola',array('class' => 'control-label'));?>
                    <?php echo form_error('matricola');?>
                    <input type="number" id="matricola" name="matricola" class="form-control">
                </div>
                <div class="form-group">
                    <? echo form_label('Email','email',array('class' => 'control-label'));?>
                    <?php echo form_error('email');?>
                    <input id="email" type="email" name="email" required class="form-control" value="<? echo set_value('email'); ?>">
                </div>
                <div class="form-group">
                    <? echo form_label('Crediti','crediti',array('class' => 'control-label'));?>
                    <? echo form_checkbox('crediti', 'true' , TRUE);  ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registra</button>
                <? echo form_close(); ?>
            </div>
            <div class="col-md-6">
                <h3>Gestione partecipanti</h3>
                <a onclick="load_winner_ajax('secondogiorno')" class="btn btn-success">Estrai vincitori</a>
                <a onclick="load_user_ajax('secondogiorno')" class="btn btn-info">Visualizza utenti</a><br>
                <div id="mostraVincitorisecondogiorno" style="display: none;"></div>
                <div id="showUsersecondogiorno" style="display: none;"></div>

            </div>
        </div>
    </div>

</div> <!-- fine secondogiorno div -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="assets/js/vendor/bootstrap.min.js"></script>

</body>
</html>
