<form method="post" action="{{ Route('user.inputPost') }}" role="form">
  @csrf
    <div class="form-group">
        <label>Your Name*</label>
        <input type="text" name="name" class="form-control" placeholder="" value="" required/>
    </div>
    <div class="form-group">
        <label>Your Place of Birth *</label>
        <input type="text" name="placebirth" class="form-control" placeholder="" value="" required/>
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
        <textarea name="address" class="form-control" placeholder="" style="width: 100%; height: 150px;" required></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit Button</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
</form>
