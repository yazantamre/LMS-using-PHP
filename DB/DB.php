 <?php 
 class DB{
  private static $connection;
   public string $imgpathpublic = "http://localhost/Online Lms/assets/images/" ;
  public string $filepathpublic = "http://localhost/Online Lms/assets/" ;
  public function connect(){
    if (!isset(self::$connection)) {
      $config=parse_ini_file('config.ini');
      self::$connection=new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }
    if (self::$connection ==false) {
      echo "No connection" . self::$connection->connect_error;
      return false;
    }
    return self::$connection;
  }

 
 public function login($email,$password)
             {

$conn=$this->connect();
  $conn->set_charset("UTF8");



$ciphering = "AES-128-CTR";
 
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
 
// Non-NULL Initialization Vector for encryption
$encryption_iv = '9832157489234587';

$encryption_key = "tesrbhfASDzxcyNKO";
 
// Use openssl_encrypt() function to encrypt the data
$encryptionpassword = openssl_encrypt($password, $ciphering,
            $encryption_key, $options, $encryption_iv);
  $encryptionpassword ;


     $email = mysqli_real_escape_string($conn,$email);
     $encryptionpassword = mysqli_real_escape_string($conn,$encryptionpassword);

     $query = "SELECT * FROM users where email = '$email' and password = '$encryptionpassword' ";
     $result = mysqli_query($conn, $query);
     echo  mysqli_error($conn);

     return $result;
  }







public function addCourse($name,$description,$outline,$requirements,$outcome,$teachersId,$price,$RegistrationExpirationDate,$StartDate,$DateAdded,$target_file)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
 
 $imgpath = $this->imgpathpublic;
 $target_file  =  $imgpath.$target_file;

    $query = "INSERT INTO courses (name,description,outline,requirements,outcome,imagePath,teachersId,price,RegistrationExpirationDate,DateAdded,startDate)
        VALUES ('".$name."','". $description."' , '".$outline."' , '".$requirements."', '".$outcome."' , '".$target_file."','".$teachersId."','".$price."','".$RegistrationExpirationDate."','".$DateAdded."','".$StartDate."')";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

    $last_id = mysqli_insert_id($conn);
         return $result;

}
 





 public function Registercourse($courseId,$studentId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$DateAdded = date("Y-m-d"); 
    $query = "INSERT INTO coursesapp (courseId,StudentId ,DateAdded)
        VALUES ('".$courseId."','". $studentId."' , '".$DateAdded."' )";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

          return $result;

}




 public function addcoursesevaluation($rateCoursevaluecurrent,$courseIdcurrent,$studentId,$reviewText)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
  

   

    $query = "INSERT INTO coursesevaluation (courseId,userId,rate,Comment)
        VALUES ('".$courseIdcurrent."','". $studentId."' , '".$rateCoursevaluecurrent."' , '".$reviewText."')";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

    $last_id = mysqli_insert_id($conn);
         return $last_id;

}



 public function addPost($title,$body,$DateAdded,$addedBy,$target_file)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
 $timeAdded =date("H:i:s");  

 $imgpath = $this->imgpathpublic;
 $target_file  =  $imgpath.$target_file;

    $query = "INSERT INTO post (title,body,dateAdded,timeAdded,addedBy,imagePath)
        VALUES ('".$title."','". $body."' , '".$DateAdded."' , '".$timeAdded."', '".$addedBy."' , '".$target_file."')";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

          return $result;

}


public function adduser($firstName,$lastName,$email,$phone,$password,$type,$status,$address,$registrationDate,$target_file)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
     
 $imgpath = $this->imgpathpublic;
 $target_file  =  $imgpath.$target_file;
 


 $ciphering = "AES-128-CTR";
 
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
 
// Non-NULL Initialization Vector for encryption
$encryption_iv = '9832157489234587';

$encryption_key = "tesrbhfASDzxcyNKO";
 
// Use openssl_encrypt() function to encrypt the data
$encryptionpassword = openssl_encrypt($password, $ciphering,
            $encryption_key, $options, $encryption_iv);
 echo $encryptionpassword ;


    $query = "INSERT INTO users (firstName,lastName,email,phone,password,type,status,address,registrationDate,imagePath)
 
        VALUES ('".$firstName."','".$lastName."','".$email."','".$phone."','".$encryptionpassword."','".$type."','".$status."','".$address."', '".$registrationDate."' , '".$target_file."')";
$result = mysqli_query($conn, $query);
//echo  mysqli_error($conn);

     
        return $result;

}


public function addClassroom($courseId)
{
   

$conn=$this->connect();
    $conn->set_charset("UTF8");

    $query = "UPDATE   courses set

classroom = IF(classroom=1, 2, 1) 
              
          where id =$courseId ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}




public function addAssigmentDB($courseId,$name,$description,$mark,$DataSubmit,$DateAdded,$target_file)

{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
    if ($target_file != '0') {
 $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file;    }
else  $target_file  =  "null" ;

  
    $query = "INSERT INTO assigment(courseId,name,description,mark,DataSubmit,DateAdded,file) values
 ('".$courseId."','".$name."' ,'".$description."','".$mark."','".$DataSubmit."','".$DateAdded."','".$target_file."')";
       

$result = mysqli_query($conn, $query);
 

     
        return $result;

}

 public function addaassaymentComment($userid,$comment,$assigmentId,$DateAdded)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
 
    $query = "INSERT INTO assigmentcomment(userid,comment,DateAdded,assigmentId) values
 ('".$userid."','".$comment."','".$DateAdded."','".$assigmentId."')";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}



 public function addAssignmentsSolutions($assigmentId,$courseId,$type, $userid , $DateAdded ,$timeAdded ,$target_file)

{
  $conn=$this->connect();
    $conn->set_charset("UTF8");


  $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file;


    $query = "INSERT INTO assignmentsSolutions(userid,assigmentId ,type,DateAdded,timeAdded,solutionFile) values
 ('".$userid."','".$assigmentId."','".$type."','".$DateAdded."','".$timeAdded."','".$target_file."')";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}



 public function addCourseaassigmentMark($assigmentId,$cMark,$studentId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
 
    $query = "INSERT INTO assignmentsSolutions(userid,assigmentId ,type,mark) values
 ('".$studentId."','".$assigmentId."','4','".$cMark."')";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}
public function addadvertisementsDB($courseId,$content,$DateAdded,$target_file)

{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
     if ($target_file != '0') {
 $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file;    }
else  $target_file  =  "null" ;

  echo $target_file; 
 echo "<br>";
    $query = "INSERT INTO classroomadvertisements(courseId,content,DateAdded,file) values
 ('".$courseId."','".$content."','".$DateAdded."','".$target_file."')";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}

 public function addadvertisementsComment($userid,$Comment,$advertisementsId,$DateAdded)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
 
    $query = "INSERT INTO advertisementscomments(userid,Comment,DateAdded,advertisementsId) values
 ('".$userid."','".$Comment."','".$DateAdded."','".$advertisementsId."')";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}


public function getusersById($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from users where id='$userid'    ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function ConfirmresetPasswordcodeDB($PasswordCode,$email)

{
  
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "select * from users where  passwordReset  LIKE '$PasswordCode'
           and email LIKE '$email'  
   ";

            $result = mysqli_query($conn, $query);
 echo  mysqli_error($conn);
        return $result;

}


public function ConfirmEmailDB($email, $confirmCode)

{
  
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "select * from users where  passwordReset  LIKE '$confirmCode'
           and email LIKE '$email'   and status='3'
   ";

            $result = mysqli_query($conn, $query);
 echo  mysqli_error($conn);
        return $result;

}




public function  updateConfirmEmailDB($email, $confirmCode)

{
 
$conn=$this->connect();
    $conn->set_charset("UTF8");

  
 



    $query = "UPDATE   users set

    
     passwordReset   = null,
     status ='1'
    
          where email ='$email' ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);
 

        return $result;

} 

public function getusersByTypestatus($type,$status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from users where type='$type' and status ='$status'   ORDER BY  id DESC ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getusersByType($type)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from users where type='$type'   ORDER BY  id DESC   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getStudentForMang()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from users where type= 3   and (status='1'  or status='2' ) ORDER BY  id DESC   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getCourseBystatus($status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8"); 
$query =" select * from courses where  status ='$status'   ORDER BY  id DESC ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getteacherlastCourse($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from courses where  teachersId ='$userid'     

  and ( DateAdded  BETWEEN CURDATE()-7 AND CURDATE() )
; ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getLastAssignmentNotifications($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  assigment.`name` ,assigment.`id` ,assigment.`DateAdded`   FROM `assigment`
JOIN courses ON  assigment.courseId =    courses.id
JOIN users ON  users.id = courses.teachersId 
where (assigment.`DateAdded` BETWEEN CURDATE()-7 AND CURDATE() ) and users.id = '$userid'  ORDER BY  assigment.id DESC    ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function getLastAssignmentCommentsNotifications($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query ="  SELECT assigmentcomment.`id` ,assigmentcomment.`userId` , assigmentcomment.`Comment` ,assigmentcomment.`DateAdded` ,assigment.courseId  FROM `assigmentcomment` JOIN assigment ON assigmentcomment.assigmentId = assigment.id JOIN courses ON assigment.courseId = courses.id JOIN users ON users.id = courses.teachersId where (assigmentcomment.`DateAdded` BETWEEN CURDATE()-7 AND CURDATE() ) and users.id = '$userid' 

ORDER BY  assigmentcomment.id DESC  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



 

public function getmonthCoursesNotifications()
{


    $year = date("Y");
    $month = date("m");
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as monthCoursesNum from courses  WHERE MONTH(DateAdded) = '$month'  AND YEAR(DateAdded) = '$year'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 

public function getTotalCoursesNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as totalCoursesNum from courses   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getTotalCourses6monthNotifications()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as total6montCoursesNum from courses  where  (courses.`DateAdded` BETWEEN CURDATE()-180 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

//
public function getmonthusersNotifications()
{


    $year = date("Y");
    $month = date("m");
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as monthusersNum from users  WHERE MONTH(registrationDate) = '$month'  AND YEAR(registrationDate) = '$year'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 

public function getTotalusersNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as totalusersNum from users   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getTotalusers6monthNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as total6montusersNum from users  where  (users.`registrationDate` BETWEEN CURDATE()-180 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

//







public function getmonthregAppNotifications()
{


    $year = date("Y");
    $month = date("m");
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as monthregAppsNum from coursesapp  WHERE MONTH(DateAdded) = '$month'  AND YEAR(DateAdded) = '$year'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 

public function getTotalregAppNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as totalregAppNum from coursesapp   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getTotalregApp6monthNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(*)  as total6montregAppNum from coursesapp  where  (coursesapp.`DateAdded` BETWEEN CURDATE()-180 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

//

 

public function getweekPostsNumNotifications()
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  body ,title  from post  where  (post.`dateAdded` BETWEEN CURDATE()-7 AND CURDATE() )  order by id desc ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getweekAssigmentNotifications($userid )
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" 
SELECT   assigment.name , `assigment`.`DateAdded` ,courses.id FROM `assigment` 
JOIN courses ON `courses`.`id` =  `assigment`.`courseId` 
JOIN coursesapp  ON `coursesapp`.`courseId`  = `courses`.`id` 

where `coursesapp`.`StudentId`  =  '$userid'
  AND   (assigment.`dateAdded` BETWEEN CURDATE()-7 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function getweekAdvertisementsNotifications($userid )
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" 
SELECT   classroomadvertisements.content ,
 `classroomadvertisements`.`DateAdded` ,
 courses.id
 FROM `classroomadvertisements` 
JOIN courses 
ON `courses`.`id` =  `classroomadvertisements`.`courseId` 
JOIN coursesapp 

 ON `coursesapp`.`courseId`  = `courses`.`id` 

where `coursesapp`.`StudentId`  =  '$userid'
  AND   (classroomadvertisements.`dateAdded` BETWEEN CURDATE()-7 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getweekmarkNotifications($userid )
{
  
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" 
SELECT   courses.name ,
 `assignmentssolutions`.`DateAdded` ,
 `assignmentssolutions`.`mark`  as studentMark,

  `assigment`.`mark`  as assigmentMark,
 courses.id
 FROM `assignmentssolutions` 
JOIN assigment 
ON `assigment`.`id` =  `assignmentssolutions`.`assigmentId`

JOIN  courses ON 
`assigment`.`courseId` =  `courses`.`id`

JOIN coursesapp 

 ON `coursesapp`.`courseId`  = `courses`.`id` 

where `assignmentssolutions`.`userId`  =  '$userid' 
 AND `coursesapp`.`StudentId` =  '$userid' 
  AND   (assignmentssolutions.`markDate` BETWEEN CURDATE()-7 AND CURDATE() )  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

//
public function getCourseBystatusClassRoom($status,$classRoom)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from courses where  status ='$status' and  classRoom ='$classRoom'  ORDER BY   id DESC  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

public function getCourseWithTeachers()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.classroom ,courses.status ,courses.enrolledNumber ,users.firstName , users.lastName
 from courses 
JOIN users ON courses.teachersId = users.id ORDER BY   courses.id DESC 
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



public function getAllCourseWithTeacher($status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome,
courses.imagePath,
courses.price,
courses.RegistrationExpirationDate,
courses.DateAdded

,users.firstName , users.lastName, users.imagePath  as userimg
 from courses 
JOIN users ON courses.teachersId = users.id
where  courses.status = '$status' 
ORDER BY `courses`.`DateAdded` DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getAllCourseWithTeacherActFin()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome,
courses.imagePath,
courses.price,
courses.RegistrationExpirationDate,
courses.DateAdded

,users.firstName , users.lastName, users.imagePath  as userimg
 from courses 
JOIN users ON courses.teachersId =  users.id
where  courses.status = '1'  or  courses.status = '3' 
ORDER BY `courses`.`name` ASC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 // search with title amd desc
// public function getAllCourseWithTeacherActFinSearch($textSearch)
// {
//   $conn=$this->connect();
//     $conn->set_charset("UTF8");
// $query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome,
// courses.imagePath,
// courses.price,
// courses.RegistrationExpirationDate,
// courses.DateAdded

// ,users.firstName , users.lastName, users.imagePath  as userimg
//  from courses 
// JOIN users ON courses.teachersId =  users.id
// where ( courses.status = '1'  or  courses.status = '3' )
// AND
//  ( courses.`name` LIKE  '%{$textSearch}%' or 
//  courses.`name`  LIKE '{$textSearch}%' or
//   courses.`name`  LIKE '%{$textSearch}'  or

//    courses.`description`   LIKE  '%{$textSearch}%' or  
//    courses.description   LIKE   '{$textSearch}%'  or courses.`description`  LIKE '%{$textSearch}'
//   ) 
// ORDER BY `courses`.`DateAdded` DESC
//  ";

//     $result = mysqli_query($conn, $query);
// echo  mysqli_error($conn);

//         return $result;
// } 


// search with title just 
public function getAllCourseWithTeacherActFinSearch($textSearch)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome,
courses.imagePath,
courses.price,
courses.RegistrationExpirationDate,
courses.DateAdded

,users.firstName , users.lastName, users.imagePath  as userimg
 from courses 
JOIN users ON courses.teachersId =  users.id
where ( courses.status = '1'  or  courses.status = '3' )
AND
 ( courses.`name` LIKE  '%{$textSearch}%' or 
 courses.`name`  LIKE '{$textSearch}%' or
  courses.`name`  LIKE '%{$textSearch}'  
  ) 
ORDER BY `courses`.`DateAdded` DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
} 
public function getIndexCourseWithTeacher()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome,
courses.imagePath,
courses.price,
courses.RegistrationExpirationDate,
courses.DateAdded

,users.firstName , users.lastName, users.imagePath  as userimg
 from courses 
JOIN users ON courses.teachersId = users.id
where  courses.status = '1' or  courses.status = '3'
ORDER BY `courses`.`DateAdded` DESC LIMIT 3
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function getIndexTeacher($status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select  id,email,phone,firstName , lastName, imagePath  
 from users 
 
where  status = '$status' and type ='2'

ORDER BY RAND()
 
 LIMIT 3
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


public function getcourseById($courseId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select courses.id , courses.name , courses.description ,courses.outline ,courses.requirements ,courses.outcome ,courses.status,
courses.imagePath,courses.startDate,
courses.price,
courses.RegistrationExpirationDate,
courses.DateAdded

,users.firstName , users.lastName, users.imagePath  as userimg
 from courses 
JOIN users ON courses.teachersId = users.id
where  courses.id = '$courseId' 
ORDER BY `courses`.`DateAdded` DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




public function getCourseReviews($courseId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select coursesevaluation.id , coursesevaluation.rate , coursesevaluation.Comment ,coursesevaluation.dateAdded  
,users.firstName , users.lastName, users.imagePath  as userimg
 from coursesevaluation 
JOIN users ON coursesevaluation.userId = users.id
where  coursesevaluation.courseId = '$courseId' 
ORDER BY  coursesevaluation.id  DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

public function getStudentCurrentCourse($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT courses.id , courses.name , courses.classroom ,courses.imagePath, coursesapp.`id` as `coursesappid` ,courses.classroom , courses.status ,coursesapp.StudentId
FROM `coursesapp`
 JOIN courses ON coursesapp.`courseId` = courses.id

where coursesapp.StudentId  = '$userid' and courses.classroom= '1'
and courses.status= '1'  and coursesapp.status = '1'

ORDER BY   courses.id DESC 
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 

public function getStudentOldCourse($userid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT courses.id , courses.name , courses.classroom ,courses.imagePath, coursesapp.`id` as `coursesappid` ,courses.classroom , courses.status ,coursesapp.StudentId
FROM `coursesapp`
 JOIN courses ON coursesapp.`courseId` = courses.id

where coursesapp.StudentId  = '$userid' and courses.classroom= '1'
and courses.status= '3' and coursesapp.status = '1'

ORDER BY   courses.id DESC 
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




   
  public function getcoursSumMarks($userId,$courseId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" 
  SELECT SUM(assignmentsSolutions.mark) as markSUM , SUM(assigment.mark) as totalmarks   FROM assignmentsSolutions JOIN assigment ON assignmentsSolutions.assigmentId =assigment.id WHERE assigment.courseId ='$courseId' AND assignmentsSolutions.userId ='$userId'";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}
 
   public function getusersCOUNTBytype($type)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(`id`)   as 'usersSUM' FROM users WHERE type= '$type'";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


   public function getCoursesCOUN()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT COUNT(`id`)   as 'CoursesSUM' FROM courses ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


  public function getcoursesappByid($appid)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM coursesapp
 WHERE id = '$appid'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

public function getIndexPost()
{
    $conn = $this->connect();
    $conn->set_charset("UTF8");
    $query = "SELECT * FROM post ORDER BY `dateAdded` DESC, `timeAdded` DESC, `id` DESC LIMIT 5";

    $result = mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return $result;
}



public function getPosts()
{
    $conn = $this->connect();
    $conn->set_charset("UTF8");

    $query = "SELECT * FROM post ORDER BY `dateAdded` DESC, `timeAdded` DESC, `id` DESC";

    $result = mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return $result;
}


  public function getPostbyId($postId)

{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM post where id ='$postId'
 ORDER BY `post`.`id`   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



  public function getTeachers()
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM users where type ='2' and status ='1' 
 ORDER BY `users`.`firstName` asc  ,  `users`.`lastName` DESC  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


  public function getcoursesappBycourseIdstudentId($courseId,$studentId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM coursesapp
 WHERE StudentId = '$studentId' and  courseId = '$courseId'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



  public function getcoursesevaluation($userid,$courseId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM coursesevaluation
 WHERE courseId = '$courseId' and  userId = '$userid'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}
public function getcoursesappBystatus($status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT coursesapp.id,coursesapp.DateAdded ,courses.id as cid, courses.name, users.firstName , users.lastName ,users.phone,users.email FROM coursesapp
 JOIN courses ON coursesapp.courseId = courses.id JOIN users ON coursesapp.StudentId = users.id WHERE coursesapp.status = '$status'
 
ORDER BY   coursesapp.id DESC 
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

 

public function getcoursesappByforteacher($teachersId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT coursesapp.id,coursesapp.DateAdded , courses.name, users.firstName , users.lastName ,users.imagePath FROM coursesapp
 JOIN courses ON coursesapp.courseId = courses.id JOIN users ON coursesapp.StudentId = users.id 

 WHERE        (coursesapp.`DateAdded` BETWEEN CURDATE()-7 AND CURDATE() ) and courses.teachersId = '$teachersId' and coursesapp.status = '1'
 and courses.status = '1'
ORDER BY   coursesapp.id DESC 
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function getCoursestudents($courseId,$status)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT coursesapp.id,  users.id as studentId, users.imagePath,   users.firstName , users.lastName ,users.phone,users.email FROM coursesapp
   JOIN users ON coursesapp.StudentId = users.id WHERE coursesapp.status = '$status' and coursesapp.courseId = '$courseId'

ORDER BY   coursesapp.id DESC 
    ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


  public function getCourseadvertisements($courseId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" 
SELECT classroomadvertisements.`content`, users.firstName ,users.lastName,users.imagePath, classroomadvertisements.courseId,classroomadvertisements.id,classroomadvertisements.DateAdded,classroomadvertisements.file,courses.name FROM `classroomadvertisements` JOIN courses ON classroomadvertisements.`courseId` = courses.id JOIN users ON courses.teachersId = users.id
 WHERE courseId = '$courseId'
ORDER BY   classroomadvertisements.id DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



  public function getdvertisementById($dvertisementId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM classroomadvertisements
 WHERE id = '$dvertisementId' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



  public function getassigmentById($assigmentId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM assigment
 WHERE id = '$assigmentId' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 

  public function getCourseaassigment($courseId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM assigment
 WHERE courseId = '$courseId'  ORDER BY id DESC";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 
  public function  getCourseaassigmentwithTeacher($courseId)

 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query ="SELECT assigment.`name`,assigment.id,assigment.description ,assigment.DateAdded, assigment.DataSubmit, assigment.File, assigment.mark , users.firstName,users.lastName ,users.imagePath FROM `assigment` JOIN courses ON assigment.`courseId` = courses.id JOIN users ON courses.teachersId = users.id
 WHERE assigment.courseId = '$courseId'
 ORDER BY assigment.id DESC
";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

  public function getCoursethacher($courseId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query ="SELECT  users.firstName,users.lastName,users.email,users.phone,users.imagePath , courses.name

FROM `courses` JOIN users ON courses.teachersId = users.id
 WHERE courses.id = '$courseId'


 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





  public function assigmentEvaluation($assigmentId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM assignmentsSolutions
 WHERE assigmentId = '$assigmentId'
ORDER BY  id DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




 public function getassigmentEvaluationwithuser($assigmentId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT   assignmentsSolutions.`mark`,
 assignmentsSolutions.`solutionFile`,
 assignmentsSolutions.`type`,
 assignmentsSolutions.`timeAdded`,
 assignmentsSolutions.`DateAdded` ,
 assignmentsSolutions.`userId`,
 assignmentsSolutions.`assigmentId`,
 assignmentsSolutions.`id`,
 users.firstName ,
 users.lastName 
FROM assignmentsSolutions 
JOIN users ON assignmentsSolutions.`userId`  = users.id
 WHERE assigmentId = '$assigmentId'


ORDER BY  assignmentsSolutions.id DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

 


 public function getaStudentassigmentEvaluation($assigmentevId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT   assignmentsSolutions.`mark`,
 assignmentsSolutions.`solutionFile`,
 assignmentsSolutions.`type`,
 assignmentsSolutions.`timeAdded`,
 assignmentsSolutions.`DateAdded` ,
 assignmentsSolutions.`userId`,
 assignmentsSolutions.`assigmentId`,
 assignmentsSolutions.`id`,
 users.firstName ,
 users.lastName 
FROM assignmentsSolutions 
JOIN users ON assignmentsSolutions.`userId`  = users.id
 WHERE  assignmentsSolutions.`id` = '$assigmentevId' 

ORDER BY  assignmentsSolutions.id DESC
  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


  public function getassigmentmark($assigmentevId)

  {
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT   mark FROM assigment
 WHERE id  = '$assigmentevId'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

 public function getCourseaassigmentMark($studentId,$assigmentId)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" SELECT  * FROM assignmentsSolutions
 WHERE assigmentId = '$assigmentId'   and userId = '$studentId'  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

  public function getadvertisementsccomments($advertisementsId)

 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select advertisementscomments.id , advertisementscomments.userId ,advertisementscomments.`Comment` , advertisementscomments.DateAdded , users.firstName , users.lastName ,users.imagePath from advertisementscomments JOIN users ON advertisementscomments.`userId` = users.id 
 WHERE advertisementsId = '$advertisementsId' 

ORDER BY  advertisementscomments.id DESC
 ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


 


 public function getCourseaassigmentcomments($assigmentId)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query ="select assigmentcomment.id ,assigmentcomment.userId , assigmentcomment.`Comment` , assigmentcomment.DateAdded , users.firstName , users.lastName ,users.imagePath from assigmentcomment JOIN users ON assigmentcomment.`userId` = users.id 
 WHERE assigmentId = '$assigmentId'
ORDER BY  assigmentcomment.id DESC
  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}


public function updateCourseEnrolledNumber($courseId)
{
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   courses set
             enrolledNumber = enrolledNumber + 1 
             WHERE id = $courseId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}  



public function updateAssignmentsSolutions($assigmentId,$courseId,$type, $userid , $DateAdded ,$timeAdded ,$target_file){
  $conn=$this->connect();
    $conn->set_charset("UTF8");
  $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file;
    $query = "
    UPDATE   assignmentssolutions set
             type =  '$type' ,
             DateAdded =  '$DateAdded',
             solutionFile = '$target_file',
             timeAdded = '$timeAdded'
             WHERE assigmentId = '$assigmentId' 
             and userid = '$userid' ";
       

$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

     
        return $result;

}

 

public function updateCourseaassigmentMark($assigmentevId,$cMark)
{
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   assignmentsSolutions set
             mark =  $cMark  
             WHERE id = $assigmentevId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}  

public function editPostimg($postId,$title,$body,$target_file)
{

$conn=$this->connect();
 $imgpath = $this->imgpathpublic;
 $target_file  =  $imgpath.$target_file;
    $conn->set_charset("UTF8");
    $query = "UPDATE   post set
             title =  '$title' ,
             body =  '$body',
             imagePath = '$target_file'
             WHERE id = $postId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

} 



public function editPost($postId,$title,$body)
{
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   post set
             title =  '$title' ,
             body =  '$body'
             WHERE id = '$postId';
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

} 


public function updateAdvertisements($dvertisementId,$content)
{
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   classroomadvertisements set
             content =  '$content'  
             WHERE id = $dvertisementId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}


 public function updateAdvertisementfile($dvertisementId,$content ,$target_file)

{
    $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file; 

$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   classroomadvertisements set
             content =  '$content' ,
             file =  '$target_file' 
             WHERE id = $dvertisementId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}


public function updateAassigment($assigmentId,$name ,$description,$mark,$DataSubmit)
{
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   assigment set
             name =  '$name'  ,
             description =  '$description'  ,
             mark =  '$mark' , 
DataSubmit=  '$DataSubmit'   

             WHERE id = $assigmentId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}

 public function updateAassigmentfile($assigmentId,$name ,$description,$mark,$DataSubmit,$target_file)
{

        $filepath = $this->filepathpublic;
 $target_file  =  $filepath.$target_file; 
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   assigment set
             name =  '$name'  ,
             description =  '$description'  ,
             mark =  '$mark' , 
DataSubmit=  '$DataSubmit'  ,
File =  '$target_file' 
             WHERE id = $assigmentId;
            ";
$result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}

public function  updateUserDB($userid,$firstName,$lastName,$email,$phone,$password,$address)

{
 
$conn=$this->connect();
    $conn->set_charset("UTF8");

 $ciphering = "AES-128-CTR";
 
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
 
// Non-NULL Initialization Vector for encryption
$encryption_iv = '9832157489234587';
// Store the decryption key
$encryption_key = "tesrbhfASDzxcyNKO";
 
// Use openssl_encrypt() function to encrypt the data
$encryptionpassword = openssl_encrypt($password, $ciphering,
            $encryption_key, $options, $encryption_iv);
 echo $encryptionpassword ;

 $email = mysqli_real_escape_string($conn,$email);
     $encryptionpassword = mysqli_real_escape_string($conn,$encryptionpassword);




    $query = "UPDATE   users set

    firstName = '$firstName',
    lastName ='$lastName',
    email ='$email',
    phone ='$phone',
    password ='$encryptionpassword',
    address ='$address'
          where id =$userid ";

           $result = mysqli_query($conn, $query);
//echo  mysqli_error($conn);
if($result == 1) {
 $_SESSION['name'] = $firstName ." ".$lastName;


}

        return $result;

}  



public function updateUserimg($userid,$target_file)

{
 $imgpath = $this->imgpathpublic;
 $target_file  =  $imgpath.$target_file;
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   users set
    imagePath ='$target_file'
          where id =$userid ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);
if($result==1) {
    $_SESSION['img'] = $target_file;

}

        return $result;

}  


public function  updateUserpasswordDB($email,$password)

{
 
$conn=$this->connect();
    $conn->set_charset("UTF8");

 $ciphering = "AES-128-CTR";
 
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
 
// Non-NULL Initialization Vector for encryption
$encryption_iv = '9832157489234587';
// Store the decryption key
$encryption_key = "tesrbhfASDzxcyNKO";
 
// Use openssl_encrypt() function to encrypt the data
$encryptionpassword = openssl_encrypt($password, $ciphering,
            $encryption_key, $options, $encryption_iv);
 echo $encryptionpassword ;

 $email = mysqli_real_escape_string($conn,$email);
     $encryptionpassword = mysqli_real_escape_string($conn,$encryptionpassword);




    $query = "UPDATE   users set

    
    password ='$encryptionpassword' ,
    passwordReset   = null
    
          where email ='$email' ";

           $result = mysqli_query($conn, $query);
//echo  mysqli_error($conn);
 

        return $result;

} 




public function addPasswordReset($email,$passwordReset )

{
  
$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   users set
    passwordReset ='$passwordReset'
          where email ='$email' ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);
 

        return $result;

} 
 
  

public function toggleUserStatus($userid,$userStatus)
{

$conn=$this->connect();
    $conn->set_charset("UTF8");
    $query = "UPDATE   users set
    status ='$userStatus'
          where id =$userid ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}  


 public function  toggleCourseStatus($courseid,$courseStatus)

 {


$conn=$this->connect();
    $conn->set_charset("UTF8");

    $query = "UPDATE   courses set


             status ='$courseStatus'
          where id =$courseid ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

} 
public function togglecoursesappStatus($appid,$appStatus)

{


$conn=$this->connect();
    $conn->set_charset("UTF8");

    $query = "UPDATE   coursesapp set


             status ='$appStatus'
          where id =$appid ";

           $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;

}



 

public function getTeacherCourse($userid,$status,$classroom)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select * from courses where teachersId='$userid' and status = '$status'   and classroom ='$classroom' ORDER BY  id DESC  ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}







public function deleteadvertisementsComment($commentIdv )
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE FROM `advertisementscomments` WHERE   id='$commentIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
} 


public function deleteAssigmentComment($commentIdv)
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE FROM `assigmentcomment` WHERE   id='$commentIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}





public function deleteaalldvertisementsComment($advertisementIdv )
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE  FROM `advertisementscomments` WHERE   advertisementsId='$advertisementIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
} 



public function deletedvertisements($advertisementIdv )
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE  FROM `classroomadvertisements` WHERE   id='$advertisementIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
} 

public function deleteaallassaymentIComment($assaymentIdv )
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE  FROM `assigmentcomment` WHERE   assigmentId='$assaymentIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



 



public function deleteassayment($assaymentIdv )
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE  FROM `assigment` WHERE   id='$assaymentIdv' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}



 
public function deletePost($postId)

 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" DELETE  FROM `post` WHERE   id='$postId' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}
 public function checkemail($email)
 
{
  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select *  FROM `users` WHERE   email='$email' ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}




 public function checkEmailForUpdate($email,$userid )
 
{

  $conn=$this->connect();
    $conn->set_charset("UTF8");
$query =" select *  FROM `users` WHERE   email='$email' and id <> '$userid'   ";

    $result = mysqli_query($conn, $query);
echo  mysqli_error($conn);

        return $result;
}

    }

?>

