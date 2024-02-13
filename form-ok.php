

<!DOCTYPE html>
<html>
<head lang="en">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <meta charset="UTF-8">
    <title>Дякую за замовлення!</title>


    <meta name="viewport" content="width=device-width">



<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

    <script>

</script>

<style type="text/css">

html { font-family: sans-serif; }
body { margin: 0px; }
audio:not([controls]) { display: none; height: 0px; }
svg:not(:root) { overflow: hidden; }
button::-moz-focus-inner, input::-moz-focus-inner { border: 0px none; padding: 0px; }
* { box-sizing: border-box; }
*::before, *::after { box-sizing: border-box; }
html { font-size: 10px; }
body { font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 14px; line-height: 1.42857; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); }
.container { margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px; }
/* ::::: http://it-sale.su/results/css/stylenull.css ::::: */

* { margin: 0px; padding: 0px; box-sizing: border-box; }
@font-face {
    font-family: "OpenSans";
    src: url('opensans.ttf');
}
@font-face {
    font-family: "OpenSansBold";
    src: url('opensansbold.ttf');
}
@font-face {
    font-family: "OpenSansItalic";
    src: url('opensansitalic.ttf');
}
@font-face {
    font-family: "OpenSansExtraBold";
    src: url('opensansextrabold.ttf');
}
@font-face {
    font-family: "OpenSansSemiBold";
    src: url('opensanssemibold.ttf');
}
html, body { height: 100%; width: 100%; }
body { background: rgb(234, 234, 234) url('bg.jpg') no-repeat scroll 50% 0px / cover ; text-align: center; padding: 50px; }
#cont { margin-top: 150px; display: inline-block; margin-right: auto; margin-left: auto; }
#ty { font-size: 4em; font-family: "OpenSansExtraBold"; color: rgb(66, 156, 98); line-height: 2em; text-align: center; margin: 0px auto 25px; padding-bottom: 15px; border-bottom: 1px solid rgb(0, 0, 0); width: 75%; }
.ty { font-size: 3em; font-family: "OpenSansSemiBold"; color: rgb(53, 53, 53); line-height: 1.2em; text-align: center; }
@media screen and (max-width: 680px) {
    #cont { margin-top: 10px; }
    #ty { font-size: 3em; line-height: 0.8em; width: auto; display: inline-block; padding: 0px 20px 15px; margin-bottom: 100px; }
    .ty { font-size: 2em; line-height: 1em; margin-bottom: 20px ! important; }
    body { padding-top: 5px; padding-right: 5px; padding-left: 5px; padding-bottom: 20px ! important; }
    @media screen and (max-width: 500px) {
    #cont { margin-top: 50px; }
    #ty { width: auto; display: inline-block; padding: 0px 20px 15px; margin-bottom: 80px; }
    .ty { line-height: 1em; }
    body { background-position: 35% 0px; padding: 5px; }
}
}

</style>

</head>
<body style="
            background: #FAFAD2 url(images/bg.jpg); /* Цвет фона и путь к файлу */
            color: #000000; /* Цвет текста */
            ">
<div class="block_success">
    <center>
        <h2 style="text-transform: uppercase;">
            Вітаємо! Ваше замовлення прийнято!
        </h2>
        <p class="success">
            Найближчим часом з вами зв'яжеться оператор для підтвердження замовлення.
            Будь ласка, увімкніть контактний телефон.
        </p>
        <h3 class="success">
            Будь ласка, перевірте правильність введеної інформації.
        </h3>
        <div class="success">
            <ul class="list_info">
                <span>ПІБ: </span><span id="client"><?php echo $_REQUEST['name']; ?></span>
                <br>
                <span>Телефон: </span><span id="tel"><?php echo $_REQUEST['phone']; ?></span>
            </ul>
            <br/>
            <span id="submit"></span>
        </div>
        <p class="fail success">
            Якщо ви помилилися під час заповнення форми, то, будь ласка,
            <a href="http://1.mixbags.space">
                заповніть заявку ще раз
            </a>
        </p>
    </center>
</div> 


</body>
</html>