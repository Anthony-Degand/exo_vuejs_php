<!-- layout = mise en page -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Cave - Votre cave sur mesure</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="assets/style/index.css">
</head>

<body>

  <!-- inclure la navbar -->
  <?php include 'libraries/views/nav.html.php' ?>
  <!-- inclure le contenue (injecter dans $pageContent) -->
  <div id="root"><?= $pageContent ?></div>

<!-- axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
<!-- vuejs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
<!-- script de la logique de vuejs -->
  <script src="./assets/js/vue.js"></script>
</body>

</html>