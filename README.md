# LobiAPI-PHP
LobiAPIのPHPバージョン

## プラグインでの使い方
1. LobiAPI.phpとHttpAPIフォルダをコピー
1. プラグインのメインファイルが入ってるフォルダに貼り付け
1. LobiAPI.phpとHttpAPIの中のHttp.php,Header.phpのネームスペースをプラグインのネームスペースに合わせて修正
1. LobiAPI.phpのuse文をプラグインのネームスペースに合わせて修正
1. メインクラスのuse文にLobiAPIを追加
1. あとはサンプルのように書いていくだけ(オブジェクトを作ったらまずログインしてください)
1. `LobiAPI.php`の`UserAgent`を変える必要があります。調べて書き換えて下さい。

## その他
このLobiAPIを使用したプラグインを配布する場合は、以下のようなAPIの開発者、開発元がわかる文章を付けてください。
* https://github.com/NewDelion/LobiAPI-PHP    このURLを入れる
* GithubでNewDelionが公開しているLobiAPIを使用した
