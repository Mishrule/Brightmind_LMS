<?php
require_once('../../inc/lmsdb.php');
// populate Courses from database
$displayShow = '';
if (isset($_POST['show'])) {
    $lim = intVal(mysqli_real_escape_string($con, $_POST['lim']));
    $displayCourseSQL = "SELECT * FROM courses LIMIT $lim";
    $displayCourseResult = mysqli_query($con, $displayCourseSQL);
    $displayShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
               
                <th scope="col">Credit Hours</th>
                <th scope="col">course Level</th>
                <th scope="col">Course Status</th>
                <th scope="col">Course Image</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $displayCourseCount = 1;
    if (mysqli_num_rows($displayCourseResult) > 0) {
        while ($displayCourseRow = mysqli_fetch_array($displayCourseResult)) {
            $displayShow .= '
            <tr>
                <th scope="row">'.$displayCourseCount++.'</th>
                <td>'.$displayCourseRow['coursecode'].'</td>
                <td>'.$displayCourseRow['coursetitle'].'</td>
               
                <td>'.$displayCourseRow['credithours'].'</td>
                <td>'.$displayCourseRow['courselevel'].'</td>
               <td><span class="badge badge-primary">'.$displayCourseRow['coursestatus'].'</span></td>
                <td><img src="assets/images/'.$displayCourseRow['courseImage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
                <td>'.$displayCourseRow['registrationdate'].'</td>
                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$displayCourseRow['coursecode'].'" name="'.$displayCourseRow['coursecode'].'" value="'.$displayCourseRow['coursecode'].' "data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$displayCourseRow['coursecode'].'" name="'.$displayCourseRow['coursecode'].'" value="'.$displayCourseRow['coursecode'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $displayShow .= '
        <tr>
            <td colspan="10"><marquee>SORRY NO COURSES CREATED YET</marquee></td>
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
    $searchCourseSQL = "SELECT * FROM courses WHERE coursecode LIKE '%$search%' OR coursetitle LIKE '%$search%'";
    $searchCourseResult = mysqli_query($con, $searchCourseSQL);
    $searchShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
               
                <th scope="col">Credit Hours</th>
                <th scope="col">course Level</th>
                <th scope="col">Course Status</th>
                <th scope="col">Course Image</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $searchCourseCount = 1;
    if (mysqli_num_rows($searchCourseResult) > 0) {
        while ($searchCourseRow = mysqli_fetch_array($searchCourseResult)) {
            $searchShow .= '
            <tr>
                <th scope="row">'.$searchCourseCount++.'</th>
                <td>'.$searchCourseRow['coursecode'].'</td>
                <td>'.$searchCourseRow['coursetitle'].'</td>
               
                <td>'.$searchCourseRow['credithours'].'</td>
                <td>'.$searchCourseRow['courselevel'].'</td>
                <td><span class="badge badge-primary">'.$searchCourseRow['coursestatus'].'</span></td>
                <td><img src="assets/images/'.$searchCourseRow['courseImage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
                <td>'.$searchCourseRow['registrationdate'].'</td>
                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$searchCourseRow['coursecode'].'" name="'.$searchCourseRow['coursecode'].'" value="'.$searchCourseRow['coursecode'].'" data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$searchCourseRow['coursecode'].'" name="'.$searchCourseRow['coursecode'].'" value="'.$searchCourseRow['coursecode'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $searchShow .= '
        <tr>
            <td colspan="10"><marquee>SORRY NO COURSE FOUND</marquee></td>
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
    $viewLimitCourseSQL = "SELECT * FROM courses LIMIT $Viewlim";
    $viewLimitCourseResult = mysqli_query($con, $viewLimitCourseSQL);
    $viewLimitShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
               
                <th scope="col">Credit Hours</th>
                <th scope="col">course Level</th>
                <th scope="col">Course Status</th>
                <th scope="col">Course Image</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $viewLimitCourseCount = 1;
    if (mysqli_num_rows($viewLimitCourseResult) > 0) {
        while ($viewLimitCourseRow = mysqli_fetch_array($viewLimitCourseResult)) {
            $viewLimitShow .= '
            <tr>
                <th scope="row">'.$viewLimitCourseCount++.'</th>
                <td>'.$viewLimitCourseRow['coursecode'].'</td>
                <td>'.$viewLimitCourseRow['coursetitle'].'</td>
               
                <td>'.$viewLimitCourseRow['credithours'].'</td>
                <td>'.$viewLimitCourseRow['courselevel'].'</td>
                <td><span class="badge badge-primary">'.$viewLimitCourseRow['coursestatus'].'</span></td>
                <td><img src="assets/images/'.$viewLimitCourseRow['courseImage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
                <td>'.$viewLimitCourseRow['registrationdate'].'</td>
                <td>
                <i class="fa fa-edit fa-lg text-blue edit" id="'.$viewLimitCourseRow['coursecode'].'" name="'.$viewLimitCourseRow['coursecode'].'" value="'.$viewLimitCourseRow['coursecode'].'" data-toggle="modal" data-target="#update"></i>

                <i class="fa fa-trash fa-lg text-red del" id="'.$viewLimitCourseRow['coursecode'].'" name="'.$viewLimitCourseRow['coursecode'].'" value="'.$viewLimitCourseRow['coursecode'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $viewLimitShow .= '
        <tr>
            <td colspan="10"><marquee>SORRY NO COURSES CREATED YET</marquee></td>
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
if (isset($_POST['courseid'])) {
       
        $course_code = mysqli_real_escape_string($con, $_POST['courseid']);
        $coursecodeCourseSQL = "SELECT * FROM courses WHERE coursecode = '$course_code'";
        
        $coursecodeCourseResult = mysqli_query($con, $coursecodeCourseSQL);
       
        while ($coursecodeCourseRow = mysqli_fetch_array($coursecodeCourseResult)) {
            $updateArray['coursee_code'] = $coursecodeCourseRow['coursecode'];
            $updateArray['updateStatus'] = $coursecodeCourseRow['coursestatus'];
        }
        echo json_encode($updateArray);
 
}

// =========================| Status
if(isset($_POST['save'])){
 
    $updatecoursecode = mysqli_real_escape_string($con, $_POST['updatecoursecode']);
    $change_Status = mysqli_real_escape_string($con, $_POST['change_Status']);

    $statusSQL = "UPDATE courses SET coursestatus = '$change_Status' WHERE coursecode = '$updatecoursecode'";

    $statusResult = mysqli_query($con, $statusSQL);
    if($statusResult){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>'.$updatecoursecode.'</strong>\'s  Records have been Updated Successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ';
       
    }else{
        
        echo '
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>'.$updatecoursecode.'</strong>\'s  Failed to update Try again later'.mysqli_error($con).'.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ';
       
    }
}

// -------------------Delete course
if(isset($_POST['deleteCourse'])){
    $delete_course =  mysqli_real_escape_string($con, $_POST['deleteCourse']);
    $deletecourseSQL = "DELETE FROM courses WHERE coursecode = '$delete_course'";
    $deletecourseResult = mysqli_query($con, $deletecourseSQL);

    if($deletecourseResult){
         echo '
           COURSE DELETED SUCCESSFULLY.
        ';
    }else{
        echo '
            FAILED TO DELETE A COUSE TRY AGAIN.
        ';
    }
}
?>

        
    