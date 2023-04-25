<x-admin-layout>    
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-12 col-xl-12 col-xxl-12">
                            <div class="card h-100">
                                <div class="card-body">        
                                    <h4 class="card-title pb-2">All Orders</h4>       
                                    <table id="datatable" class="table table-bordered dt-responsive w-100">  
                                        <thead>
                                            <tr>
                                                <th>#</th> 
                                                <th>Order ID</th>  
                                                <th>Items</th>   
                                                <th>Total Price</th>   
                                                <th>Name</th>
                                                <th>Phone</th>  
                                                <th>Date</th> 
                                                <th>Action</th>  
                                            </tr> 
                                        </thead>      
                                        <tbody class="align-middle">
                                            @php $no = 1; @endphp
                                            @foreach($orders as $orders)  
                                            <tr>
                                                <td>{{ $no++ }}</td> 
                                                <td>{{ $orders->order_id }}</td>  
                                                <td>{{ $orders->total_item }}</td>     
                                                <td>₹{{ $orders->total_price }}</td>      
                                                <td>{{ $orders->first_name }} {{ $orders->last_name }}</td>     
                                                <td>{{ $orders->phone }}</td>     
                                                <td>{{ date('M j Y - g:i A', strtotime($orders->created_at)) }}</td>    
                                                <td>    
                                                    <a href="{{ url('admin/order-details') }}/{{ $orders->order_id }}" class="btn btn-primary btn-sm">Details</a> 
                                                </td>         
                                            </tr>             
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
</x-admin-layout>    