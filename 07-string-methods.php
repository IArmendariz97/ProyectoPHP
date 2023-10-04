<?php include 'includes/header.php';

$mail = "kipi@HOTMAIL.COM";

echo strtoupper($mail);
echo("<br>");
echo strtolower($mail);
echo("<br>");
echo strpos($mail, "hotmail");
echo("<br>");
echo "el cliente tiene este mail {$mail}";
echo("<br>");
echo 'el cliente tiene este mail ' . $mail;
echo("<br>");

echo str_replace("HOTMAIL.COM", "hotmail.com", $mail);
echo("<br>");
echo str_replace(".COM", ".com.ar", $mail);
echo("<br>");
echo($mail);
echo("<br>");

$nombre = "       armen ";

echo strlen($nombre);
echo("<br>");
echo trim($nombre);
echo("<br>");
echo strlen($nombre);



include 'includes/footer.php';