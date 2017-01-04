
<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">

    <script defer src="scripts/jquery-3.1.0.min.js"></script>
    <script defer src="scripts/app.js"></script>

    <script>
        window.appConfig = {
            serverUrl: '127.0.0.1'
        }
    </script>
</head>
<body>

<section id="selection-view">
    <header>
        <h1>Choose your flavors<br><br>( 1 OZ Increments )</h1>
    </header>
    <section class="flavors">
        <article data-flavor="vodka">
            <span>Vodka</span>
        </article>
        <article data-flavor="peach_schnapps">
            <span>Peach<br>Schnapps</span>
        </article>
        <article data-flavor="gin">
            <span>Gin</span>
        </article>
        <article data-flavor="white_rum">
            <span>White<br>Rum</span>
        </article>
        <article data-flavor="tequila">
            <span>Tequila<br></span>
        </article>
        <article data-flavor="orange_juice">
            <span>Orange<br>Juice</span>
        </article>
        <article data-flavor="cranberry_juice">
            <span>Cranberry<br>Juice</span>
        </article>
        <article data-flavor="coka_cola">
            <span>Coka-Cola</span>
        </article>
    </section>
    <section class="ingredients">
        <div>
            <span></span>
            <a class="reset-button">[reset]</a>
        </div>
    </section>
    <footer>
        <button class="do-it-button"><span>Start</span></button>
        <button class="do-it-button"><a href="index.php"><span>Cancel</span></a></button>
    </footer>
</section>

<section id="connect-view">
    <header>
        <h1>Enter connect code</h1>
    </header>
    <form>
        <input id="connect-code" type="text" placeholder="0000" maxlength="4">
    </form>
    <footer>
        <button><span>Connect</span></button>
    </footer>
</section>

<section id="result-view">
    <header>
        <h1></h1>
    </header>
    <section class="result">
        <div class="loading">
            <div class="loading-animation"></div>
        </div>
        <div class="success">
            Complete.<br>
            Your Drink is Ready.
        </div>
        <div class="failure">
            Error
        </div>
    </section>
    <footer>
        <a class="restart-link" href="custom.php">Restart</a>
    </footer>
</section>

</body>
</html>