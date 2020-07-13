<?php
//oop / file logger

class Log 
{
    private $_FileName;
    private $_Data;

    /**
     * writes to a file 
     *
     * @param [type] $strFileName the name of the file
     * @param [type] $strData -data to be appended to file 
     * @return void
     */
    public function Write($strFileName, $strData)
    {
        // set class vars
        $this->_FileName = $strFileName ;
        $this->_Data = $strData;

        //check data
        $this->_CheckPermission();
        $this->_CheckData();
           
        
        //wrute the file
        $handle=fopen($strFileName , 'a+');

        fwrite($handle, "\r\n".$strData);
        fclose($handle);
        
    }
    /**
     * Undocumented function read - read the text file and return the content 
     */
    public function Read($strFileName)
    {
        $this->_FileName=$strFileName;
        $this->_CheckExists();

       $handle=fopen($strFileName,'r') ;
       return file_get_contents($strFileName);

    }
    Private function _CheckExists()
    {
        if(!file_exists($this->_FileName))
        die('the file does not exists');
    }

    private function _CheckPermission()
    {
        if (!is_writable($this->_FileName))
         die('change your chmod to '.$this->_FileName);
    }
    
    private function _CheckData()
    {
        if(strlen($this->_Data)<1)
        die('you must have more than 1 characters in data');
    }
}


?>