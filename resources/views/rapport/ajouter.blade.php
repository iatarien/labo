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
                            <h6 class="m-0 font-weight-bold text-primary">إضافة تقرير</h6>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/insert_rapport" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">التاريخ</label>
                                    <div class="col-lg-8">
                                    <input value="<?php echo date('Y-m-d'); ?>" style="text-align : right" required="" type="date" class="form-control"  name="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">الوقت</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                        <?php for($i = 8; $i<= 20; $i++){ ?>
                                            <option>{{$i}}:00</option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">المخبر</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                        <?php for($i = 1; $i<= 3; $i++){ ?>
                                            <option> المخبر {{$i}}</option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">المهندس المتابع</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                        <option>جميع المهندسين</option>
                                        <option>بعض المهندسين</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-lg-2 text-right" for="title">النشاط</label>
                                    <div class="col-lg-8">
                                    <select class="form-control">
                                        <option> نشاط بيداغوجي</option>
                                        <option> أخرى</option>
                                        <option>لا شيئ </option>
                                    </select>
                                    </div>
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