<?php
require_once('../../inc/lmsdb.php');
// populate Students from database
$displayShow = '';
if (isset($_POST['show'])) {
    $lim = intVal(mysqli_real_escape_string($con, $_POST['lim']));
    $displayStudentSQL = "SELECT * FROM student LIMIT $lim";
    $displayStudentResult = mysqli_query($con, $displayStudentSQL);
    $displayShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Index Number</th>
                <th scope="col">Full Name</th>
               
                <th scope="col">Student Email</th>
                <th scope="col">Student Password</th>
                <th scope="col">Program of Study</th>
                <th scope="col">Student Level</th>
                <th scope="col">Student Image</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $displayStudentCount = 1;
    if (mysqli_num_rows($displayStudentResult) > 0) {
        while ($displayStudentRow = mysqli_fetch_array($displayStudentResult)) {
            $displayShow .= '
            <tr>
                <th scope="row">'.$displayStudentCount++.'</th>
                <td>'.$displayStudentRow['indexnumber'].'</td>
                <td>'.$displayStudentRow['fullname'].'</td>
               
                <td>'.$displayStudentRow['studentemail'].'</td>
                <td>'.$displayStudentRow['studentpassword'].'</td>

                <td>'.$displayStudentRow['programofstudy'].'</td>
                <td>'.$displayStudentRow['studentlevel'].'</td>
                
                <td><img src="../assets/images/'.$displayStudentRow['studentimage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
                
                <td>'.$displayStudentRow['registrationdate'].'</td>

                            
                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$displayStudentRow['indexnumber'].'" name="'.$displayStudentRow['indexnumber'].'" value="'.$displayStudentRow['indexnumber'].' "data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$displayStudentRow['indexnumber'].'" name="'.$displayStudentRow['indexnumber'].'" value="'.$displayStudentRow['indexnumber'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $displayShow .= '
        <tr>
            <td colspan="12"><marquee>SORRY NO STUDENT HAS REGISTERED YET</marquee></td>
        </tr>
        ';
    }
    $displayShow .= '
        </tbody>
    </table>';
    echo $displayShow;
}
// ----------------------------------------------SEARCH TROUGH THE DATABASE
$searchShow = '';
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $searchStudentSQL = "SELECT * FROM student WHERE indexnumber LIKE '%$search%' OR fullname LIKE '%$search%'";
    $searchStudentResult = mysqli_query($con, $searchStudentSQL);
    $searchShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Index Number</th>
            <th scope="col">Full Name</th>
           
            <th scope="col">Student Email</th>
            <th scope="col">Student Password</th>
            <th scope="col">Program of Study</th>
            <th scope="col">Student Level</th>
            <th scope="col">Student Image</th>
            <th scope="col">Registration Date</th>
            <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $searchStudentCount = 1;
    if (mysqli_num_rows($searchStudentResult) > 0) {
        while ($searchStudentRow = mysqli_fetch_array($searchStudentResult)) {
            $searchShow .= '
            <tr>
                <th scope="row">'.$searchStudentCount++.'</th>
                <td>'.$searchStudentRow['indexnumber'].'</td>
                <td>'.$searchStudentRow['fullname'].'</td>
               
                <td>'.$searchStudentRow['studentemail'].'</td>
                <td>'.$searchStudentRow['studentpassword'].'</td>

                <td>'.$searchStudentRow['programofstudy'].'</td>
                <td>'.$searchStudentRow['studentlevel'].'</td>
                
                <td><img src="../assets/images/'.$searchStudentRow['studentimage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
                
                <td>'.$searchStudentRow['registrationdate'].'</td>

                              
                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$searchStudentRow['indexnumber'].'" name="'.$searchStudentRow['indexnumber'].'" value="'.$searchStudentRow['indexnumber'].' "data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$searchStudentRow['indexnumber'].'" name="'.$searchStudentRow['indexnumber'].'" value="'.$searchStudentRow['indexnumber'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $searchShow .= '
        <tr>
            <td colspan="12"><marquee>SORRY NO STUDENT FOUND</marquee></td>
        </tr>
        ';
    }
    $searchShow .= '
        </tbody>
    </table>';
    echo $searchShow;
}
// ----------------------------------------------LIMIT VIEW
$viewLimitShow = '';
if (isset($_POST['Viewlim'])) {
    $Viewlim = intVal(mysqli_real_escape_string($con, $_POST['Viewlim']));
    $viewLimitStudentSQL = "SELECT * FROM student LIMIT $Viewlim";
    $viewLimitStudentResult = mysqli_query($con, $viewLimitStudentSQL);
    $viewLimitShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Index Number</th>
            <th scope="col">Full Name</th>
           
            <th scope="col">Student Email</th>
            <th scope="col">Student Password</th>
            <th scope="col">Program of Study</th>
            <th scope="col">Student Level</th>
            <th scope="col">Student Image</th>
            <th scope="col">Registration Date</th>
            <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $viewLimitStudentCount = 1;
    if (mysqli_num_rows($viewLimitStudentResult) > 0) {
        while ($viewLimitStudentRow = mysqli_fetch_array($viewLimitStudentResult)) {
            $viewLimitShow .= '
            <tr>
                <th scope="row">'.$viewLimitStudentCount++.'</th>
                <td>'.$viewLimitStudentRow['indexnumber'].'</td>
                <td>'.$viewLimitStudentRow['fullname'].'</td>
               
                <td>'.$viewLimitStudentRow['studentemail'].'</td>
                <td>'.$viewLimitStudentRow['studentpassword'].'</td>

                <td>'.$viewLimitStudentRow['programofstudy'].'</td>
                <td>'.$viewLimitStudentRow['studentlevel'].'</td>
                
                <td><img src="../assets/images/'.$viewLimitStudentRow['studentimage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
             
                <td>'.$viewLimitStudentRow['registrationdate'].'</td>

                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$viewLimitStudentRow['indexnumber'].'" name="'.$viewLimitStudentRow['indexnumber'].'" value="'.$viewLimitStudentRow['indexnumber'].' "data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$viewLimitStudentRow['indexnumber'].'" name="'.$viewLimitStudentRow['indexnumber'].'" value="'.$viewLimitStudentRow['indexnumber'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $viewLimitShow .= '
        <tr>
            <td colspan="12"><marquee>SORRY NO STUDENT HAS REGISTERED YET</marquee></td>
        </tr>
        ';
    }
    $viewLimitShow .= '
        </tbody>
    </table>';
    echo $viewLimitShow;
}
// ====================================| SET UPDATE FIELDS
$updateArray = array();
if (isset($_POST['studentIndex'])) {
       
        $Student_index = mysqli_real_escape_string($con, $_POST['studentIndex']);
        $StudentcodeStudentSQL = "SELECT * FROM student WHERE indexnumber = '$Student_index'";
        
        $StudentcodeStudentResult = mysqli_query($con, $StudentcodeStudentSQL);
       
        while ($StudentcodeStudentRow = mysqli_fetch_array($StudentcodeStudentResult)) {
            $updateArray['stdindex'] = $StudentcodeStudentRow['indexnumber'];
            $updateArray['updatelevel'] = $StudentcodeStudentRow['studentlevel'];
        }
        echo json_encode($updateArray);
 
}

// =========================| Status
if(isset($_POST['save'])){
 
    $studentindexNumber = mysqli_real_escape_string($con, $_POST['updateSindexnumber']);
    $studentLevel = mysqli_real_escape_string($con, $_POST['studentLevel']);

    $statusSQL = "UPDATE student SET studentlevel = '$studentLevel' WHERE indexnumber = '$studentindexNumber'";

    $statusResult = mysqli_query($con, $statusSQL);
    if($statusResult){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>'.$studentindexNumber.'</strong>\'s  Records have been Updated Successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ';
       
    }else{
        
        echo '
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>'.$studentindexNumber.'</strong>\'s  Failed to update Try again later'.mysqli_error($con).'.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ';
       
    }
}

// -------------------Delete Student
if(isset($_POST['deleteStudent'])){
    $delete_Student =  mysqli_real_escape_string($con, $_POST['deleteStudent']);
    $deleteStudentSQL = "DELETE FROM student WHERE indexnumber = '$delete_Student'";
    $deleteStudentResult = mysqli_query($con, $deleteStudentSQL);

    if($deleteStudentResult){
         echo '
           STUDENT DELETED SUCCESSFULLY.
        ';
    }else{
        echo '
            FAILED TO DELETE THIS STUDENT TRY AGAIN.
        ';
    }
}
?>

        
    