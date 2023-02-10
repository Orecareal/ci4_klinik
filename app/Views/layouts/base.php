<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/dist/css/style.css') ?>" rel="stylesheet">
    <title>Klinik CI4 | <?= $title ?></title>
  </head>
  <body>
    <?= $this->renderSection('content') ?>
    <script src="<?= base_url('/dist/js/bootstrap.bundle.min.js') ?>"></script>
  </body>
</html>
