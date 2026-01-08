<?php
$hasil = "";

if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                $hasil = ($angka2 != 0) ? $angka1 / $angka2 : "Tidak bisa dibagi 0";
                break;
            default:
                $hasil = "Operator tidak valid";
        }
    } else {
        $hasil = "Masukkan angka yang valid";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: white;
            padding: 25px;
            border-radius: 12px;
            width: 300px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background: #06d6a0;
            border: none;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .hasil {
            margin-top: 15px;
            padding: 10px;
            background: #f1f1f1;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulator PHP</h2>

    <form method="POST">
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        
        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (×)</option>
            <option value="/">Bagi (÷)</option>
        </select>

        <input type="number" name="angka2" placeholder="Angka kedua" required>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <div class="hasil">
            Hasil: <?= $hasil ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
