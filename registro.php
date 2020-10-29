<?php
include_once "ConeX.php";
?>
<form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="Figura" placeholder="Ingrese Figurita" ><br>
        <input type="submit" name='registrar' value='registrar'>
    </form>

<?php
if (isset($_POST["registrar"])) {
    $codigo = $_POST["Figura"];
}