@extends('backend.layout.master')
@section('title')
    Booking Form - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Booking Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking Form</h3>
             
       
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Designer Name</th>
                    <th>Designer Email</th>
                    <th>Designer Phone</th>
                    
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   
                   @foreach ($booking as $key=>$item)
                       
                 
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{@$item->name}}</td>
                    <td>{{@$item->email}}</td>
                    <td>{{@$item->phone}}</td>
                    <td>{{@$item->designer->name}}</td>
                    <td>{{@$item->designer->email}}</td>
                    <td>{{@$item->designer->mobile}}</td>
                    <td>{{@$item->created_at->format('d M,Y')}}</td>
                   <td>
                  
               
                      {{--<a href="{{route('category.edit',[$item])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('category.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>--}}
                         
                         
                
                    </td>
                   
                  </tr>
                  @endforeach
    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Designer Name</th>
                    <th>Designer Email</th>
                    <th>Designer Phone</th>
                    <th>Date</th>
                  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection