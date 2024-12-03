<?php

namespace Sprint\Migration;


class VersionEstateAgents20241203012213 extends Version
{
    protected $author = "admin";

    protected $description = "Миграцию для переноса таблицы \"Агентов по недвижимости\"";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $helper = $this->getHelperManager();
        //your code ...
    }

    public function down()
    {
        //your code ...
    }
}
