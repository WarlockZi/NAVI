<?php

namespace services;

class Regex
{

    public function __construct(
        private string $subject,
        private string $pattern,
    )
    {
        $arrFile = ROOT.'arr.php';
        $this->pattern = "~$this->pattern~";
        preg_match_all($this->pattern, $this->subject, $matches);
        $arr = [];
        if ($matches) {
            $str = '';
            $categories = $matches['cat'];
            $areas       = $matches['area'];
            $titles     = $matches['title'];
            foreach ($categories as $i=>$category) {
                $j=$i+4;
                $arr[$i]['category'] = $category;
                $arr[$i]['area'] = $areas[$i];
                $arr[$i]['title'] = $titles[$i];
                $str.= $j."=>['category'=>'$category','area'=>$areas[$i],'title'=>'$titles[$i]'],";
            }
            $d = $str;
            ob_start();
            echo '<pre>';
            print_r($d);
            $outputBuffer = ob_get_contents();
            ob_end_flush();
            file_put_contents($arrFile, $outputBuffer);
        }

    }
}