<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php 
$config = "http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, (strpos($_SERVER['PHP_SELF'], "/", 1) + 1)) . "config.yaml";
$lines = file($config);
$title = trim($lines[87]);
unset($lines);
echo $title ?></title>
<meta name="description" content="Learn to code Python online!">
<meta name="theme-color" content="#6e3bb0">
<link rel="stylesheet" href="../css/reset.css" type="text/css" "media=screen">
<link rel="stylesheet" href="../css/style.css" type="text/css" "media=screen">
<script type="text/javascript" src="../js/mobile.js" media="screen and (max-width: 600px)"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest"><?php require_once("session.php");?>
<link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 600px)">
<link rel="stylesheet" type="text/css" href="../css/tablet.css" media="screen and (min-width: 601px) and (max-width: 1200px)">
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>