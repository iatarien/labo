@include('components.header')

        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('components.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid" dir="ltr" style="text-align : left">

					<section class="panel">
						<div class="panel-body progress-panel">
							<div class="row">
							<div style="text-align : right" class="col-lg-12 task-progress pull-right">
								<h3>حسابات المستخدمين</h3>
							</div>
							</div>
						</div>
						<br>
						<table class="table table-hover personal-task">
							<tbody>
							<tr>
								<td>Nom et Prénom</td>
								<td>Username</td>
								<td>Role</td>
								<td>Modifier</td>
							</tr>
							@foreach($users as $u)
							<tr>
								<td><span class="profile-ava">
										<img alt="" style="width: 30px; height: 30px;" class="simple" src="{{ $u->photo }}">
									</span>
									<span>{{ $u->full_name }}</span>

								</td>
								<td>
									<span>{{ $u->username }}</span>
								</td>
								<td>
									<span>{{ $u->service }}</span>
								</td>
								<td>
									<span><a  class="btn btn-primary" href="/modify_user/{{ $u->id }}" >Modifier</a></span>
								</td>
							</tr> 
							@endforeach  
							</tbody>
						</table>
					</section>

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
