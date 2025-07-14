<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML/CSS Translator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
            display: flex;
        }
        .left, .right {
            width: 50%;
            padding: 20px;
        }
        .left {
            background-color: #f7f7f7;
        }
        .right {
            background-color: #faf9f9ff;
            border: 2px solid black;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            height: 80vh;
            font-family: monospace;
            background-color: #f7f7f7;
            border-right: 2px solid black;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: grey;
        }
    </style>
</head>
<body>

<div class="left">
    <form method="get">
        <?php
            if (isset($_GET['code'])) {
                $code = $_GET['code'];
            } else {
                $code = '';
            }
        ?>
        <textarea name="code" value="<?php echo ($code); ?>" placeholder="Write HTML + CSS here"></textarea>
        <button type="submit">Run Code</button>
    </form>
</div>

<div class="right">
    <?php echo $code; ?>
</div>

</body>
</html>

