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
                            <?php $t = $tool->type; ?>

                            <h6 class="m-0 font-weight-bold text-primary">تعديل {{$t}}</h6>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/update_tool" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$tool->id_tool}}" >
                                <input type="hidden" name="real_type" value="{{$type}}" >
                                <input type="hidden" name="type" value="{{$tool->type}}" >
                                <div id="some" class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">اسم الـ{{$t}}</label>
                                    <div class="col-lg-8">
                                    <input type="text" name="name_tool" required  class="form-control" value="{{$tool->name_tool}}">
                                    </div>
                                </div>
                                <div id="some"   class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">رقم الجرد</label>
                                    <div class="col-lg-8">
                                    <input type="text" name="inventaire" required class="form-control" value="{{$tool->inventaire}}">
                                    </div>
                                </div>
                                <div id="some"   class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">الحالة</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="state">
                                        <option style="visibility : hidden">{{$tool->state}}</option>
                                        <option>حالة جيدة</option>
                                        <option>في طور الصيانة</option>
                                        <option>عاطل</option>   
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group" align="center">
                                <button class="btn btn-primary" type="submit">حفظ</button>
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

window.onload = function(){
	document.getElementById('loading').style.display = "none";
};
</script>