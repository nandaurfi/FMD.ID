@extends ('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add</h4>
                <h6>Create new product</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Id Produk</label>
                            <input type="text" placeholder="Auto-generate">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select">
                                <option>Hijab</option>
                                <option>Baju</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Created By</label>
                            <select class="select">
                                <option>Admin</option>
                                <option>Owner</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Deskripsi Produk"></textarea>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-start">
                            <!-- Harga -->
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group text-start">
                                    <label for="harga">Harga</label>
                                    <input id="harga" type="text" class="form-control" placeholder="Harga">
                                </div>
                            </div>

                            <!-- Size -->
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group text-start">
                                    <label for="size">Size</label>
                                    <div class="btn-group" role="group" aria-label="Size selection">
                                        <button type="button" class="button-option"
                                            style="background-color:rgb(255, 255, 255);">S</button>
                                        <button type="button" class="button-option"
                                            style="background-color:rgb(255, 255, 255);">M</button>
                                        <button type="button" class="plus-option btn-outline-secondary"
                                            style="background-color:rgb(255, 255, 255);">
                                            <img src="assets/admin/img/icons/plus.png" alt="Plus">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Warna -->
                            <div class="col-lg-4 col-sm-8 col-12">
                                <div class="form-group text-start">
                                    <label for="warna">Warna</label>
                                    <div class="btn-group" role="group" aria-label="Color selection">
                                        <button class="color-option" style="background-color: #CEA297;"></button>
                                        <button class="color-option" style="background-color: #7F7671;"></button>
                                        <button class="color-option" style="background-color: #1E3265;"></button>
                                        <button class="color-option" style="background-color: #552D19;"></button>
                                        <button class="color-option" style="background-color: #726651;"></button>
                                        <button type="button" class="plus-option"
                                            style="background-color:rgb(255, 255, 255);">
                                            <img src="assets/admin/img/icons/plus.png" alt="Plus">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Foto Produk</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="assets/admin/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                        <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection