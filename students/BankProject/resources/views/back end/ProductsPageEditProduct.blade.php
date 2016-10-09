<html>
	  @include('back end.Back end header.head')

	  <body>
	  	
<body>
@include('back end.Back end header.header')

 

   <div class="section">
      <div class="container">
        <div class="row" style="border:1px solid black">
          <div class="col-md-11">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <h1>Products/Edit product</h1>
                <div class="col-sm-4">
                  <label for="product" class="control-label">Product Name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="product">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="quantity" class="control-label">Quantity in Stock</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="quantity">
                </div>
              </div>

               <div class="form-group">
                <div class="col-sm-4">
                  <label for="price" class="control-label">Price per unit</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="price">
                </div>
              </div>

                  <div class="form-group">
                <div class="col-sm-4">
                  <label for="category" class="control-label">Category</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="category">
                </div>
              </div>

                <div class="form-group">
                <div class="col-sm-4">
                  <label for="ram" class="control-label">RAM</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="ram">
                </div>
              </div>

               <div class="form-group">
                <div class="col-sm-4">
                  <label for="processor" class="control-label">Processor</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="processor">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-4">
                  <label class="control-label">Icon</label>
                </div>
                <div class="col-sm-8">
                   <input type="file" name="pic" accept="image/*">
  <input type="submit">
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
              <a class="btn btn-lg btn-primary" href="payment">Save</a>
            </div>
            <div class="col-md-2">
              <a class="btn btn-lg btn-primary" href="dashboard">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>