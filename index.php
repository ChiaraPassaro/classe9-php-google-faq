<?php
include __DIR__ . '/db.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>

<body>

    <?php include 'partials/header.php'; ?>
    
    <main>
        <h2><?php printValue('Benvenuto', $faqs); ?></h2>
        <div class="question-container">

            <?php if (!empty($faqs)) { ?>
                <?php foreach ($faqs as $k => $faq) { ?>
                    <h1><?php echo $faq['question']; ?></h1>
                    <div><?php echo $faq['answer']; ?></div>
                <?php } ?>
            <?php } else { ?>
                <h2> Non ci sono Faq </h2>
            <?php } ?>

        </div>

    </main>

    <?php include 'partials/footer.php'; ?>

</body>

</html>