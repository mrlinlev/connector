<?php


namespace Leveon\Connector\Util;


use SQLite3;

abstract class AMigration
{
    abstract public function up(SQLite3 $sqlite): void;
    public function down(SQLite3 $sqlite): void {}
}