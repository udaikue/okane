<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0,
        maximum-scale=1.0, minimum-scale=1.0">
        @vite('resources/css/app.css')
    <title>outgoings</title>
</head>
<body>
    <div class="text-2xl px-3 py-3">2023年3月</div>
    <div>
        <table class="table-auto mt-3 ml-3">
            <thead>
                <tr>
                    <th class="border-b px-1 py-1">カテゴリ</th>
                    <th class="border-b px-1 py-1">円</th>
                    <th class="border-b px-1 py-1">メモ</th>
                    <th class="border-b px-1 py-1">繰り返し</th>
                </tr>
            </thead>
            <tbody>
            @foreach($outgoings as $outgoing)
                <tr>
                    <td class="border-b px-1 py-1">{{ $outgoing->category }}</td>
                    <td class="border-b px-1 py-1">{{ $outgoing->yen }}</td>
                    <td class="border-b px-1 py-1">{{ $outgoing->memo }}</td>
                    <td class="border-b px-1 py-1">{{ $outgoing->repeated }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
