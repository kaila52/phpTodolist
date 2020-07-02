</body>
<script src="pucblic/js/jquery-3.4.1.min.js"></script>
<script src="pucblic/js/bootstrap.bundle.min.js"></script>
<script src="pucblic/js/bootstrap.min.js"></script>
<script>
    $("button[name='Deposit']").click(function() {
        var data;

        data = new FormData();
        data.append('Deposit','');
        data.append('amountDeposit', $("input[name='amountDeposit']").val());

        $("input[name='amountDeposit']").val('');

        $.ajax({
            url: "index.php?controller=amount&action=deposit",
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response) {
                var obj = JSON.parse(response)
                if(obj.status == '200'){
                    $('.amount').text(`Số dư : ${obj.amount}$`)
                    $("input[name='amountDeposit']").parents('.form-group').find('p').remove();
                    $("input[name='amountDeposit']").parents('.form-group').append('<p class="text-left text-success">Nạp Thành công</p>');
                }
            }
        });
    });

    $("button[name='Withdrawal']").click(function() {
        var data;

        data = new FormData();
        data.append('Withdrawal','');
        data.append('amountWithdrawal', $("input[name='amountWithdrawal']").val());
        $("input[name='amountWithdrawal']").val('');

        $.ajax({
            url: "index.php?controller=amount&action=withdrawal",
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response) {
                var obj = JSON.parse(response)
                if(obj.status == '200'){
                    $('.amount').text(`Số dư : ${obj.amount}$`)
                    $("input[name='amountWithdrawal']").parents('.form-group').find('p').remove();
                    $("input[name='amountWithdrawal']").parents('.form-group').append('<p class="text-left text-success">Rút Thành công</p>');
                }
                
                if(obj.status == '300'){
                    $("input[name='amountWithdrawal']").parents('.form-group').find('p').remove();
                    $("input[name='amountWithdrawal']").parents('.form-group').append('<p class="text-left text-danger">Số dư không đủ</p>');
                }
            }
        });
    });

    $("button[name='updatePasswd']").click(function() {
        var data;

        data = new FormData();
        data.append('updatePasswd','');
        data.append('oldpasswd', $("input[name='oldpasswd']").val());
        data.append('newpasswd', $("input[name='newpasswd']").val());
        data.append('cfpasswd', $("input[name='cfpasswd']").val());
        $("input[name='oldpasswd']").val('');
        $("input[name='newpasswd']").val('');
        $("input[name='cfpasswd']").val('');

        $.ajax({
            url: "index.php?controller=profile&action=password",
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response) {
                var obj = JSON.parse(response)
                if(obj.status == '200'){
                    $('.amount').text(`Số dư : ${obj.amount}$`)
                    $("input[name='amountWithdrawal']").parents('.form-group').find('p').remove();
                    $("input[name='amountWithdrawal']").parents('.form-group').append('<p class="text-left text-success">Rút Thành công</p>');
                }
                
                if(obj.status == '300'){
                    $("input[name='amountWithdrawal']").parents('.form-group').find('p').remove();
                    $("input[name='amountWithdrawal']").parents('.form-group').append('<p class="text-left text-danger">Số dư không đủ</p>');
                }
            }
        });
    });

</script>

</html>