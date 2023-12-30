@extends('backend.layout.master')
@section('title')
    All Designer - Looms Fashion
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Designer </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Designer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
  
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Designer List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Age</th>
                  <th>Logo</th>
                  <th>Max Price</th>
                  <th>Min Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}
                    </td>
                    <td>{{$item->email}}</td>
                    <td> {{$item->mobile}}</td>
                    <td>{{$item->age}}</td>
                    <td><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 150px"></td>
                    <td> {{$item->max_price}}</td>
                    <td>{{$item->min_price}}</td>
                    <td>
                      @if ($item->approve == 1)
                          <span class="text-green"> Approve </span>
                      @else
                      <span class="text-danger"> Not - Approve </span>
                      @endif
                    </td>
                    <td>
                        <a href="{{route('designer.admin.edit',[$item->id])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                        {{--     <form action="{{route('designer.destroy',[$item])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                      </form>--}}
                      @if ($item->approve == 0)
                          <a href="{{route('approve_designer', $item->id)}}" class="btn btn-sm btn-success"> Approve</a>
                      @elseif($item->approve == 1)
                          <a href="{{route('disapprove_designer', $item->id)}}" class="btn btn-sm btn-success"> Disapprove</a>
                      @endif
                    </td>
                  </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Logo</th>
                    <th>Max Price</th>
                    <th>Min Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection