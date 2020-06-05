  <footer id="rodape">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3 mb-5 mb-lg-0 midias-sociais">
          <img src="<?= get_template_directory_uri() ?>/assets/images/logo_biomob_3.png" alt="">
          <p>Solução Digitais para pessoas <br>com deficiência. Acessibilidade <br>e inclusão é a nossa missão.</p>
          <div class="icones">
            <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_facebook.svg" alt=""></a>
            <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_instagram.svg" alt=""></a>
            <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_linkedin.svg" alt=""></a>
            <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_youtube.svg" alt=""></a>
            <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_twitter.svg" alt=""></a>
          </div>
        </div>

        <div class="col-12 col-lg-3 mb-5 mb-lg-0 contato">
          <h4>Contato</h4>
          <div class="contato__info">
            <div class="contato__endereco">
              <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_pin.svg" alt="">
              <p>Rua Afrânio de Melo Franco, 333 <br>Petrópolis - RJ</p>
            </div>
            <div class="contato__tel">
              <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_phone.svg" alt="">
              <p>(21) 99999-9999</p>
            </div>
            <div class="contato__email">
              <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_email.svg" alt="">
              <p>contato@biomob.com.br</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3 d-none d-lg-flex menu">
          <h4>Menu</h4>

          <div class="menu__itens">
            <ul>
              <li><a href="">Quem Somos</a></li>
              <li><a href="">O Aplicativo</a></li>
              <li><a href="">Eventos</a></li>
            </ul>

            <ul>
              <li><a href="">Campanhas</a></li>
              <li><a href="">Parceiros</a></li>
              <li><a href="">Contato</a></li>
            </ul>
          </div>

        </div>
        <div class="col-12 col-lg-3 downloads">
          <h4>Baixe nosso aplicativo</h4>
          <div class="stores">
            <img src="<?= get_template_directory_uri() ?>/assets/images/googleplay.png" alt="">
            <img src="<?= get_template_directory_uri() ?>/assets/images/appstore.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer() ;?>
</body>
</html>
