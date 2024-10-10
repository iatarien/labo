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

                            <?php $t = "مادة كيميائية"; ?>

                            <h6 class="m-0 font-weight-bold text-primary">تعديل {{$t}}</h6>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/update_chemical" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$chemical->id_chemical}}" >
                                <div id="some" class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">اسم الـ{{$t}}</label>
                                    <div class="col-lg-8">
                                    <input type="text" name="name_chemical" required  class="form-control" value ="{{$chemical->name_chemical}}">
                                    </div>
                                </div>
                                <div id="some"   class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">الوحدة</label>
                                    <div class="col-lg-8">
                                    <input type="text" name="unity" required class="form-control" value ="{{$chemical->unity}}">
                                    </div>
                                </div>
                                <div id="some"   class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">الكمية</label>
                                    <div class="col-lg-8">
                                    <input type="number" name="quantity" required class="form-control" value ="{{$chemical->quantity}}">
                                    </div>
                                </div>
                                <div id="some"   class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">تاريخ أنتهاء الصلاحية</label>
                                    <div class="col-lg-8">
                                    <input type="date" name="expiration"  class="form-control" value ="{{$chemical->expiration}}">
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