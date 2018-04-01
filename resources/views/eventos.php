<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Eventos</title>
</head>
<body>
    <h1>Eventos</h1>
 
    <?php if($eventos->count()) : ?>
        <?php foreach ($eventos as $evento) : ?>
            <h2><?php echo $eventos->titulo; ?></h2>
            <p><?php echo $eventos->conteudo; ?></p>
        <?php endforeach; ?>
    <?php else : ?>    
        <h2>Nenhum evento encontrado.</h2>
    <?php endif; ?>
 
</body>
</html>