<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

include 'lang_' . $_SESSION['lang'] . '.php';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $lang['title'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 60px auto;
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
            font-size: 32px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e5e5e5;
        }

        th {
            background-color: #007BFF;
            color: white;
            font-weight: 500;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .lang-switch {
            text-align: center;
        }

        .lang-switch button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .lang-switch button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            th, td {
                padding: 12px 8px;
            }

            .container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .lang-switch button {
                font-size: 14px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= $lang['title'] ?></h1>

        <table>
            <thead>
                <tr>
                    <th><?= $lang['event_name'] ?></th>
                    <th><?= $lang['event_date'] ?></th>
                    <th><?= $lang['event_location'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bal de promo 2025</td>
                    <td>15/07/2025</td>
                    <td>Titi Garage</td>
                </tr>
                <tr>
                    <td>mariage</td>
                    <td>01/09/2025</td>
                    <td>Hilton</td>
                </tr>
            </tbody>
        </table>

        <div class="lang-switch">
            <form method="get">
                <button type="submit" name="lang" value="<?= ($_SESSION['lang'] === 'fr') ? 'en' : 'fr' ?>">
                    <?= ($_SESSION['lang'] === 'fr') ? 'Switch to English' : 'Passer en français' ?>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
