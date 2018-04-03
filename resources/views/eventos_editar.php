<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Eventos</title>
</head>
<body>
    <h1>Editar Eventos</h1>
 
    <form method="post">
        <div>
            <input name="titulo" type="text" placeholder="Título" value="<?php echo $eventos->titulo; ?>">
        </div>
        <div>
            <textarea name="conteudo"><?php echo $eventos->conteudo; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $eventos->id; ?>">
        <input type="submit" value="Salvar">
    </form>
 
</body>
</html>