<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Side Facility Sugar Catculator</title>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                },
            }
            }
        }
    </script>
    <style>
        .text-outline {
            text-shadow:
            -1px -1px 0 #B08968,
            1px -1px 0 #B08968,
            -1px  1px 0 #B08968,
            1px  1px 0 #B08968;
        }
        .text-outline2 {
            text-shadow:
            -1px -1px 0 #000000ff,
            1px -1px 0 #000000ff,
            -1px  1px 0 #000000ff,
            1px  1px 0 #000000ff;
        }
    </style>
</head>

<body class="pt-22 font-poppins bg-[#EDE0D4] text-[#7F5539]">
    <?= view('navbar/navbar-side') ?>
    <?= view('side/article') ?>
    <?= view('footer/footer') ?>
</body>