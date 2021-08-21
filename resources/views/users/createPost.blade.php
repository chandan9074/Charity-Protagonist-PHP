<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create post</title>
<!-- font style -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- style sheet  -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/createpost/createPost.css')}}" />

</head>
<body style="background-image: url(/css/createpost/postImages/create-bg.png); background-repeat: no-repeat; background-size: 100% 100%;  min-height: 100vh;">
  <!-- Create Post -->
     <main>
         <?php 
            // $msg = "";
            
            // // If upload button is clicked ...
            // if (isset($_POST['upload'])) {
            //     $description = $_POST["description"];
            //     // $filename = $_FILES["uploadfile"]["name"];
            //     // $tempname = $_FILES["uploadfile"]["tmp_name"];    
            //     //     $folder = "image/".$filename;
            //     // echo "<script>console.log('helllosdfsddfs');</script>";
                    
            //     $db = mysqli_connect("localhost", "root", "", "save_charity");
            
            //         // Get all the submitted data from the form
            //         $sql = "INSERT INTO user_profile (user_id, descriptions, image_file ) VALUES ('1','$description','asdfasdfas')";
            
            //         // Execute query
            //         mysqli_query($db, $sql);
                    
            //         // Now let's move the uploaded image into the folder: image
            //         // if (move_uploaded_file($tempname, $folder))  {
            //         //     $msg = "Image uploaded successfully";
            //         //     echo "<script>console.log('helllosdfsddfs');</script>";
            //         // }else{
            //         //     $msg = "Failed to upload image";
            //         //     echo "<script>console.log('dfghdfghdgfhd');</script>";
            //         // }
            //     }
            //     // $result = mysqli_query($db, "SELECT * FROM user_profile");
            $mysqli = new mysqli("localhost", "root", "", "save_charity") or die(mysqli_error($mysqli)); 

                if (isset($_POST['upload'])){
                    $description = $_POST["description"];
                    // $first_name = $_POST['first_name'];
                    // $last_name = $_POST['last_name'];
                    // $age = $_POST['age'];

                    $mysqli->query("INSERT INTO user_profile (user_id, descriptions, image_file ) VALUES ('1','$description','asdfasdfas')") or die($mysqli->error);
                }
        ?>
        <section class="create-section">
            <div class="form-header">
                <h2 class=" mb-4 mt-5 text-center text-color fw-bold"></h2>
            </div>

            <form action="" class="" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="my-3">
                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Caption</label>
                    <textarea class="form-control border-2 block border-gray-200 rounded w-3/4 mb-4 px-2" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Describe this event's experience and work"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label fw-bold">Add Media</label>
                    <input class="form-control border-2 block border-gray-200 rounded w-3/4 mb-4 px-2" type="file" 
                   name="uploadfile" 
                   value=""  id="formFile">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="upload" class="btn btn-color my-3 fw-bold">Post</button>
                </div>
            </form>
        </section>
     </main>
   
</body>
</html>