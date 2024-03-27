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
                            <h6 class="m-0 font-weight-bold text-primary"> الأجهزة والمواد و الأدوات المستعملة</h6>
                        </div>
                        <div class="row">
                            <div class="card-body col-md-7">
                                <form class="form-horizontal" action="/insert_outils" method="POST">
                                    @csrf
                                    <input type ="hidden" value="{{$rapport->id_rapport}}" name="id_rapport" ?>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-2 text-right" for="title">التاريخ</label>
                                        <div class="col-lg-10">
                                        <input readonly value="{{$rapport->date}}" style="text-align : right" required="" type="text" class="form-control"  name="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-2 text-right" for="title">الوقت</label>
                                        <div class="col-lg-10">
                                        <input readonly value="{{$rapport->time}}" style="text-align : right" required="" type="text" class="form-control"  name="time">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-2 text-right" for="title"> الجهاز </label>
                                        <div class="col-lg-10">
                                        <select class="form-control" id="tool" name="tool">
                                            @foreach($tools as $tool)
                                                <option value="{{$tool->id_tool}}">{{$tool->name_tool}}</option>
                                            @endforeach 
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-2 text-right" for="title"> نوع النشاط</label>
                                        <div class="col-lg-10">
                                        <select class="form-control" name="activite" onchange="changed_activity(this.value)">
                                            <option> عمل تطبيقي</option>
                                            <option> أعمال نهاية الدراسة</option>
                                            <option> زيارات</option>    
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-lg-2 text-right" for="title"> نوع النشاط</label>
                                        <div class="col-lg-10">
                                        <select class="form-control" name="activite" onchange="changed_activity(this.value)">
                                            <option> عمل تطبيقي</option>
                                            <option> أعمال نهاية الدراسة</option>
                                            <option> زيارات</option>    
                                        </select>
                                        </div>
                                    </div>


                                    <div class="form-group" align="center">
                                    <button class="btn btn-primary" type="submit">التالي</button>
                                    </div>
                                </from>
                                
                            </div>
                        
                            <div class="card-body col-md-5">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="background-color : lightblue">
                                                <th>#</th>
                                                <th>الجهاز </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>حاسوب ألي</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>حاسوب</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>حاسوب</td>
                                            </tr>
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