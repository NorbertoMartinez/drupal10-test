<?php

namespace Drupal\react_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class ReactController extends ControllerBase {

  public function page() {
    $response = '<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>React App</title>
      <link rel="stylesheet" href="/modules/reactmodule/react_app/static/css/main.css">
    </head>
    <body>
      <div id="root"></div>
      <script src="/modules/reactmodule/react_app/static/js/main.js"></script>
    </body>
    </html>';

    return new Response($response);
  }
}
