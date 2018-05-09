<?php
if ($funcionario['tipo'] == 1) {
echo '<a href="cadastro_usuario.php" class="btnMenu"><i class="fas fa-user-plus menu-icons"></i>Usuários</a>';
echo '<a href="cadastro_cliente.php" class="btnMenu"><i class="fas fa-address-card menu-icons"></i>Clientes</a>';
echo '<a href="pedidos.php" class="btnMenu"><i class="fas fa-notes-medical menu-icons"></i></i>Pedidos</a>';
echo '<a href="estoque.php" class="btnMenu"><i class="fas fa-box-open menu-icons"></i>Estoque</a>';
echo '<a href="" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Controle de Lucro</a>';
echo '<a href="usuarios.php" class="btnMenu"><i class="fas fa-dollar-sign menu-icons"></i>Usuarios do sistema</a>';
echo '<a href="../controller/logout.php" class="btnMenu"><i class="fas fa-sign-out-alt menu-icons"></i>Sair</a>';
}else{
echo '<a href="cadastro_cliente.php" class="btnMenu"><i class="fas fa-address-card menu-icons"></i>Clientes</a>';
echo '<a href="pedidos.php" class="btnMenu"><i class="fas fa-notes-medical menu-icons"></i></i>Pedidos</a>';
echo '<a href="../controller/logout.php" class="btnMenu"><i class="fas fa-sign-out-alt menu-icons"></i>Sair</a>';
}
?>