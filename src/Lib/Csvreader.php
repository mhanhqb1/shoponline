<?php
/* 
 * Description : Library for reading and creating CSV
 * Modified    : KienNH
 */
namespace App\Lib;

class Csvreader
{
    public static $_fields;
    public static $_delimiter = ',';
    public static $_enclosure = '"';
    public static $_buffer = 4096;
    public static $_encodings = array(
        //ascii
        'ASCII',

        //unicodes
        'UTF-8',
        'UTF-16',

        //japanese
        'EUC-JP',
        'SJIS',
        'eucJP-win',
        'SJIS-win',
        'JIS',
        'ISO-2022-JP',
        'Shift_JIS',
        'CP932',

        //chinese
        'EUC-CN',  //gb2312
        'CP936',   //gbk
        'EUC-TW'  //big5
    );
    
    /**
     * Read CSV file into array data
     * @param string $p_Filepath
     * @param boolean $p_NamedFields
     * @param boolean $jp
     * @return array
     */
    public static function parse_file($p_Filepath, $p_NamedFields = true, $jp = FALSE) {
        $content = false;
        setlocale(LC_ALL, 'Shift_JIS');
        
        $auto_detect_line_endings = ini_get('auto_detect_line_endings');
        ini_set('auto_detect_line_endings', TRUE);
        
        if($jp){
            try{
                $data = file_get_contents($p_Filepath);
                $encoding = mb_detect_encoding($data, static::$_encodings, true);
                if($encoding && strcasecmp($encoding, 'UTF-8') != 0){
                    $data = iconv($encoding, 'UTF-8', $data);
                    
                    ob_start();
                    $f = fopen($p_Filepath.'new.csv', 'w');
                    fwrite($f, $data);
                    fclose($f);
                    ob_end_clean();
                    $p_Filepath .= 'new.csv';
                }
            } catch (Exception $ex) {}
        }
        
        $file = fopen($p_Filepath, 'r');
        if ($p_NamedFields) {
            static::$_fields = fgetcsv($file, static::$_buffer, static::$_delimiter, static::$_enclosure);
        }
        while (($row = fgetcsv($file, static::$_buffer, static::$_delimiter, static::$_enclosure)) != false) {
            if ($row[0] != null) { // skip empty lines
                // Convert to UTF-8
                foreach ($row as $key => $value) {
                    $encoding = mb_detect_encoding($value, static::$_encodings, true);
                    if(!$encoding){
                        continue;
                    }
                    if(strcasecmp($encoding, 'UTF-8') != 0){
                      $encoding = iconv($encoding, 'UTF-8', $value);
                      if($encoding === false){
                          continue;
                      }
                      $row[ $key ] = $encoding;
                    }
                }
                
                if (!$content) {
                    $content = array();
                }
                if ($p_NamedFields) {
                    $items = array();

                    // I prefer to fill the array with values of defined fields
                    foreach (static::$_fields as $id => $field) {
                        if (isset($row[$id])) {
                            $items[$field] = $row[$id];
                        }
                    }
                    $content[] = $items;
                } else {
                    $content[] = $row;
                }
            }
        }
        fclose($file);
        ini_set('auto_detect_line_endings', $auto_detect_line_endings);
        return $content;
    }
    
    /**
     * Create CSV file from array data
     * @param string $csv_file
     * @param array $data
     * @param array $header
     * @param boolean $jp
     * @return type
     */
    public static function array2csv($csv_file, $data = array(), $header = array(), $jp = true) {
        ob_start();
        $f = fopen($csv_file, 'w') or show_error("Can't open CSV");
        $n = 0;

        if ($jp) {
            /*mb_language('Japanese');
            mb_detect_order('auto');
            mb_internal_encoding('UTF-8');*/
            setlocale(LC_ALL, 'ja_JP.UTF-8');
        }else{
            setlocale(LC_ALL, 'ja_JP.UTF-8');
        }

        if ($header) {
            $n++;

            $i = 0;
            foreach ($header as $h) {
                if($jp){
                    $header[$i] = mb_convert_encoding($h, 'Shift-JIS', 'UTF-8');
                }else{
                    $header[$i] = mb_convert_encoding($h, 'UTF-8');
                }
                
                $i++;
            }
            $str_header = implode(',', $header);
            $str_header .= "\r\n";
            fwrite($f, $str_header);
        }

        if ($data) {
            $data_csv = $data;
            
            $l = 0;
            foreach ($data_csv as $line) {
                foreach ($line as $key=>$item) {
                    if($jp){
                        $value = mb_convert_encoding($item, 'Shift-JIS', 'UTF-8');
                    }else{
                        $value = mb_convert_encoding($item, 'UTF-8');
                    }
                    
                    if (strpos($value, ' ') !== false || strpos($value, "\r") || strpos($value, "\n") || strpos($value, ",")){
                        $data_csv[$l][$key] = '"'.$value.'"';
                    } else {
                        $data_csv[$l][$key] = $value;
                    }
                }
                $l++;
            }

            foreach ($data_csv as $line) {
                $str_line = implode(',', $line);
                $str_line .= "\r\n";
                fwrite($f, $str_line);
            }
        }
        fclose($f) or show_error("Can't close php://output");
        $str = ob_get_contents();
        ob_end_clean();
        return $str;
    }
}