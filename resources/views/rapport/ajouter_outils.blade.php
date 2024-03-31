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
                            <h6 class="m-0 font-weight-bold text-primary"> الأجهزة المستعملة</h6>
                        </div>
                        <div class="row">
                            <div class="card-body col-md-6">
                                <div class="form-group row">
                                    <label class="control-label col-lg-4 text-right" for="title">التاريخ</label>
                                    <div class="col-lg-8">
                                    <input readonly value="{{$rapport->date}}" style="text-align : right" required="" type="text" class="form-control"  name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-4 text-right" for="title">الوقت</label>
                                    <div class="col-lg-8">
                                    <input readonly value="{{$rapport->time}}" style="text-align : right" required="" type="text" class="form-control"  name="time">
                                    
                                    </div>
                                </div>
                                <form id="devices_form" class="form-horizontal" >
                                    @csrf
                                    <input type ="hidden" value="{{$rapport->id_rapport}}" name="id_rapport" ?>
                                    
                                    <div class="form-group row">
                                        <label class="control-label col-lg-4 text-right" for="title"> الجهاز </label>
                                        <div class="col-lg-8">
                                        <select class="form-control" id="device" name="device">
                                            @foreach($devices as $device)
                                                <option value="{{$device->id_tool}}1989raouf1989{{$device->name_tool}}">{{$device->name_tool}}</option>
                                            @endforeach 
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-4 text-right" for="title">  تكفل</label>
                                        <div class="col-lg-8">
                                        <select class="form-control" name="charge" id="charge">
                                            <option>تكفل داخلي</option>
                                            <option>تكفل خارجي</option>  
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-4 text-right" for="title"> الحالة قبل الإستلام </label>
                                        <div class="col-lg-8">
                                        <select class="form-control" name="state_avant" id="state_avant" >
                                            <option>حالة جيدة</option>
                                            <option>في طور الصيانة</option>
                                            <option>عاطل</option>    
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-4 text-right" for="title">رأي المستلم</label>
                                        <div class="col-lg-8">
                                        <select class="form-control" name="avis" id="avis">
                                            <option>بدون تحفظ</option> 
                                            <option>بتحفظ</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-4 text-right" for="title"> الحالة بعد النشاط </label>
                                        <div class="col-lg-8">
                                        <select class="form-control" name="state_after" id="state_after">
                                            <option>بدون تحفظ</option>  
                                            <option>بتحفظ</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group" align="center">
                                    <button class="btn btn-primary" type="button" onclick="add_device()">تثبيت الجهاز</button>
                                    </div>
                                </from>
                                
                            </div>
                        
                            <div class="card-body col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="background-color : lightblue">
                                                <th>الجهاز </th>
                                                <th>تكفل</th>
                                                <th>حالة قبل الإستلام</th>
                                                <th>رأي المستلم</th>
                                                <th>حالة بعد النشاط</th>
                                            </tr>
                                        </thead>

                                        <tbody id="t_body_devices">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            <hr>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"> الأدوات المستعملة</h6>
                            </div>
                            <div class="row">
                                <div class="card-body col-md-6">
                                    <form id="devices_form" class="form-horizontal" >
                                        <div class="form-group row">
                                            <label class="control-label col-lg-4 text-right" for="title"> الأداة </label>
                                            <div class="col-lg-8">
                                            <select class="form-control" id="matiere" name="matiere">
                                                @foreach($matieres as $matiere)
                                                    <option value="{{$matiere->id_tool}}1989raouf1989{{$matiere->name_tool}}">{{$matiere->name_tool}}</option>
                                                @endforeach 
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-lg-4 text-right" for="title">  تكفل</label>
                                            <div class="col-lg-8">
                                            <select class="form-control" name="charge" id="charge_m">
                                                <option>تكفل داخلي</option>
                                                <option>تكفل خارجي</option>  
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-lg-4 text-right" for="title"> الحالة قبل الإستلام </label>
                                            <div class="col-lg-8">
                                            <select class="form-control" name="state_avant" id="state_avant_m" >
                                                <option>حالة جيدة</option>
                                                <option>في طور الصيانة</option>
                                                <option>عاطل</option>    
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-lg-4 text-right" for="title">رأي المستلم</label>
                                            <div class="col-lg-8">
                                            <select class="form-control" name="avis" id="avis_m">
                                                <option>بدون تحفظ</option> 
                                                <option>بتحفظ</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-lg-4 text-right" for="title"> الحالة بعد النشاط </label>
                                            <div class="col-lg-8">
                                            <select class="form-control" name="state_after" id="state_after_m">
                                                <option>بدون تحفظ</option>  
                                                <option>بتحفظ</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group" align="center">
                                        <button class="btn btn-primary" type="button" onclick="add_matiere()"> تثبيت</button>
                                        </div>
                                    </from>
                                    
                                </div>
                            
                                <div class="card-body col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr style="background-color : lightblue">
                                                    <th>الأداة </th>
                                                    <th>تكفل</th>
                                                    <th>حالة قبل الإستلام</th>
                                                    <th>رأي المستلم</th>
                                                    <th>حالة بعد النشاط</th>
                                                </tr>
                                            </thead>

                                            <tbody id="t_matiere_devices">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">  المواد الكيميائية</h6>
                                </div>
                                <div class="row">
                                    <div class="card-body col-md-6">
                                        <form id="devices_form" class="form-horizontal" >
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-lg-4 text-right" for="title"> المادة </label>
                                                <div class="col-lg-8">
                                                <select class="form-control" id="device" name="device">
                                                    @foreach($chemicals as $chemical)
                                                        <option value="{{$chemical->id_chemical}}1989raouf1989{{$chemical->name_chemical}}">{{$chemical->name_chemical}}</option>
                                                    @endforeach 
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-lg-4 text-right" for="title">  الوحدة</label>
                                                <div class="col-lg-8">
                                                <select class="form-control" name="charge" id="charge">
                                                    <option>تكفل داخلي</option>
                                                    <option>تكفل خارجي</option>  
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-lg-4 text-right" for="title">   الكمية </label>
                                                <div class="col-lg-8">
                                                <select class="form-control" name="state_avant" id="state_avant" >
                                                    <option>حالة جيدة</option>
                                                    <option>في طور الصيانة</option>
                                                    <option>عاطل</option>    
                                                </select>
                                                </div>
                                            </div>


                                            <div class="form-group" align="center">
                                                <button class="btn btn-primary" type="button" onclick="add_device()">إضافة جهاز</button>
                                            </div>
                                        </from>
                                        
                                    </div>
                                
                                    <div class="card-body col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr style="background-color : lightblue">
                                                        <th>الجهاز </th>
                                                        <th>تكفل</th>
                                                        <th>حالة قبل الإستلام</th>
                                                        <th>رأي المستلم</th>
                                                        <th>حالة بعد النشاط</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="t_body_devices">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('components.footer')
<script type="text/javascript">
function add_matiere(){
    matiere = document.getElementById('matiere');
    matieres = matiere.value.split('1989raouf1989')[1];
    charge = document.getElementById('charge_m');
    state_avant = document.getElementById('state_avant_m');
    avis = document.getElementById('avis_m');
    state_after = document.getElementById('state_after_m');
    str = document.getElementById('t_matiere_devices').innerHTML;
    str +="<tr>"+
    "<tr>"+
        "<td>"+matieres+"</td>"+
        "<th>"+charge.value+"</th>"+
        "<th>"+state_avant.value+"</th>"+
        "<th>"+avis.value+"</th>"+
        "<th>"+state_after.value+"</th>"+
    "</tr>";
    document.getElementById('t_matiere_devices').innerHTML = str;
}
function add_device(){
    device = document.getElementById('device');
    devices = device.value.split('1989raouf1989')[1];
    charge = document.getElementById('charge');
    state_avant = document.getElementById('state_avant');
    avis = document.getElementById('avis');
    state_after = document.getElementById('state_after');
    str = document.getElementById('t_body_devices').innerHTML;
    str +="<tr>"+
    "<tr>"+
        "<td>"+devices+"</td>"+
        "<th>"+charge.value+"</th>"+
        "<th>"+state_avant.value+"</th>"+
        "<th>"+avis.value+"</th>"+
        "<th>"+state_after.value+"</th>"+
    "</tr>";
    document.getElementById('t_body_devices').innerHTML = str;
    document.getElementById('devices_form').reset();
    document.getElementById('devices_form').reset();
}
function changed_activity(val){
    if(val =="all"){
        document.getElementById('some').style.display ='none';
    }else{
        document.getElementById('some').style.display ='flex';
    } 
}
window.onload = function(){
	document.getElementById('loading').style.display = "none";
};
</script>