<?php
require_once('../../inc/lmsdb.php');
// populate Courses from database
$displayShow = '';
if (isset($_POST['show'])) {
    $lim = intVal(mysqli_real_escape_string($con, $_POST['lim']));
    $displayLecturerSQL = "SELECT * FROM lecturer LIMIT $lim";
    $displayLecturerResult = mysqli_query($con, $displayLecturerSQL);
    $displayShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lecturer Title</th>
                <th scope="col">Lecturer Name</th>
                <th scope="col">Lecturer Contact</th>
                <th scope="col">Lecturer Department</th>
                <th scope="col">Lecturer Image</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $displayLecturerCount = 1;
    if (mysqli_num_rows($displayLecturerResult) > 0) {
        while ($displayLecturerRow = mysqli_fetch_array($displayLecturerResult)) {
            $displayShow .= '
            <tr>
                <th scope="row">'.$displayLecturerCount++.'</th>
                <td>'.$displayLecturerRow['lecturertitle'].'</td>
                <td>'.$displayLecturerRow['lecturername'].'</td>
               
                <td>'.$displayLecturerRow['lecturercontact'].'</td>
                <td>'.$displayLecturerRow['lecturerdepartment'].'</td>
                <td><img src="assets/images/'.$displayLecturerRow['lecturerimage'].'" class="img-fluid" alt="Responsive image" width="40%" height="40%"></td>
                <td>'.$displayLecturerRow['registrationdate'].'</td>
                <td>
                <!--<i class="fa fa-edit fa-lg text-blue edit" id="'.$displayLecturerRow['lecturerid'].'" name="'.$displayLecturerRow['lecturerid'].'" value="'.$displayLecturerRow['lecturerid'].' "data-toggle="modal" data-target="#update"></i>-->

                <i class="fa fa-trash fa-lg text-red del" id="'.$displayLecturerRow['lecturerid'].'" name="'.$displayLecturerRow['lecturerid'].'" value="'.$displayLecturerRow['lecturerid'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $displayShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO LecturerS CREATED YET</marquee></td>
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
    $searchLecturerSQL = "SELECT * FROM lecturer WHERE lecturername LIKE '%$search%' ";
    $searchLecturerResult = mysqli_query($con, $searchLecturerSQL);
    $searchShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Lecturer Title</th>
            <th scope="col">Lecturer Name</th>
            <th scope="col">Lecturer Contact</th>
            <th scope="col">Lecturer Department</th>
            <th scope="col">Lecturer Image</th>
            <th scope="col">Registration date</th>
            <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $searchLecturerCount = 1;
    if (mysqli_num_rows($searchLecturerResult) > 0) {
        while ($searchLecturerRow = mysqli_fetch_array($searchLecturerResult)) {
            $searchShow .= '
            <tr>
            <th scope="row">'.$searchLecturerCount++.'</th>
            <td>'.$searchLecturerRow['lecturertitle'].'</td>
            <td>'.$searchLecturerRow['lecturername'].'</td>
           
            <td>'.$searchLecturerRow['lecturercontact'].'</td>
            <td>'.$searchLecturerRow['lecturerdepartment'].'</td>
            <td><img src="assets/images/'.$searchLecturerRow['lecturerimage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
            <td>'.$searchLecturerRow['registrationdate'].'</td>
            <td>
            <!--<i class="fa fa-edit fa-lg text-blue edit" id="'.$searchLecturerRow['lecturerid'].'" name="'.$searchLecturerRow['lecturerid'].'" value="'.$searchLecturerRow['lecturerid'].' "data-toggle="modal" data-target="#update"></i>-->

            <i class="fa fa-trash fa-lg text-red del" id="'.$searchLecturerRow['lecturerid'].'" name="'.$searchLecturerRow['lecturerid'].'" value="'.$searchLecturerRow['lecturerid'].'"></i>

            </td>
            </tr>
            ';
        }
    } else {
        $searchShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO LECTURER FOUND</marquee></td>
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
    $viewLimitLecturerSQL = "SELECT * FROM lecturer LIMIT $Viewlim";
    $viewLimitLecturerResult = mysqli_query($con, $viewLimitLecturerSQL);
    $viewLimitShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Lecturer Title</th>
            <th scope="col">Lecturer Name</th>
            <th scope="col">Lecturer Contact</th>
            <th scope="col">Lecturer Department</th>
            <th scope="col">Lecturer Image</th>
            <th scope="col">Registration date</th>
            <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $viewLimitLecturerCount = 1;
    if (mysqli_num_rows($viewLimitLecturerResult) > 0) {
        while ($viewLimitLecturerRow = mysqli_fetch_array($viewLimitLecturerResult)) {
            $viewLimitShow .= '
            <tr>
            <th scope="row">'.$viewLimitLecturerCount++.'</th>
            <td>'.$viewLimitLecturerRow['lecturertitle'].'</td>
            <td>'.$viewLimitLecturerRow['lecturername'].'</td>
           
            <td>'.$viewLimitLecturerRow['lecturercontact'].'</td>
            <td>'.$viewLimitLecturerRow['lecturerdepartment'].'</td>
            <td><img src="assets/images/'.$viewLimitLecturerRow['lecturerimage'].'" class="img-fluid" alt="Responsive image" width="40%"></td>
            <td>'.$viewLimitLecturerRow['registrationdate'].'</td>
            <td>
           <!-- <i class="fa fa-edit fa-lg text-blue edit" id="'.$viewLimitLecturerRow['lecturerid'].'" name="'.$viewLimitLecturerRow['lecturerid'].'" value="'.$viewLimitLecturerRow['lecturerid'].' "data-toggle="modal" data-target="#update"></i> -->

            <i class="fa fa-trash fa-lg text-red del" id="'.$viewLimitLecturerRow['lecturerid'].'" name="'.$viewLimitLecturerRow['lecturerid'].'" value="'.$viewLimitLecturerRow['lecturerid'].'"></i>

            </td>
            </tr>
            ';
        }
    } else {
        $viewLimitShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO LECTURER CREATED YET</marquee></td>
        </tr>
        ';
    }
    $viewLimitShow .= '
        </tbody>
    </table>';
    echo $viewLimitShow;
}


// -------------------Delete course
if(isset($_POST['deleteCourse'])){
    $delete_Lecturer =  mysqli_real_escape_string($con, $_POST['deleteCourse']);
    $deleteLecturerSQL = "DELETE FROM lecturer WHERE lecturerid = '$delete_Lecturer'";
    $deleteLecturerResult = mysqli_query($con, $deleteLecturerSQL);

    if($deleteLecturerResult){
         echo '
           LECTURER DELETED SUCCESSFULLY.
        ';
    }else{
        echo '
            FAILED TO DELETE A LECTURER TRY AGAIN.
        ';
    }
}
