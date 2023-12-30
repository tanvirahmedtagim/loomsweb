
@include('backend.sessionMsg')
<div class="card-body">


    <div class="form-group">
        <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>
       
        <input type="email" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Mobile <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="mobile" value="{!!old('mobile',@$edit->mobile)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Age <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="age" value="{!!old('age',@$edit->age)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
       
        <textarea name="description" id="" cols="30" rows="10" class="form-control" > {!!old('description',@$edit->description)!!}</textarea>
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Experience <span style="color:red" >*</span></label>
       
        <textarea name="location" id="" cols="30" rows="10" class="form-control" > {!!old('experience',@$edit->experience)!!}</textarea>
       
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Expertise <span style="color:red" >*</span></label>
       
        <textarea name="expertise" id="" cols="30" rows="10" class="form-control" > {!!old('expertise',@$edit->expertise)!!}</textarea>
       
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Preferred Type <span style="color:red" >*</span></label>
       
        @foreach ($prefer as $item)
        <div class="form-check">
            <input class="form-check-input " type="radio" name="preferred_type" id="" value="{{$item->id}}"  {{$item->id == $edit->preferred_type ? 'checked' : ''}}>
            <label class="form-check-label" for="">
              {{$item->name}}
            </label>
          </div>
        @endforeach
       
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Max Price <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="max_price" value="{!!old('max_price',@$edit->max_price)!!}">
       
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Min Price <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="min_price" value="{!!old('min_price',@$edit->min_price)!!}">
       
      </div>
      
      
      <div class="form-group">
        <label for="exampleInputEmail1">Sales Quantity <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="sales_quantity" value="{!!old('sales_quantity',@$edit->sales_quantity)!!}">
       
      </div>
            <div class="form-group">
        <label for="exampleInputEmail1">Facebook </label>
       
        <input type="url" class="form-control" name="facebook" value="{{@$edit->facebook}}" >
       
      </div>
            <div class="form-group">
        <label for="exampleInputEmail1">Instagram </label>
       
        <input type="url" class="form-control" name="instagram" value="{!!old('instagram',@$edit->instagram)!!}">
       
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Youtube </label>
       
        <input type="url" class="form-control" name="youtube" value="{!!old('youtube',@$edit->youtube)!!}">
       
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Password <span style="color:red" >*</span></label>
       
        <input type="password" class="form-control" name="password" >
       
      </div>




</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
