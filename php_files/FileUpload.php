<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        Upload File: <input type="file" name="upload-file" class="upload-file"><br>
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Using $_FILES file varible we can retrive the file data.
        if (isset($_FILES['upload-file']) && $_FILES['upload-file']['error'] === UPLOAD_ERR_OK) {
            // Retrive the file details.
            $retrive_file_path = $_FILES['upload-file']['tmp_name'];
            $file_name = $_FILES['upload-file']['name'];

            // Read the file into array.
            $read_file = file($retrive_file_path);
            foreach ($read_file as $line) {
                echo 'File opened <br>';
                print_r($line);
            }
        }
        else {
            echo 'File doesn\'t exists';
        }
    }
    ?>
</body>

</html>