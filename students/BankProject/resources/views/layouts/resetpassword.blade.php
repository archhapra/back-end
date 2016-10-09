<html><head>
    <style>
      body {background-color: skyblue !important;}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
  @include('layouts.frontEnd.header')
    <!-- <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Buy Online</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <a class="active btn btn-default btn-lg">Dashboard</a>
                      <a class="active btn btn-default btn-lg">Others</a>
                      <a class="active btn btn-default btn-lg btn-linkbtn-lg">Catogries</a>
                      <a class="active btn btn-default btn-lg">Products</a>
                      <a class="active btn btn-default btn-lg">Mobiles</a>
                      <a class="active btn btn-default btn-lg">Static Pages</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="btn-toolbar" role="toolbar">
                      <div class="btn-group"></div>
                      <div class="btn-group">
                        <a class="active btn btn-info btn-lg">Login</a>
                        <a class="active btn btn-info btn-lg" href="layout 7.html">Sign-up</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="border:1px solid black">
            <h1>Reset password</h1>
            <form role="form">
              <div class="form-group">
               <div class="form-group">
                <label class="control-label" for="password">Enter Password</label>
                <input class="form-control" id="password" placeholder="Enter password" type="password">
              </div>
            <div class="form-group">
                <label class="control-label" for="password">Re-Enter Password</label>
                <input class="form-control" id="password" placeholder="Re-Enter Password" type="email">
              </div>
              <a type="submit" class="btn btn-default btn-lg" href="userlogin">Reset Password</a>
              <a type="submit" class="btn btn-default btn-lg" href="userlogin">Cancel</a>
              <div></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>