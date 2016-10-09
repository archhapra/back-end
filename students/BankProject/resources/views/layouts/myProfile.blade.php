<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({
          showOn: "button",
          buttonImage: "calendar.gif",
          buttonImageOnly: true,
          buttonText: "Select date"
        });
      } );
    </script>
  </head><body>
  @include('layouts.frontEnd.headerSigned')
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
                        <a class="active btn btn-info btn-lg">Sign-up</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 -->    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>My Profile</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="Name" class="control-label">First Name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="Name" class="control-label">Last Name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label class="control-label" for="gender">Gender</label>
                </div>
                <div class="col-sm-2">
                  <label>
                    <input type="checkbox">Male</label>
                </div>
                <div class="col-sm-2">
                  <label>
                    <input type="checkbox">Female</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label class="control-label">Contact No.</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="Date of birth" class="control-label">Date of birth</label>
                </div>
                <div class="col-sm-8">
                  <p>
                    <input type="text" id="datepicker">
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="inputEmail3" class="control-label">Email</label>
                </div>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="address" class="control-label">address</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="address">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="Pincode" class="control-label">Pincode</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pincode" placeholder="Pincode">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <a class="btn btn-lg btn-primary" href="orderHistory">Save</a>
            </div>
            <div class="col-md-2">
              <a class="btn btn-lg btn-primary" href="orderHistory">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>