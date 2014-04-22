
<?php
/*
 * Autor: Octavio Fuenzalida Mora.
 * mail : octavio1121@gmail.com
*/
Class CSS {
    
    private $styleIn = "\t<link rel='stylesheet' type='text/css' media='all' href='";
    private $styleOut = "'/>\n";
    private $style = array();
    private $msj = array("0" => "Error al devolver estilo\n",
                         "1" => "Error Al enviar la posicion y el estilo para modificar");

    public function add($filename) {
        $this->style[] = $this->styleIn.$filename.$this->styleOut;
    }
    public function get() {

        if(is_array($this->style)) {
            return $this->style;
        }else {
            return $this->msj[0];
        }
    }

    public function set($posicion=null,$filename=null) {
        if($posicion!=null && $filename!=null) {
            $this->style[$posicion] =  $this->styleIn.$filename.$this->styleOut;
        }
        else {
            return $this->msj[1];
        }
    }
}
?>
