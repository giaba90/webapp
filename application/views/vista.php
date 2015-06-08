<div id="primogiorno">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Form di registrazione</h3>
                <? echo form_open('register/'.$data , array('id' => 'reg_form','class' => 'form-horizontal')); ?>
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
                    <? echo form_checkbox('crediti', 'true' , FALSE);  ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registra</button>
                <a class="btn btn-default" href="<? echo base_url();?>">Torna indietro</a>
                <? echo form_close(); ?>

            </div>
            <div class="col-md-6">
                <h3>Gestione partecipanti</h3>
                <a onclick="load_winner_ajax('<? echo $data; ?>')" class="btn btn-success">Estrai vincitori</a>
                <a onclick="load_user_ajax('<? echo $data; ?>')" class="btn btn-info">Visualizza utenti</a><br>
                <div id="mostraVincitori<? echo $data; ?>" style="display: none;"></div>
                <div id="showUser<? echo $data; ?>" style="display: none;"></div>

            </div>
        </div>
    </div>

</div> <!-- fine primogiorno div -->