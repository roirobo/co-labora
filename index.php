---
layout: default
lang: es
---

<div id="title">
<h1>co-labora</h1>
<h3>Oficina de co-working en Managua</h3>
</div>

Somos un grupo de diseñadores, programadores web, comunicadores, artistas, consultores y otras profesiones afines a la creatividad y tecnología. Estamos acostumbrados a trabajar independientemente y libres. Queremos abrir un espacio de <a href="#coworking">co-working</a> en Managua, Nicaragua y estamos buscando personas igualmente interesadas en este modelo para poder empezar con el proyecto, si estas buscando una oficina y te parece lo que proponemos, por favor suscríbite: 

<div class="subscription-form">
<?php
// RECEPTOR ADDRESS
$mail_to="contacto@co-labora.net";

$from_name=$_POST['fromname'];
$from_mail=$_POST['frommail'];
$information=$_POST['information'];
$rent=$_POST['rent'];
$mail_text=$_POST['mailtext'];
$send=$_POST['s'];

if(trim($from_name)=="") $err_text.="Por favor diganos su nombre.<br>";
if(trim($information)=="") $err_text.="Por favor selecione si está dispuesta/o a alquilar o simplemente quiere recibir noticias.<br>";
if(trim($from_mail)=="")
  $err_text.="Por favor diganos la dirección de su correo electrónico.<br>";
else
  if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$",$from_mail))
    $err_text.="Por favor comprueba la validez de su dirección de correo electrónico.<br>";

$from_name=str_replace(chr(34),"''",$from_name);
$mail_subject=str_replace(chr(34),"''",$mail_subject);
$from_name=stripslashes($from_name);
$from_mail=stripslashes($from_mail);
$mail_subject=stripslashes($mail_subject);
$mail_text=stripslashes($mail_text);

if(($send=="1") && (isset($err_text))) {
  echo "<p class='error message'>";
  echo "$err_text</p>";
}

?>


<?php

if(($send!="1") || (isset($err_text)))
{
?>

<form action="index.php" method="post">
<table border=0 cellspacing=2 cellpadding=0 width=100%>
<tr>
  <td nowrap align=right>Name:</td>
  <td width=100%><input type="text" name="fromname" size=40 maxlength=120 value="<?php echo $from_name; ?>"></td>
</tr>
<tr>
  <td nowrap align=right>Correo electronico:</td>
  <td width=100%><input type="text" name="frommail" size=35 maxlength=120 value="<?php echo $from_mail; ?>"></td>
</tr>

<tr>
  <td></td>
  <td><input type="checkbox" name="information" value="Deseando recibir información">Deseo recibir noticias sobre el proyecto.<br />
  <input type="checkbox" name="rent" value="Interesada/o en alquilar">Estoy interesada/o en alquilar.
  <input type="hidden" value="1" name="s">
</tr>
<tr>
  <td colspan="2" align="right"><input type="submit" value="Suscribir" name="submit"></td>
</tr>
</table>
</form>

<?php
} else {
  $header="From: $from_name <$from_mail>\n";
  $header.="Reply-To: $from_mail\n";
  $header.="X-Mailer: PHP-FormMailer (www.gaijin.at)\n";
  $header.="Content-Type: text/plain";
  $mail_date=gmdate("D, d M Y H:i:s")." GMT";
  $send=0;
  $mail_subject = 'Suscripcion co-labora.net';
  $mail_text = $from_name . ' se ha suscrito al sitio de co-labora.net. Con las siguientes solicitudes: ' . $information . ' ' . $rent;
  if(@mail($mail_to,$mail_subject,$mail_text,$header))
  {
    echo "<p class='success message'><b>Usted se ha suscrito con exito.</b></p>";
  }else{
    echo "<p class='error message'><b>Hubo un error en el sistema</b></p>";
  }
}
?>
</div>
Nos encuentras tambien en <a href="http://twitter.com/co_labora">Twitter</a> y <a href="http://facebook.com/colaboramanagua">Facebook</a>.

<h2>Se ofrecerá:</h2>

<ul><li>Un lugar para trabajar (con su escritorio + silla + UPS) en un espacio moderno, creativo y rodeado de otros profesionales.</li>
<li>Internet de alta velocidad</li>
<li>Una cafetería y lugar de receso donde ofrecemos café, té, agua, sodas y snacks gratis.</li>
<li>Pizarras acrilicas "whiteboard" para lluvias de ideas ("brainstorm") y visualizaciones.</li>
<li>Proyector ("datashow).</li>
<li>Sala de reuniones.</li>
</ul>

<h2><a id="coworking"></a>¿Que es Co-Working?</h2>

Los espacios de Coworking ofrecen a los profesionales independientes un lugar para trabajar, con las facilidades de una oficina regular (escritorios, sillas de trabajo, internet de alta velocidad, salón de reuniones) y algunos otros extras (comedor, bebidas, café, salas de relajación, sofás cómodos, video juegos, etc.), con el beneficio adicional de poder formar parte de una comunidad de profesionales afines - ya sea independientes, emprendedores o innovadores - que comparten conocimientos, recursos y, hasta en algunas ocasiones, proyectos. Más allá que simplemente trabajar con otros y tener una oficina per se, se trata de formar parte de un <a href="#ejemplos">movimiento global</a> que desea cambiar la manera convencional de trabajar.  En vez de ir todos los días a una oficina fría donde cada persona está tratando de hacer su trabajo para recibir su cheque quincenal o de quedarse trabajando solitariamente desde la casa, estás participando en una actividad donde, mientras manejas tu proyecto o negocio personal, puedes además colaborar, discutir y aportar, no solo en los proyectos que están desarrollando los miembros de la comunidad, sino en su vida cotidiana. Piensa más en palabras como: sinergia, colaboración, camadería e ideas compartidas. Es realmente una agrupación de profesionales independientes en un área de trabajo dentro de una comunidad, donde se incentiva la colaboración e intercambio de ideas entre los miembros.

<h2>Tarifas:</h2>

<ul>
<li>$ 10 Pase por un día</li>
<li>$ 30 Un día por semana durante un mes.</li>
<li>$ 80 Hasta tres veces por semana durante un mes..</li>
<li>$ 150 Tienes acceso diario a la comunidad de <strong>co-labora</strong> por un mes.</li>
</ul>

<h2>Horario:</h2>

Lunes a viernes, 8:30am a 6:00pm y sábado,
9:00am a 4:00pm. Aunque personas que alquilan el mes completo podrán quedarse más tiempo.

<h2>Lugar:</h2>
En este momento nos estamos formando y estamos buscando una casa adecuada y bonita en un lugar centrico de Managua para alquilar. Si vos nos podés recomendar una, por favor escribanos a <span class="pseudo-link">contacto (arroba) co-labora.net</span>

<h2><a id="ejemplos"></a>Ejemplos:</h2>

Lugares como este existen en otras partes del mundo. Si te gusta la idea y quieres ver algunos ejemplos, puedes visitar los siguientes sitios:
<ul>
<li><a href="http://cascostation.com">Casco Station</a> (Ciudad de Panama)</li>
<li><a href="http://madrid.the-hub.net">The Hub Madrid</a> (Madrid, España)</li>
<li><a href="http://workhub.com.mx">Workhub</a> (Ciuidad de Mexico)</li>
<li><a href="http://www.atrampolim.com.br">Trampolim</a> (São Paulo, Brazil)</li>
<li><a href="http://coworkcali.com">Coworking Tequendama</a> (Cali, Colombia)</li>
</ul>

<h2><a id="attributions"></a>Atribuciones:</h2>
<ul>
<li>Logotipo hecho por <a href="http://monchito.net">Monchito.net</a></li>
<li>Fotos de fondo publicadas bajo licencias CreativeCommons de <a href="http://jorgeyau.com/">Jorge Yau</a>, <a href="http://morinoko.com/">Harold Maduro</a> y <a href="http://madrideducacion.es/"><strong>madrid</strong>educacion.es</a>.</li>
<li>Textos inspirados en <a href="http://cascostation.com">Casco Station</a>.</li>
</ul>

