<!DOCTYPE html><html lang="ptbr"><?php include("meta-tags.php"); ?><body>  <div class="layer"></div><!-- ! Body --><div class="page-flex">  <?php include("sidebar.php"); ?>  <?php include("header.php");  ?>    <!-- ! Main -->    <main class="main users chart-page" id="skip-target">      <div class="container">        <h2 class="main-title">Usuários</h2>        <div class="row">          <form class="sign-up-form form" action="usuario-adicionar-db.php" method="post">              <label class="form-label-wrapper">                <p class="form-label">Nome</p>              <input class="form-input" name="nome" type="text" placeholder="Digite o nome" required>            </label>          <label class="form-label-wrapper">            <p class="form-label">Nome de usuário</p>            <input class="form-input" name="nomeUsuario" type="text" placeholder="Digite o nome de usuário" required>          </label>          <label class="form-label-wrapper">            <p class="form-label">Senha</p>            <input class="form-input" name="senha" type="password" placeholder="Digite a senha" required>          </label>          <button class="form-btn primary-default-btn transparent-btn">Cadastrar</button>        </form>            </div>          </div>        </div>      </div>    </main>  </div></div><?php include("js-library.php"); ?></body></html>