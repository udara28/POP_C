<?php

require_once('DbConnector.php');
require_once('Logger.php');
class DictionaryRepo
{

    function findWordByDicIdAndWord($dicId, $word)
    {
        $logger = new Logger();
        $database = new DbConnector();
        $query = "SELECT dictionary_entry.dic_en_key, dictionary.dic_font_name, dictionary.dic_font_size
                    FROM dictionary_entry
                    INNER JOIN dictionary
                    WHERE dictionary_entry.dic_en_word='{$word}'
                    AND dictionary_entry.dic_id = dictionary.dic_id
                    AND dictionary_entry.dic_id ='{$dicId}'";

        $wordResult = $database->select($query);
        $resultCount = mysqli_num_rows($wordResult);

        if ($resultCount > 0) {
            while ($entry = mysqli_fetch_assoc($wordResult)) {
                $logger->debug("Finding key for [{$word}] in dictionary [{$dicId}]");
                return array("font" => $entry['dic_font_name'], "font-size" => $entry['dic_font_size'], "word" => $entry['dic_en_key']);
            }
        }
        return array("font" => "None", "word" => $word);
    }

    /*function findEnglishWordByDicIdAndWord($dicId, $word){
        $logger = new Logger();
        $database = new DbConnector();

    }*/
}
