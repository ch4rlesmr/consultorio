<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Diagnosis extends Model {
    
    protected $table = "diagnostics";

    public function patient () {
    	return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function getFaceType() {
    	switch ( $this->type_face ) {
    		case 'RE':
    			return 'Redonda';
    			break;
    		case 'FA':
    			return 'Frente amplia';
    			break;
    		case 'MP':
    			return 'Mandibula Pronunciada';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getTongueType() {
    	switch ( $this->type_tongue ) {
    		case 'RE':
    			return 'Redonda';
    			break;
    		case 'PU':
    			return 'Puntuda';
    			break;
    		case 'OT':
    			return 'Otra';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getEyesType() {
    	switch ( $this->type_eyes ) {
    		case 'ES':
    			return 'Equilibrados y sanos';
    			break;
    		case 'SYING':
    			return 'Sanpaku Ying';
    			break;
    		case 'SYANG':
    			return 'Sanpaku Yang';
    			break;
    		case 'SALT':
    			return 'Saltones';
    			break;
    		case 'PL':
    			return 'París y Londres';
    			break;
    		case 'BI':
    			return 'Bizcos';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getNoseType () {
    	switch ( $this->type_nose ) {
    		case 'PD':
    			return 'Puntiaguda y Delgada';
    			break;
    		case 'DPR':
    			return 'Dilatada con Puntos Rojos';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getLipsType () {
    	switch ( $this->type_lips ) {
    		case 'SU':
    			return 'Sanos y Uniformemente desarrollados';
    			break;
    		case 'SGID':
    			return 'Superior Grueso, Inferior Delgado';
    			break;
    		case 'SDIG':
    			return 'Superior Delgado, Inferior Grueso';
    			break;
    		case 'MG':
    			return 'Del mismo Grosor';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function getNailsType() {
    	switch ( $this->type_nails ) {
    		case 'TCYING':
    			return 'Triangular - Constitución Ying';
    			break;
    		case 'RCYANG':
    			return 'Redonda - Constitución Yang';
    			break;
    		case 'EVH':
    			return 'Estrias Verticales - Hepáticos';
    			break;
    		case 'HTA':
    			return 'Cuadrada - HTA';
    			break;
    		case 'CPR':
    			return 'Curvada- Pulmonar, Respiratorio';
    			break;
    		case 'AATAB':
    			return 'Acucarachada - Anemia Tensión Arterial Baja';
    			break;
    		case 'PTL':
    			return 'Protuberancia Transversal - Lombrices';
    			break;
    		case 'GDMD':
    			return 'Grietas - Desnutrición Mala Digestión';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

}
