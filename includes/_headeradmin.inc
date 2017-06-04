    <header class="gt-top-menu xs-left">
      <img src="assets/img/minilogo.png" alt="Lâmpada" />
      <label class="menu-toggle">
        <svg viewBox="0 0 24 24">
          <path fill="#333" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
        </svg>
      </label>
      <nav>
        <ul>
          <?php if(Session::permission(90)): ?>
          <a href="users"><li <?php Session::is_active('users'); ?>>Usuários</li></a>
          <a href="criterias"><li <?php Session::is_active('criterias'); ?>>Critérios</li></a>
          <a href="team"><li <?php Session::is_active('team'); ?>>Equipes</li></a>
          <a href="controllers/vote_controller?clear"><li <?php Session::is_active('competitors'); ?>>Limpar Votos</li></a>
          <a href="competitors"><li <?php Session::is_active('competitors'); ?>>Competidores</li></a>
          <li class="dropdown-right" role="button" tabindex="0">
              <span>Páginas do Juri</span>
              <ul>
                  <a href="teams" target="_blank"><li>Times</li></a>
                  <a href="criteria" target="_blank"><li>Critérios</li></a>
              </ul>
          </li>
          <a href="controllers/user_controller?logout"><li>Sair</li></a>
          <?php else: ?>
          <a href="login"><li>Login</li></a>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
