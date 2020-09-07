<?php

require 'functions.php';

$id = $_GET['id'];

//mengambbil id dari url
if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal dohapus!";
}
