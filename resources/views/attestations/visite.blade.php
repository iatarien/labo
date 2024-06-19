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
	    line-height: 1.6;
	    -webkit-print-color-adjust: exact !important;
	}


</style>

</head>
<body contenteditable="false">
<section  style="background-color: white; text-align: center; font-size: 13.5px; margin: 45px;" id="fiche">
	<div id="fiche_top">
        <div style="  display: inline-block; width : 100%">
			<img src="/header.png" style="width : 100%">
		</div>
		<hr>
		<div style="  display: inline-block; float: left; width : 45%;" dir="ltr">
            <h3 style="text-align : left;">
            Faculty of Science and technology<br>
			Laboratory of chemistry, biology, geology
			<h3>
		</div>
		<div style="  display: inline-block; float: right; width : 45%;">
            <h3 style="text-align : right;">
            كلية العلوم والتكنولوجيا <br>
			مخابر الكيمياء البيولوجيا الجيولوجيا
			</h3>
		</div>
		<br><br><br><br><hr>
        <div style="  display: inline-block; float: left; width : 45%;" dir="ltr">
            <h3 style="text-align : center;">
            : تامنغست في  
			<h3>
		</div>
		<?php $v ="......."; ?>
		<div style="  display: inline-block; float: right; width : 45%;">
            <h3 style="text-align : right;">
            رقم القيــــد: {{$v}} ك ع ت / م ك ب ج/ {{Date('Y')}} 
			</h3>
		</div>
        <br><br><br><br>
		<div align="center" dir="rtl">
			<h1 style="margin : 0; width : 60%; text-underline-offset: 10px;"> 
			تقريـــــــــر حــــول زيارة علميـــة
            </h1>
            <br>
            <p style="font-size : 5mm; text-align : justify;"> 
			يسعدنا أن نبلغكم أنه وبتاريخ ........................ 
            على الساعة ......................................
            تمت زيارة المخابر البيداغوجية لقسم ......................................
            من طرف.......................................................
            وهذا بهدف ................................. <br>
            خلال هذه الزيارة التي دامت ..................
            تم .........................................................
            وهذا في إطار ................................................ <br>
            كما نشير ان الزيارة تمت في حضور
            ......................و ....................و .............................
         	</p>
            <span style="font-size : 5mm; text-align : center;">
            وفي الأخير تقبلوا منا فائق التقدير والاحترام.<br>
            قدم هذا التقرير للتبليغ.

			</span>
		</div>
		<br><br><br><br>
        <div style="  display: inline-block; float: left; width : 45%;" dir="ltr">
            <p style="text-align : center; font-size : 5mm;">
			رئيس المخابر 
			</p>
		</div>
		<?php $v ="......."; ?>
		<div style="  display: inline-block; float: right; width : 45%;">
            <p style="text-align : right; font-size : 5mm;">
			: المهندس المتابع  <br>
            ....................  
			</p>
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


