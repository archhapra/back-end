  <html>
  @include('back end.Back end header.head')


<body>


  @include('back end.Back end header.header')

  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Category/Add Category</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3">
          
            </div>
            <div class="col-md-3">
            
            </div>
            <div class="col-md-3">
            	 
            </div>
          </div>
        </div>
      </div>
     <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-11">
            <form class="form-horizontal" role="form">
              <div class="form-group">
              
                <div class="col-sm-4">
                  <label for="category" class="control-label">category title</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="category">
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-sm-4">
                  <label class="control-label" for="gender">Is visible</label>
                </div>
                <div class="col-sm-1">
                  <label>
                    <input type="checkbox">True</label>
                </div>
                <div class="col-sm-2">
                  <label>
                    <input type="checkbox">False</label>
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
              <a class="btn btn-lg btn-primary">Add</a>
            </div>
            <div class="col-md-2">
              <a class="btn btn-lg btn-primary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    </div>
</body>
  </html>