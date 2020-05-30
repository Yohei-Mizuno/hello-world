<?php

setcookie('value',100);
?>
<html>
    <body>
<?php
    $getcookie=$_COOKIE['value'];
    print"このページ1のクッキーの値は「".$getcookie."」です<br/>";
?>
       <p>なるほどね。なるほどね。なるほどね。「めんどくせぇな、3回被せて突っ込ませる件やろうとすんなよ</p>
       <br>       
       <a href ="page2.php">ページ２へ</a>
    </body>
</html>
