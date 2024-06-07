<?php

class DB
{
    public function execute($sql)
    {
        $db = new SQLite3('./data/data.db');
        $result = $db->query($sql);
        if ($result) {
            $all = $result->fetchArray(SQLITE3_ASSOC);
            return $all;
        }
    }
}
