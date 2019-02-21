<html>
    <head>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row  my-5">
                <div class="col-10 m-auto border">
                    <form method="POST" action="../admin/activities_upload" enctype="multipart/form-data" class="px-3 py-3">

                        <div class="form-group m-0 mb-2">

                            <input type="name" name="name" class="col-12 form-control form-control-sm" placeholder="small letters Enter the activity name ">
                        </div> 

                        <div class="form-group">
                            <label for="exampleFormControlFile1">image</label>
                            <input type="file" name="file" class="form-control-file" id="file">
                        </div>

                        <div class="form-group col-md-2">

                            <input type="text" name="price" class="form-control" placeholder="price">
                        </div>

                        <div class="form-group m-0 mb-2">

                            <input type="name" name="dest" class="col-12 form-control form-control-sm" placeholder="small letters Enter the destination name where it is">
                        </div> 

                        <button type="submit" class="btn btn-block btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>