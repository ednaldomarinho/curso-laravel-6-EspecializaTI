@include('admin.includes.alerts')
@csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $product->name ?? old('name')}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $product->description ?? old('description')}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price" value="{{$product->price ?? old('price')}}">
        </div>
        <div class="form-group">
            <input type="file"class="form-control"  name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Send</button>
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>