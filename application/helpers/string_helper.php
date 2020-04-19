<?php
  class String_ {
    public static function toAscii($str, $replace=array(), $delimiter='-') {
      if( !empty($replace) ) {
          $str = str_replace((array)$replace, ' ', $str);
      }
  
    $clean = preg_replace(array('/Ä/', '/Ö/', '/Ü/', '/ä/', '/ö/', '/ü/'), array('Ae', 'Oe', 'Ue', 'ae', 'oe', 'ue'), $str);
      $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
      $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
      $clean = strtolower(trim($clean, '-'));
      $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
  
      return $clean;
    }

    public static function urlToSlugId($url){
      $ret = array();
      $words = explode('-', String_::toAscii($url));
      $ret['id'] = array_pop($words);
      $ret['slug'] = implode('-', $words);
      return $ret;
    }

    public static function nameIdToUrl($name, $id){
      return String_::toAscii($name) . '-' . $id;
    }
  }