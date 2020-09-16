<link rel="stylesheet" href="./css/header.css">

<header>
    <div class="contatoHeader">
        <img src="./img/IconWhatsapp.png" alt="icone whatsApp">
        <a href="https://api.whatsapp.com/send?phone=34667813672" target="_blank" rel="noopener noreferrer">ES +34 667 813 672</a>
        <img src="./img/iconEmail.png" alt="icone email">
        <p><a href="mailto:info@fidallgo.com">info@fidallgo.com</a></p>
    </div>
    <div class="menuHeader">
        <a href="./index.php"><img src="./img/logo.png" alt="logo da Fidallgo"></a>
        <div class="menu" id="myTopnav">
            <a href="./index.php">INICÍO</a>
            <a href="./products.php">PRODUTOS</a>
            <a href="./service.php">SERVIÇOS</a>
            <a href="./index.php#about">SOBRE NÓS</a>
            <a href="./contato.php">CONTATO</a>
            <a href="javascript:void(0);" style="font-size:33px;" class="icon" onclick="myFunction()">☰</a>
        </div>
    </div>
</header>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "menu") {
    x.className += " responsive";
  } else {
    x.className = "menu";
  }
}
</script>