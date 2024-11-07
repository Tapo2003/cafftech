<?php
    
require_once('../assets/dbconn.php');
extract($_POST);

// Sanitize and trim input data

$surName                    = trim($surname);
$otherNames                 = trim($othernames);
$department                 = trim($department);
$programmes                 = trim($programmes);
$course                     = trim($course);
$paymentInformation         = trim($paymentInformation);
$postalAddress              = trim($postaladdress);
$permanentHomeAddress       = trim($permanenthomeaddress);
$dateOfBirth                = trim($dob);
$gender                     = trim($gender);
$nationality                = trim($nationality);
$maritalStatus              = trim($maritalstatus);
$state_div                  = trim($state);
$lga_div                    = trim($lga);
$maidenName                 = trim($maidenname);
$noOfChildren               = trim($noofchildren);
$religion                   = trim($religion);
$parentSurname              = trim($parentsurname);
$parentOtherNames           = trim($parentothernames);
$address                    = trim($address);
$telephone                  = trim($telephone);
$relationshipToApplicant    = trim($relationshiptoapplicant);
$extraCurricularActivities  = trim($extracurricularactivities);
$specialApplicants          = trim($specialapplicant);
$academicHistory            = trim($academichistory);
$academicHistoryreason      = trim($academichistoryreason);
$osunlga                    = trim($osunlga);
$nameSignature              = trim($namesignature);
$attesterFullname           = trim($attesterfullname);
$attesterAddress            = trim($attesteraddress);
$attesterPosition           = trim($attesterposition);
$nameOfInstitution          = $nameofinstitution;           ///// 4 counts
$qualification              = $qualification;               ///// 4 counts
$from                       = $from;                       ///// 4 counts
$to                         = $to;                        ///// 4 counts
$nameOfExaminations         = $nameofexaminations;        ///// 3 counts
$dateOfExamination          = $dateofexamination;         ////// 3 counts
$centreNo                   = $centreno;                  ///// 3 counts
$examinationNo              = $examinationno;             ///// 3 counts
$subject                    = $subject;                  /////  30 counts
$grade                      = $grade;                   /////   30 counts
$uniqueId                   = uniqid();
$applicantUniqueId          = 'applicantId='.$uniqueId;


$subjectGradeLength         = count($subject); 

///The number of count for subject is 30 so i would be using it for grade
for ($i = 0; $i < $subjectGradeLength; $i++) {
    $x = $i + 1;
    $subjectParts[] = 'subject ' . $x . ' = ' . $subject[$i];
    $gradeParts[] = 'grade ' . $x . ' = ' . $grade[$i];
}


$subjects   = implode(' ~ ', $subjectParts);
$grades     = implode(' ~ ',$gradeParts);


$fromCount  = count($from);
///The number of count for From is 4 so i would be using it for name of institution, qualification and to
for($i = 0; $i < $fromCount; $i++){
    $x = $i + 1;
    $fromParts[]                 = 'from ' . $x . ' = ' . $from[$i];
    $toParts[]                   = 'to ' . $x . ' = ' . $to[$i];
    $nameOfInstitutionParts[]    = 'name of institution ' . $x . ' = ' . $nameofinstitution[$i];
    $qualificationParts[]        = 'qualification '    . $x . ' = ' . $qualification[$i];
}

$from               = implode(' ~ ', $fromParts);
$to                 = implode(' ~ ', $toParts);
$nameOfInstitution  = implode(' ~ ', $nameOfInstitutionParts);
$qualification      = implode(' ~ ', $qualificationParts);


$nameofexaminationsCount = count($nameofexaminations);
///The number of count for name of examination is 3 so i would be using it for name of institution, qualification and to
for($i = 0; $i < $nameofexaminationsCount; $i++){
    $x = $i + 1;
    $nameofexaminationsParts[] = 'name of examination ' . $x . ' = ' . $nameofexaminations[$i];
    $dateOfExaminationParts[]  = 'date of examination ' . $x . ' = ' . $dateOfExamination[$i];
    $centreNoParts[]           = 'center number ' . $x . ' = ' . $centreNo[$i];
    $examinationNoParts[]      = 'examination number ' . $x . ' = ' . $examinationNo[$i];
}   

$nameOfExaminations = implode(' ~ ', $nameofexaminationsParts);
$dateOfExamination  = implode(' ~ ', $dateOfExaminationParts);
$centreNo           = implode(' ~ ', $centreNoParts);
$examinationNo      = implode(' ~ ', $examinationNoParts);


$sql = "SELECT * FROM applicant";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result){
    if ($applicant_image_hidden_tag == 'T') {
        // Prepare and insert all the information into the database
        $sql = "INSERT INTO applicant(applicant_id,applicant_image_hidden_tag,applicant_surname,applicant_othernames,applicant_department,applicant_program,applicant_course,applicant_payment_information,applicant_postal_address,applicant_permanent_home_address,applicant_DOB,applicant_gender,applicant_nationality,applicant_marital_status,applicant_states,applicant_lgas,applicant_maiden_name,applicant_no_of_children,applicant_religion,applicant_parent_surname,applicant_parent_othernames,applicant_parent_address,applicant_parent_telephone,applicant_relationship_to_applicant,applicant_extra_curricular_activities,applicant_disability,applicant_academic_history,applicant_academic_history_reason,applicant_previous_name_of_institution,applicant_previous_qualification,applicant_period_from,applicant_period_to,applicant_name_examination,applicant_date_of_examination,applicant_centre_number,applicant_examination_number,applicant_subjects,applicant_grades,applicant_of_osun_lg,applicant_name_signature,applicant_attester_fullname,applicant_attester_address,applicant_attester_position_held,applicant_unique_id)
        VALUES(NULL,'$applicant_image_hidden_tag','$surName','$otherNames','$department','$programmes','$course','$paymentInformation','$postalAddress','$permanentHomeAddress','$dateOfBirth','$gender','$nationality','$maritalStatus','$state_div','$lga_div','$maidenName','$noOfChildren','$religion','$parentSurname','$parentOtherNames','$address','$telephone','$relationshipToApplicant','$extraCurricularActivities','$specialApplicants','$academicHistory','$academicHistoryreason','$nameOfInstitution','$qualification','$from','$to','$nameOfExaminations','$dateOfExamination','$centreNo','$examinationNo','$subjects','$grades','$osunlga','$nameSignature','$attesterFullname','$attesterAddress','$attesterPosition','$applicantUniqueId')";   
        $result = mysqli_query($conn,$sql);

        if($result == true){            
            $sql = "SELECT applicant_id FROM applicant WHERE applicant_unique_id = '$applicantUniqueId'";
            $result = mysqli_query($conn, $sql) or die(mysql_error());
            $row = mysqli_fetch_assoc($result);   
            
            $applicantId = $row['applicant_id'];
            
            $upload_dir = 'applicant_image';
        
            if(is_dir($upload_dir)){
                //Directory already exist
            }else{
                //create the directory
                mkdir($upload_dir);
            }

            $targetFile  = $upload_dir.'/'.$applicantId.'.jpg';    
                      
            if(file_exists($targetFile)){
                unlink($targetFile);//unlink php function deletes the file
            }

            if(move_uploaded_file($_FILES['applicantImage']['tmp_name'], $targetFile)){
                echo 2;

            }else{
                echo -2;
                
            }

        }else{
            echo -2;
            
        }
    }else{
        $sql = "INSERT INTO applicant(applicant_id,applicant_image_hidden_tag,applicant_surname,applicant_othernames,applicant_department,applicant_program,applicant_course,applicant_payment_information,applicant_postal_address,applicant_permanent_home_address,applicant_DOB,applicant_gender,applicant_nationality,applicant_marital_status,applicant_states,applicant_lgas,applicant_maiden_name,applicant_no_of_children,applicant_religion,applicant_parent_surname,applicant_parent_othernames,applicant_parent_address,applicant_parent_telephone,applicant_relationship_to_applicant,applicant_extra_curricular_activities,applicant_disability,applicant_academic_history,applicant_academic_history_reason,applicant_previous_name_of_institution,applicant_previous_qualification,applicant_period_from,applicant_period_to,applicant_name_examination,applicant_date_of_examination,applicant_centre_number,applicant_examination_number,applicant_subjects,applicant_grades,applicant_of_osun_lg,applicant_name_signature,applicant_attester_fullname,applicant_attester_address,applicant_attester_position_held,applicant_unique_id)
        VALUES(NULL,'$applicant_image_hidden_tag','$surName','$otherNames','$department','$programmes','$course','$paymentInformation','$postalAddress','$permanentHomeAddress','$dateOfBirth','$gender','$nationality','$maritalStatus','$state_div','$lga_div','$maidenName','$noOfChildren','$religion','$parentSurname','$parentOtherNames','$address','$telephone','$relationshipToApplicant','$extraCurricularActivities','$specialApplicants','$academicHistory','$academicHistoryreason','$nameOfInstitution','$qualification','$from','$to','$nameOfExaminations','$dateOfExamination','$centreNo','$examinationNo','$subjects','$grades','$osunlga','$nameSignature','$attesterFullname','$attesterAddress','$attesterPosition','$applicantUniqueId')";
        $result = mysqli_query($conn, $sql);  

        if($result == true){
            echo 2;
           
        }else{
           echo -2;
           
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }           
    }
}else{
    
    ///something occured
}

?>
