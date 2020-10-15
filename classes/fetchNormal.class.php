<?php 

/**
 * Fetch Normal Class
 */
class fetchNormal extends db
{
    public function fetchNormalRenterPerson($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM renterperson ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "INDIVIDUAL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM renterperson WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "CONTRACT"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM renterperson WHERE  contract_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalContract($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM contract ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "INDIVIDUAL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM contract WHERE  contract_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "ROOM"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM contract WHERE  room_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "RENTER"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM contract WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalMessages($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM messages ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "RECIVER"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM messages WHERE  reciver = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "SENDER"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM messages WHERE  sender = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalPhotos($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM photos ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "INDIVIDUAL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM photos WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalRentRevenue($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rentrevenue ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "RENETR"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rentrevenue WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "ROOM"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rentrevenue WHERE  room_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalRooms($type, $props=''){
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rooms ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "RENETR"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rooms WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "ROOM"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rooms WHERE  room_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "FLOOR"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM rooms WHERE  floor_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalAddress($type, $props='') {
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM address ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "INDIVIDUAL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM address WHERE  renter_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


    public function fetchNormalFloor($type, $props='') {
        if($type == "ALL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM floor ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }elseif($type == "INDIVIDUAL"){
            $array = array();
			$query = mysqli_query($this->conn(), "SELECT * FROM floor WHERE  floor_id = '$props' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
        }
    }


}