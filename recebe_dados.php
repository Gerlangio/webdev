<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $browser = $_POST['browser'];
    $comentario = $_POST['comentario'];
    if (isset($_POST['sexo']))
        $sexo = $_POST['sexo'];
    else
        $sexo = false;
    if (isset($_POST['box']))
        $box = $_POST['box'];
    else
        $box = false;
    $erro = 0;
    $mens_erro = "";
    if ($nome == "") {
        $erro = +1;
        $mens_erro = "$erro - Digite o nome.<br />";
    }
    if ($sexo == false) {
        $erro += 1;
        $mens_erro = $mens_erro . "$erro - Informe o sexo<br />";
    }
    if ($email == "") {
        $erro += 1;
        $mens_erro = $mens_erro . "$erro - Digite seu E-mail<br />";
    }
    if ($browser == "Browser") {
        $erro += 1;
        $mens_erro = $mens_erro . "$erro - Selecione um browser<br />";
    }
    if ($erro > 0) {
        print "<em>Formulário não preenchido corretamente</em>.
           <br /><br />";
        print $mens_erro;
        print "<br /><input type='button' value='Corrigir'
           onclick='javascript:history.go(-1)'>";
    } else {
        print "Nome: <strong> $nome </strong> &#8211; ";
        print "Sexo: <strong> $sexo </strong><br /><br />";
        print "E-mail: <strong> $email </strong><br /><br />";
        print "Browser: <strong> $browser </strong><br /><br />";
        $total = count($box); // total de registros do vetor $box
        print "Esportes:<br />";
        for ($i = 0; $i < $total; $i++) {
            print("<strong> $box[$i] </strong> "); //checkboxes selecionados
            if ($i < ($total - 1))
                print ", ";
            else
                print ". ";
        }
        print "<br><br>Comentario:<br /><strong>$comentario</strong><br />";
    }
    ?>
</body>

</html>
<html>