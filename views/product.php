<?php
if (empty($_SESSION['username'])) {
    return header('location: /');
}

if ($_SESSION['role'] !== 'manager') {
    return header('location: index.php?controller=index');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="pucblic/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Shop admin</h3>
                </div>
            </div>
        </div>
        <form>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Name Product
                </div>
                <div class="col-3">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Code Product
                </div>
                <div class="col-3">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Category </div>
                <div class="col-3">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Monney
                </div>
                <div class="col-3">
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Description
                </div>
                <div class="col-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    Picture
                </div>
                <div class="col-3">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    <button type="button" class="btn btn-success">Success</button>
                </div>
                <div class="col-3">

                </div>
            </div>
        </form>
    </div>
    <script src="pucblic/js/jquery-3.4.1.min.js"></script>
    <script src="pucblic/js/bootstrap.bundle.min.js"></script>
    <script src="pucblic/js/bootstrap.min.js"></script>
    <script>
        $(".deletecate").click(function() {
            var id = $(this).parent().find("a").attr("id");
            var body = {
                id
            }
            console.log(body);
            $.ajax({
                url: "/api/category",
                type: "DELETE",
                data: body,
                dataType: "json"
            }).then(data => {
                if (data.status === 1) {
                    alert('thành công')
                    return location.reload();
                }
            })

        });
    </script>
</body>

</html>