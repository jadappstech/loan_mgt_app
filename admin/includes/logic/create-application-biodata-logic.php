<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('./../layouts/config.php');
// $username = trim($_POST['username']);
// $username = filter_var($username, FILTER_SANITIZE_STRING);
//FILE UPLOAD STARTS
// proof_of_identity
// proof_of_address
// proof_of_income
// The above docs will be called from the user tble when needed

// var_dump($_POST);die;
//insert record from first form into the database
$maxFileSize = 5 * 1024 * 1024; // 5MB

if(isset($_POST['form_one'])){
// guarantor_proof_of_identity
    if ($_FILES["guarantor_proof_of_identity"]["size"] > 0) {
        $targetfolder = "docs/guarantor_proof_of_identity" . basename($_FILES["guarantor_proof_of_identity"]["name"]);
        $target = "./docs/" . basename($_FILES["guarantor_proof_of_identity"]["name"]);
        // $proof_of_identity = $_FILES['guarantor_proof_of_identity']['name'];
        $newTarget = preg_replace("/\s/", "_", $targetfolder);
        $proof_of_identity = "./".$newTarget;
        
        // Check file size
        if ($_FILES["guarantor_proof_of_identity"]["size"] >  $maxFileSize) {
            // return(STATUS_ERROR "$proof_of_identity File exceeds 3MB");
            return "$proof_of_identity File exceeds 3MB";
        }
        // var_dump(move_uploaded_file($_FILES["photo"]["tmp_name"], $target));die;
        // Move uploaded file to target location
        // if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target)) {
        if (move_uploaded_file($_FILES["guarantor_proof_of_identity"]["tmp_name"], $targetfolder)) {
            
        }else{
            var_dump( "Error uploading file");die;
            // return( "Error uploading file");
        }
    }
    // guarantor_proof_of_address
    if ($_FILES["guarantor_proof_of_address"]["size"] > 0) {
        $targetfolder = "docs/guarantor_proof_of_address" . basename($_FILES["guarantor_proof_of_address"]["name"]);
        $target = "./docs/" . basename($_FILES["guarantor_proof_of_address"]["name"]);
        $newTarget = preg_replace("/\s/", "_", $targetfolder);
        $guarantor_proof_of_address = "./".$newTarget;
        // Check file size
        if ($_FILES["guarantor_proof_of_address"]["size"] >  $maxFileSize) {
            return "$guarantor_proof_of_address File exceeds 3MB";
        }
        if (move_uploaded_file($_FILES["guarantor_proof_of_address"]["tmp_name"], $targetfolder)) {
            
        }else{
            var_dump( "Error uploading file");die;
        }
    }
    // guarantor_proof_of_income
    if ($_FILES["guarantor_proof_of_income"]["size"] > 0) {
        $targetfolder = "docs/guarantor_proof_of_income" . basename($_FILES["guarantor_proof_of_income"]["name"]);
        $target = "./docs/" . basename($_FILES["guarantor_proof_of_income"]["name"]);
        $newTarget = preg_replace("/\s/", "_", $targetfolder);
        $guarantor_proof_of_income = "./".$newTarget;
        // Check file size
        if ($_FILES["guarantor_proof_of_income"]["size"] >  $maxFileSize) {
            return "$guarantor_proof_of_income File exceeds 3MB";
        }
        if (move_uploaded_file($_FILES["guarantor_proof_of_income"]["tmp_name"], $targetfolder)) {
            
        }else{
            var_dump( "Error uploading file");die;
        }
    }

    //FILE UPLOAD ENDS
    $loan_type = $_POST['loan_type'];
    $user_id = $_SESSION['applicant_id'];
    $loan_amount = $_POST['loan_amount'];
    $duration = $_POST['duration'];
    $repayment_term = $_POST['repayment_term'];
    $purpose_of_loan = $_POST['purpose_of_loan'];
    $employer = $_POST['emp_biz_name'];
    $monthly_income = $_POST['monthly_income'];
    $monthly_expenses = $_POST['monthly_expenses'];
    $guarantor_name = $_POST['guarantor_name'];
    $guarantor_relationship = $_POST['guarantor_relationship'];
    $guarantor_email = $_POST['guarantor_email'];
    $guarantor_phone = $_POST['guarantor_phone'];
    $guarantor_address = $_POST['guarantor_address'];
    // $application_id = $_POST['application_id'];
    $application_id = $_SESSION['application_id'];

    // var_dump($_POST);die;
    $query = "INSERT INTO applications (loantype_id, user_id, loan_amount, duration, repayment_term, purpose_of_loan, employer, guarantor_name, guarantor_relationship, guarantor_email, guarantor_phone, guarantor_address, guarantor_proof_of_identity, guarantor_proof_of_income, guarantor_proof_of_address,application_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    try {
        // Prepare and execute statement
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iidsssdsssisssss", $loan_type,$user_id,$loan_amount,$duration,$repayment_term,$purpose_of_loan,$employer,$guarantor_name,$guarantor_relationship,$guarantor_email,$guarantor_phone,$guarantor_address,$guarantor_proof_of_identity,$guarantor_proof_of_address,$guarantor_proof_of_income,$application_id);
        $stmt->execute();
        // var_dump('Saved successfully');die;
        header("Location: ./../../create-application-loan-info.php?id=$user_id");
    } catch (mysqli_sql_exception $e) {
        echo "Error Code: " . $e->getCode() . "<br>";
        echo "Error Message: " . $e->getMessage();
    }
    $stmt->close();
    
}elseif(isset($_POST['form_two_next'])){
    // update db with record from second form
    if($_SESSION['applicant_id']){
        $user_id = $_SESSION['applicant_id'];
    }else{
        $user_id = $_SESSION['applicant_id'];
    }
    // var_dump($_FILES);die;
    // upload docs

    // $jsonData = array();
    // Loop through $_POST variables
    // foreach ($_POST as $key => $value) {
    //     if (strpos($key, 'doc_name_') === 0) {
    //         // $correspondingKey = str_replace('doc_name_', 'doc_', $key);
    //         $jsonData[$key] = $value;
    //     }
    // }

    // Loop through $_FILES variables
    // foreach ($_FILES as $key => $file) {
    //     if (strpos($key, 'doc_') === 0) {
    //         $jsonData[$key] = $file['name'];
    //     }
    // }

    // Loop through $_POST variables
    // foreach ($_POST as $key => $value) {
    //     if (strpos($key, 'doc_name_') == 0) {
    //         $docKey = str_replace('doc_name_', '', $key);
    //         $jsonData[$value] = $_POST['doc_' . $docKey];
    //     }
    // }

    // Encode data to JSON
    // $json = json_encode($jsonData);
    $docNames = array();
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'doc_name_') === 0) {
            $docNames[] = $value;
        }
    }
    // $documents = array();
    // foreach ($_FILES as $key => $value) {
    //     if (strpos($key, 'doc_') === 0) {
    //         $documents[] = $value;
    //     }
    // }
    $docFiles = array();
foreach ($_FILES as $key => $file) {
    if (strpos($key, 'doc_') === 0) {
        $docFiles[] = $file['name'];
    }
}


    // Output JSON
    $jsonData = array_combine($docNames, $docFiles);

    $json = json_encode($jsonData);
    
    // echo $json;die;
    

// }

    // if ($_FILES["doc_1"]["size"] > 0) {
    //     $targetfolder = "docs/" . $_POST['doc_name_1'] . basename($_FILES["doc_1"]["name"]);
    //     $target = "./docs/" . basename($_FILES["doc_1"]["name"]);
    //     // $doc_1 = $_FILES['doc_1']['name'];        
    //     $newTarget = preg_replace("/\s/", "_", $targetfolder);
    //     $doc_1 = "./".$newTarget;
        
    //     // Check file size
    //     if ($_FILES["doc_1"]["size"] >  $maxFileSize) {
    //         // return(STATUS_ERROR "$doc File exceeds 3MB");
    //         return $doc_1 . " File exceeds 5MB";
    //     }
    //     // Move uploaded file to target location
    //     if (move_uploaded_file($_FILES["doc_1"]["tmp_name"], $targetfolder)) {
    //     }else{
    //         $error = error_get_last();
    //         return "Error uploading file: " . $error['message'];
    //     }
    // }
    $query = "UPDATE applications SET 
    bank_name = ?,
    account_name = ?,
    account_no = ?,
    account_type = ?,
    payment_type = ?,
    docs = ?
    WHERE application_id = ?";
    $stmt = $conn->prepare($query);
    // var_dump($conn);die;
    $stmt->bind_param("isiiiss", $bank_name,$account_name,$account_number,$account_type,$payment_type, $doc_1, $_SESSION['application_id']);

    $bank_name = $_POST['bank_name'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
    $account_type = $_POST['account_type'];
    $payment_type = $_POST['payment_type'];
    $doc_1 = $json;

    try{
        $stmt->execute();
        header("Location: ./../../verification-stage.php?id=$user_id");
    } catch (mysqli_sql_exception $e) {
        echo "Error Code: " . $e->getCode() . "<br>";
        echo "Error Message: " . $e->getMessage();
    }
    $stmt->close();
}
// header('Location: ./../../create-application-loan-info.php');