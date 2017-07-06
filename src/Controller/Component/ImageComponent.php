<?php

namespace App\Controller\Component;

use Cake\Core\Configure;

/**
 * 
 * Process upload image
 * @package Controller
 * @created 2014-11-27 
 * @version 1.0
 * @author thailvn
 * @copyright Oceanize INC
 */
class ImageComponent extends AppComponent {

    /** @var array $components Use components */
    public $components = array('Common');

    /** @var array $allowed_mime_types Allowed mime types  */
    public $allowed_mime_types = array(
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/gif'
    );

    /** @var array $allowed_extensions Allowed extensions  */
    public $allowed_extensions = array(
        'jpg',
        'jpeg',
        'png',
        'gif'
    );

    /** @var object $controller Controller  */
    public $controller = null;

    /** @var array $errorMsg Error message  */
    public $errorMsg = array();

    /** @var int $upload_maxsize Maxsize for uploading  */
    public $upload_maxsize = 0;

    /**
     * Check image before upload
     *    
     * @author thailvn
     * @param array $file File information     
     * @return boolean 
     */
    public function checkUpload($file) {
        if (Configure::read('Config.upload_maxsize')) {
            $this->upload_maxsize = Configure::read('Config.upload_maxsize');
        } else {
            $this->upload_maxsize = @ini_get('upload_max_filesize');
        }
        if (array_key_exists('error', $file) AND $file['error'] === 0) {
            $sizeByMB = ceil((int) $file['size'] / 1000000);
            $maxSizeByMB = intval(str_replace('M', '', $this->upload_maxsize));
            if ($file['size'] === 0 OR $sizeByMB > $maxSizeByMB) {
                $this->errorMsg[] = __('Please upload a image <= %s', array($this->upload_maxsize));
                return false;
            } elseif (!in_array($file['type'], $this->allowed_mime_types)) {
                $this->errorMsg[] = __('Image type is invalid');
                return false;
            } else {
                $exploded = explode('.', $file['name']);
                $extension = end($exploded);
                if (!in_array($extension, $this->allowed_extensions)) {
                    $this->errorMsg[] = __('Image extension is invalid');
                    return false;
                }
            }
            return true;
        }
        $this->errorMsg[] = __('Upload error');
        $this->errorMsg[] = json_encode($file);
        return false;
    }

    /**
     * Update a image
     *    
     * @author thailvn
     * @param array $file File information
     * @param string $thumb See more API upload/image
     * @return array|boolean
     */
    public function uploadImage($file, $thumb = null) {
        if (empty($file) OR $file === '')
            return false;
        if ($this->checkUpload($file)) {
            return $this->_upload($file, $thumb);
        }
        return false;
    }

    /**
     * Upload a image (for setting screen)
     *    
     * @author thailvn
     * @param array $file File information
     * @param string $thumb See more API upload/image
     * @return array|boolean
     */
    public function upload2($file, $thumb = null) {
        if ($file) {
            if ($this->checkUpload($file)) {
                return $this->_upload($file, $thumb);
            }
        }
        return false;
    }

    /**
     * Call API Upload a image
     *    
     * @author thailvn
     * @param array $file File information
     * @param string $thumb See more API upload/image
     * @return array|boolean
     */
    private function _upload($file, $thumb = '') {
        $filetype = $file['type'];
        $filename = $this->Common->convertUrl($file['name'], false);
        $filedata = $file['tmp_name'];
        $filesize = $file['size'];
        $year = date('Y');
        $month = date('m');
        if ($filedata != '') {
            if (!empty($thumb)) {
                $path = "files/images/{$thumb}/{$year}/{$month}";
            } else {
                $path = "files/images/{$year}/{$month}";
            }
            @mkdir($path, 0777, true);
            $filePath = $path . '/' . $filename;
            move_uploaded_file($filedata, $filePath);
            return $filePath;
        }
        return false;
    }
}
