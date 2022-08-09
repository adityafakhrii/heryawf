@extends('admin.layouts.master')
    <title>Blog List - PT. Herya Wood Furniture</title>

@section('content')

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Blog List</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Blog</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							@if(Session::has('sukses'))
							<div class="alert alert-success" role="alert">
							  {{Session::get('sukses')}}
							</div>	
							@endif
							@if(Session::has('edit'))
							<div class="alert alert-warning" role="alert">
							  {{Session::get('edit')}}
							</div>	
							@endif
							@if(Session::has('hapus'))
							<div class="alert alert-danger" role="alert">
							  {{Session::get('hapus')}}
							</div>	
							@endif
							
							<div class="row">

								<!-- [ stiped-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="/blog-list/add" class="btn btn-sm btn-success">
								                <i class="feather icon-plus"></i> Tambah Berita
								            </a>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Judul</th>
                                                            <th>Tanggal</th>
                                                            <th>Gambar</th>
                                                            <th><center>Aksi</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    	<?php $no=1; ?>
                                                    	@foreach($blogs as $blog)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{$blog->judul}}</td>
                                                            <td>{{$blog->updated_at}}</td>
                                                            <td><img width="70" src="{{$blog->img}}" alt=""></td>
                                                            <td width="160" align="center">
                                                            	<a href="/blog-list/edit/{{$blog->id}}" class="btn btn-sm btn-warning">
								                                    Edit
								                              	</a>
								                              	<a href="/blog-list/delete/{{$blog->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini ? ')">
								                                    Delete
								                              	</a>
                                                            </td>	
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ stiped-table ] end -->
							</div>

							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->


@endsection