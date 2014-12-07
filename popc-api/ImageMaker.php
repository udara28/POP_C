<?php

require_once('imageHandleFactory.php');
require_once('Logger.php');
require_once('DictionaryRepo.php');

class ImageMaker
{

    function make($dicId, $message)
    {
        $dicRepo = new DictionaryRepo();
        $logger = new Logger();

        $split_str = explode(" ", $message);
        $size = sizeof($split_str);

        for ($i = 0; $i < $size; $i++) {
            $findWord = $dicRepo->findWordByDicIdAndWord($dicId, $split_str[$i]);

            if ($findWord['font'] != "None") {
                $imgTemp = createImage($findWord['word'] . " ", 'fonts/' . $findWord['font'], $findWord['font-size']);
            } else {
                $imgTemp = createImage($findWord['word'] . " ", 'fonts/monofont.ttf', 15);
            }

            if ($i == 0) {
                $img = $imgTemp;
            } else {
                $img = mergeImagesHorizontally($img, $imgTemp);
            }


        }

        ob_start();
        imagepng($img);
        $image_data = ob_get_contents();
        ob_end_clean();
        $image_data_base64 = base64_encode($image_data);
        return $image_data_base64;
    }

}
