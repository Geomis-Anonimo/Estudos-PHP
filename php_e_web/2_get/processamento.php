<?php

if(!empty($_GET['nome']) && !empty($_GET['idade'])) {
  if($_GET['nome']) {
    $nome = $_GET['nome'];
  } else {
    echo "<script>
            alert('Preencha seus dados corretamente');
            window.location.href = '/Estudos-PHP/Estudos-PHP/php_e_web/2_get/index.php';
          </script>";
    exit();
  }
  
  if(intval($_GET['idade'])) {
    $idade = $_GET['idade'];
  } else {
    echo "<script>
            alert('Preencha seus dados corretamente');
            window.location.href = '/Estudos-PHP/Estudos-PHP/php_e_web/2_get/index.php';
          </script>";
    exit();
  }
} elseif (!empty($_GET['nome']) && empty($_GET['idade'])) {
    echo "<script>
              alert('Preencha sua idade corretamente!');
              window.location.href = '/Estudos-PHP/Estudos-PHP/php_e_web/2_get/index.php';
            </script>";
} elseif (!empty($_GET['idade']) && empty($_GET['nome'])) {
    echo "<script>
              alert('Preencha seu nome corretamente!');
              window.location.href = '/Estudos-PHP/Estudos-PHP/php_e_web/2_get/index.php';
            </script>";
      exit();
}




?>

<h1>O seu nome é <?= $nome; ?></h1>
<h2>Você tem <?= $idade; ?> anos!</h2>