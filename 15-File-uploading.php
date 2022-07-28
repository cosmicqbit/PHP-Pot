<?php 
    if(isset($_POST['submit'])) {
        $allowed_ext = array('png', 'jpg', 'jpeg', 'pdf');

        if(!empty($_FILES['upload']['name'])) {
            print_r($_FILES);
            $file_name = $FILES['upload']['name'];
            $file_size = $FILES['upload']['size'];
            $file_tmp = $FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            // Get file ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            echo $file_ext;

            // Validate file type/extension
            if(in_array($file_ext, $allowed_ext)) {
            // Validate file size
                if($file_size <= 1000000) { // 1000000 bytes = 1MB
                // Upload file
                move_uploaded_file($file_tmp, $target_dir);
        
                // Success message
                echo '<p style="color: green;">File uploaded!</p>';
                } else {
                echo '<p style="color: red;">File too large!</p>';
                }
        } else {
            $message = '<p style="color: red">Please choose a file</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiel Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="mul"></form>
    <input type="file" name="upload"><br>
    <input type="submit" value="Submit" name=Submit>
</body>
</html>