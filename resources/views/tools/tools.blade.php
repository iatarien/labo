@include('components.header')
<style type="text/css">
    .table-bordered th, .table-bordered td {
        border: 1px solid black;
        vertical-align : middle;
    }
    .table thead th {
        border-bottom : 1px solid black;
    }

</style>
        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.topbar')
                <div class="col-lg-12 container">
                    <div class="row" >
                        <div class="offset-lg-5 col-lg-2 form-group">
                            <a class="btn btn-success" href="/add_tool/{{$type}}">إضافة</a>
                        </div>
                    </div>
                </div>
                <!-- Begin Page Content -->
                <div class="container-fluid" dir="rtl" style="text-align : right">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            @if($type =="devices")
                            <h6 class="m-0 font-weight-bold text-primary">الأجهزة  </h6>
                            @else
                            <h6 class="m-0 font-weight-bold text-primary"> الأدوات </h6>
                            @endif
                             </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table table-bordered" id="dataTable" cellspacing="0" 
                                style="text-align : center; color : black; font-size : 14px;">
                                    
                                    <thead style="background-color : lightblue;">
                                        <tr>
                                            <th>#</th>
                                            @if($type =="devices")
                                            <th>اسم الجهاز</th>
                                            @else
                                            <th>اسم الأداة</th>
                                            @endif
                                            <th>رقم الجرد</th>
                                            <th>الحالة</th>
                                            <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>     
                                    <?php $i = 0; ?>
                                    <tbody>
                                        @foreach($tools as $tool)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$tool->name_tool}}</td>
                                            <td>{{$tool->inventaire}}</td>
                                            <td>{{$tool->state}}</td>
                                            <td><a class="btn btn-sm btn-primary" href="/edit_tool/{{$tool->id_tool}}/{{$type}}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </td>
                                            <td><button class="btn btn-sm btn-danger" onclick="supprimer('/delete_tool/{{$tool->id_tool}}/{{$type}}')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                            </div>
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