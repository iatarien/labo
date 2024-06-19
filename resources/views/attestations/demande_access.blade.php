<!DOCTYPE html>
<html>
<head>
	  <!-- Bootstrap CSS -->
	  <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
	  <!-- bootstrap theme -->
	<title></title>
<style type="text/css">
	@page {
	    size: auto;   /* auto is the initial value */
		size: portrait;
	    margin: 0;  /* this affects the margin in the printer settings */
	}
	@media print {
		html,body{
			height:297mm;
	    	width:210mm;
			overflow-y : hidden !important;
		}
		
	}
	html,body{
	    height:287mm;
	    width:210mm;
	    margin: auto;
	    line-height: 1.5;
	    -webkit-print-color-adjust: exact !important;
	}


</style>

</head>
<body contenteditable="false">
<section  style="background-color: white; text-align: center; font-size: 13.5px; margin: 30px;" id="fiche">
	<div id="fiche_top">
        <div style="  display: inline-block; width : 100%">
			<img src="/header.png" style="width : 100%">
		</div>
		<hr>
		<div style="  display: inline-block; float: left; width : 50%;" dir="ltr">
            <h3 style="text-align : left;">
            Faculty of Science and technology<br>
			Laboratory of chemistry, biology, geology
			<h3>
		</div>
		<div style="  display: inline-block; float: right; width : 50%;">
            <h3 style="text-align : right;">
            كلية العلوم والتكنولوجيا <br>
			مخابر الكيمياء البيولوجيا الجيولوجيا
			</h3>
		</div>
		<br><br><hr>
        <div style="  display: inline-block; float: left; width : 50%;" dir="ltr">
            <h3 style="text-align : center;">
            : تامنغست في  
			<h3>
		</div>
		<?php $v ="......."; ?>
		<div style="  display: inline-block; float: right; width : 50%;">
            <h3 style="text-align : right;">
            رقم القيــــد: {{$v}} ك ع ت / م ك ب ج/ {{Date('Y')}} 
			</h3>
		</div>
        <br><br>
		<div align="center" dir="ltr">
			<h3 style="margin : 0; width : 60%; text-underline-offset: 10px;"> 
			Demande d’accès au Laboratoires Universitaire
            </h3>
            <p style="font-size : 4mm; text-align : justify;"> 
			Les utilisateurs du Laboratoire doivent respecter les termes énumérés ci-dessous. 
            Tout manquement pourrait entrainer une perte des droits d’accès au Laboratoire.<br>
            <strong>Condition d’accès au Laboratoire Universitaire :</strong><br>
			1- Défense de toucher et de déplacer les matériels, les équipements existants au laboratoire sans la permission de la part des ingénieurs ou du Chef du laboratoire.<br>
			2- Déclarer les cassures le même jour aux ingénieurs de laboratoire.<br>
			3- Tout utilisateur est responsable du matériel et des produits qu’il a demandés pour son travail au laboratoire.<br>
			4- Ne pas manipuler les dispositifs et les machines sans l’assistance de l’encadreur, ou du chef du laboratoire ou des ingénieurs de laboratoire.<br>
			5- Porter la blouse et la bavette est indispensable au laboratoire.<br>
			6- Informer les ingénieurs de laboratoire universitaire avant de quitter le laboratoire.<br>
			7- Les étudiants ne peuvent en aucun cas ni porter ni garder les clés des laboratoires universitaire.<br>
			<strong>Informations personnelle d’ l’étudiant</strong>  : <br>
				<p style="text-align : left;">
				Nom :………………………. .Prénom :………………… Tél:……………………. Email:………………………….…..<br>
				Nom :………………………. .Prénom :………………… Tél:……………………. Email:………………………….…..<br>
				Nom :………………………. .Prénom :………………… Tél:……………………. Email:………………………….…..<br>
				Diplôme préparé :…………………………………………………………………………………<br>
				Département :……………………………………………………………………………………….<br>
				Sujet de recherche :……………………………………………………………………………………<br>
				Promoteur :…Mrs ./Mr………………………………………………………………………………..<br>
				Co-promoteur:… Mrs ./Mr …………………………………………………………………………....<br>
				
				<strong>Usage à long terme (plus d’une journée) :</strong><br><br>
				J’ai souhaiterais par la présente avoir accès au Laboratoire Universitaire des Sciences et Technologie pour la période du :…………………… au :……………………………………………..<br>
				J’ai lu les conditions d’accès au Laboratoire Universitaire et j’accepte les conditions et les termes figurant dans la réglementation interne.
				</p>
         	</p>
		</div>
		
        <div style="  display: inline-block; float: left; width : 33%;" dir="ltr">
            <strong style="text-align : left; font-size : 4mm;">
			Encadreur          
			</strong>
		</div>
		<div style="  display: inline-block; float: left; width : 34%;" dir="ltr">
            <strong style="text-align : center; font-size : 4mm;">
			Chef du Département   
			</strong>
		</div>
		<div style="  display: inline-block; float: right; width : 33%;">
            <strong style="text-align : right; font-size : 4mm;">
			Chef du laboratoire
			</strong>
		</div>
	</div>
</section>

<br><br><br><br>
<div align="center">
	<button id="bouton" style="
	  background-color: lightgray; /* Green */
	  border: none;
	  color: black;
	  cursor: pointer;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;" 
  onclick="printdiv('fiche')"> طباعة </button>

<button id="bouton_2" style="
	  background-color: skyblue; /* Green */
	  border: none;
	  color: black;
	  cursor: pointer;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;" 
  onclick=location.href="/reserves/"> رجوع </button>


 <br><br><br><br>
</div>
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ url('js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ url('js/tagfeet.js') }}" ></script>
<script type="text/javascript">


function PrintElem(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.print();


    return true;
}
function printdiv(printdivname) {
	document.getElementById('bouton').style.display = "none";
	document.getElementById('bouton_2').style.display = "none";
   /* var footstr = "</body>";
    var newstr = document.getElementById(printdivname).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = ""+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;*/
    print();
    document.getElementById('bouton').style.display = "inline-block";
	document.getElementById('bouton_2').style.display = "inline-block";
	
    return false;
}
jQuery(document).bind(" keydown", function(e){
    if(e.ctrlKey && e.keyCode == 80){
		printdiv('fiche');
		return false;
    }
	
});
</script>
</body>
</html>


