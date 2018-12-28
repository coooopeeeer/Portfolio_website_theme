<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div id="wrapper">
      <nav>
        <ul>
          <li>
            <a href="#about">ABOUT ME</a>
          </li>
          <li>
            <a href="#works">WORKS</a>
          </li>
          <li>
            <a href="#contact">CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>