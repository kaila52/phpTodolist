<?php
require "views/component/headerAdmin.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Customer</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Picture</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Picture</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                foreach ($user as $key => $value) {
                                    echo '
                                        <tr data-id=' . $value["id"] . ' data-username=' . $value["username"] . ' data-email=' . $value["email"] . '>
                                            <td name="id">' . $key . '</td>
                                            <td>' . $value["username"] . '</td>
                                            <td>' . $value["email"] . '</td>
                                            <td><a href="pucblic/images/user/' . $value["picture"] . '">Link</a></td>
                                            <td>    
                                                <p>' . $value["roler"] . '</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-xs btn-edit">Edit</button>
                                                <button class="btn btn-danger btn-xs btn-delete">Delete</button>
                                            </td>
                                        </tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2019</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php
require "views/component/fotterAdmin.php";
?>

<script>
    $("body").on("click", ".btn-edit", function() {
        var username = $(this).parents("tr").attr('data-username');
        var email = $(this).parents("tr").attr('data-email');

        $(this).parents("tr").find("td:eq(1)").html('<input name="edit_name" value="' + username + '">');
        $(this).parents("tr").find("td:eq(2)").html('<input name="edit_email" value="' + email + '">');
        $(this).parents("tr").find("td:eq(3)").find("a").hide();
        $(this).parents("tr").find("td:eq(3)").prepend("<div class='file'><label for='files' class='btn btn-primary'>Select Image</label><input id='files' style='display: none' type='file'></div>");
        $(this).parents("tr").find("td:eq(4)").find("p").hide();
        $(this).parents("tr").find("td:eq(4)").prepend('<select class="form-control"><option>manager</option><option>guest</option></select>');

        $(this).parents("tr").find("td:eq(5)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>")
        $(this).hide();
        $(this).parents("tr").find('.btn-delete').hide();
    });

    $("body").on("click", ".btn-cancel", function() {
        var username = $(this).parents("tr").attr('data-username');
        var email = $(this).parents("tr").attr('data-email');

        $(this).parents("tr").find("td:eq(1)").text(username);
        $(this).parents("tr").find("td:eq(2)").text(email);
        $(this).parents("tr").find("td:eq(3)").find('a').show();
        $(this).parents("tr").find("td:eq(3)").find('div').remove();
        $(this).parents("tr").find("td:eq(4)").find('p').show();
        $(this).parents("tr").find("td:eq(4)").find('select').remove();

        $(this).parents("tr").find(".btn-edit").show();
        $(this).parents("tr").find(".btn-delete").show();
        $(this).parents("tr").find(".btn-update").remove();
        $(this).parents("tr").find(".btn-cancel").remove();
    });
    $("body").on("click", ".btn-delete", function(e) {
        var data;
        data = new FormData();
        data.append('delete', $(this).parents("tr").attr("data-id"));

        $.ajax({
            url: "index.php?controller=admin&action=customer",
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response) {
                if(response === "success"){
                    location.reload();
                }
            }
        });
    });

    $("body").on("click", ".btn-update", function() {
        var data;

        data = new FormData();
        data.append('update', $(this).parents("tr").attr("data-id"));

        $.ajax({
            url: "index.php?controller=admin&action=customer",
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response) {
                console.log(response);

                // You will get response from your PHP page (what you echo or print)
            }
        });
    })
</script>