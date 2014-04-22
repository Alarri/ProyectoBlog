
<?php
 /*
 * Autor: Octavio Fuenzalida Mora.
 * mail : octavio1121@gmail.com
 */
Class JS {
    private $jsIn = "\t<script type='text/javascript' src='";
    private $jsOut = "'></script>\n";
    private $javascript = array();
      private $msj = array("0" => "Error al devolver Javascript\n",
                         "1" => "Error Al enviar la posicion y el Javascript para modificar");

    public function add($filename) {
        $this->javascript[] = $this->jsIn.$filename.$this->jsOut;
    }
    public function get() {

        if(is_array($this->javascript)) {
            return $this->javascript;
        }else {
            return $this->msj[0];
        }
    }

    public function set($posicion=null,$filename=null) {
        if($posicion!=null && $filename!=null) {
            $this->javascript[$posicion] =  $this->jsIn.$filename.$this->jsOut;
        }
        else {
           return $this->msj[1];
        }
    }
}

?>