<?php
require_once('../../inc/lmsdb.php');
// populate Courses from database
$displayShow = '';
if (isset($_POST['show'])) {
    $lim = intVal(mysqli_real_escape_string($con, $_POST['lim']));
    $displayUserSQL = "SELECT * FROM useraccount LIMIT $lim";
    $displayUserResult = mysqli_query($con, $displayUserSQL);
    $displayShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User name</th>
                <th scope="col">Full Name</th>
                <th scope="col">Occupation</th>
                <th scope="col">Password</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $displayUserCount = 1;
    if (mysqli_num_rows($displayUserResult) > 0) {
        while ($displayUserRow = mysqli_fetch_array($displayUserResult)) {
            $displayShow .= '
            <tr>
                <th scope="row">'.$displayUserCount++.'</th>
                <td>'.$displayUserRow['username'].'</td>
                <td>'.$displayUserRow['fullname'].'</td>
               
                <td>'.$displayUserRow['occupation'].'</td>
                <td>'.$displayUserRow['password'].'</td>
                
                <td>'.$displayUserRow['phone'].'</td>
                <td>'.$displayUserRow['email'].'</td>
                <td>'.$displayUserRow['registrationdate'].'</td>
                <td>
                <!--<i class="fa fa-edit fa-lg text-blue edit" id="'.$displayUserRow['username'].'" name="'.$displayUserRow['username'].'" value="'.$displayUserRow['username'].' "data-toggle="modal" data-target="#update"></i>-->

                <i class="fa fa-trash fa-lg text-red del" id="'.$displayUserRow['username'].'" name="'.$displayUserRow['username'].'" value="'.$displayUserRow['username'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $displayShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO UserS CREATED YET</marquee></td>
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
    $searchUserSQL = "SELECT * FROM useraccount WHERE username LIKE '%$search%' ";
    $searchUserResult = mysqli_query($con, $searchUserSQL);
    $searchShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
                <th scope="col">User name</th>
                <th scope="col">Full Name</th>
                <th scope="col">Occupation</th>
                <th scope="col">Password</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $searchUserCount = 1;
    if (mysqli_num_rows($searchUserResult) > 0) {
        while ($searchUserRow = mysqli_fetch_array($searchUserResult)) {
            $searchShow .= '
            <tr>
                <th scope="row">'.$searchUserCount++.'</th>
                <td>'.$searchUserRow['username'].'</td>
                <td>'.$searchUserRow['fullname'].'</td>
               
                <td>'.$searchUserRow['occupation'].'</td>
                <td>'.$searchUserRow['password'].'</td>
                
                <td>'.$searchUserRow['phone'].'</td>
                <td>'.$searchUserRow['email'].'</td>
                <td>'.$searchUserRow['registrationdate'].'</td>
                <td>
                <!--<i class="fa fa-edit fa-lg text-blue edit" id="'.$searchUserRow['username'].'" name="'.$searchUserRow['username'].'" value="'.$searchUserRow['username'].' "data-toggle="modal" data-target="#update"></i>-->

                <i class="fa fa-trash fa-lg text-red del" id="'.$searchUserRow['username'].'" name="'.$searchUserRow['username'].'" value="'.$searchUserRow['username'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $searchShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO User FOUND</marquee></td>
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
    $viewLimitUserSQL = "SELECT * FROM useraccount LIMIT $Viewlim";
    $viewLimitUserResult = mysqli_query($con, $viewLimitUserSQL);
    $viewLimitShow .= '
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User name</th>
                <th scope="col">Full Name</th>
                <th scope="col">Occupation</th>
                <th scope="col">Password</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Registration date</th>
                <th scope="col">Actions</th>
               
            </tr>
        </thead>
        <tbody>
    ';

    $viewLimitUserCount = 1;
    if (mysqli_num_rows($viewLimitUserResult) > 0) {
        while ($viewLimitUserRow = mysqli_fetch_array($viewLimitUserResult)) {
            $viewLimitShow .= '
            <tr>
                <th scope="row">'.$viewLimitUserCount++.'</th>
                <td>'.$viewLimitUserRow['username'].'</td>
                <td>'.$viewLimitUserRow['fullname'].'</td>
               
                <td>'.$viewLimitUserRow['occupation'].'</td>
                <td>'.$viewLimitUserRow['password'].'</td>
                
                <td>'.$viewLimitUserRow['phone'].'</td>
                <td>'.$viewLimitUserRow['email'].'</td>
                <td>'.$viewLimitUserRow['registrationdate'].'</td>
                <td>
                <!--<i class="fa fa-edit fa-lg text-blue edit" id="'.$viewLimitUserRow['username'].'" name="'.$viewLimitUserRow['username'].'" value="'.$viewLimitUserRow['username'].' "data-toggle="modal" data-target="#update"></i>-->

                <i class="fa fa-trash fa-lg text-red del" id="'.$viewLimitUserRow['username'].'" name="'.$viewLimitUserRow['username'].'" value="'.$viewLimitUserRow['username'].'"></i>

                </td>
            </tr>
            ';
        }
    } else {
        $viewLimitShow .= '
        <tr>
            <td colspan="8"><marquee>SORRY NO User CREATED YET</marquee></td>
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
    $delete_User =  mysqli_real_escape_string($con, $_POST['deleteCourse']);
    $deleteUserSQL = "DELETE FROM useraccount WHERE username = '$delete_User'";
    $deleteUserResult = mysqli_query($con, $deleteUserSQL);

    if($deleteUserResult){
         echo '
           USER DELETED SUCCESSFULLY.
        ';
    }else{
        echo '
            FAILED TO DELETE A USER TRY AGAIN.
        ';
    }
}
