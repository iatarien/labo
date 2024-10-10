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

                            <?php $t = "مستوى"; ?>

                            <h6 class="m-0 font-weight-bold text-primary">إضافة {{$t}}</h6>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="/update_niveau" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$niveau->id_niveau}}">
                                <div id="some" class="form-group row">
                                    <label  class="control-label col-lg-2 text-right" for="title">الـ{{$t}}</label>
                                    <div class="col-lg-8">
                                    <input type="text" name="name_niveau" required  class="form-control" value ="{{$niveau->name_niveau}}">
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