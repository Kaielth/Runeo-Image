        <li class="<?php echo isset($grupos_active) ? $grupos_active : ""; ?>"><a href="#">Grupos</a></li>
        <li class="dropdown <?php echo isset($entrar_active) ? $entrar_active : ''; ?>">
          <a href="<?php echo base_url(); ?>entrar/" class="dropdown-toggle" data-toggle="dropdown">Entrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>registrar/">Registrarse</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
