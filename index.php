<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Relay! Style Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/main.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">


  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>




</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo" style="color: white">
          <em>Relay</em>
        <span class="sg-logo-full">STYLE GUIDE</span>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title" style="color: white">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2" >Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, and speed up development times. </p>
            <p></p>
          </div><!--/.sg-about-->

            <!-- Manually add your UI colors here. -->
            <div class="sg-colors sg-section">
                <h2 id="sg-colors" class="sg-h2">Colors</h2>
                <div class="sg-color-grid">
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #B30838;"></div>
                        <div class="sg-color-name">Crimson</div>
                        <div class="sg-color-value">#B30838</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #2C49A4;"></div>
                        <div class="sg-color-name">Pacific
                        </div>
                        <div class="sg-color-value">#2C49A4</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #A8DADC;"></div>
                        <div class="sg-color-name">Sea Foam
                        </div>
                        <div class="sg-color-value">#A8DADC</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #E63946;"></div>
                        <div class="sg-color-name">Imperial Red
                        </div>
                        <div class="sg-color-value">#E63946</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #F7F7F7;"></div>
                        <div class="sg-color-name">Fog
                        </div>
                        <div class="sg-color-value">#F7F7F7</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #1D3557;"></div>
                        <div class="sg-color-name">Prussian
                        </div>
                        <div class="sg-color-value">#1D3557</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #5D97C9;"></div>
                        <div class="sg-color-name">Sea
                        </div>
                        <div class="sg-color-value">#5D97C9</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #FFAC5F;"></div>
                        <div class="sg-color-name">Orange
                        </div>
                        <div class="sg-color-value">#FFAC5F</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #79B9ED;"></div>
                        <div class="sg-color-name">Sky Blue
                        </div>
                        <div class="sg-color-value">#79B9ED</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #ffffff;"></div>
                        <div class="sg-color-name">White</div>
                        <div class="sg-color-value">#ffffff</div>
                    </div>
                    <div class="sg-color">
                        <div class="sg-color-swatch" style="background-color: #000000;"></div>
                        <div class="sg-color-name">Black</div>
                        <div class="sg-color-value">#000000</div>
                    </div>
                </div>
              <!--/.sg-color-grid-->
            </div>
          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Proxima Nova Regular";'>Proxima Nova</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: "Proxima Nova Bold"; font-weight: 700;'>Proxima Nova</dd>

              <dt>Secondary Font:</dt>
              <dd style='font-family: "Chronicle Display Ligth";'>Chronicle Display</dd>

              <dt>Secondary Font Bold:</dt>
              <dd style='font-family: "Chronicle Display Semibold"; font-weight: 700;'>Chronicle Display</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->



          <hr>


        <?php renderFilesInFolder('markup'); ?>

      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

