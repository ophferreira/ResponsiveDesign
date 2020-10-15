<?php
    global $tituloPage;
    $tituloPage = "Contato";
    include('../parts/cabecalho.php');

    $name = '';
    $email = '';
    $msg = '';
    $erroForms = '';
    $sucessForms = '';

    if( isset($_POST['submit']) ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        if($name != '' && $email != '' && $msg != ''){
            //usuario preencheu corretamente
            $msgEmail = 'Nome: ' . $name . ' - ';
            $msgEmail .= 'Email: ' . $email . ' - ';
            $msgEmail .= 'Mensagem: ' . $msg;
            if(mail('pedro@gmail.com','Mensagem de contato', $msgEmail)){
                //email enviado
                $sucessForms = 'Mensagem enviada com sucesso.';
            }else{
                //email não enviado
                $erroForms = 'Falha ao enviar a mensagem.';
            }
        }else{
            //usuario não preencheu todos os campos
            $erroForms = 'Por favor, verifique o preenchimento dos campos.';
        }
    }
?>
        <header class="page-cabecalho">
            <h1 class="page-cabecalho-titulo">Contato</h1>
        </header>
        <section class="container page-conteudo">
            <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis dolore omnis, fugiat beatae vel, excepturi odit commodi incidunt necessitatibus consequatur error rem est? Quis eum impedit sapiente amet obcaecati molestiae.</p>
            <form action="contato.php" class="forms" method="post">
                <?php if($erroForms != '') : ?>
                    <div class="forms-erro">
                        <?php echo $erroForms ?>      
                    </div>
                <?php endif; ?>
                <?php if($sucessForms != '') : ?>
                    <div class="forms-sucesso">
                        <?php echo $sucessForms ?>      
                    </div>
                <?php endif; ?>
                <div class="forms-grupo forms-grupo-esq">
                    <label class="forms-label" for="name">Nome</label><br>
                    <input class="forms-campo" type="text" name="name" id="name">
                </div>
                <div class="forms-grupo forms-grupo-dir">
                    <label class="forms-label" for="email">Email</label><br>
                    <input class="forms-campo" type="email" name="email" id="email">
                </div>
                <div class="forms-grupo">
                    <label class="forms-label" for="msg">Mensagem</label><br>
                    <textarea class="forms-campo" name="msg" id="msg" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="forms-btn" value="Enviar" name="submit">
            </form>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit cum, repellat dolorum animi illum non facilis odio sit deserunt<br> perspiciatis nesciunt accusamus cupiditate nihil rerum vel voluptatem consequuntur, ipsam, quos quae?</p>
        </section>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29229.588890554343!2d-46.69119712321775!3d-23.68673378104544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1599448449626!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
<?php include('../parts/rodape.php'); ?>