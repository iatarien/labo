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
                            <form class="form-horizontal" action="/insert_rapport" method="POST">
                                @csrf
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
                                    <select class="form-control" onchange="changed_activity(this.value)">
                                        <option> عمل تطبيقي</option>
                                        <option> أعمال نهاية الدراسة</option>
                                        <option> زيارات</option>    
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">  المستوى</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" >
                                        <option> عمل تطبيقي</option>
                                        <option> أعمال نهاية الدراسة</option>
                                        <option> زيارات</option>    
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">  المقياس</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" >
                                        <option> عمل تطبيقي</option>
                                        <option> أعمال نهاية الدراسة</option>
                                        <option> زيارات</option>    
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">  موضوع العمل</label>
                                    <div class="col-lg-8">
                                    <textarea  name="sujet_trav" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group" align="center">
                                <button class="btn btn-primary" type="submit">التالي</button>
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