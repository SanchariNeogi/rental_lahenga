<x-admin-layout>    
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-8 col-xl-8 col-xxl-8 mx-auto">
                            <div class="card h-100">   
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Update Product</h4>  
                                    <form method="POST" action="{{ route('admin.product.update') }}" enctype="multipart/form-data">          
                                    @csrf        
                                        <input type="hidden" name="id" value="{{ $product->id }}"> 
                                        <div class="row">  
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Thumbnail</label>   
                                                    <input class="form-control" type="file" name="image" id="formFile">    
                                                </div>   
                                                <img src="{{ asset($product->product_thumbnail) }}" class="rounded d-block mx-auto" height="70" width="80">  
                                            </div>    
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Name</label>  
                                                    <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" required>  
                                                </div>
                                                <x-input-error :messages="$errors->get('product_name')" class="text-danger" />    
                                            </div>     
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Price (₹)</label>     
                                                    <input type="text" class="form-control" name="product_price" value="{{ $product->product_price }}" required>       
                                                </div>     
                                                <x-input-error :messages="$errors->get('product_price')" class="text-danger" />   
                                            </div>       
                                            <div class="col-md-12"> 
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>  
                                                    <textarea class="form-control" name="product_descriptions" required>{{ $product->product_descriptions }}</textarea>          
                                                </div>        
                                            </div>   
                                        </div>                                 
                                        <div class="mt-2">  
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </form>
                                </div> 
                            </div> 
                        </div> 
                    </div>  
                </div>
            </div>
        </div> 
    </div>      
</x-admin-layout>        