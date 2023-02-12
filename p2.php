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
    <h1>2/4 ステップ</h1>
    <p>問題点の抽出</p>
    <div class='box'>
        <p>先ほど入力した文章を箇条書きに変換しました。上から順に読んでいき、問題点やすべきことを下のリストに書いていこう。</p>
        <form action="p3.php" method="POST">
            <div class="container">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <textarea name="name[]" cols="80" rows="1" placeholder="ここから入力"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="name[]" cols="40" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    <button id="addRow" type='button'>+ 追加</button>
                    <div id='submit'><input type="submit"  value='次へ進む'></div>
            </div>
            <?php
                echo '<input type="hidden" name="first" value="'.$_POST['first'].'">' 
            ?>
        </form>
    </div>



    <div class='box'>
        <p>読み終えた項目はチェックしていくと進捗が分かりやすくなると思います。</p>
        <div class = "p2list">
            <ul>
            <?php
                $text = preg_split('/[\n。　]/u',$_POST['first']);
                $text = array_map('trim', $text); // 各行にtrim()をかける
                $text = array_filter($text, 'strlen'); //文字数0の削除
                $text = array_values($text); //インデックスを振り直す
                foreach($text as $value){
                    echo '<li><input type="checkbox">'.$value.'</li>';
                    echo '<br>';
                }
            ?>
            </ul>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $('#addRow').click(function(){
                // var html = '<tr><td><textarea name="name[]" cols="40" rows="1"></textarea></td><td><button class="remove">-</button></td></tr>'
                var html = '<tr><td><textarea name="name[]" cols="40" rows="1"></textarea></td></tr>'
                $('tbody').append(html);});
            
            var d;
            $(document).on('click', '.remove', function(){
                d = $(this).parents('tr').remove()});
            
            $("#back").on("click", function() {
                $('tbody').append(d);});
        });
    </script>
</body>
</html>


