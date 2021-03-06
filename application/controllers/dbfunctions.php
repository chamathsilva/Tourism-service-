<?php
require("../models/Db.class.php");
require("../config/config.php");
	$db = new Db();
	
	
	function d($v,$t)
    {
        echo '<pre>';
        echo '<h1>' . $t. '</h1>';
        var_dump($v);
        echo '</pre>';
    }
	
	//################################################ GET DETAILS #######################################################################################################//
	
	///////////////////////// Get Hotel Detals According to City /////////////////////////////////////////////
	function get_hotel_details_according_to_city($city){
		global $db;
		$result_set = $db->query("SELECT * FROM hotel WHERE city = :City ", array('City' => $city ) );
		return $result_set;
	}
	//d(get_hotel_details_according_to_city("colombo"),"Test");

	/////////////////////////Get All Hotel Details ////////////////////////////////////////////////////////////////
	function get_All_hotel_details(){
		global $db;
		$result_set = $db->query("SELECT * FROM hotel", array() );
		return $result_set;
	}

	//d(get_hotel_details_according_to_city("colombo"),"Test");
	//d(get_All_hotel_details(),"Test");


	
	///////////////////////// Get Room Detals According to hotel_ID /////////////////////////////////////////////
	function get_room_details_according_to_hotelID($hotel_id){
		global $db;
		$result_set = $db->query("SELECT * FROM  hotelroom WHERE hotelID = :id ", array('id' => $hotel_id ) );
		return $result_set;
	}

	//d(get_room_details_according_to_hotelID(1),"Test");


	function get_all_promotions(){
		global $db;
		$result_set = $db->query("SELECT * FROM promotion");
		return $result_set;
	}
	
	function get_userID_according_username_password($username,$password){
		global $db;
		$result_set = $db->query("SELECT * FROM  user WHERE userName = :uname and password= :pass ", array("uname"=> $username,"pass" =>$password) );
		//$result_set = $result_set[0]["SELECT"];
		return $result_set;	
	}
	//d(get_userID_according_username_password("TharukaD","d"),"Test");
	//echo(get_userID_according_username_password("TharukaD","d"));
	
	//###########################################################################################################################################################//
	
	//################################################ DATA INSERT FUNTIONS #######################################################################################################//
	
	////////////////////////// Insert User Details to user Table When user registed ////////////////////////////////////////////////////////////////////
	function add_registered_user_details($user_name,$first_name,$last_name,$password,$email,$NIC,$contact_no,$identity){
		global $db;
		$result = $db->query("INSERT INTO user(userName,firstName,lastName,password,email,NIC,contactNo,identity) VALUES(:UName,:FName,:LName,:Pass,:Email,:NIC,:CNO,:p)",array("UName"=>$user_name,"FName"=>$first_name,"LName"=>$last_name,"Pass"=>$password,"Email"=>$email,"NIC"=>$NIC,"CNO"=>$contact_no,"p"=>$identity));
		return $result;
	}
	
	////////////////////////// Insert Hotel Details to hotel Table When user Create business //////////////////////////////////////////////////////////////
	function add_hotel_details($user_id,$hotel_name,$hotel_owner_name,$city,$hotel_address,$image_path,$hotel_type,$Description){
		global $db;
		$db->query("INSERT INTO hotel(userID,hotelName,hotelOwnerName,city,hotelAddress,imagePath,Type,Description) VALUES(:uid,:hname,:honame,:city,:haddress,:ipath,:type,:Description)",array("uid"=>$user_id,"hname"=>$hotel_name,"honame"=>$hotel_owner_name,"city"=>$city,"haddress"=>$hotel_address,"ipath"=>$image_path,"type"=>$hotel_type,"Description"=>$Description));
	}
	
	////////////////////////// Insert Hotel Room Details to  hotelroom Table When user Create business ////////////////////////////////////////////////////
	function add_hotel_Rooms_details($hotel_ID,$room_ID,$room_Type,$status,$picture,$price,$Description){
		global $db;
		$db->query("INSERT INTO hotelroom(hotelID,roomID,roomType,status,picture,price,Description) VALUES(:hotel_ID,:room_ID,:room_Type,:status,:picture,:price,:Description)",array("hotel_ID"=>$hotel_ID,"room_ID"=>$room_ID,"room_Type"=>$room_Type,"status"=>$status,"picture"=>$picture,"price"=>$price,"Description"=>$Description));
	}
	
	////////////////////////// Insert Hotel Booking Details to bookingrooms Table When user booked room ///////////////////////////////////////////////
	function add_booking_details($user_ID,$hotel_ID,$room_ID,$bookingDate,$checkInDate,$checkOutDate){
		global $db;
		$db->query("INSERT INTO  bookingrooms(userID,hotelID,roomID,bookingDate,checkInDate,checkOutDate) VALUES(:user_ID,:hotel_ID,:room_ID,:bookingDate,:checkInDate,:checkOutDate)",array("user_ID"=>$user_ID,"hotel_ID"=>$hotel_ID,"room_ID"=>$room_ID,"bookingDate"=>$bookingDate,"checkInDate"=>$checkInDate,"checkOutDate"=>$checkOutDate));

		$db->query("DELETE FROM shopping_cart WHERE hotelID = :hid and roomID=:rid",array("hid"=>$hotel_ID,"rid"=>$room_ID));
	}
	
	/////////////////////////Insert Cart Details /////////////////////////////////////////////////////////////////////////////////
	function add_to_cart($user_id,$hotel_id){
		global $db;
		$db->query("INSERT INTO shopping_cart(hotel_id,room_id) VALUES(:hid,:rid)",array("hid"=>$user_id,"rid"=>$hotel_id));
	} 
	///////////////////////////Insert Promotion Details //////////////////////////////////////////////////////////////////////////
	function add_Promotion($hotel_name,$start_date,$end_date,$description){
		global $db;
		$result = $db->query("INSERT INTO promotion(hotel_name,start_date,end_date,description) VALUES(:hname,:s_date,:e_date,:des)",array("hname"=>$hotel_name,"s_date"=>$start_date,"e_date"=>$end_date,"des"=>$description));
		return $result;
	}
	//add_Promotion("hhhhhh",2001/1/1,2001/1/1,"gggg");

	
	//add_registered_user_details("iuioiu","yry","jtuiokjb","uuykol","uilul","lulu","99900",0);
	//add_hotel_details(1,"Bbayu","paka","colombo","hjd","gfjg","Hotel","fuck me");
	//add_hotel_Rooms_details(1,1,"Lucsary",0,"gjk",12000,"hgkjhiusghsq");
	//add_booking_details(1,1,1,"","","3/3/2014");

	
	//########################################################################################################################################################//
	
	//################################################ DATA UPDATE FUNTIONS #######################################################################################################//
	
	////////////////////////////////////////////////// Hotel data update by business user ////////////////////////////////////////////////////////////////////////////////
	function update_hotel_details($hotel_ID,$user_id,$hotel_name,$hotel_owner_name,$city,$hotel_address,$image_path,$hotel_type,$Description){
		global $db;
		$db->query("UPDATE hotel SET hotelName = :hotelName,hotelOwnerName = :hotelOwnerName,city = :city,hotelAddress = :hotelAddress,imagePath = :imagePath,Type = :Type,Description = :Description WHERE hotelID = :hotelID  and userID=:userID" ,array("hotelID"=>$hotel_ID,"userID"=>$user_id,"hotelName"=>$hotel_name,"hotelOwnerName"=>$hotel_owner_name,"city"=>$city,"hotelAddress"=>$hotel_address,"imagePath"=>$image_path,"Type"=>$hotel_type,"Description"=>$Description));
	}
	
	
	//////////////////////////////////////// When user booked hotel then change status to 1 ///////////////////////////////////////////////////////////////////
	function change_booking_room_status($hotel_ID,$room_ID){
		global $db;
		$db->query("UPDATE hotelroom SET status = 1 WHERE hotelID = :hid and roomID=:rid",array("hid"=>$hotel_ID,"rid"=>$room_ID));
	}
	
	function update_Promotion($p_id,$hotel_name,$start_date,$end_date,$description){
		global $db;
		$result = $db->query("UPDATE promotion SET hotel_name=:hname,start_date=:s_date,end_date=:e_date,description=:des WHERE p_id=:id",array("id"=>$p_id,"hname"=>$hotel_name,"s_date"=>$start_date,"e_date"=>$end_date,"des"=>$description));
		return $result;
	}

	update_Promotion(1,"eeeeeee","","","ffffffff");
	//change_booking_room_status(1,1);

	//change_booking_room_status(1,1);


	//########################################################################################################################################################//
	
	//################################################ DATA DELETE FUNTIONS #######################################################################################################//
	
	
	function Delete_hotel_with_all_rooms($user_ID,$hotel_ID){
		global $db;
		$db->query("DELETE FROM hotel WHERE userID=:uid and hotelID = :hid ",array("uid"=>$user_ID,"hid"=>$hotel_ID));
		$db->query("DELETE FROM hotelroom WHERE hotelID = :hid ",array("hid"=>$hotel_ID));
	}
	//Delete_hotel_with_all_rooms(1,1);

	function user_login($username,$password){
		global $db;
		$result_set = $db->query("SELECT COUNT(*) FROM user WHERE userName = :username AND password =:pass",array("username"=>$username,"pass"=>$password));
		$result_set = $result_set[0]["COUNT(*)"];
		return $result_set;
	}
	
	
	
	function Delete_Promotion($id){
		global $db;
		$db->query("DELETE FROM promotion WHERE p_id = :pid ",array("pid"=>$id));
	}
	
	


	function Delete_promotions($pro_ID){
		global $db;
		$db->query("DELETE FROM promotion WHERE p_id = :hid ",array("hid"=>$pro_ID));
	}




	//$temp = user_login("chamath","password");
	//echo $temp;
	//echo $lol;

	
?>

