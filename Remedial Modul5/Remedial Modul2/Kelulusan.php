<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

<form action="" method="POST">
      Cek Kelulusan Berdasarkan Nilai, Masukkan nilai untuk mengetahui status kelulusan<br>
      Nilai Ujian : <input type="text" name="score">
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