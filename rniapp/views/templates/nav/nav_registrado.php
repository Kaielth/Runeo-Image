        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grupos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Administrar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subir imagen <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Administrar imagenes</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <img style="width: 2.25em; margin: -2.25em;" src="<?php echo base_url() ?>assets/img/default.jpg" alt="Perfil" />
          </a>
        </li>
        <li class="dropdown">
          <a href="#" style="color: #FEF;" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->tank_auth->get_username() ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="<?php echo base_url() ?>cerrar-sesion/">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
