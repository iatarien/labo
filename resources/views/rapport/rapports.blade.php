@include('components.header')
<style type="text/css">
    .table-bordered th, .table-bordered td {
        border: 1px solid black;
        vertical-align : middle;
    }
    .table thead th {
        border-bottom : 1px solid black;
    }
    .table-responsive {
        transform: rotateX(180deg);
        overflow-x: auto;
    } 
    .table {
        transform: rotateX(180deg);
    }
</style>
        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid" dir="rtl" style="text-align : right">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">التقرير اليومي</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table table-bordered" id="dataTable" cellspacing="0" 
                                style="width : 1250px; text-align : center; color : black; font-size : 14px;">
                                    <thead style="background-color : lightblue;">
                                        <tr>
                                            <th style="width : 120px">التاريخ و الوقت</th>
                                            <th>المخبر</th>
                                            <th>المھندس المتابع</th>
                                            <th>النشاط</th>
                                            <th>نوعه</th>
                                            <th>المستوى</th>
                                            <th>المقیاس</th>
                                            <th>موضوع العمل</th>
                                            <th>الأجهزة و الأدوات المستعملة</th>
                                            <th>نوع التكفل</th>                                                
                                            <th>الحالة قبل الإستلام</th>
                                            <th>رأي المستلم</th>
                                            <th>الحالة بعد الإستلام</th>
                                            <th>قائمة المواد الكيميائية</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @include("rapport.show_rapports")

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