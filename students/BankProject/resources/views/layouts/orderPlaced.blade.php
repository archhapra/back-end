<html>
@include('layouts.frontEnd.head')
<!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    </head> --><body>
  <!--       <div class="section">
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
    </div> -->
     @include('layouts.frontEnd.headerSigned')
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="border:1px solid black">
                        <h1 class="text-success">order placed
                            <br>
                        </h1>
                        <h1 class="text-primary">congratulations
                            <br>
                            <br>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. no</th>
                                    <th>Product name</th>
                                    <th>Category</th>
                                    <th>ordered</th>
                                    <th>price</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>redmi</td>
                                    <td>mobiles</td>
                                    <td>date</td>
                                    <td>12000</td>
                                    <td>pending</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

</body></html>