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
    </div> -->
     @include('layouts.frontEnd.headerProducts')
    <div id="carousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="c1.jpg" height="500" width="1200">
          <div class="carousel-caption">
            <h2>Samsung</h2>
            <p>Life Like pictures</p>
          </div>
        </div>
        <div class="item">
          <img src="c2.jpg" height="500" width="1200">
          <div class="carousel-caption">
            <h2>Mobile</h2>
            <p>Fashion in hand</p>
          </div>
        </div>
        <div class="item">
          <img src="c4.jpg" height="500" width="1200">
          <div class="carousel-caption">
            <h2>Iphone 7</h2>
            <p>Next generation</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
    <div class="section">
      <div class="container">
        <div class="row"></div>
        <div class="row" style="border:3px solid black">
          <h1>Top Selling</h1>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>iphone 5</h1>
            <a href="payment"><img src="1.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>iphone 6</h1>
            <a href="payment"><img src="2.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>note 3</h1>
            <a href="payment"><img src="3.jpeg" class="img-responsive img-thumbnail"></a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>iphone 8</h1>
            <a href="payment"><img src="4.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-4"><pre>  </pre></div>
           <div class="col-md-4"></div>
            <div class="col-md-4"><pre>  </pre></div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row" style="border:3px solid black">
          <h1>new products</h1>
          <div class="col-md-2">
            <h1>htc 820</h1>
            <a href="payment"><img src="4.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>htc 816</h1>
            <a href="payment"><img src="5.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>iphone 4</h1>
            <a href="payment"><img src="6.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <h1>iphone 4</h1>
            <a href="payment"><img src="1.jpeg" class="img-responsive">
          </div></a>
          <div class="col-md-4"><pre>  </pre></div>
           <div class="col-md-4"></div>
            <div class="col-md-4"><pre>  </pre></div>
        </div>
      </div>
    </div>
  

</body></html>