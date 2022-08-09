@extends('admin.layouts.master')
    <title>Add Catalogue - PT. Herya Wood Furniture</title>

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
												<h5>Catalogue List</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="/catalogue-list">Catalogue</a></li>
												<li class="breadcrumb-item"><a href="#!">Add</a></li>
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
                                            <h5>Input Data</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="/postkatalog" method="post" enctype="multipart/form-data">
                                                    	@csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama Produk</label>
                                                            <input type="text" name="nama_katalog" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama produk">
                                                        </div>
                                                        <div class="input-group mb-3">
			                                                
			                                                <div class="input-group-prepend">
			                                                    <span class="input-group-text">Rp</span>
			                                                </div>
			                                                <input type="text" name="harga" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="harga">
			                                                <div class="input-group-append">
			                                                    <span class="input-group-text">.00</span>
			                                                </div>
			                                            </div>
                                                        
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                                <div class="col-md-6">
                                                		<div class="form-group">
                                                            <label for="exampleFormControlSelect1">Kategori</label>
                                                            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="bed">Bed</option>
                                                                <option value="bench">Bench</option>
                                                                <option value="chair">Chair</option>
                                                                <option value="stool">Stool</option>
                                                                <option value="cabinet">Cabinet</option>
                                                                <option value="table">Table</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gambar Produk</label>
                                                            <input type="file" name="img" class="form-control" placeholder="Text">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi Produk"></textarea>
                                                        </div>
                                                        
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