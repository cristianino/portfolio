<?

session_start ();

if (isset ($ _ SESSION [ 'nombre'])) {

$text = $_POST['text'];

$fp = fopen("log.html", 'a');

fwrite($fp, "&lt;div class='msgln'>(".date("g:i A").") &lt;b>".$_SESSION['name']."&lt;/b>: ".stripslashes(htmlspecialchars($text))."&lt;/div>");

fclose($fp);

}

?>