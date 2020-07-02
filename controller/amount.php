<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    if(isset($_POST['Deposit'])){
        $action = 'Deposit';
    }

    if(isset($_POST['Withdrawal'])){
        $action = 'Withdrawal';
    }
    
    switch($action){
        case '':
            require('views/error.php');
            break;
        case 'Deposit':
            if(isset($_POST['amountDeposit'])){
                $sum = (int) $_POST['amountDeposit'] + (int) $_SESSION['amount'];
                $db->editAmountUser($_SESSION['id'],$sum);
                $_SESSION['amount'] = $sum;
                echo json_encode([ 'status' => '200', 'amount' => $sum ]);

            };
            break;
        case 'Withdrawal':
            if(isset($_POST['amountWithdrawal'])){
                
                if((int)$_SESSION['amount'] < (int)$_POST['amountWithdrawal']){
                    echo json_encode([ 'status' => '300']);
                }else{
                    $sum = $_SESSION['amount'] - $_POST['amountWithdrawal'];
                    $db->editAmountUser($_SESSION['id'],$sum);
                    $_SESSION['amount'] = $sum;
                    echo json_encode([ 'status' => '200', 'amount' => $sum ]);
                }
            };
            break;
        case '':
            require('views/error.php');
            break;
        default:
            require('views/error.php');
            break;
    }
?>