<?php 

/**
 * Register Class
 */
class Register extends db
{   
    //PRIVATE USE
    private $id;

    private function dateGenenetor($type){
        date_default_timezone_set("Africa/Addis_Ababa");
		return date($type);
    }

    private function idGenenetor($type){
        $array = array();
		$query = mysqli_query($this->conn(), "SELECT * FROM $type");
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row["renter_id"];
        }
        return $array;
    }

    ######################################################################

    //PUBLIC USE
    public function registerRenterPerson($fullName, $phone){
        $idgenarray = $this->idGenenetor("renterperson");
        
        if (count($idgenarray) == 0) {
        	$this->id = 1000;
        }else{
        	$this->id = end($idgenarray) + 1;
        }
        $date = $this->dateGenenetor("m/d/Y");
        $query = "INSERT INTO renterperson (renter_id, fullName, phone, dateRegisterd) VALUES('$this->id', '$fullName', '$phone', '$date')";
        mysqli_query($this->conn(), $query);
        return $this->id;
        
    }

    
	public function registerContract($renter_id, $room_id, $startDate, $endDate){
        $idgenarray = $this->idGenenetor("contract");
        
        if (count($idgenarray) == 0) {
        	$this->id = 1000;
        }else{
        	$this->id = end($idgenarray) + 1;
        }
        $date = $this->dateGenenetor("m/d/Y");

        $query = "INSERT INTO renterperson (contract_id, renter_id, room_id, startDate, endDate, isActive, dateRegisterd) VALUES('$this->id', '$renter_id', '$room_id', '$startDate', '$endDate', 1, '$date')";
        mysqli_query($this->conn(), $query);

    }


	public function registerMessages($type, $props=''){

    }


	public function registerPhotos($type, $props=''){

    }


	public function registerRentRevenue($type, $props=''){

    }


	public function registerRooms($type, $props=''){

    }


	public function registerAddress($type, $props=''){

    }


}