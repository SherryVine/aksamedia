<form method="post" action="{{ Route('product.inputPost') }}" role="form">
  @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    <div class="form-group">
        <label>Category *</label>
        <select class="form-control" name="category_id">
          <option value="" selected disabled>Choose Category</option>
          @foreach ($category as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Name *</label>
        <input type="text" name="product_name" max="32" class="form-control" required/>
    </div>
    <div class="form-group">
        <label>Description *</label>
        <textarea name="product_description" class="form-control" style="width: 100%; height: 150px;"></textarea>
    </div>
    <div class="form-group">
        <label>Price *</label>
        <input type="number" name="price" class="form-control" required/>
    </div>
    <button type="submit" class="btn btn-default">Submit Button</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
</form>
