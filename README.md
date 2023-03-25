## 開発環境

```
$ sail artisan -V
Laravel Framework 10.2.0

$ sail php -v
PHP 8.2.3 (cli) (built: Feb 14 2023 16:58:12) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.3, Copyright (c) Zend Technologies
    with Zend OPcache v8.2.3, Copyright (c), by Zend Technologies
    with Xdebug v3.2.0, Copyright (c) 2002-2022, by Derick Rethans

$ sail node -v
v18.14.2

$ sail npm -v
9.6.0
```

## コマンドメモ

```
// Laravel sail をデーモン起動
$ sail up -d

// Laravel sail を終了
$ sail down
```

```
// Webpack をビルド
$sail npm run dev
```

```
// シーティングを実行
$ sail artisan db:seed
```

```
// 起動しているアプリケーションコンテナ内部にログイン
$ sail shell
```

```
// MySQL にログイン
$ sail mysql
```
