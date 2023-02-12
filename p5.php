<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p.css">
    <title>Brash Washing</title>
</head>
<body>
    <h1>おわり</h1>
    <div class="box">
        <p>お疲れ様です。見比べられるように Before After を載せました。</p>
        <div class='p1p5list'>
            <h1>Before</h1>
            <div class='before'>
            <?php
                $text = preg_split('/[\n]/u',$_POST['first']);
                $text = array_map('trim', $text); // 各行にtrim()をかける
                $text = array_filter($text, 'strlen'); //文字数0の削除
                $text = array_values($text); //インデックスを振り直す

                foreach($text as $value){
                    echo $value;
                    echo '<br>';
                }
            ?>
            </div>
            <h1>After</h1>
            <div class='p2list'>
                <ul>
                <?php
                    foreach($_POST['name'] as $value){
                        echo '<li><input type="checkbox">'.$value.'</li>';
                        echo '<br>';
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
    <form action="p1.php" id="return">
            <input type="submit" value='トップへ戻る'>
    </form>
</script>
</body>
</html>
