
                @include('backend.sessionMsg')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="title" value="{!!old('title',@$edit->title)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
                   
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control">{!!old('desc',@$edit->desc)!!}</textarea>
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category <span style="color:red" >*</span></label>
                   
                    <select class="form-control" id="dropdown" name="category">
                    
                      <option>Select Category</option>
                        
                      @foreach ($category as $key => $value)
                        <option value="{{ $value->id }}" {{ ( $value->id == @$edit->category) ? 'selected' : '' }}> 
                            {{ $value->name }} 
                        </option>
                      @endforeach    
                    </select>
                   
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="price" value="{!!old('price',@$edit->price)!!}">
                   <input type="hidden" name="designer_id" value="{{Auth::user()->id}}">
                  </div>
                  <div class="form-group row">
                    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                    
                    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo/Picture <span style="color:red" >*</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input"  id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
         