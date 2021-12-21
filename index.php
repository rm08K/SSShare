<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SSShare</title>
</head>

<body>
    <div class="container">
        <div class="toppage-textBox">
            <h1 class="toppage-title">SSShare</h1>
            <p class="toppage-text">スクリーンショットをシェアしよう。</p>
            <a id="registerButton" href="#">登録</a>
            <a href="login.php">ログイン</a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" class="toppage-svg" role="img" viewBox="0 0 576 512">
            <path fill="gray" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z" /></svg>
    </div>
    <script lang="Javascript">
        let button = document.getElementById('registerButton')
        button.addEventListener('click', () => {
            window.alert('登録は未実装だよ！')
        })
    </script>
</body>

</html>