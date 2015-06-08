<?php if(isset($list) && count($list)) : ?>
    <br>
    <h3>I fortunati estratti sono   <a onclick="toggler('<? echo 'mostraVincitori'.$table; ?>');" class="btn btn-danger"> Chiudi </a></h3>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Matricola</th>
            <th>Nome</th>
            <th>Cognome</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $row) : ?>
            <tr>
                <td><?php echo $row['matricola']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['cognome']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h3>No results found!</h3>
<?php endif; ?>