@include('components.header')

        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid" dir="rtl" style="text-align : right">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">المشاريع</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">برنامج مشاريع الصفقات العمومية 2024 للدراسات</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>اسم المشروع</th>
                                            <th>الاجراء</th>
                                            <th>تاريخ تسجيل العملية او التبيغ</th>
                                            <th>تاريخ ايداع دفتر الشروط</th>
                                            <th>رقم وتاريخ دفتر الشروط</th>
                                            <th>تاريخ الاعلان عن المسابقة </th>
                                            <th>مدة تحضير العروض (الترشح+ التقني+ المالي)</th>
                                            <th>رقم محضر فتح العروض</th>
                                            <th>تاريخ محضر فتح العروض</th>
                                            <th>رقم محضر تحليل العروض</th>
                                            <th>تاريخ محضر تحليل العروض</th>
                                            <th>رقم رسالة تكملة الوثائق التبريرية</th>
                                            <th>تاريخ رسالة تكملة الوثائق التبريرية</th>
                                            <th></th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
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