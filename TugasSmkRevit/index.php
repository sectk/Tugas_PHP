<?php
echo "Belajar PHP";
echo '<br>';
echo "Saya Siswa Rpl";
echo '<h1 style="background-color:red">Belajar PHP itu MUDAH</h1>
    <p style="background-color:blue">Saya Suka Pemograman</p>'

;

echo '<br>';

echo 'Saya Belajar','PHP','<br>';

echo 2019 + 2;




Batas

    ini adalah kode zodiak lengkap
    
<?php
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
<title>Cari Tau Apa Zodiakmu! - BAS</title>
<style>
    body {
        font-family: arial;
        font-size: 15px;
    }
 
    br {
        clear: left;
    }
 
    label {
        float: left;
        width: 120px;
    }
 
    label, span {
        font-weight: bold;
    }
 
    span {
        color: #3a6b7c;
        display: inline-block;
    }
    .top {
        vertical-align:text-top;
    }
 
    .gradien1 {
background: #e2e2e2; /* Old browsers */
background: -moz-linear-gradient(top,  #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e2e2e2), color-stop(50%,#dbdbdb), color-stop(51%,#d1d1d1), color-stop(100%,#fefefe)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%); /* IE10+ */
background: linear-gradient(to bottom,  #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 ); /* IE6-9 */
    }
 
</style>
 
<script language=Javascript>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
 
return false;
return true;
}
  
var jmlhari_di_bulan = Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
  
function byId(id){
  return document.getElementById ?  document.getElementById(id) : document.all[id];
}
 
function populateDays(month) {
  // validate month number here
  var days = jmlhari_di_bulan[month];
document.forms[0].tanggal.options.length = 0;
if(month==2){
thn_lhr = document.forms[0].tahun.value;
if (thn_lhr % 4 == 0)
{
    if(thn_lhr % 100 == 0)
    {
    if(thn_lhr % 400 == 0){days=29;}
    }
    else {days=29;}
}
}
  for (i = 1; i <= days; i++) {
    var option = document.createElement('option');
    option.text = option.value = i;
    try      { byId('days').add(option, null); } // non-IE
    catch(e) { byId('days').add(option); } // IE
  }
}
</script>
</head>
<body onload="document.forms[0].nama.focus()">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=189595874497644";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="kotakutama">
<table cellpadding="5" cellspacing=0 border="1" bordercolor="grey">
<form action="" name="formZodiak" method="post">
<tr><td class="gradien1" colspan=2 align="center" bgcolor="#e5e5e5"><strong>Cari Zodiak</strong></td></tr>
<tr>
<td align="right"><label>Nama : </label></td>
<td><input type="text" size = 35 name="nama" maxlength=35 placeholder="Tulis Nama Anda"></td>
</tr>
<tr>
<td align="right"><label>Tanggal Lahir : </label></td>
<td>
<input onchange="populateDays(document.forms[0].bulan.value)" onkeypress="return isNumberKey(event)" name="tahun" size=4 placeholder="Tahun" maxlength=4>
 - 
<select onclick="populateDays(document.forms[0].bulan.value)" onchange="populateDays(document.forms[0].bulan.value)" name="bulan" style="width:100px">
    <option value="">---</option>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">Nopember</option>
    <option value="12">Desember</option>
    </select> - <select id="days" name="tanggal" style="width:60px"><option></option>
</select>
</td>
</tr>
<tr><td align="right" colspan=2>
<input type="submit" name="cari" value="Cari" style="width:90px;height:30px">
<input type="reset" name="batal" value="Reset" style="width:100px;height:30px">
</td></tr>
<?php
    if(isset($_POST['cari'])){
        $namanya = $_POST['nama'];
        $tgl = $_POST['tanggal'];
        $bln = $_POST['bulan'];
        $thn = $_POST['tahun'];
if(empty($tgl)||empty($bln)||empty($thn)){
echo "<script>alert('Isi data dengan BENAR!')</script>";
}
else {
        $namahari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
        $arraypasaran = array('Kliwon','Legi','Pahing','Pon','Wage');
        $namabulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');
        $myweekday = date("w",mktime(0, 0, 0, $bln, $tgl, $thn));
        $selisihjulian = abs(GregorianToJD(1,1,2013) - GregorianToJD($bln,$tgl,$thn));
        $myharipasaran = $arraypasaran[($selisihjulian)%5];
        $tgllhr = $namahari[$myweekday]." ".$myharipasaran.", ".$tgl." ".$namabulan[$bln]." ".$thn;
        $utahun = date("Y") - $thn;
        $ubulan = date("m") - $bln;
        $uhari = date("j") - $tgl;
 
        if($uhari < 0){
            $uhari = date("t",mktime(0,0,0,$bln-1,date("m"),date("Y"))) - abs($uhari); $ubulan = $ubulan - 1;
        }
        if($ubulan < 0){
            $ubulan = 12 - abs($ubulan); $utahun = $utahun - 1;
        }
 
        $usia = $utahun." Tahun ".$ubulan." Bulan ".$uhari." Hari";
        echo("<tr align = 'right' class='gradien1'><td><span>Nama Kamu: </span></td><td align='center'>".$namanya."</td></tr>");
        echo("<tr align = 'right' class='gradien1'><td><span>Tanggal Lahir: </span></td><td align='center'>".$tgllhr."</td></tr>");
        echo("<tr align = 'right' class='gradien1'><td><span>Usiamu: </span></td><td align='center'>".$usia."</td></tr>");
if(($bln==1 && $tgl>=20)||($bln==2 && $tgl<19)){
$mysign = "Aquarius";
}
if(($bln==2 && $tgl>=19 )||($bln==3 && $tgl<21)){
$mysign = "Pisces";
}
if(($bln==3 && $tgl>=21)||($bln==4 && $tgl<20)){
$mysign = "Aries";
}
if(($bln==4 && $tgl>=20)||($bln==5 && $tgl<21)){
$mysign = "Taurus";
}
if(($bln==5 && $tgl>=21)||($bln==6 && $tgl<22)){
$mysign = "Gemini";
}
if(($bln==6 && $tgl>=21)||($bln==7 && $tgl<23)){
$mysign = "Cancer";
}
if(($bln==7 && $tgl>=23)||($bln==8 && $tgl<23)){
$mysign = "Leo";
}
if(($bln==8 && $tgl>=23)||($bln==9 && $tgl<23)){
$mysign = "Virgo";
}
if(($bln==9 && $tgl>=23)||($bln==10 && $tgl<24)){
$mysign = "Libra";
}
if(($bln==10 && $tgl>=24)||($bln==11 && $tgl<23)){
$mysign = "Scorpio";
}
if(($bln==11 && $tgl>=23)||($bln==12 && $tgl<22)){
$mysign = "Sagittarius";
}
if(($bln==12 && $tgl>=22)||($bln==1 && $tgl<20)){
$mysign = "Capricorn";
}
        echo("<tr align = 'right'><td class='top gradien1'><span>Zodiak Kamu: </span></td>");
        echo("<td align='center'></br><img width=128 src='".$mysign.".png'></br>");
        echo($mysign."</br></br>");
        $linkfbshare = "http://www.facebook.com/sharer.php?s=100&p[title]=Zodiaku&p[summary]=Nama: ".$namanya." | Tanggal Lahir: ".$tgllhr." | Usia: ".$usia." | Zodiak: ".$mysign."&p[url]=http://bascomp.juplo.com/zodiac&p[images][0]=http://bascomp.juplo.com/zodiac/".$mysign.".png";
        echo("<a target='_blank' href='".$linkfbshare."'><img src='facebook_share.png' alt='Bagikan info zodiakmu ke facebook ^_^'></a></br></br>^_^</td></tr>");
        }
}
?>
