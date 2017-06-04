    <header class="gt-top-menu xs-left">
      <img src="assets/img/marca.png" alt="Lâmpada" />
      <label class="menu-toggle">
        <svg viewBox="0 0 24 24">
          <path fill="#333" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
        </svg>
      </label>
      <nav>
        <ul>
          <a href="."><li <?php Session::is_active(['', 'index']); ?>>Resultado</li></a>
          <?php if(Session::permission(50)): ?>
          <a href="ranking"><li <?php Session::is_active(['ranking']); ?>>Ranking</li></a>
          <a href="criteria"><li <?php Session::is_active('criteria'); ?>>Critérios</li></a>
          <a href="teams"><li <?php Session::is_active('teams'); ?>>Equipes</li></a>
          <a href="controllers/user_controller?logout"><li>Sair</li></a>
          <?php else: ?>
          <a href="login"><li>Login</li></a>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
