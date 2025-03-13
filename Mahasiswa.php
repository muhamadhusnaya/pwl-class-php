<?php
class Mahasiswa {
    private $name;
    private $nim;
    private $programStudi;

    
    public function setMhs($name, $nim, $programStudi)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->programStudi = $programStudi;

    }

    public function getMhs()
    {
        return [
            'name' => $this->name,
            'nim' => $this->nim,
            'programStudi' => $this->programStudi
        ];
    }   
}
