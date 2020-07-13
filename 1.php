<?php
//oop / file logger

class Log 
{
    /**
     * writes to a file 
     *
     * @param [type] $strFileName the name of the file
     * @param [type] $strData -data to be appended to file 
     * @return void
     */
    public function Write($strFileName, $strData)
    {
        if (!is_writable($strFileName))
         die('change your chmod to '.$strFileName);
           
        
        
        $handle=fopen($strFileName , 'a+');

        fwrite($handle, "\r\n".$strData);
        fclose($handle);
        
    }
    /**
     * Undocumented function read - read the text file and return the content 
     */
    public function Read($strFileName)
    {
       $handle=fopen($strFileName,'r') ;
       return file_get_contents($strFileName);

    }
}


?>