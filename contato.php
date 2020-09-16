<?php include 'head.php' ?>


<body>
    <?php include 'header.php'?>
    <link rel="stylesheet" href="./css/contato.css">

    <div style="min-height:188px;background-color:#000">
    </div>

    <div>
        <div>
            <h2>Fale connosco e obtenha os <br />
                melhores produtos e ofertas de<br />
                Italia, Espanha e Portugal<br />
            </h2>

            <p>Quer representar os nossos produtos na sua zona?<br />
                Entre em contato agora!!!  <br />
                </p>
        </div>
        <div class="fcf-body">

            <div id="fcf-form">
            <h3 class="fcf-h3">FALE CONNOSCO</h3>

            <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
                
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Seu Nome</label>
                    <div class="fcf-input-group">
                        <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Empresa</label>
                    <div class="fcf-input-group">
                        <input type="text" id="Empresa" name="Empresa" class="fcf-form-control" required>
                    </div>
                </div>


                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">Endereço de email</label>
                    <div class="fcf-input-group">
                        <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Sua Mensagem</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Enviar</button>
                </div>
            </form>
            </div>

        </div>
        
    </div>


    <?php include 'footer.php' ?>
</body>
