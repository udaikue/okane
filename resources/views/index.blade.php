<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0,
        maximum-scale=1.0, minimum-scale=1.0">
    <title>outgoings</title>
</head>
<body>
    <h1>シュッピ</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>円</th>
                    <th>メモ</th>
                    <th>繰り返し</th>
                </tr>
            </thead>
            <tbody>
            @foreach($outgoings as $outgoing)
                <tr>
                    <td>{{ $outgoing->category }}</td>
                    <td>{{ $outgoing->yen }}</td>
                    <td>{{ $outgoing->memo }}</td>
                    <td>{{ $outgoing->repeated }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
