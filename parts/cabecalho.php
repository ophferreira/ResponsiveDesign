<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $titulo = "Design Responsivo";
        global $tituloPage;
        if($tituloPage != ''){
            $titulo .= ' | ' . $tituloPage;
        }
    ?>
    <title> <?php echo $titulo?> </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPage == ''): ?>
                <h1 class="logo">Responsive Design</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Responsive Design</a>
            <?php endif; ?>
            <nav class="menu-principal menu-item-fechado">
                <button class="menu-principal-btn">Abri/Fechar Menu</button>
                <ul class="menu-lista">
                    <li><a class="menu-item <?php echo $tituloPage == '' ? 'menu-item-atual' : ''?>" href="index.php">Home</a></li>
                    <li><a class="menu-item <?php echo $tituloPage == 'Sobre nós' ? 'menu-item-atual' : ''?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-item <?php echo $tituloPage == 'Portifólio' ? 'menu-item-atual' : ''?>" href="portifolio.php">Portifólio</a></li>
                    <li><a class="menu-item <?php echo $tituloPage == 'Contato' ? 'menu-item-atual' : ''?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div><!--Fim Container-->
    </header>
    <main></main>