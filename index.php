<?php
require_once "app.php";

$errors = [];
if (isset($_SESSION[APP_KEY]['errors'])) {
    $errors = $_SESSION[APP_KEY]['errors'];
    unset($_SESSION[APP_KEY]['errors']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YSEレジ</title>
    <!-- Tailwind CSSのCDNリンク -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-gray-200 flex justify-center items-center h-screen">
        <div class="calculator bg-white rounded p-8 shadow-md">
            <div id="errors">
                <?php if ($errors) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li class="p-3">
                                <span class="text-red-600"><?= $error ?></span>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>

            <div class="d-flex w-full mt-3 mb-3">
                <form action="update.php" method="post">
                    <input type="text" id="display" name="price" class="w-full mb-4 px-2 py-1 border rounded" readonly>
                    <div>
                        <button class="btn border p-3" onclick="update()">計上</button>
                        <a class="btn border p-3" href="sales/">売上</a>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <button class="btn" onclick="addNumber('7')">7</button>
                <button class="btn" onclick="addNumber('8')">8</button>
                <button class="btn" onclick="addNumber('9')">9</button>
                <button class="btn" onclick="clearAll()">AC</button>
                <button class="btn" onclick="addNumber('4')">4</button>
                <button class="btn" onclick="addNumber('5')">5</button>
                <button class="btn" onclick="addNumber('6')">6</button>
                <button class="btn" onclick="calculate('+')">+</button>
                <button class="btn" onclick="addNumber('1')">1</button>
                <button class="btn" onclick="addNumber('2')">2</button>
                <button class="btn" onclick="addNumber('3')">3</button>
                <button class="btn" onclick="calculate('*')">x</button>
                <button class="btn" onclick="addNumber('0')">0</button>
                <button class="btn" onclick="addNumber('00')">00</button>
                <button class="btn" onclick="calculateTax()">Tax</button>
                <button class="btn" onclick="calculateTotal()">=</button>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>