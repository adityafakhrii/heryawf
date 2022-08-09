@extends('admin.layouts.master')
    <title>Edit Berita - PT. Herya Wood Furniture</title>

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
												<li class="breadcrumb-item"><a href="/blog-list">Blog</a></li>
												<li class="breadcrumb-item"><a href="#!">Edit</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">
								<!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5>Edit Berita</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="/blog-list/update/{{$blog->id}}" method="post" enctype="multipart/form-data">
                                                    	@csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama Produk</label>
                                                            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama produk" value="{{$blog->judul}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gambar Berita</label>
                                                            <input type="file" name="img" class="form-control" placeholder="Text">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Isi Berita</label>
                                                            <textarea value="{{$blog->isi}}" name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$blog->isi}}"></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ form-element ] end -->
								
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