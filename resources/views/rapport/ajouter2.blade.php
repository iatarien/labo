@include('components.header')

        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid" dir="rtl" style="text-align : right">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">إضافة نشاط</h6>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/insert_activity" method="POST">
                                @csrf
                                <input type ="hidden" value="{{$rapport->id_rapport}}" name="id_rapport" ?>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">التاريخ</label>
                                    <div class="col-lg-8">
                                    <input readonly value="{{$rapport->date}}" style="text-align : right" required="" type="text" class="form-control"  name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">الوقت</label>
                                    <div class="col-lg-8">
                                    <input readonly value="{{$rapport->time}}" style="text-align : right" required="" type="text" class="form-control"  name="time">
                                    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title"> نوع النشاط</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="activite" onchange="changed_activity(this.value)">
                                        <option>عمل تطبيقي</option>
                                        <option>أعمال نهاية الدراسة</option>
                                        <option>زيارات</option>    
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="niveau">
                                    <label class="control-label col-lg-2 text-right" for="title">  المستوى</label>
                                    <div class="col-lg-8">
                                    <select name="niveau" class="form-control" >
                                        @foreach($niveaux as $niveau)
                                            <option value="{{$niveau->id_niveau}}"> {{$niveau->name_niveau}}</option>
                                        @endforeach    
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="module">
                                    <label class="control-label col-lg-2 text-right" for="title">  المقياس</label>
                                    <div class="col-lg-8">
                                    <select name="module" class="form-control" >
                                        @foreach($modules as $module)
                                            <option value="{{$module->id_module}}"> {{$module->name_module}}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="teacher">
                                    <label class="control-label col-lg-2 text-right" for="title">  الأستاذ</label>
                                    <div class="col-lg-8">
                                    <select name="teacher" class="form-control" >
                                        @foreach($teachers as $teacher)
                                            <option value="{{$teacher->id_teacher}}"> {{$teacher->name_teacher}}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="sujet">
                                    <label class="control-label col-lg-2 text-right" for="title">  موضوع العمل</label>
                                    <div class="col-lg-8">
                                    <textarea id="sujet_trav"  name="sujet_trav" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row" id="license" style="display : none;">
                                    <label class="control-label col-lg-2 text-right" for="title">الترخيص</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="license" onchange="license_changed(this.value)">
                                        <option>يوجد</option>
                                        <option>لا يوجد</option> 
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row" id="student" style="display : none;">
                                    <label class="control-label col-lg-2 text-right" for="title">الطالب</label>
                                    <div class="col-lg-8">
                                    <input required type="text" name="student" class="form-control" id="student_input">
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                <button id="save_btn" class="btn btn-primary" type="submit">التالي</button>
                                </div>
                            </from>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('components.footer')
<script type="text/javascript">

function changed_activity(val){
    if(val =="أعمال نهاية الدراسة"){
        document.getElementById('niveau').style.display ='none';
        document.getElementById('module').style.display ='none';
        document.getElementById('teacher').style.display ='none';
        document.getElementById('sujet').style.display ='none';
        document.getElementById('license').style.display ='flex';
        document.getElementById('student').style.display ='flex';
    }else if(val =="عمل تطبيقي") {
        document.getElementById('niveau').style.display ='flex';
        document.getElementById('module').style.display ='flex';
        document.getElementById('teacher').style.display ='flex';
        document.getElementById('sujet').style.display ='flex';
        document.getElementById('license').style.display ='none';
        document.getElementById('student').style.display ='none';
    }else if(val =="زيارات") {
        document.getElementById('niveau').style.display ='none';
        document.getElementById('module').style.display ='none';
        document.getElementById('teacher').style.display ='none';
        document.getElementById('sujet').style.display ='none';
        document.getElementById('license').style.display ='none';
        document.getElementById('student').style.display ='none';
    }  
}

function license_changed(val){
    if(val =="يوجد"){
        document.getElementById('student').style.display ='flex';
    }else{
        document.getElementById('student').style.display ='none';
        link = "demande_access/"+"{{$rapport->id_rapport}}";
        add_license(link);
        
    }
}

function add_license(link){
    console.log(link);
    var myWindow = popupwindow("/"+link, "الترخيص", "3080","2720");
    var loop = setInterval(function() {   
        if(myWindow.closed) {  
            dates = myWindow.la_reponse.split("1989raouf1989");
            
            de = new Date(dates[0]);
            a = new Date(dates[1]);
            student = dates[2];
            num = dates[3];
            d = new Date("{{$rapport->date}}");
            if(d >= de && d <= a){
                document.getElementById('student_input').value = student;
                document.getElementById('sujet_trav').value = num;
                //document.getElementById('save_btn').click();
            }else{

            }
            clearInterval(loop);  
        }
    }, 1000); 
}

function popupwindow(url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 

window.onload = function(){
	document.getElementById('loading').style.display = "none";
};
</script>