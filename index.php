<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include 'Logica.php';
        $sacarDinheiro = new SomaBanco($_GET['dinheiro'] ?? 0);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dinheiro">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="dinheiro" id="dinheiro" step="5" value="<?=$sacarDinheiro->retornarSaque()?>">
            <p>* Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar" id="sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?=$sacarDinheiro->mostrarSaque()?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <table>
            <ul>
                <tr>
                    <td><li><img src="img/nota100.jpg" alt="100 Reais"></li></td>
                    <td><strong>x<?=(int)$sacarDinheiro->retornarNotaCem()?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota50.jpg" alt="50 Reais"></li></td>
                    <td><strong>x<?=(int)$sacarDinheiro->retornarNotaCinquenta()?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota10.jpg" alt="10 Reais"></li></td>
                    <td><strong>x<?=(int)$sacarDinheiro->retornarNotaDez()?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota5.jpg" alt="5 Reais"></li></td>
                    <td><strong>x<?=(int)$sacarDinheiro->retornarNotaCinco()?></strong></td>
                </tr>
            </ul>
        </table>
    </section>
</body>
</html>