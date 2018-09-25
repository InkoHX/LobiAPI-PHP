# LobiAPI-PHP
LobiAPIのPHPバージョン

## プラグインでの使い方
1. `LobiAPI`ファイルをsrcの中に入れる
1. `use LobiAPI\delion\LobiAPI;`をメインファイルに書く
1. 後はサンプルのようにする

## 注意
1. [ここ](https://github.com/InkoHX/LobiAPI-PHP/blob/master/LobiAPI/LobiAPI.php#L13)のUAは各自変える必要があります。
1. 非同期を使わないとサーバーに負担が掛かります。([Thread](https://github.com/pmmp/PocketMine-MP/blob/master/src/pocketmine/Thread.php)や[AsyncTask](https://github.com/pmmp/PocketMine-MP/blob/master/src/pocketmine/scheduler/AsyncTask.php)を使ってメッセージ送信、グーなどの処理を行う事を推奨します。)
1. `onLoad`や`onEnable`の所に必ずログインする文を書いて下さい。

## その他
このLobiAPIを使用したプラグインを配布する場合は、以下のようなAPIの開発者、開発元がわかる文章を付けてください。
* https://github.com/NewDelion/LobiAPI-PHP   このURLを入れる。
* GitHubでNewDelionが公開しているLobiAPIを使用した。
