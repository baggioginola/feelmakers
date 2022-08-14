<?php
/**
 * Created by PhpStorm.
 * User: mariocue
 * Date: 15/12/2016
 * Time: 03:43 PM
 */
require_once __CONTROLLER__ . 'CBaseController.class.inc.php';

class Contact extends BaseController
{
    public static $object = null;

    private $parameters = array();
    #private $send_to = 'mariocuevas88@gmail.com';
    private $send_to = 'contacto@feelmakers.mx';
    private $subject = 'Contacto de Pagina Web';
    private $header = 'From:  Sitio Web <info@feelmakers.com.mx>';
    private $message = '';

    private $validParameters = array(
        'email' => TYPE_ALPHA,
        'mensaje' => TYPE_ALPHA,
        'nombre' => TYPE_ALPHA,
        'telefono' => TYPE_ALPHA
    );

    public static function singleton()
    {
        if (is_null(self::$object)) {
            self::$object = new self();
        }
        return self::$object;
    }

    public function sendMessage()
    {
        if (!$this->_setParameters()) {
            return json_encode($this->getResponse(STATUS_FAILURE_INTERNAL, MESSAGE_ERROR));
        }

        $this->setMessage();
        if(!$this->emailRequest()){
            return json_encode($this->getResponse(STATUS_FAILURE_INTERNAL, MESSAGE_ERROR));
        }

        return json_encode($this->getResponse(STATUS_SUCCESS, MESSAGE_SUCCESS));
    }

    private function emailRequest()
    {
        if(!$this->parameters){
            return false;
        }
        #mail($this->send_to, $this->subject, $this->message, $this->header);
        #return true;
        return mail($this->send_to, $this->subject, $this->message, $this->header);
    }

    private function setMessage()
    {
        $this->message .= 'Nombre: ' . $this->parameters['nombre'] . "\n";
        $this->message .= 'E-mail: ' . $this->parameters['email'] . "\n";
        $this->message .= 'Teléfono: ' . $this->parameters['telefono'] . "\n";
        $this->message .= 'Mensaje: ' . $this->parameters['mensaje'] . "\n";
    }

    /**
     * @return bool
     */
    private function _setParameters()
    {
        if (!isset($_POST) || empty($_POST)) {
            return false;
        }

        if (!$this->validateParameters($_POST, $this->validParameters)) {
            return false;
        }

        foreach ($_POST as $key => $value) {
            $this->parameters[$key] = $value;
        }

        return true;
    }
}