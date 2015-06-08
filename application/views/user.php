<? if(isset($users) && count($users)>0): ?>
    <br>
    <p>Ci sono <span style="color: #5a0099;"> <? echo $partecipanti; ?> partecipanti </span> iscritti !</p>
    <br>
    <h2>Lista Partecipanti     <a onclick="toggler('<? echo 'showUser'.$table; ?>');" class="btn btn-danger"> Chiudi </a></h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <? foreach($users as $user): ?>
            <td><? echo $user['nome'];?></td>
            <td><? echo $user['cognome']; ?></td>
        </tr>
        <? endforeach; ?>
        </tbody>
    </table>
<? endif; ?>