<!DOCTYPE html>
<html lang="fr">
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
	input[type="date"]::-webkit-inner-spin-button,
	input[type="date"]::-webkit-calendar-picker-indicator {
		display: none;
		-webkit-appearance: none;
	}

</style>

</head>
<body contenteditable="true">
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
		<?php $v = "0".$num; ?>
		<div style="  display: inline-block; float: right; width : 45%;" contenteditable="false">
            <h3 style="text-align : right;">
            رقم القيــــد: <span id="num" contenteditable="true">{{$v}}</span> ك ع ت / م ك ب ج/ {{$year}} 
			</h3>
		</div>
        <br><br><br>
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
				<p style="text-align : left;" contenteditable="false">
				Nom : <span id="nom" contenteditable="true" style="display: inline-block; min-width : 100px;"></span>
				.Prénom : <span id="prenom"  contenteditable="true" style="display: inline-block; min-width : 100px;">
				</span>
				Tél: <span id="telephone"  contenteditable="true" style="display: inline-block; min-width : 100px;">
				</span>.Email:<span id="email" contenteditable="true" style="display: inline-block; min-width : 100px;">
				</span>.<br>
				</p>
				<p style="text-align : left" >
				Diplôme préparé :…………………………………………………………………………………<br>
				Département :……………………………………………………………………………………….<br>
				Sujet de recherche :……………………………………………………………………………………<br>
				Promoteur :…Mrs ./Mr………………………………………………………………………………..<br>
				Co-promoteur:… Mrs ./Mr …………………………………………………………………………....<br><br>
				
				<strong>Usage à long terme (plus d’une journée) :</strong>
				</p>
				<p style="text-align : left;" contenteditable="false">
				J’ai souhaiterais par la présente avoir accès au Laboratoire Universitaire des Sciences et Technologie pour la période 
				du :<span contenteditable="true" style="display: inline-block; min-width : 100px;">
					<input required id="de"  style="border : none;  font-weight : bold;" type="date">
				</span> au : <span contenteditable="true" style="display: inline-block; min-width : 100px;">
					<input required id="a" type="date" style="border : none; font-weight : bold;">
				</span>.<br>
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
  onclick="window.close()"> رجوع </button>

<span id="btn_div">

</span>
 <br><br><br><br>
</div>
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ url('js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ url('js/tagfeet.js') }}" ></script>
<script type="text/javascript">
window.onload = function(){
	str = '<button id="bouton_save" style="'+
	  'background-color: lightblue; /* Green */'+
	  'border: none;'+
	  'color: black;'+
	  'cursor: pointer;'+
	  'padding: 15px 32px;'+
	  'text-align: center;'+
	  'text-decoration: none;'+
	  'display: inline-block;'+
	  'font-size: 16px;"';
	if(document.getElementById('id_autorisation')){
  	  	str+= 'onclick="update_reserve()"> حفظ </button>';
	}else{
  	  	str+= 'onclick="save()"> حفظ </button>';
	}
	if(document.getElementById('not_user')){
		document.getElementsByTagName('body')[0].contentEditable  = "false";
	}

	btn = document.getElementById('btn_div').innerHTML = str;

};
function update_reserve(){

	id_autorisation = document.getElementById('id_autorisation').value;
	num = document.getElementById('num').innerHTML.replace(/\D/g,'');
	nom = document.getElementById('nom').innerHTML;
	prenom = document.getElementById('prenom').innerHTML;
	telephone = document.getElementById('telephone').innerHTML;
	email = document.getElementById('email').innerHTML;
	de = document.getElementById('de').value;
	a = document.getElementById('a').value;
	
	url = "/update_autorisation";
	const html = document.getElementsByTagName('html')[0].innerHTML;
	$.ajax({
	    url: url,
	    type:"POST", 
	    cache: false,
		data : {
			"html":html,
			"num" : num,
			"nom" : nom,
			"prenom" : prenom,
			"telephone" : telephone,
			"email" : email,
			"de" : de,
			"a" : a,
			"id_autorisation":id_autorisation,
			"_token" : "{{ csrf_token() }}"},
		success:function(response) {
			window.la_reponse = response
			console.log(response);
		},
		error:function(response) {
			console.log(response);
		},
	});
}

function save(){
	num = document.getElementById('num').innerHTML.replace(/\D/g,'');
	nom = document.getElementById('nom').innerHTML;
	prenom = document.getElementById('prenom').innerHTML;
	telephone = document.getElementById('telephone').innerHTML;
	email = document.getElementById('email').innerHTML;
	de = document.getElementById('de').value;
	a = document.getElementById('a').value;
	if(de == "" || a ==""){
		alert("يرجى إدخال تاريخ البداية و النهاية");
		return;
	}
	year = Date("Y");
	@if(isset($year))
	year = "{{$year}}";
	@endif

	const html = document.getElementsByTagName('html')[0].innerHTML;
	url = "/insert_autorisation/";
	$.ajax({
	    url: url,
	    type:"POST", 
	    cache: false,
		data : {
			"html":html,
			"num" : num,
			"nom" : nom,
			"prenom" : prenom,
			"telephone" : telephone,
			"email" : email,
			"de" : de,
			"a" : a,
			"year": year,
			"_token" : "{{ csrf_token() }}"},
		success:function(response) {
			console.log(response);
			window.la_reponse = response;
			//window.close();
		},
		error:function(response) {
			console.log(response);
		},
	});
}

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
	document.getElementById('bouton_save').style.display = "none";
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
	document.getElementById('bouton_save').style.display = "inline-block";
	
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


