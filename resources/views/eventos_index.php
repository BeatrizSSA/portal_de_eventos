<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Eventos</title>
</head>
<body>
    <h1>Eventos</h1>
    <a href="eventos/inserir" title="Novo">Novo Evento</a>
    <hr>
 
    <?php if($eventos->count()) : ?>
        <?php foreach ($eventos as $evento) : ?>
            <h2><?php echo $eventos->titulo; ?></h2>
            <small>
                <a href="eventos/editar/<?php echo $eventos->id; ?>" title="Editar">Editar</a>
                |
                <a href="eventos/remover/<?php echo $eventos->id; ?>" title="Remover">Remover</a>
            </small>
            <p><?php echo $eventos->conteudo; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php else : ?>    
        <h2>Nenhum evento encontrado.</h2>
    <?php endif; ?>
 
</body>
</html>