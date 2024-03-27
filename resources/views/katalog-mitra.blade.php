@extends('layout.main2')

@section('content')
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                            @endif
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">MY product</h3>
                        <ul>
                            <li><a href="index.html">Katalog</a></li>
                            <li>Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Wishlist main wrapper start -->
    <div class="wishlist-main-wrapper mt-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Wishlist Table Area -->
                    <div class="wishlist-table table-responsive">
                        <h3>ADD MY PRODUCT</h3>
                        <form @if($product) action="{{ route('katalogmitra.update', $product->id) }}" @else action="{{ route('mitra.store') }}" @endif method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-deskripsi">Deskripsi</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-edit">Add</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail">
                                            <?php
                                            if($product){
                                                $image = $product->image;
                                                $title = $product->name;
                                                $description = $product->description;
                                                $price = $product->price;
                                                $button = 'Update';
                                            }else{
                                                $image = '';
                                                $title = '';
                                                $description = '';
                                                $price = '';
                                                $button = 'Add';
                                            }
                                            ?>
                                            @if($image)
                                            <img src="{{ asset('storage/products/'.$image) }}" width="100px" height="100px" alt="Product" />
                                            <label>Change Image</label>
                                            @endif
                                            <input type="file" name="product_image" accept="image/*">
                                        </td>
                                        <td class="pro-title">
                                            <input type="text" name="product_title" placeholder="Product Title" value="{{ old('product_title', $title) }}">
                                        </td>
                                        <td class="pro-deskripsi">
                                            <input type="text" name="product_description" placeholder="Product Description" value="{{ old('product_description', $description) }}">
                                        </td>
                                        <td class="pro-price">
                                            <input type="number" name="product_price" placeholder="Price Product" value="{{ old('product_price', $price) }}">
                                        </td>
                                        <td class="pro-cart"><button type="submit" class="btn product-cart button-icon flosun-button dark-btn"> {{$button}}</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <br><br><br>
                        <br><br><br>
                        <h3>EDIT MY PRODUCT</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-deskripsi">Deskripsi</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-edit">Edit</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{asset('storage/products/' . $product->image)
                                    }}" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="{{ route('product.detail', $product->id) }}">{{$product->name}}</a></td>
                                    <td class="pro-deskripsi"><span>{{$product->description}}</span></td>
                                    <td class="pro-price"><span>Rp{{$product->price}}</span></td>
                                    <td class="pro-edit"><a href="{{ route('katalogmitra.edit', $product->id) }}">Edit<i class="lnr lnr-edit"></i></a></td>
                                    <td class="pro-remove"><a href="{{ route('katalogmitra.delete', $product->id) }}"><i class="lnr lnr-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Wishlist main wrapper end -->
   <br>
   <br>
   @endsection
