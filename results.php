<?php 
    $textarea=$_GET['textarea'];
    $parolaOscurata=$_GET['parolaOscurata'];
    $parolaOscurataRisultato=str_ireplace($parolaOscurata,'***',$textarea);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Results</title>
    </head>
<body>
    <main>
        <h3>
            <?php echo $textarea; ?>
        </h3>
        <h3>
            <?php echo $parolaOscurata; ?>
        </h3>
        <h3>
            La lunghezza del paragrafo è: <?php echo strlen($textarea); ?>
        </h3>
        <h3>
            <?php echo $parolaOscurataRisultato; ?>
        </h3>
        <h3>
            La lunghezza del paragrafo è: <?php echo strlen($parolaOscurataRisultato); ?>
        </h3>
    </main>
    
</body>
</html>