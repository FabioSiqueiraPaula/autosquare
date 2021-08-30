<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>>
</head>

<body>
  <div class="container">
    <ul id="gn-menu" class="gn-menu-main">
      <li class="gn-trigger">
        <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller">
            <ul class="gn-menu">
              <li class="gn-seearch-item">
                <input placeholder="Localizar Cliente" type="search" class="gn-search">
                <a class="gn-icon gn-icon-search" placeholder="Digite o nome ou CPF"><span>Localizar Cliente</span></a>
              </li>
              <li>
                <a><span class="icon-user-plus"></span>Cadastro de Cliente</a>
                <ul class="gn-submenu">
                  <li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
                  <li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
                </ul>
              </li>
              <li><a class="gn-icon gn-icon-cog">Settings</a></li>
              <li><a class="gn-icon gn-icon-help">Help</a></li>
              <li>
                <a class="gn-icon gn-icon-archive">Archives</a>
                <ul class="gn-submenu">
                  <li><a class="gn-icon gn-icon-article">Articles</a></li>
                  <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                  <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /gn-scroller -->
        </nav>
      </li>
      <li><a href="http://tympanus.net/codrops">Codrops</a></li>
      <li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
      <li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li>
    </ul>
    <header>
      <h1>Aplicação de Gerenciamento de Cliente</h1>
    </header>
  </div><!-- /container -->
  <script src="js/classie.js"></script>
  <script src="js/gnmenu.js"></script>
  <script>
    new gnMenu(document.getElementById('gn-menu'));
  </script>
</body>

</html>