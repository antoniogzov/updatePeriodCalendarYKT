<?php
include_once dirname(__DIR__ . '', 1) . "/models/petitions.php";

session_start();
date_default_timezone_set('America/Mexico_City');

if (!empty($_POST['mod'])) {
    $function = $_POST['mod'];
    $function();
}


function updateStartDate()
{
    $start_date = $_POST['start_date'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET start_date = '$start_date'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la fecha de inicio del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la fecha de inicio del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}

function updateEndDate()
{
    $end_date = $_POST['end_date'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET end_date = '$end_date'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la fecha de fin del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la fecha de fin del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}
function updateClosingDate()
{
    $grade_closing_date = $_POST['grade_closing_date'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET grade_closing_date = '$grade_closing_date'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la fecha de cierre del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la fecha de cierre del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}
function updateViewStudentReports()
{
    $value = $_POST['view_student_reports'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET view_student_reports = '$value'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la propiedad del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la propiedad del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}
function updateAllowEditingGrades()
{
    $value = $_POST['allow_editing_grades'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET allow_editing_grades = '$value'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la propiedad del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la propiedad del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}

function updateAllowExtraExam()
{
    $value = $_POST['allow_extra_exam'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET allow_extra_exam = '$value'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la propiedad del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la propiedad del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}

function updateShowPaterns()
{
    $value = $_POST['show_paterns'];
    $id_period_calendar = $_POST['id_period_calendar'];


    $queries = new Queries;

    $stmt = "UPDATE iteach_grades_quantitatives.period_calendar 
    SET show_parents = '$value'
    WHERE id_period_calendar = $id_period_calendar";

    //$last_id = $getInfoRequest['last_id'];
    if ($queries->insertData($stmt)) {


        //--- --- ---//
        $data = array(
            'response' => true,
            'message'                => 'Se actualizó la propiedad del periodo correctamente'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'Ocurrió un error al intentar actualizar la propiedad del periodo'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}
