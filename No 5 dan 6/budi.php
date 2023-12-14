<?php
function get_kelas($harga)
{
      if ($harga < 500000) {
            return 'affordable luxury';
      } elseif ($harga < 1000000) {
            return 'core luxury';
      } else {
            return 'super premium luxury';
      }
}

echo get_kelas(300000); // akan menampilkan 'affordable luxury'
echo get_kelas(700000); // akan menampilkan 'core luxury'
echo get_kelas(2500000); // akan menampilkan 'super premium luxury'
