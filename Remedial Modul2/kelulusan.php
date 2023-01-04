<form action="" method="POST">
  Cek Kelulusan Berdasarkan Nilai, Masukkan nilai untuk mengetahui status kelulusan <br>
  score Ujian : <input type="text" name="score">
  <input type="submit" value="Hasil">
</form>

<?php

  if ($_POST)
  {
    $score = $_POST['score'];

    if ($score >= 90)
    {
      $grade = "A+";
      $keterangan = "LULUS";
    }
    elseif ($score >= 80)
    {
      $grade = "A";
      $keterangan = "LULUS";
    }
    elseif ($score >= 70)
    {
      $grade = "B";
      $keterangan = "LULUS";
    }
    elseif ($score >= 60)
    {
      $grade = "C";
      $keterangan = "LULUS";
    }
    else
    {
      $grade = "D";
      $keterangan = "TIDAK LULUS";
    }

    echo "Hasil Kelulusan";
    echo "<br>";
    echo "score : " . $score;
    echo "<br>";
    echo "Keterangan : " . $keterangan;
    echo "<br>";
    echo "Indeks Prestasi : " . $grade;
  }

?>