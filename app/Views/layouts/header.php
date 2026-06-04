<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($companyName) ?> |
        <?= htmlspecialchars($tagline) ?>
    </title>

    <!-- Compiled Tailwind CSS -->
    <!-- Menggunakan time(): Selalu memuat versi baru setiap kali reload halaman -->
    <link rel="stylesheet" href="<?= route('/assets/css/style.css') ?>?v=<?= time() ?>">



</head>

<body class="bg-slate-50 font-sans transition-colors duration-300 antialiased">