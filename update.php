<?php
session_start();
include('conndb.php');




if(isset($_POST['changePass'])){
$newPass=$_POST['newPass'];
$retyPass=$_POST['retyPass'];
$emailPass=$_POST['emailPass'];


//$uid = $_POST['changePassId'];

                         if($newPass==$retyPass){
                                    try {
                                        $user = $auth->getUserByEmail($emailPass);
                                        if($user){
                                            $updateUserPass=$auth->changeUserPassword($user->uid, $newPass);
                                            
                                                if($updateUserPass){
                                                    $_SESSION['status']="password Update successful";
                                                    header("Location: landingpage.php");
                                                    exit();
                                                }else{
                                                    $_SESSION['status']="Failed to fetch operation";
                                                    header("Location: landingpage.php");
                                                    exit();
                                                }
                                        
                                        }else{
                                            $_SESSION['status']="Invalid email confirm and try again";
                                            header("Location: landingpage.php");
                                            exit();
                                        }
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {

                                        echo $e->getMessage();
                                        $_SESSION['status']="Failed to update password/Invalid email";
                                        header("Location: landingpage.php");
                                        exit();
                                    }          
                            }else{
                                $_SESSION['status']="passwords do not match";
                                header("Location: landingpage.php");
                                exit();
                            }

                        }else{
                            $_SESSION['status']="failed to fetch verification link";
                            header("Location: landingpage.php");
                            exit(); 
                        }   

    




if(isset($_POST['updateAccount']))
{
    $key=$_POST['key'];
    $earnedTotal=$_POST['earnedTotal'];
    $accountBal=$_POST['accountBal'];
    $bonusAmt=$_POST['bonusAmt'];
    $withdrawable=$_POST['withdrawable'];
    
    $newData = [
        'earnedTotal' => $earnedTotal,
        'accBal' => $accountBal,
        'bonus' => $bonusAmt,
        'withdrawal'=> $withdrawable
    ];   

    $updateResult = $database->getReference('users/'.$key)->update($newData);

    if($updateResult){
    $_SESSION['status']="User Update successful";
    header('Location: paid.php');
}else{
    $_SESSION['status']="User Update not successful";
    header('Location: paid.php');
}

};
?>