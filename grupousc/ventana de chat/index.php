<?

session_start ();

if (isset ($ _ GET [ 'Salir'])) {

//Simple exit message

$fp = fopen("log.html", 'a');

fwrite($fp, "&lt;div class='msgln'>&lt;i>User ". $_SESSION['name'] ." has left the chat session.&lt;/i>&lt;/div>");

fclose($fp);

session_destroy();

header("Location: index.php"); //Redirect the user

}

LoginForm función () {

echo'

&lt;div id="loginform">

&lt;form action="index.php" method="post">

&lt;p>Please enter your name to continue:&lt;/p>

&lt;label for="name">Name:&lt;/label>

&lt;input type="text" name="name" id="name" />

&lt;input type="submit" name="enter" id="enter" value="Enter" />

&lt;/form>

&lt;/div>

';

}

if (isset ($ _POST [ 'enter'])) {

if($_POST['name'] != ""){

$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));

}

else{

echo '&lt;span class="error">Please type in a name&lt;/span>';

}

}

?>
<! DOCTYPE html PUBLIC "- // W3C // DTD XHTML 1.0 Transitional // EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<Html xmlns = "http://www.w3.org/1999/xhtml">

<Head>

<Title> Chat - Módulo cliente </ title>

<Tipo de vínculo = "text / css" rel = "stylesheet" href = "style.css" />

</ Head>

<? Php

if (! isset ($ _ SESSION [ 'nombre'])) {

loginForm();

}

más{

?>

<Div id = "contenedor">

&lt;div id="menu">

&lt;p class="welcome">Welcome, &lt;b>&lt;?php echo $_SESSION['name']; ?>&lt;/b>&lt;/p>

&lt;p class="logout">&lt;a id="exit" href="#">Exit Chat&lt;/a>&lt;/p>

&lt;div style="clear:both">&lt;/div>

&lt;/div>

&lt;div id="chatbox">&lt;?php

if(file_exists("log.html") && filesize("log.html") > 0){

$handle = fopen("log.html", "r");

$contents = fread($handle, filesize("log.html"));

fclose($handle);

echo $contents;

}

?>&lt;/div>

&lt;form name="message" action="">

&lt;input name="usermsg" type="text" id="usermsg" size="63" />

&lt;input name="submitmsg" type="submit" id="submitmsg" value="Send" />

&lt;/form>

</ Div>

<Script type = "text / javascript" src = "& lt; / script"> http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js "> & lt; / script>

<Script type = "text / javascript">

// Documento jQuery

$ (Document) ready (function () {

//If user submits the form

$("#submitmsg").click(function(){

var clientmsg = $("#usermsg").val();

$.post("post.php", {text: clientmsg});

$("#usermsg").attr("value", "");

return false;

});

//Load the file containing the chat log

function loadLog(){

var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;

$.ajax({

URL: "log.html",

cache: false,

success: function(html){

$("#chatbox").html(html); //Insert chat log into the #chatbox div

var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;

if(newscrollHeight > oldscrollHeight){

$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div

}

},

});

}

setInterval (loadLog, 2500); //Reload file every 2.5 seconds

//If user wants to end session

$("#exit").click(function(){

var exit = confirm("Are you sure you want to end the session?");

if(exit==true){window.location = 'index.php?logout=true';}

});

});

</ Script>

<? Php

}

?>

</ Body>

</ Html>