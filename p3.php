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
    <h1>3/4 ステップ</h1>
    <p>整理する</p>
    <div class="box">
        <p>先ほど書かれたリストを整理してみよう。内容が被っているなら削除したり、１つにまとめて分かりやすくしたりなど。</p>
        <form action="p4.php" method="POST">
            <div class="container">
                <table>
                    <tbody>
                    <?php
                        foreach($_POST['name'] as $value){
                            echo '<tr><td class="sort">=</td></div><td><textarea name="name[]" cols="80" rows="1">'.$value.'</textarea></td><td><button class="remove">-</button></td></tr>';
                        }
                    ?>
                    </tbody>
                </table>
                <button id="addRow" type="button">+ 追加</button>
                <button id="back" type="button">１つ復活</button><br>
                <div id='submit'>
                    <input type="submit" value='次へ進む'>
                </div>
            </div>
            <?php echo '<input type="hidden" name="first" value="'.$_POST['first'].'">' ?>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $('tbody').sortable();

            $('#addRow').click(function(){
                var html = '<tr><td class="sort">=</td><td><textarea name="name[]" cols="40" rows="1"></textarea></td><td><button class="remove">-</button></td></tr>'

                $('tbody').append(html);
            });
            var d;
            $(document).on('click', '.remove', function(){
                d = $(this).parents('tr').remove()});
            
            $("#back").on("click", function(){
                $('tbody').append(d);});
        });
    </script>
</body>
</html>

