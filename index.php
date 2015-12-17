<?php
require_once '_defines.php';
    require_once  'view_parts/_page_base.php';

?>
    <link rel="stylesheet" type="text/css" href="CSS/style_chat.css">
<div id = 'main'>
<h1>est ce que ca marche?</h1>
</div>
<?php
require_once 'view_parts/_footer.php';
?>

<?php
if($_GET['page'] == "dashboard") {
    include("dashboard.php");
}else if($_GET['page'] == "contact") {
    include("contact.php");
}else if($_GET['page'] == "inscription") {
    include("inscription.php");
}
?>


