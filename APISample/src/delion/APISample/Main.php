<?php

namespace delion\APISample;

use delion\APISample\LobiAPI\LobiAPI;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;


class Main extends PluginBase
{
    function onEnable()
    {
        $api = new LobiAPI();
        $mail = 'メールを入力';
        $password = 'パスワードを入力';
        $name_after = '変更後の名前を入力';
        $description_after = '変更後のプロフィール文を入力';
        if ($api->Login($mail, $password)) { // TODO: Twitter認証の場合はTwitterLoginを使用する
            $this->getLogger()->info(TextFormat::AQUA . 'ログイン成功');
            $api->ChangeProfile($name_after, $description_after);
            $this->getLogger()->info(TextFormat::YELLOW . 'プロフィールを変更しました。');
        } else {
            $this->getLogger()->info(TextFormat::RED . 'ログイン失敗');
        }
    }
}
