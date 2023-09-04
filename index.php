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
        /* Padrão moeda brasileira + resposta do input */
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $saque = $_GET['dinheiro'] ?? 0;

        /* Logica para atribuição as cédulas */
        $notaCem = $saque / 100;
        $notaCinquenta = $saque % 100 / 50;
        $notaDez = $saque % 50 / 10;
        $notaCinco = $saque % 10 / 5;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dinheiro">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="dinheiro" id="dinheiro" step="5" value="<?=$saque?>">
            <p>* Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar" id="sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao, $saque, "BRL")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <table>
            <ul>
                <tr>
                    <td><li><img src="img/nota100.jpg" alt="100 Reais"></li></td>
                    <td><strong>x<?=(int)$notaCem?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota50.jpg" alt="50 Reais"></li></td>
                    <td><strong>x<?=(int)$notaCinquenta?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota10.jpg" alt="10 Reais"></li></td>
                    <td><strong>x<?=(int)$notaDez?></strong></td>
                </tr>
                <tr>
                    <td><li><img src="img/nota5.jpg" alt="5 Reais"></li></td>
                    <td><strong>x<?=(int)$notaCinco?></strong></td>
                </tr>
            </ul>
        </table>
    </section>
</body>
</html>