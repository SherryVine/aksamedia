<form method="post" action="{{ Route('user.inputPost2') }}" role="form">
  @method('put')
  @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    <div class="form-group">
        <label>Your Name*</label>
        <input type="text" name="name" min="4" max="16" class="form-control" placeholder="" value="" required/>
    </div>
    <div class="form-group">
        <label>Your Place of Birth *</label>
        <input type="text" name="placebirth" min="4" max="16" class="form-control" placeholder="" value="" required/>
    </div>
    <div class="form-group">
        <label>Your Date of Birth *</label>
        <input type="date" name="datebirth" class="form-control" value="" required/>
    </div>
    <div class="form-group">
        <label>Your Gender *</label>
        <label class="radio-inline">
            <input type="radio" name="gender" id="optionsRadiosInline1" value="L">L
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" id="optionsRadiosInline2" value="P">P
        </label>
    </div>
    <div class="form-group">
        <label>Your Email*</label>
        <input type="email" name="email" class="form-control" placeholder="" value="" required/>
    </div>
    <div class="form-group">
        <label>Your Address *</label>
        <textarea name="address" class="form-control" placeholder="" style="width: 100%; height: 150px;" minlength="4" maxlength="64"></textarea>
    </div>
    <div class="form-group">
        <label>Your Motto *</label>
        <textarea name="motto" class="form-control" placeholder="" style="width: 100%; height: 150px;" maxlength="128"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit Button</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
</form>
