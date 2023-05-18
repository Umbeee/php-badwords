<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<style>
    .container{
        width: 80%;
        margin: 50px auto;
        font-family: arial;
    }
    button{
        background-color: lightskyblue;
    }
</style>
<body> 
    <div class="container">

    <h1>Censura il testo!</h1>
    <form action="landing.php">
    
        <input type="text" placeholder="inserisci paragrafo" name="paragrafo">
        <input type="text" placeholder="inserisci parola da censurare" name="parola">

        <button type="submit">invia</button>
    
    </form>
    </div>
</body>
</html>