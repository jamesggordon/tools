<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Jimmy&rsquo;s Toolkit</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
      <br>
      <h2>Jimmy&rsquo;s Toolkit</h2>
      <br>
      <form method="POST" action="{{ URL::to('/') }}" accept-charset="UTF-8" class="form" role="form" autocomplete="off">
@csrf
        <fieldset>
          <div class="row mb-1">
            <div class="col-lg-3">
              <select name="todo" class="form-control"><option value="0" selected="selected">Select function...</option><option value="json_decode">json_decode()</option><option value="mailgun_failure">Mailgun Failure</option><option value="base64_decode">base64_decode</option></select>
            </div>
            <input type="submit" class="btn btn-primary float-right" value="Go">
          </div>
          <br>
          <h3>Input</h3>
          <div class="row mb-1">
            <div class="col-lg-12">
              <textarea rows="10" name="encoded" class="form-control">{{ $encoded ?? '' }}</textarea>
            </div>
          </div>
        </fieldset>
      </form>
@if ( !empty( $output ))
      <br>
      <h3>Output</h3>
      <div class="row mb-1">
        <div class="col-lg-12">
          <pre class="border" style="padding:1em">{{ $output }}</pre>
        </div>
      </div>
@endif
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>