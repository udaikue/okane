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
    <div class="text-2xl mt-3 ml-3 px-10 py-2">{{ $viewYear }}年{{ $viewMonth }}月</div>
    <div>
        <table class="table-auto mt-3 ml-3">
            <tbody>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::RENT }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::RENT] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::INSURANCE }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::INSURANCE] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::UTILITY }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::UTILITY] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::FOOD }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::FOOD] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::COMMODITY }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::COMMODITY] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::COMMUNICATION }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::COMMUNICATION] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::MEDICAL }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::MEDICAL] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::BEAUTY }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::BEAUTY] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::AMUSEMENT }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::AMUSEMENT] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::CLOTHING }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::CLOTHING] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::GOODS }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::GOODS] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::SOCIAL }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::SOCIAL] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::BOOKS }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::BOOKS] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::EATING_OUT }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::EATING_OUT] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::TRIP }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::TRIP] }}</td>
                </tr>
                <tr>
                    <td class="border-b px-10 py-2">{{ App\Consts\CategoryConst::SPECIAL }}</td>
                    <td class="border-b px-10 py-2">{{ $categorySums[App\Consts\CategoryConst::SPECIAL] }}</td>
                </tr>
                <tr>
                    <td class="px-10 py-2">合計</td>
                    <td class="px-10 py-2">{{ array_sum($categorySums) }} 円</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
