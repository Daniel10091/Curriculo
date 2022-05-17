<?php
  include_once "config.php";
  $sql = mysqli_query($conn, "SELECT * FROM curriculo");
  if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="shortcut icon" href="./src/assets/logo/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./src/styles/index.css">
</head>
<body>
  <div class="curriculo_page_content">
    <div class="person_info_block">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP4H1krh35nMt4P-2BtTvSBeX7RGVEqx6oRYI8lOa5VLzKfy04DhXv_gYOCk039R-xh7M&usqp=CAU" alt="Background" class="background">
      <div class="person_info_content">
        <img src="./src/assets/images/<?php echo $row['image']; ?>" alt="Imagem do Perfil">
        <div class="text">
          <h1 class="person_name"><?php echo $row['fname']. " " . $row['lname'] ?></h1>
          <h2><?php echo $row['office']; ?></h2>
        </div>
      </div>
    </div>
    <div class="curriculo_content">
      <div class="column">
        <div class="personal_profile">
          <h3>Perfil Pessoal</h3>
          <span class="bar"></span>
          <p><?php echo $row['personal_profile']; ?></p>
        </div>
        <div class="contact">
          <h3>Contato</h3>
          <span class="bar"></span>
          <div class="address">
            <ion-icon name="location-outline"></ion-icon>
            <p><?php echo $row['address']; ?></p>
          </div>
          <div class="email">
            <ion-icon name="mail-outline"></ion-icon>
            <p><?php echo $row['email']; ?></p>
          </div>
          <div class="tel">
            <ion-icon name="call-outline"></ion-icon>
            <p><?php echo $row['tel']; ?></p>
          </div>
          <div class="phone">
            <ion-icon name="logo-whatsapp"></ion-icon>
            <p><?php echo $row['phone']; ?></p>
          </div>
          <div class="linkedin">
            <ion-icon name="logo-linkedin"></ion-icon>
            <a href="" class="linkedin_link" target="_blank"><?php echo $row['linkedin']; ?></a>
          </div>
          <div class="site">
            <ion-icon name="link-outline"></ion-icon>
            <a href="" class="site_link" target="_blank"><?php echo $row['site']; ?></a>
          </div>
        </div>
        <div class="personal_profile">
          <h3>Educação</h3>
          <span class="bar"></span>
          <!-- <p>UDF, Bacharel em Sistema deInformação, 2021 - 3° Semestre - Cursando</p> -->
          <p><?php echo $row['education']; ?></p>
        </div>
      </div>
      <div class="column">
        <div class="skills">
          <h3>Habilidades</h3>
          <span class="bar"></span>
          <p id="skills"><?php echo $row['skills']; ?></p>
        </div>
        <div class="experience">
          <h3>Experiência de Trabalho</h3>
          <span class="bar"></span>
          <!-- <p>Centro Universitário do Distrito Federal - UDF. Janeirode 2021 - Presente</p> -->
          <p><?php echo $row['experience']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./src/scripts/pages/curriculo.js"></script>
</body>
</html>