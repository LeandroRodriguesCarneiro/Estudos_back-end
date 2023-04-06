<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <?php
    //se adicionar @ vira gambiarra
   //metodo $_GET
   /*
   if(isset($_GET['acao'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];

        echo $nome;
        echo '<br/>';
        echo $email;
    }*/
    /*
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo $nome;
        echo '<br/>';
        echo $email;
    }*/
    if(isset($_POST['acao'])){
        foreach ($_POST['valor'] as $key => $value) {
            echo $key;
            echo '=>';
            echo $value;

            echo '<hr>';

        }
    }

    ?>
    <form method="POST">
        <input type = "text" name = "nome" />
        <input type = "text" name = "email" />
		<select name="nome">
			<option value="Leandro">Leandro</option>
			<option value="Guilherme">Guilherme</option>
		</select>
		<input type="checkbox" name="valor[]" value="10">10
		<input type="checkbox" name="valor[]" value="20">20
		<input type="checkbox" name="valor[]" value="30">30
		<input type="checkbox" name="valor[]" value="40">40
        <input type = "submit" name = "acao" value="enviar" />
    </form>
</body>
</html>

	