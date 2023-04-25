<x-admin-layout>    
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-xl-6 col-xxl-3 mx-auto">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Change Password</h4>   
                                    <form method="POST" action="{{ route('admin.change.password') }}">   
                                    @csrf     
                                        <div class="row">                                 
                                            <div class="col-12">
                                                <label class="form-label">Old Password</label>  
                                                <input type="password" class="form-control" name="old_password" value="{{ old('old_password') }}" required>  
                                            </div>    
                                            <div class="col-12 mt-3">
                                                <label class="form-label">New Password</label>  
                                                <input type="password" class="form-control" name="new_password" value="{{ old('new_password') }}" required> 
                                            </div> 
                                            <div class="col-12 mt-3">
                                                <label class="form-label">Re-Password</label>  
                                                <input type="password" class="form-control" name="confirm_password" value="{{ old('confirm_password') }}" required>  
                                            </div>     
                                        </div>         
                                        <div class="mt-3"> 
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