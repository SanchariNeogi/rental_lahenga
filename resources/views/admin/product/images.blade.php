<x-admin-layout>    
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-8 col-xl-8 col-xxl-8 mx-auto">
                            <div class="card h-100"> 
                                <div class="card-body">        
                                    <h4 class="card-title pb-2">All Product Images (<span class="text-primary">{{ $product->product_name }}</span>) 
                                        <span class="float-end d-table">    
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#addData">Add New</a>     
                                        </span>    
                                    </h4>      
                                    <table id="datatable" class="table table-bordered dt-responsive w-100"> 
                                        <thead>
                                            <tr>
                                                <th>#</th>                                      
                                                <th>Product Image</th>   
                                                <th>Action</th>   
                                            </tr> 
                                        </thead>      
                                        <tbody class="align-middle">
                                            @php $no = 1; @endphp
                                            @foreach($product_images as $product_images)   
                                                <tr> 
                                                    <td class="text-body fw-bold" width="2%">{{ $no++ }}</td> 
                                                    <td><img src="{{ asset($product_images->product_image) }}" class="rounded d-block mx-auto" height="40" width="40"></td>           
                                                    <td width="15%">        
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteData{{ $product_images->id }}" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Delete</a>     
                                                    </td>     
                                                </tr>    
                                                <div class="modal fade" id="deleteData{{ $product_images->id }}" tabindex="-1" aria-labelledby="deleteDataModalLabel" aria-hidden="true">   
                                                    <div class="modal-dialog modal-dialog-centered">    
                                                        <div class="modal-content">
                                                            <div class="modal-header border-bottom-0">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <div class="avatar-md mx-auto mb-3">
                                                                        <div class="text-warning">    
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                                            </svg>     
                                                                        </div>
                                                                    </div> 
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-xl-10">
                                                                            <h4 class="text-warning mb-3">Warning !</h4>   
                                                                            <p class="text-muted font-size-14">Are you sure you want to delete ?</p>   
                                                                        </div>   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a class="btn btn-danger" href="{{ url('admin/delete-product-image') }}/{{ $product_images->id }}">Yes</a>       
                                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>      
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>                                      
                                            @endforeach                                              
                                        </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </div> 
    <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">    
        <div class="modal-dialog modal-dialog-centered">           
            <div class="modal-content">
                <div class="modal-header">  
                    <h5 class="modal-title">Add Images</h5>    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.product_image.store') }}" enctype="multipart/form-data">   
                    @csrf     
                        <input type="hidden" name="product_id" value="{{ $product->id }}">      
                        <div class="row">                                
                            <div class="col-md-12">
                                <label class="form-label">Images</label>  
                                <input class="form-control" type="file" name="images[]" id="formFile" required accept="image/*" multiple>        
                            </div>        
                        </div>   
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>  
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>  
</x-admin-layout>    