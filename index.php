<?php

/* the day in a number */

$numberOfTheDay = date('N');

/* tab var */

$enteredTab = ($_GET['tab']);
$enteredTheme = ($_GET['theme']);

$firstChecked = '';
$secondChecked = '';
$thirdChecked = '';
$defaultChecked ='';
$checkedCode =' checked="checked" ';

if(isset($enteredTab)){
	if ($enteredTab == "i") {
		$firstChecked = $checkedCode;
	} else if ($enteredTab == "ii") {
		$secondChecked = $checkedCode;
	} else if ($enteredTab == "dm") {
		$thirdChecked = $checkedCode;
	} else {
		$defaultChecked = $checkedCode;
	}
}
else {
	$defaultChecked = $checkedCode;
}

/* ainenimetused */

/* Ainulaadsed ained esmaspäev */

$subject_eesrakenduste_arendamine = 'Eesrakenduste arendamine';
$subject_programmeerimise_pohikursus = 'Programmeerimise põhikursus';
$subject_arvutigraafika = 'Arvutigraafika';
$subject_tarkvara_testimise_alused = 'Tarkvara testimise alused';
$subject_algoritmid_ja_andmestruktuurid = 'Algoritmid ja andmestruktuurid';

/* Ainulaadsed ained teisipäev */

$subject_hulgateooria_ja_loogika_elemendid = 'Hulgateooria ja loogika elemendid';
$subject_yldotstarbelised_arendusplatvormid1 = '12:00 - Üldotstarbelised arendusplatvormid';
$subject_yldotstarbelised_arendusplatvormid2 = 'Üldotstarbelised arendusplatvormid';

/* Ainulaadsed ained kolmapäeval */
/* Ainulaadsed ained neljapäeval */

$subject_veeb_ja_meedia_elemendid = 'Veeb ja meedia elemendid';
$subject_tarkvaraarenduse_praktika = 'Tarkvaraarenduse praktika';

/* Ainulaadsed ained reedel */

$subject_robootika = '09:00 - Roobotika';


/* lingid */

/* Ainulaadsed lingid esmaspäev */

$link_eesrakenduste_arendamine = '<a href="#" class="under">Eesrakenduste</a>';
$link_programmeerimise_pohikursus = '<a href="#" class="under">Java</a>';
$link_arvutigraafika = '<a href="#" class="under">Arvutigraafika</a>';
$link_tarkvara_testimise_alused = '<a href="#" class="under">Testimise</a>';
$link_algoritmid_ja_andmestruktuurid = '<a href="#" class="under">Algoritmid</a>';

/* Ainulaadsed lingid teisipäev */

$link_hulgateooria_ja_loogika_elemendid = '<a href="#" class="under">Hulgateooria</a>';
$link_yldotstarbelised_arendusplatvormid = '<a href="#" class="under">link</a>';

/* Ainulaadsed ained kolmapäeval */
/* Ainulaadsed ained neljapäeval */

$link_veeb_ja_meedia_elemendid = '<a href="#" class="under">Veeb</a>';
$link_tarkvaraarenduse_praktika = '<a href="#" class="under">Tarkvaraarenduse</a>';

/* Ainulaadsed ained reedel */

$link_robootika = '<a href="#" class="under">Roobotika</a>';


?>
<!DOCTYPE html>
<html lang="et">
<head>
<script>
	const query = new URLSearchParams(window.location.search); // see tabs for usage
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>IF18</title>
<?php

if ($numberOfTheDay == 1 or $numberOfTheDay == 2 or $numberOfTheDay == 3 or $numberOfTheDay == 4 or $numberOfTheDay == 5 or isset($enteredTheme)){

	echo "<style>";
	
	if ($enteredTheme == "dark"){
		
		echo "html,body { background-color: black; color: white; }\n";
		echo ".container { background-color: black; color: white; }\n";
		echo ".table { background-color: black; color: white; }\n";
		echo "a:link, a:visited { color: white; }\n";
		echo "a.special { color: hotpink; }\n";
		echo "a.special:hover { color: white; }\n";
		echo ".more a.under:hover { color: white; border-color: hotpink; }\n";
		echo ".handdrawnbox { border: 2px solid #ffffff; }\n";
		echo ".label { color: white; }\n";	
		
	} 	
	
	$darkColor = "#303030";
	$otherColor = "yellow";
	
	if ($numberOfTheDay == 1) {
		echo ".handdrawnbox.Monday { background-color: ";
		if ($enteredTheme == "dark"){
			echo $darkColor;
		} else {
			echo $otherColor;
		}
		echo "; }\n";
	} elseif ($numberOfTheDay == 2) {
		echo ".handdrawnbox.Tuesday { background-color: ";
		if ($enteredTheme == "dark"){
			echo $darkColor;
		} else {
			echo $otherColor;
		}
		echo "; }\n";
	} elseif ($numberOfTheDay == 3) {
		echo ".handdrawnbox.Wednesday { background-color: ";
		if ($enteredTheme == "dark"){
			echo $darkColor;
		} else {
			echo $otherColor;
		}
		echo "; }\n";
	} elseif ($numberOfTheDay == 4) {		
		echo ".handdrawnbox.Thursday { background-color: ";
		if ($enteredTheme == "dark"){
			echo $darkColor;
		} else {
			echo $otherColor;
		}
		echo "; }\n";
	} elseif ($numberOfTheDay == 5) {
		echo ".handdrawnbox.Friday { background-color: ";
		if ($enteredTheme == "dark"){
			echo $darkColor;
		} else {
			echo $otherColor;
		}
		echo "; }\n";
	}
	
	echo "</style>";
}

?>
</head>
<body>

<div class="container">
<div class="ribbon bottom-right posiFixed hotpink"><a href="changelog.log" class="specialTwo" target="_blank">changelog</a></div>
<h5>1.3.0</h5>
<h4>IF18</h4>
<div class="tabs">
  <input class="input" name="tabs" type="radio" id="tab-1"<?php echo $firstChecked . $defaultChecked?> onclick="query.append('tab', 1);"/>
  <label class="label" for="tab-1">TA I</label>
  <div class="panel">
    <table class="table">
	<tr class="weekdays">
		<td></td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
	</tr>
	<tr>
		<th>08:15 - 09:45</th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="handdrawnbox Friday" rowspan="2"><a id="hide11" href="#hide11" class="hide"><?php echo $subject_robootika ?></a><a id="show11" href="#show11" class="show"><?php echo $subject_robootika ?></a><div class="more"><?php echo $link_robootika ?></div></td>
	</tr>
	<tr>
		<th>10:15 - 11:45</th>
		<td class="handdrawnbox Monday" rowspan="2"><a id="hide12" href="#hide12" class="hide"><?php echo $subject_programmeerimise_pohikursus ?></a><a id="show12" href="#show12" class="show"><?php echo $subject_programmeerimise_pohikursus ?></a><div class="more"><?php echo $link_programmeerimise_pohikursus ?></div></td>
		<td class="handdrawnbox Tuesday"><a id="hide13" href="#hide13" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show13" href="#show13" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td></td>
		<td></td>
		<!--<td></td>-->
	</tr>
	<tr>
		<th>12:15 - 13:45</th>
		<!-- <dt></dt> -->
		<td class="handdrawnbox Tuesday" rowspan="2"><a id="hide14" href="#hide14" class="hide"><?php echo $subject_yldotstarbelised_arendusplatvormid1 ?></a><a id="show14" href="#show14" class="show"><?php echo $subject_yldotstarbelised_arendusplatvormid1 ?></a><div class="more"><?php echo $link_yldotstarbelised_arendusplatvormid ?></div></td>
		<td></td>
		<td class="handdrawnbox Thursday"><a id="hide15" href="#hide15" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show15" href="#show15" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>14:15 - 15:45</th>
		<td class="handdrawnbox Monday"><a id="hide16" href="#hide16" class="hide"><?php echo $subject_tarkvara_testimise_alused ?></a><a id="show16" href="#show16" class="show"><?php echo $subject_tarkvara_testimise_alused ?></a><div class="more"><?php echo $link_tarkvara_testimise_alused ?></div></td>
		<!--<td></td>-->
		<td></td>
		<td class="handdrawnbox Thursday"><a id="hide17" href="#hide17" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show17" href="#show17" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>16:15 - 17:45</th>
		<td class="handdrawnbox Monday"><a id="hide18" href="#hide18" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show18" href="#show18" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td class="handdrawnbox Tuesday" rowspan="2"><a id="hide19" href="#hide19" class="hide"><?php echo $subject_eesrakenduste_arendamine ?></a><a id="show19" href="#show19" class="show"><?php echo $subject_eesrakenduste_arendamine ?></a><div class="more"><?php echo $link_eesrakenduste_arendamine ?></div></td>
		<td class="handdrawnbox Wednesday"><a id="hide110" href="#hide110" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show110" href="#show110" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td class="handdrawnbox Thursday"><a id="hide111" href="#hide111" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show111" href="#show111" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>18:15 - 19:45</th>
		<td></td>
		<!-- <td></td>-->
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
  </div>
  <input class="input" name="tabs" type="radio" id="tab-2"<?php echo $secondChecked?> onclick="query.append('tab', 2);"/>
  <label class="label" for="tab-2">TA II</label>
  <div class="panel">
    <table class="table">
	<tr class="weekdays">
		<td></td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
	</tr>
	<tr>
		<th>08:15 - 09:45</th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="handdrawnbox Friday" rowspan="2"><a id="hide21" href="#hide21" class="hide"><?php echo $subject_robootika ?></a><a id="show21" href="#show21" class="show"><?php echo $subject_robootika ?></a><div class="more"><?php echo $link_robootika ?></div></td>
	</tr>
	<tr>
		<th>10:15 - 11:45</th>
		<td class="handdrawnbox Monday" rowspan="2"><a id="hide22" href="#hide22" class="hide"><?php echo $subject_eesrakenduste_arendamine ?></a><a id="show22" href="#show22" class="show"><?php echo $subject_eesrakenduste_arendamine ?></a><div class="more"><?php echo $link_eesrakenduste_arendamine ?></div></td>
		<td class="handdrawnbox Tuesday"><a id="hide23" href="#hide23" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show23" href="#show23" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td class="handdrawnbox Wednesday"><a id="hide24" href="#hide24" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show24" href="#show24" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td class="handdrawnbox Thursday" rowspan="2"><a id="hide25" href="#hide25" class="hide"><?php echo $subject_yldotstarbelised_arendusplatvormid2 ?></a><a id="show25" href="#show25" class="show"><?php echo $subject_yldotstarbelised_arendusplatvormid2 ?></a><div class="more"><?php echo $link_yldotstarbelised_arendusplatvormid ?></div></td>
		<!--<td></td>-->
	</tr>
	<tr>
		<th>12:15 - 13:45</th>
		<!-- <dt></dt> -->
		<td></td>
		<td class="handdrawnbox Wednesday" rowspan="2"><a id="hide26" href="#hide26" class="hide"><?php echo $subject_programmeerimise_pohikursus ?></a><a id="show26" href="#show26" class="show"><?php echo $subject_programmeerimise_pohikursus ?></a><div class="more"><?php echo $link_programmeerimise_pohikursus ?></div></td>
		<!--<td></td>-->
		<td></td>
	</tr>
	<tr>
		<th>14:15 - 15:45</th>
		<td class="handdrawnbox Monday"><a id="hide27" href="#hide27" class="hide"><?php echo $subject_tarkvara_testimise_alused ?></a><a id="show27" href="#show27" class="show"><?php echo $subject_tarkvara_testimise_alused ?></a><div class="more"><?php echo $link_tarkvara_testimise_alused ?></div></td>
		<!--<td></td>-->
		<td></td>
		<td class="handdrawnbox Thursday"><a id="hide28" href="#hide28" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show28" href="#show28" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>16:15 - 17:45</th>
		<td class="handdrawnbox Monday"><a id="hide29" href="#hide29" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show29" href="#show29" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td></td>
		<td class="handdrawnbox Wednesday"><a id="hide210" href="#hide210" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show210" href="#show210" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td class="handdrawnbox Thursday"><a id="hide211" href="#hide211" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show211" href="#show211" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>18:15 - 19:45</th>
		<td></td>
		<!-- <td></td>-->
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
  </div>
  <input class="input" name="tabs" type="radio" id="tab-3"<?php echo $thirdChecked?> onclick="query.append('tab', 3);"/>
  <label class="label" for="tab-3">DM</label>
  <div class="panel">
    <table class="table">
	<tr class="weekdays">
		<td></td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
	</tr>
	<tr>
		<th>08:15 - 09:45</th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="handdrawnbox Friday" rowspan="2"><a id="hide31" href="#hide31" class="hide"><?php echo $subject_robootika ?></a><a id="show31" href="#show31" class="show"><?php echo $subject_robootika ?></a><div class="more"><?php echo $link_robootika ?></div></td>
	</tr>
	<tr>
		<th>10:15 - 11:45</th>
		<td></td>
		<td class="handdrawnbox Tuesday"><a id="hide32" href="#hide32" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show32" href="#show32" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td class="handdrawnbox Wednesday" rowspan="2"><a id="hide33" href="#hide33" class="hide"><?php echo $subject_programmeerimise_pohikursus ?></a><a id="show33" href="#show33" class="show"><?php echo $subject_programmeerimise_pohikursus ?></a><div class="more"><?php echo $link_programmeerimise_pohikursus ?></div></td>
		<td class="handdrawnbox Thursday" rowspan="2"><a id="hide34" href="#hide34" class="hide"><?php echo $subject_veeb_ja_meedia_elemendid ?></a><a id="show34" href="#show34" class="show"><?php echo $subject_veeb_ja_meedia_elemendid ?></a><div class="more"><?php echo $link_veeb_ja_meedia_elemendid ?></div></td>
		<!--<td></td>-->
	</tr>
	<tr>
		<th>12:15 - 13:45</th>
		<td class="handdrawnbox Monday" rowspan="2"><a id="hide35" href="#hide35" class="hide"><?php echo $subject_arvutigraafika ?></a><a id="show35" href="#show35" class="show"><?php echo $subject_arvutigraafika ?></a><div class="more"><?php echo $link_arvutigraafika ?></div></td>
		<td class="handdrawnbox Tuesday" rowspan="2"><a id="hide36" href="#hide36" class="hide"><?php echo $subject_eesrakenduste_arendamine ?></a><a id="show36" href="#show36" class="show"><?php echo $subject_eesrakenduste_arendamine ?></a><div class="more"><?php echo $link_eesrakenduste_arendamine ?></div></td>
		<!--<td></td>-->
		<!--<td></td>-->
		<td></td>
	</tr>
	<tr>
		<th>14:15 - 15:45</th>
		<!--<td></td>-->
		<!--<td></td>-->
		<td class="handdrawnbox Wednesday"><a id="hide37" href="#hide37" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show37" href="#show37" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td class="handdrawnbox Thursday"><a id="hide38" href="#hide38" class="hide"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><a id="show38" href="#show38" class="show"><?php echo $subject_hulgateooria_ja_loogika_elemendid ?></a><div class="more"><?php echo $link_hulgateooria_ja_loogika_elemendid ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>16:15 - 17:45</th>
		<td class="handdrawnbox Monday"><a id="hide39" href="#hide39" class="hide"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><a id="show39" href="#show39" class="show"><?php echo $subject_algoritmid_ja_andmestruktuurid ?></a><div class="more"><?php echo $link_algoritmid_ja_andmestruktuurid ?></div></td>
		<td></td>
		<td class="handdrawnbox Wednesday"><a id="hide310" href="#hide310" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show310" href="#show310" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td class="handdrawnbox Thursday"><a id="hide311" href="#hide311" class="hide"><?php echo $subject_tarkvaraarenduse_praktika ?></a><a id="show311" href="#show311" class="show"><?php echo $subject_tarkvaraarenduse_praktika ?></a><div class="more"><?php echo $link_tarkvaraarenduse_praktika ?></div></td>
		<td></td>
	</tr>
	<tr>
		<th>18:15 - 19:45</th>
		<td></td>
		<!-- <td></td>-->
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
  </div>
</div>
<h2>¹ ligipääsetav ainult läbi TLÜ lan-ist vöi tunneliga</h2>
<h2>² no https</h2>
<?php

if ($numberOfTheDay > 5) {
	echo "<h3>** No highlight due to it being ";
	
	if ($numberOfTheDay == 6 ) {
		echo "Saturday</h3>";	
	} elseif ($numberOfTheDay == 7) {
		echo "Sunday</h3>";
	} elseif ($numberOfTheDay > 7) {
		echo "Alien Day (please contact Fox Molder and Dana Scully) no, seriously, please report this bug, no such day (php date('N') > 7)</h3>";
	}
}
?>

<h4>Üldinfo</h4>
<ul>
	<li><h8><a href="https://discord.gg/pTMsdgF" class="special" target="_blank">DISCORDI server</a></h8> (Slacki enam ei kasuta, see on selle asemel =) )</li>
	<li>student:D..</li>
	<li>\\bitt\if18 | if18:ra..</li>
	<li>greeny.cs.tlu.ee | osa_eesnimest + osa_perenimest:pw</li>
	<li>lin2.tlu.ee | ÕIS kasutaja:pw</li>
	<li><a href="https://www.tlu.ee/asio/" class="special" target="_blank">ASIO</a> (https) | <a href="https://www.tlu.ee/asio/kalenterit2/index.php?av_v=&av=180910180916180916&cluokka=&kt=lk&laji=&guest=intranet%2Ftu&lang=est&ui=&yks=&clk%5B%5D=IFIFB-1&jagu=4&b_lk=Esita+valik+kombineeritult+%3E%3E&b=1537092414&av_y=0" class="special" target="_blank">ASIO IFIF18 1.õ.-a.</a> (https)</li>
	<li><a href="https://www.tlu.ee/masio/" class="special" target="_blank">mASIO</a> (https) | <a href="https://www.tlu.ee/masio/?id=ryhm&ryhm=IFIFB-1#mASIO" class="special" target="_blank">mASIO IFIF18 1.õ.-a.</a> (https)</li>
	<li><a href="https://ois2.tlu.ee/" class="special" target="_blank">ÕIS</a> (https)</li>
	<li><a id="hide40" href="#hide40" class="hide special">+ GitHub käsud (push)</a><a id="show40" href="#show40" class="show special">- GitHub käsud (push)</a><div class="more"><p>git add .</p><p>git commit -m "kommentaar"</p><p>git push</p></div></li>
	<li><a id="hide41" href="#hide41" class="hide special">+ SQL info</a><a id="show41" href="#show41" class="show special">- SQL info</a><div class="more"><p><a href="http://greeny.cs.tlu.ee/phpMyAdmin" class="special" target="_blank">greeny.cs.tlu.ee/phpMyAdmin</a> (tunneliga ainult)</p><p>greeny (putty): mysql -uif.. -pif.. if18_nimi (spetsiaalselt ei kirjutanud välja)</p></div></li>
	<li><a id="hide42" href="#hide42" class="hide special">+ muud materjalid</a><a id="show42" href="#show42" class="show special">- muud materjalid</a><div class="more"><p><a href="http://caupo.ee/tlu/" class="special" target="_blank">http://caupo.ee/tlu/</a></p><p><a href="http://www.cs.tlu.ee/instituut/nouded/lopu_too/yliopilastoode_vormistusjuhend_2016a.pdf" class="special" target="_blank">Lõputöö vormistamise juhend</a></p><p><a href="https://madis0.gitlab.io/tlu-eap/" class="special" target="_blank">Madise EAP calc</a></p><p><a href="https://drive.google.com/drive/u/0/folders/16hDQYkxrAxfkkIYyaWXUOwvxAp4VpnH1" class="special" target="_blank">Caupo TLÜ Google Drive Shared</a></p><p><a href="https://products.office.com/en/student/office-in-education" class="special" target="_blank">Office 365 for students for free</a></p></div></li>
</ul>
<div class="by">by Raimo Pregel, 2019</div>
</div>

</body>
</html>