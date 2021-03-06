@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Request a Book</h2>
    <p class="lead">Something you would</p>
  </div>
</div>

<div class="contact-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group">
            <label for="inputName" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              <input class="form-control" rows="3" id="inputName" placeholder="Book Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAuthor" class="col-lg-2 control-label">Author</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputName" placeholder="Author name" type="text">
            </div>
          </div>

            @include ('layout.submitbtn')

        </fieldset>
      </form>
    </div>

    @include ('layout.alertbox')

  </div>
</div>

@stop
