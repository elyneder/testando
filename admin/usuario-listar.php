<!DOCTYPE html>
<html lang="ptbr">

<?php include("meta-tags.php"); ?>

<body>
  <div class="layer"></div>
<!-- ! Body -->

<div class="page-flex">

  <?php include("sidebar.php"); ?>

  <?php include("header.php");  ?>

    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Usuários</h2>
        <div class="row">

          <?php include("inc/conexao.php"); ?>

          <?php 

            $sql = "SELECT * FROM usuario where isAtivo is true";

            $result = $conexao -> query($sql);

            if(mysqli_num_rows($result) < 1)
            {
              die("Nenhum usuário cadastrado");  
            }                                      
            else {            
          ?>

       
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">Foto
                      </label>
                    </th>
                    <th>Nome</th>
                    <th>Nome usuário</th>
                    <th>Está ativo?</th>
                    <th>Editar</th>
                    <th>Alterar</th>
                  </tr>
                </thead>
                <tbody>
          <?php            

              while($row = $result->fetch_assoc()) {
//                echo "id: " . . " - Name: " . $row["nome_usuario"]. " " . $row["isAtivo"]. "<br>"
           
          ?>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="./img/categories/01.webp" type="image/webp"><img src="./img/categories/01.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                        <?php   echo $row["nome"];  ?>
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="./img/avatar/avatar-face-04.webp" type="image/webp"><img src="./img/avatar/avatar-face-04.png" alt="User Name"></picture>
                        <?php   echo $row["nome_usuario"];  ?>
                      </div>
                    </td>
                    <td><span class="badge-pending"><?php echo $row["isAtivo"] ? "Sim" : "Não";  ?></span></td>
                    <td>
                      <a href="usuario-editar.php?usuarioID=<?php   echo $row["id"];  ?>">Editar</a>
                    </td>
                    <td>
                      <a href="usuario-excluir.php?usuarioID=<?php   echo $row["id"];  ?>">Excluir</a>
                    </td>
                  </tr>
              <?php 
                }
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>
</div>
<?php include("js-library.php"); ?>
</body>

</html>