<?php
  include_once "config.php";
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $tel = mysqli_real_escape_string($conn, $_POST['tel']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $personal_profile = mysqli_real_escape_string($conn, $_POST['personal_profile']);
  $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
  $site = mysqli_real_escape_string($conn, $_POST['site']);
  $education = mysqli_real_escape_string($conn, $_POST['education']);
  $office = mysqli_real_escape_string($conn, $_POST['office']);
  $skills = mysqli_real_escape_string($conn, $_POST['skills']);
  $experience = mysqli_real_escape_string($conn, $_POST['experience']);

  if (isset($_FILES['image'])) {
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
    $img_explode = explode('.', $img_name);
    $img_ext = end($img_explode);

    $extensions = ["jpeg", "png", "jpg"];
    if (in_array($img_ext, $extensions) === true) {
      $types = ["image/jpeg", "image/jpg", "image/png"];
      if (in_array($img_type, $types) === true) {
        $time = time();
        $new_img_name = $time.$img_name;
        if (move_uploaded_file($tmp_name, "src/assets/images/".$new_img_name)) {
          $insert_query = mysqli_query($conn, "INSERT INTO curriculo (fname, lname, email, tel, phone, address, personal_profile, image, linkedin, site, education, office, skills, experience)
          VALUES ('{$fname}', '{$lname}', '{$email}', '{$tel}', '{$phone}', '{$address}', '{$personal_profile}', '{$new_img_name}', '{$linkedin}', '{$site}', '{$education}', '{$office}', '{$skills}', '{$experience}')");
          if ($insert_query) {
            echo "success";
          } else {
            echo "Something went wrong. Please try again!";
          }
        }
      } else {
        echo "Please upload an image file - jpeg, png, jpg";
      }
    } else {
      echo "Please upload an image file - jpeg, png, jpg";
    }
  }
?>