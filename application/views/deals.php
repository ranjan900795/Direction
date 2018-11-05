<html>
    <head>

    </head>
    <body>
        
        <form  method="post" action="../monthly_deals/do_upload">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Picture</label>
                        <input class="form-control" type="file" name="picture" />
                    </div>
                    <div class="form-group">
                        <label>destination</label>
                        <input class="form-control" type="text" name="destination" />
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input class="form-control" type="text" name="price" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>