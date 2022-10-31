<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
    return <<<EOF
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hello/Index</title>
</head>
<style>
body { font-size: 16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
     margin:-40px 0px -50px 0px; }
</style>
<body>
  <h1>Index</h1>
  <p>これは、Helloコントローラのindexアクションです。</p>
</body>
</html>
EOF;
  }
}
