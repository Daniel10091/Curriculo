<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo</title>
  <link rel="shortcut icon" href="./src/assets/logo/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./src/styles/index.css">
</head>
<body>
  <form action="#" method="POST" class="form_box" enctype="multipart/form-data" autocomplete="off">
    <div class="error-text"></div>
    <div class="form_title">
      <h1>Criar um Portfólio Online</h1>
      <h2>Preencha os campos abaixo</h2>
    </div>
    <div class="form_content">
      <div class="form_content_row">
        <div class="form_content_column inputs_container">
          <b>Nome:</b>
          <input type="text" class="fname_input" name="fname" placeholder="Primeiro Nome" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
        <div class="form_content_column inputs_container">
          <b>Sobrenome:</b>
          <input type="text" class="lname_input" name="lname" placeholder="Segundo Nome" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row">
        <div class="form_content_column inputs_container">
          <b>Email:</b>
          <input type="email" class="email_input" name="email" placeholder="email@exemplo.com" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
        <div class="form_content_column inputs_container">
          <b>Telefone: <span>(opcional)</span></b>
          <input type="tel" class="tel_input" name="tel" maxlength="10" placeholder="(61) 1234-5678">
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row">
        <div class="form_content_column inputs_container">
          <b>Celular:</b>
          <input type="tel" class="phone_input" name="phone" maxlength="11" placeholder="(61) 91234-5678" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
        <div class="form_content_column inputs_container">
          <b>Endereço: <span>(Incluir também Estado, Cidade, Cep)</span></b>
          <input type="text" class="address_input" name="address" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_single-row">
        <div class="form_content_column inputs_container">
          <b>Perfil Pessoal:</b>
          <textarea class="personal_profile_input" name="personal_profile" required></textarea>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row">
        <div class="form_content_column form_content_column-file">
          <b>Foto do Perfil:</b>
          <input type="file" class="image_profile_input" id="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" onchange="loadFile(event)" required>
          <div class="file_content">
            <label for="file">Escoler arquivo</label>
            <img id="image_preview" alt="Image profile">
          </div>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row">
        <div class="form_content_column inputs_container">
          <b>Linkedin: <span>(Link)</span></b>
          <input type="text" class="linkedin_input" name="linkedin" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
        <div class="form_content_column inputs_container">
          <b>Site: <span>(Link)</span></b>
          <input type="text" class="site_input" name="site" required>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_single-row">
        <div class="form_content_column inputs_container">
          <b>Educação:</b>
          <input type="text" class="education_input" name="education" required>
          <div class="autocom-box education"></div>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_single-row">
        <div class="form_content_column inputs_container">
          <b>Cargo:</b>
          <input type="text" class="office_input" name="office" required>
          <div class="autocom-box office"></div>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_single-row">
        <div class="form_content_column inputs_container">
          <b>Habilidades: <span>(Separadas por espaço)</span></b>
          <textarea class="skills_input" name="skills" required></textarea>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_single-row">
        <div class="form_content_column inputs_container">
          <b>Experiência de Trabalho:</b>
          <textarea class="experience_input" name="experience" required></textarea>
          <ion-icon name="alert-circle-outline"></ion-icon>
          <span>deve ser informado</span>
        </div>
      </div>
      <div class="form_content_row form_content_submit">
        <div class="form_content_column">
          <button type="submit" class="submit">Enviar</button>
        </div>
      </div>
    </div>
  </form>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./src/scripts/suggestions.js"></script>
  <script src="./src/scripts/main.js"></script>
  <script src="./src/scripts/send.js"></script>
</body>
</html>