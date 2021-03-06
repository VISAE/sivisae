<?php


 /**
  * Seguimiento_auditor_estudiante Value Object.
  * This class is value object representing database table seguimiento_auditor_estudiante
  * This class is intented to be used together with associated Dao object.
  */

 /**
  * This sourcecode has been generated by FREE DaoGen generator version 2.4.1.
  * The usage of generated code is restricted to OpenSource software projects
  * only. DaoGen is available in http://titaniclinux.net/daogen/
  * It has been programmed by Tuomo Lukka, Tuomo.Lukka@iki.fi
  *
  * DaoGen license: The following DaoGen generated source code is licensed
  * under the terms of GNU GPL license. The full text for license is available
  * in GNU project's pages: http://www.gnu.org/copyleft/gpl.html
  *
  * If you wish to use the DaoGen generator to produce code for closed-source
  * commercial applications, you must pay the lisence fee. The price is
  * 5 USD or 5 Eur for each database table, you are generating code for.
  * (That includes unlimited amount of iterations with all supported languages
  * for each database table you are paying for.) Send mail to
  * "Tuomo.Lukka@iki.fi" for more information. Thank you!
  */




class Seguimiento_auditor_estudiante {

    /** 
     * Persistent Instance variables. This data is directly 
     * mapped to the columns of database table.
     */
    var $seguimiento_aduditor_estudiante_id;
    var $auditor_estudiante_id;
    var $fecha_seguimiento;
    var $web_conference_est;
    var $chat_est;
    var $mensajeria_interna_est;
    var $foro_est;
    var $evaluacion_seg_instancia;
    var $observacion;
    var $fecha_edicion;
    var $pqr_estudiante;
    var $horas_acompanamiento;
    var $web_conference_tutor;
    var $chat_tutor;
    var $mensajeria_interna_tutor;
    var $foro_tutor;
    var $evaluacion_seg_inst_tutor;
    var $recibe_pqr_tutor;
    var $observacion_accion_tutor;
    var $respuesta_tutor;
    var $observacion_rpta_tutor;
    var $observacion_general;
    var $estudiante_materia_id;
    var $seguimiento_id;



    /** 
     * Constructors. DaoGen generates two constructors by default.
     * The first one takes no arguments and provides the most simple
     * way to create object instance. The another one takes one
     * argument, which is the primary key of the corresponding table.
     */

    function Seguimiento_auditor_estudiante () {

    }

    /* function Seguimiento_auditor_estudiante ($seguimiento_aduditor_estudiante_idIn) {

          $this->seguimiento_aduditor_estudiante_id = $seguimiento_aduditor_estudiante_idIn;

    } */


    /** 
     * Get- and Set-methods for persistent variables. The default
     * behaviour does not make any checks against malformed data,
     * so these might require some manual additions.
     */

    function getSeguimiento_aduditor_estudiante_id() {
          return $this->seguimiento_aduditor_estudiante_id;
    }
    function setSeguimiento_aduditor_estudiante_id($seguimiento_aduditor_estudiante_idIn) {
          $this->seguimiento_aduditor_estudiante_id = $seguimiento_aduditor_estudiante_idIn;
    }

    function getAuditor_estudiante_id() {
          return $this->auditor_estudiante_id;
    }
    function setAuditor_estudiante_id($auditor_estudiante_idIn) {
          $this->auditor_estudiante_id = $auditor_estudiante_idIn;
    }

    function getFecha_seguimiento() {
          return $this->fecha_seguimiento;
    }
    function setFecha_seguimiento($fecha_seguimientoIn) {
          $this->fecha_seguimiento = $fecha_seguimientoIn;
    }

    function getWeb_conference_est() {
          return $this->web_conference_est;
    }
    function setWeb_conference_est($web_conference_estIn) {
          $this->web_conference_est = $web_conference_estIn;
    }

    function getChat_est() {
          return $this->chat_est;
    }
    function setChat_est($chat_estIn) {
          $this->chat_est = $chat_estIn;
    }

    function getMensajeria_interna_est() {
          return $this->mensajeria_interna_est;
    }
    function setMensajeria_interna_est($mensajeria_interna_estIn) {
          $this->mensajeria_interna_est = $mensajeria_interna_estIn;
    }

    function getForo_est() {
          return $this->foro_est;
    }
    function setForo_est($foro_estIn) {
          $this->foro_est = $foro_estIn;
    }

    function getEvaluacion_seg_instancia() {
          return $this->evaluacion_seg_instancia;
    }
    function setEvaluacion_seg_instancia($evaluacion_seg_instanciaIn) {
          $this->evaluacion_seg_instancia = $evaluacion_seg_instanciaIn;
    }

    function getObservacion() {
          return $this->observacion;
    }
    function setObservacion($observacionIn) {
          $this->observacion = $observacionIn;
    }

    function getFecha_edicion() {
          return $this->fecha_edicion;
    }
    function setFecha_edicion($fecha_edicionIn) {
          $this->fecha_edicion = $fecha_edicionIn;
    }

    function getPqr_estudiante() {
          return $this->pqr_estudiante;
    }
    function setPqr_estudiante($pqr_estudianteIn) {
          $this->pqr_estudiante = $pqr_estudianteIn;
    }

    function getHoras_acompanamiento() {
          return $this->horas_acompanamiento;
    }
    function setHoras_acompanamiento($horas_acompanamientoIn) {
          $this->horas_acompanamiento = $horas_acompanamientoIn;
    }

    function getWeb_conference_tutor() {
          return $this->web_conference_tutor;
    }
    function setWeb_conference_tutor($web_conference_tutorIn) {
          $this->web_conference_tutor = $web_conference_tutorIn;
    }

    function getChat_tutor() {
          return $this->chat_tutor;
    }
    function setChat_tutor($chat_tutorIn) {
          $this->chat_tutor = $chat_tutorIn;
    }

    function getMensajeria_interna_tutor() {
          return $this->mensajeria_interna_tutor;
    }
    function setMensajeria_interna_tutor($mensajeria_interna_tutorIn) {
          $this->mensajeria_interna_tutor = $mensajeria_interna_tutorIn;
    }

    function getForo_tutor() {
          return $this->foro_tutor;
    }
    function setForo_tutor($foro_tutorIn) {
          $this->foro_tutor = $foro_tutorIn;
    }

    function getEvaluacion_seg_inst_tutor() {
          return $this->evaluacion_seg_inst_tutor;
    }
    function setEvaluacion_seg_inst_tutor($evaluacion_seg_inst_tutorIn) {
          $this->evaluacion_seg_inst_tutor = $evaluacion_seg_inst_tutorIn;
    }

    function getRecibe_pqr_tutor() {
          return $this->recibe_pqr_tutor;
    }
    function setRecibe_pqr_tutor($recibe_pqr_tutorIn) {
          $this->recibe_pqr_tutor = $recibe_pqr_tutorIn;
    }

    function getObservacion_accion_tutor() {
          return $this->observacion_accion_tutor;
    }
    function setObservacion_accion_tutor($observacion_accion_tutorIn) {
          $this->observacion_accion_tutor = $observacion_accion_tutorIn;
    }

    function getRespuesta_tutor() {
          return $this->respuesta_tutor;
    }
    function setRespuesta_tutor($respuesta_tutorIn) {
          $this->respuesta_tutor = $respuesta_tutorIn;
    }

    function getObservacion_rpta_tutor() {
          return $this->observacion_rpta_tutor;
    }
    function setObservacion_rpta_tutor($observacion_rpta_tutorIn) {
          $this->observacion_rpta_tutor = $observacion_rpta_tutorIn;
    }

    function getObservacion_general() {
          return $this->observacion_general;
    }
    function setObservacion_general($observacion_generalIn) {
          $this->observacion_general = $observacion_generalIn;
    }

    function getEstudiante_materia_id() {
          return $this->estudiante_materia_id;
    }
    function setEstudiante_materia_id($estudiante_materia_idIn) {
          $this->estudiante_materia_id = $estudiante_materia_idIn;
    }

    function getSeguimiento_id() {
          return $this->seguimiento_id;
    }
    function setSeguimiento_id($seguimiento_idIn) {
          $this->seguimiento_id = $seguimiento_idIn;
    }



    /** 
     * setAll allows to set all persistent variables in one method call.
     * This is useful, when all data is available and it is needed to 
     * set the initial state of this object. Note that this method will
     * directly modify instance variales, without going trough the 
     * individual set-methods.
     */

    function setAll($seguimiento_aduditor_estudiante_idIn,
          $auditor_estudiante_idIn,
          $fecha_seguimientoIn,
          $web_conference_estIn,
          $chat_estIn,
          $mensajeria_interna_estIn,
          $foro_estIn,
          $evaluacion_seg_instanciaIn,
          $observacionIn,
          $fecha_edicionIn,
          $pqr_estudianteIn,
          $horas_acompanamientoIn,
          $web_conference_tutorIn,
          $chat_tutorIn,
          $mensajeria_interna_tutorIn,
          $foro_tutorIn,
          $evaluacion_seg_inst_tutorIn,
          $recibe_pqr_tutorIn,
          $observacion_accion_tutorIn,
          $respuesta_tutorIn,
          $observacion_rpta_tutorIn,
          $observacion_generalIn,
          $estudiante_materia_idIn,
          $seguimiento_idIn) {
          $this->seguimiento_aduditor_estudiante_id = $seguimiento_aduditor_estudiante_idIn;
          $this->auditor_estudiante_id = $auditor_estudiante_idIn;
          $this->fecha_seguimiento = $fecha_seguimientoIn;
          $this->web_conference_est = $web_conference_estIn;
          $this->chat_est = $chat_estIn;
          $this->mensajeria_interna_est = $mensajeria_interna_estIn;
          $this->foro_est = $foro_estIn;
          $this->evaluacion_seg_instancia = $evaluacion_seg_instanciaIn;
          $this->observacion = $observacionIn;
          $this->fecha_edicion = $fecha_edicionIn;
          $this->pqr_estudiante = $pqr_estudianteIn;
          $this->horas_acompanamiento = $horas_acompanamientoIn;
          $this->web_conference_tutor = $web_conference_tutorIn;
          $this->chat_tutor = $chat_tutorIn;
          $this->mensajeria_interna_tutor = $mensajeria_interna_tutorIn;
          $this->foro_tutor = $foro_tutorIn;
          $this->evaluacion_seg_inst_tutor = $evaluacion_seg_inst_tutorIn;
          $this->recibe_pqr_tutor = $recibe_pqr_tutorIn;
          $this->observacion_accion_tutor = $observacion_accion_tutorIn;
          $this->respuesta_tutor = $respuesta_tutorIn;
          $this->observacion_rpta_tutor = $observacion_rpta_tutorIn;
          $this->observacion_general = $observacion_generalIn;
          $this->estudiante_materia_id = $estudiante_materia_idIn;
          $this->seguimiento_id = $seguimiento_idIn;
    }


    /** 
     * hasEqualMapping-method will compare two Seguimiento_auditor_estudiante instances
     * and return true if they contain same values in all persistent instance 
     * variables. If hasEqualMapping returns true, it does not mean the objects
     * are the same instance. However it does mean that in that moment, they 
     * are mapped to the same row in database.
     */
    function hasEqualMapping($valueObject) {

          if ($valueObject->getSeguimiento_aduditor_estudiante_id() != $this->seguimiento_aduditor_estudiante_id) {
                    return(false);
          }
          if ($valueObject->getAuditor_estudiante_id() != $this->auditor_estudiante_id) {
                    return(false);
          }
          if ($valueObject->getFecha_seguimiento() != $this->fecha_seguimiento) {
                    return(false);
          }
          if ($valueObject->getWeb_conference_est() != $this->web_conference_est) {
                    return(false);
          }
          if ($valueObject->getChat_est() != $this->chat_est) {
                    return(false);
          }
          if ($valueObject->getMensajeria_interna_est() != $this->mensajeria_interna_est) {
                    return(false);
          }
          if ($valueObject->getForo_est() != $this->foro_est) {
                    return(false);
          }
          if ($valueObject->getEvaluacion_seg_instancia() != $this->evaluacion_seg_instancia) {
                    return(false);
          }
          if ($valueObject->getObservacion() != $this->observacion) {
                    return(false);
          }
          if ($valueObject->getFecha_edicion() != $this->fecha_edicion) {
                    return(false);
          }
          if ($valueObject->getPqr_estudiante() != $this->pqr_estudiante) {
                    return(false);
          }
          if ($valueObject->getHoras_acompanamiento() != $this->horas_acompanamiento) {
                    return(false);
          }
          if ($valueObject->getWeb_conference_tutor() != $this->web_conference_tutor) {
                    return(false);
          }
          if ($valueObject->getChat_tutor() != $this->chat_tutor) {
                    return(false);
          }
          if ($valueObject->getMensajeria_interna_tutor() != $this->mensajeria_interna_tutor) {
                    return(false);
          }
          if ($valueObject->getForo_tutor() != $this->foro_tutor) {
                    return(false);
          }
          if ($valueObject->getEvaluacion_seg_inst_tutor() != $this->evaluacion_seg_inst_tutor) {
                    return(false);
          }
          if ($valueObject->getRecibe_pqr_tutor() != $this->recibe_pqr_tutor) {
                    return(false);
          }
          if ($valueObject->getObservacion_accion_tutor() != $this->observacion_accion_tutor) {
                    return(false);
          }
          if ($valueObject->getRespuesta_tutor() != $this->respuesta_tutor) {
                    return(false);
          }
          if ($valueObject->getObservacion_rpta_tutor() != $this->observacion_rpta_tutor) {
                    return(false);
          }
          if ($valueObject->getObservacion_general() != $this->observacion_general) {
                    return(false);
          }
          if ($valueObject->getEstudiante_materia_id() != $this->estudiante_materia_id) {
                    return(false);
          }
          if ($valueObject->getSeguimiento_id() != $this->seguimiento_id) {
                    return(false);
          }

          return true;
    }



    /**
     * toString will return String object representing the state of this 
     * valueObject. This is useful during application development, and 
     * possibly when application is writing object states in textlog.
     */
    function toString() {
        $out = $this->getDaogenVersion();
        $out = $out."\nclass Seguimiento_auditor_estudiante, mapping to table seguimiento_auditor_estudiante\n";
        $out = $out."Persistent attributes: \n"; 
        $out = $out."seguimiento_aduditor_estudiante_id = ".$this->seguimiento_aduditor_estudiante_id."\n"; 
        $out = $out."auditor_estudiante_id = ".$this->auditor_estudiante_id."\n"; 
        $out = $out."fecha_seguimiento = ".$this->fecha_seguimiento."\n"; 
        $out = $out."web_conference_est = ".$this->web_conference_est."\n"; 
        $out = $out."chat_est = ".$this->chat_est."\n"; 
        $out = $out."mensajeria_interna_est = ".$this->mensajeria_interna_est."\n"; 
        $out = $out."foro_est = ".$this->foro_est."\n"; 
        $out = $out."evaluacion_seg_instancia = ".$this->evaluacion_seg_instancia."\n"; 
        $out = $out."observacion = ".$this->observacion."\n"; 
        $out = $out."fecha_edicion = ".$this->fecha_edicion."\n"; 
        $out = $out."pqr_estudiante = ".$this->pqr_estudiante."\n"; 
        $out = $out."horas_acompanamiento = ".$this->horas_acompanamiento."\n"; 
        $out = $out."web_conference_tutor = ".$this->web_conference_tutor."\n"; 
        $out = $out."chat_tutor = ".$this->chat_tutor."\n"; 
        $out = $out."mensajeria_interna_tutor = ".$this->mensajeria_interna_tutor."\n"; 
        $out = $out."foro_tutor = ".$this->foro_tutor."\n"; 
        $out = $out."evaluacion_seg_inst_tutor = ".$this->evaluacion_seg_inst_tutor."\n"; 
        $out = $out."recibe_pqr_tutor = ".$this->recibe_pqr_tutor."\n"; 
        $out = $out."observacion_accion_tutor = ".$this->observacion_accion_tutor."\n"; 
        $out = $out."respuesta_tutor = ".$this->respuesta_tutor."\n"; 
        $out = $out."observacion_rpta_tutor = ".$this->observacion_rpta_tutor."\n"; 
        $out = $out."observacion_general = ".$this->observacion_general."\n"; 
        $out = $out."estudiante_materia_id = ".$this->estudiante_materia_id."\n"; 
        $out = $out."seguimiento_id = ".$this->seguimiento_id."\n"; 
        return $out;
    }


}

?>
