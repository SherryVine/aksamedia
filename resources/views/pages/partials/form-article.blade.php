<form method="post" action="{{ Route('article.inputPost') }}" role="form">
  @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    <div class="form-group">
        <label>Title *</label>
        <input type="text" name="title" max="255" class="form-control" required/>
    </div>
    <div class="form-group">
      <label>Category *</label>
      <div class="form-check">
        @foreach ($categories as $result)
            <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $result->id }}">
            <label class="form-check-label" style="font-weight:normal;">
              {{ $result->name }}
            </label>
        @endforeach
      </div>
    </div>
    <div class="form-group">
        <label>Body *</label>
        <textarea name="body" class="form-control" style="width: 100%; height: 150px;"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit Button</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
</form>
