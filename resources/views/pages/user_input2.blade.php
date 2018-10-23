@extends('layouts.main')

@section('title', 'User Input')

@section('content')
<div class="container contact-form">
  <div class="contact-image">
    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
  </div>
  <form method="post" action="{{ Route('user.inputPost2') }}">
    <h3>Drop 'ur Profile Details</h3>
    <div class="row">
      @method('put')
      @csrf
      <div class="col-md-6">
        <div class="form-group">
          <label for="" style="margin-left:10px;">Your Name *</label>
          <input type="text" name="name" class="form-control" placeholder="" value="" required/>
        </div>
        <div class="form-group">
          <label for="" style="margin-left:10px;">Your Place of Birth *</label>
          <input type="text" name="placebirth" class="form-control" placeholder="" value="" required/>
        </div>
        <div class="form-group">
          <label for="" style="margin-left:10px;">Your Date of Birth *</label>
          <!-- Datepickernya default dari bootstrap :(( -->
          <input type="date" name="datebirth" class="form-control" value="" required/>
        </div>
        <div class="form-group" style="margin-left:10px;">
          <label for="">Your Gender *</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="lk" value="L" required>
            <label class="form-check-label" for="lk">
              L
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="pr" value="P">
            <label class="form-check-label" for="pr">
              P
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="" style="margin-left:10px;">Your Email *</label>
          <input type="email" name="email" class="form-control" placeholder="" value="" required/>
        </div>
        <div class="form-group">
          <input type="submit" name="btnSubmit" class="btnContact" value="Save" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="" style="margin-left:10px;">Your Address *</label>
          <textarea name="address" class="form-control" placeholder="" style="width: 100%; height: 150px;" required></textarea>
        </div>
      </div>
    </div>
  </form>
  <div class="card-footer">
    <a href="{{ Route('result') }}">Result</a>
  </div>
</div>
@endsection
