<?php

class Horarios
{
    public function getAllLevelCombinations()
    {
        include_once('php/models/petitions.php');
        $queries = new Queries;
        $sql_sites = "SELECT lvc.*, CONCAT(camp.campus_name, ' | ', acl.academic_level, ' | ', acar.name_academic_area)  AS level_combination,
        CASE 
        WHEN id_section = '1' THEN 'HOMBRES'
        WHEN id_section = '2' THEN 'MUJERES'
        WHEN id_section = '3' THEN 'MIXTO'
        END 
        AS seccion
        FROM school_control_ykt.level_combinations AS lvc
        INNER JOIN school_control_ykt.academic_areas AS acar ON lvc.id_academic_area = acar.id_academic_area
        INNER JOIN school_control_ykt.academic_levels AS acl ON lvc.id_academic_level = acl.id_academic_level
        INNER JOIN school_control_ykt.campus AS camp ON lvc.id_campus = camp.id_campus
        ORDER BY level_combination

        ";

        $getSites = $queries->getData($sql_sites);

        return ($getSites);
    }
   
    public function getPeriodsCalendarByLevelCombination($id_level_combination)
    {
        include_once('php/models/petitions.php');
        $queries = new Queries;
        $sql_sites = "SELECT DATE(start_date) AS start_date, DATE(end_date) AS end_date, DATE(grade_closing_date) AS grade_closing_date, view_student_reports, show_parents, no_period, id_period_calendar, allow_editing_grades, allow_extra_exam
        FROM iteach_grades_quantitatives.period_calendar AS percal WHERE id_level_combination = '$id_level_combination' ORDER BY no_period ASC
        ";
        $getSites = $queries->getData($sql_sites);

        return ($getSites);
    }
    
}
