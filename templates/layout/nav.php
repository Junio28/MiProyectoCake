<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">MMENU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= $this->Url->build('/') ?>">INICIO<span class="visually-hidden">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/casa-musical') ?>">Casa Musical</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/albumes') ?>">Albumes</a>
      </li>
    </ul>
  </div>
</nav>
