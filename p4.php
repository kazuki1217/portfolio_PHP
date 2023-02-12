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
    <h1>4/4 ステップ</h1>
    <p>優先順位をつける</p>
    <div class="box">
        <p>上から順に優先の高いものへと並び替えよう。優先の付け方が分からない方は、重要度と緊急度の２軸で考えてみると良いかもしれません</p>
        <form action="p5.php" method="POST">
            <div class="container">
                <table>
                    <tbody>
                    <?php
                        foreach($_POST['name'] as $value){
                            echo '<tr><td class="sort">=</td><td><textarea name="name[]" cols="80" rows="1">'.$value.'</textarea></tr>';
                        }
                    ?>
                    </tbody>
                </table>
                <div id='submit'>
                    <input type="submit" value='次へ進む'>
                </div>
            </div>
            <?php
                echo '<input type="hidden" name="first" value="'.$_POST['first'].'">'
            ?>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $('tbody').sortable();
        })
    </script>
</body>
</html>
