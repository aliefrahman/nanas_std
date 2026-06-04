<?php include __DIR__ . '/layouts/header.php'; ?>


<main class="flex items-center justify-center min-h-[70vh] pt-16 font-sans">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <h1 class="font-bold text-[78px] text-shadow-taupe-900">
            Welcome,
            <?= htmlspecialchars($companyName) ?>.
        </h1>
        <p>
            <?= htmlspecialchars($description) ?>
        </p>
    </div>

</main>



<?php include __DIR__ . '/layouts/footer.php'; ?>