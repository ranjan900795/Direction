<html>
    <head>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row  my-5">
                <div class="col-10 m-auto border">
                    <form method="POST" action="../admin/places_upload" class="px-3 py-3">

                        <div class="form-group m-0 mb-2">

                            <input type="name" name="destination" class="col-12 form-control form-control-sm" placeholder="small letters Enter the destination name ">
                        </div> 
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group col-md-4">

                            <select id="inputState" class="form-control" name="part">
                                <option selected>choose indian part</option>
                                <option>south</option>
                                <option>north</option>
                                <option>east</option>
                                <option>west</option>
                                <option>central</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-block btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>