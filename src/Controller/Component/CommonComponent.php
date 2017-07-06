<?php

namespace App\Controller\Component;

use Cake\Network\Exception\NotFoundException;
use App\Controller\Component\AppComponent;
use App\Lib\Log\AppLog;
use Cake\Validation\Validation;

/**
 * Some common methods
 * 
 * @package Controller/Component
 * @created 2016-09-28
 * @version 1.0
 * @author KienNH
 * @copyright Oceanize INC
 */
class CommonComponent extends AppComponent {

    /**
     * Handle exception base on error array of API
     * 
     * @author thailvn
     * @param array $errors
     * @throws NotFoundException
     * @return void
     */
    public function handleException($errors) {
        if (!empty($errors)) {
            foreach ($errors as $error) {
                switch (key($error)) {
                    case '1010':  // not exist error  
                    case '1002':  // length is invalid 
                    case '1012':  // must contain a valid number                         
                        AppLog::info("Validation error API", __METHOD__, $errors);
                        throw new NotFoundException($error[key($error)], 404);
                }
            }
        }
    }
    
    /**
     * Date format for application
     *    
     * @author thailvn
     * @param int $time Input DateTime        
     * @return string Date
     */
    public function dateFormat($time = null, $onlyDate = false) {
        if (empty($time) || !is_numeric($time)) {
            return false;
        }
        if ($onlyDate == true) {
            return date('Y年m月d日', $time);
        }
        $minuteAgo = ceil((time() - $time) / 60);
        if ($minuteAgo > 0 && $minuteAgo < 60) {
            return str_pad($minuteAgo, 2, '0', STR_PAD_LEFT) . "分前";
        } elseif ($minuteAgo > 0 && $minuteAgo < 24 * 60) {
            return str_pad(ceil($minuteAgo / 60), 2, '0', STR_PAD_LEFT) . "時間前";
        }
        return date('Y年m月d日', $time);
    }
    
    /**
     * Date format (from string) for application
     *    
     * @author KienNH
     * @param int $time Input DateTime        
     * @return string Date
     */
    public function dateFormatFromString($strDate = null, $onlyDate = false) {
        if (empty($strDate)) {
            return false;
        }
        $time = strtotime($strDate);
        if ($time > 0 && $time != '') {
            return $this->dateFormat($time, $onlyDate);
        }
    }

    /**
     * Number format
     * 
     * @param int $number
     * @return boolean|string
     */
    public function nunmberFormat($number = 0) {
        if (!is_numeric($number)) {
            return false;
        }
        return number_format($number);
    }
    
    /**
     * Date time format for application
     *    
     * @author thailvn
     * @param int $time Input DateTime         
     * @return string DateTime
     */
    public function dateTimeFormat($time = null) {
        if (empty($time)) {
            return false;
        }
        return date('Y年m月d日 H:i', $time);
    }
    
    /**
     * Get thumb image url
     *     
     * @author thailvn
     * @param string $fileName File name
     * @param string $size Thumb size     
     * @return string Thumb image url  
     */
    public function thumb($fileName, $size = null) {
        if (!is_string($fileName) && $fileName != '') {
            return '';
        }
        if (Validation::url($fileName)) {
            return $fileName;
        }
        if (empty($size)) {
            return $fileName;
        }
        $image = explode('.', $fileName);
        if (count($image) < 2) {
            return '';
        }
        $fileName = sprintf($image[0], '_' . $size) . '.' . $image[1];
        return $fileName;
    }
    
    /**
     * Convert array to key/value
     *    
     * @author thailvn
     * @param array $arr 2D input array
     * @param string $key Field key
     * @param string $value Field value
     * @return array
     */
    public static function arrayKeyValue($arr, $key, $value) {
        $result = array();
        if ($arr) {
            foreach ($arr as $item) {
                $result[$item[$key]] = $item[$value];
            }
        }
        return $result;
    }
    
    /**
     * Method field - filter array by field   
     *  
     * @author thailh
     * @param array $arr Array need to filter
     * @param string $field Field need to filter
     * @param bool $toString If true will return string, otherwise return an array
     * @return array/string Array/String after filtering
     */
    public static function arrayField($arr, $field, $toString = false) {
        $result = array();
        if ($arr) {
            foreach ($arr as $item) {
                $result[] = $item[$field];
            }
        }
        $result = array_unique($result);
        if ($toString) {
            $result = implode(',', $result);
        }
        return $result;
    }
    
    /**
     * Convert url
     *  
     * @author AnhMH
     * @param string $str
     * @return string $str
     */
    public function convertUrl($str, $url = true) {
        $line = '-';
        if (!$url) {
            $line = '_';
        }
        $str = preg_replace("/(\,|-|)/", '', $str);
        if ($url) {
            $str = preg_replace('\.', '', $str);
        }
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace('/\s+/', $line, $str);
        $str = str_replace("/", $line, $str);
        $str = str_replace(" ", $line, $str);
        return strtolower($str);
    }
}
