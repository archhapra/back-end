<html>
	  @include('back end.Back end header.head')

	  <body>
	  	
<body>
@include('back end.Back end header.header')

 

   <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-11">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <h1>Add Static Page</h1>
                <div class="col-sm-4">
                  <label for="name" class="control-label">name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="url" class="control-label">url</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="url">
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

               <div class="form-group">
                <div class="col-sm-4">
                  <label for="body" class="control-label">body</label>
                </div>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="body">
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
              <a class="btn btn-lg btn-primary" href="payment">Add</a>
            </div>
            <div class="col-md-2">
              <a class="btn btn-lg btn-primary" href="dashboard">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>