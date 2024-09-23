<?php  
  define('MAX_FILE_SIZE', 300 * 1024 * 1024); //!temp increased to 300MB will take it back to 3MB
  define('UPLOAD_DIR', '../uploads/');
  $message = "";
  
  if (isset($_GET['user'])) {
    $userId = $_GET['user'];
    $conn = Database::getInstance();
    $stmt = $conn->prepare("SELECT firstname FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId);

    if ($stmt->execute()) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $firstname = $result['firstname'];
    } else {
        $message = "Failed to submit form!";
    }
  } else {
      // Handle the case where the 'user' parameter is not set
      $message = "User ID is missing.";
  }


  function handleFileUpload($fileInputName) {
    if (!isset($_FILES[$fileInputName]) || $_FILES[$fileInputName]['error'] !== UPLOAD_ERR_OK) {
        return ["status" => "error", "message" => "No file uploaded or upload error occurred."];
    }

    $file = $_FILES[$fileInputName];
    // Check file size
    if ($file['size'] > MAX_FILE_SIZE) {
        return ["status" => "error", "message" => "File '{$file['name']}' exceeds the maximum allowed size of 3MB."];
    }

    // Sanitize filename
    $filename = preg_replace("/[^a-zA-Z0-9.-]/", "_", $file['name']);
    $targetPath = UPLOAD_DIR . $filename;

    // Ensure upload directory exists
    if (!file_exists(UPLOAD_DIR) && !mkdir(UPLOAD_DIR, 0755, true)) {
      echo 'Failed to create upload directory.';
      return ["status" => "error", "message" => "Failed to create upload directory."];
    }
    // echo move_uploaded_file($file['tmp_name'], $targetPath);die;
    // Move uploaded file
    if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
      echo 'Error uploading file';die;
      error_log("Failed to move uploaded file: " . error_get_last()['message']);
      return ["status" => "error", "message" => "Error uploading file. Please try again."];
    }

    // File upload successful
    // return  $targetPath;
    return [
      "status" => "success",
      "message" => "File '{$filename}' uploaded successfully.",
      "path" => $targetPath
    ];
  }