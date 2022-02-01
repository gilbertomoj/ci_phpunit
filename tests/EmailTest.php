<?php
namespace SMTP;
use PHPUnit\Framework\TestCase;
use FIle\File;
include("NormalFIle.php");
$json = file_get_contents("./JSON/user.json");
$data = json_decode($json);

class EqualsTest extends TestCase
{
    private $email = "gibamedeirosgc@gmail.com";
    private $idade = 19;
    private $birth = "10-06-2001";
    private $work = true;
    private $height = 1.69;
    private $name = "gilberto medeiros";
 
    public function testFailure()
    {
        $this->assertEquals("gibamedeirosgc@gmail.com", $this->email);
    }

    public function testIdadeType()
    {
        $this->assertEquals(gettype($this->idade), "integer" );
    }

    public function testIdadeValue()
    {
        $this->assertEquals($this->idade, 19);
        
    }

    public function testBirth()
    {
        $this->assertEquals($this->birth,"10-06-2001");
    }
    public function testUserWorks()
    {
        $this->assertEquals($this->work, true);
    }
    public function testMessage(){
        $a = new File();
        $var = $a->showMessage();

        $this->assertEquals($var, "ABC");
    }
}
?>