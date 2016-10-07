<?php

class Merge {

    public static function JS($filesArray, $_hash) {
        $rev = md5($_hash);
        $fileToSave = 'pack/js/' . 'pack-' . $rev . '.js';

        if (!file_exists($fileToSave) || $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {


            $allContent = "";
            foreach ($filesArray as $file) {
                if (file_exists($file)) {
                    $allContent .= "\n\r\n\r" . file_get_contents($file);
                }
            }

            $dir = opendir('pack/js');
            while ($read = readdir($dir)) {
                if ($read != '.' && $read != '..') {
                    unlink('pack/js/' . $read);
                }
            }

            if (!empty($allContent)) {
                file_put_contents($fileToSave, $allContent);
            }
        }

        return $fileToSave;
    }

    public static function CSS($filesArray, $_hash) {
        $rev = md5($_hash);
        $fileToSave = 'pack/css/' . 'pack-' . $rev . '.css';

        if (!file_exists($fileToSave) || $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
            $allContent = "";
            foreach ($filesArray as $file) {
                if (file_exists($file)) {
                    $allContent .= "\n\r\n\r" . file_get_contents($file);
                }
            }

            $dir = opendir('pack/css');
            while ($read = readdir($dir)) {
                if ($read != '.' && $read != '..') {
                    unlink('pack/css/' . $read);
                }
            }

            if (!empty($allContent)) {
                file_put_contents($fileToSave, $allContent);
            }
        }

        return $fileToSave;
    }

}

?>