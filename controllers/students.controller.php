<?php

class ControllerStudents{
	static public function ctrCreateStudent(){
		if(isset($_POST["tns-cname"])){
            if (isset($_POST['num-isactive'])){
			  $isactive=$_POST['num-isactive'];
			}else{
			  $isactive="0";
			}

		   	$table = "students";
		   	$data = array("studentid"=>$_POST["tns-studentid"],
		   		          "isactive"=>$isactive,
		   				  "cname"=>$_POST["tns-cname"],
				          "email"=>$_POST["tns-email"],
				          "phone"=>$_POST["num-phone"],
				          "address"=>$_POST["tns-address"],
				          "website"=>$_POST["tns-website"],
				          "mobile"=>$_POST["num-mobile"],
				          "cperson"=>$_POST["tns-cperson"]);

		   	$answer = (new ModelStudents)->mdlAddStudent($table, $data);

		   	if($answer == "ok"){
				echo'<script>
                    swal.fire({
			          title: "Student details successfully appended!",
			          type: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "studentadd";
			          }
			        })
			    </script>';    
			}
		}
	}

	static public function ctrShowStudents(){
		$answer = (new ModelStudents)->mdlShowStudents();
		return $answer;
	}

	static public function ctrEditStudent(){
		if(isset($_POST["tns-cname"])){
            if (isset($_POST['num-isactive'])){
			  $isactive=$_POST['num-isactive'];
			}else{
			  $isactive="0";
			}

		   	$table = "students";
		   	$data = array("id"=>$_POST["idStudent"],
		   		          "studentid"=>$_POST["tns-studentid"],
		   		          "isactive"=>$isactive,
		   				  "cname"=>$_POST["tns-cname"],
				          "email"=>$_POST["tns-email"],
				          "phone"=>$_POST["num-phone"],
				          "address"=>$_POST["tns-address"],
				          "website"=>$_POST["tns-website"],
				          "mobile"=>$_POST["num-mobile"],
				          "cperson"=>$_POST["tns-cperson"]);

		   	$answer = (new ModelStudents)->mdlEditStudent($table, $data);

		   	if($answer == "ok"){
				echo'<script>
                    swal.fire({
			          title: "Student details successfully updated!",
			          type: "success",
			          confirmButtonText: "Proceed",
			          confirmButtonClass: "btn btn-outline-success",
			          allowOutsideClick: false,
			          buttonsStyling: false,
			        }).then(function(answer){
			          if(result.value) {
                        window.location = "studentadd";
			          }
			        })
			    </script>';    
			}
		}
	}		
}

