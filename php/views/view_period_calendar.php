<br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Calendarios de Periodo para la combinación:

                    <?php foreach ($getAllLevelCombinations as $level_combination) : ?>
                        <?php if (($_GET['id_level_combination']) == $level_combination->id_level_combination) : ?>
                            <?= mb_strtoupper($level_combination->level_combination) ?> | <?= mb_strtoupper($level_combination->seccion) ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </h5>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">N° Periodo</th>
                                    <th scope="col">ID P.C.</th>
                                    <th scope="col">F. Inicio</th>
                                    <th scope="col">F. Cierre</th>
                                    <th scope="col">grade_closing_date</th>
                                    <th scope="col">view_student_reports</th>
                                    <th scope="col">allow_editing_grades</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getPeriodsCalendarByLevelCombination as $periods_calendar) : ?>
                                    <tr>
                                        <th scope="row"><?= $periods_calendar->no_period ?></th>
                                        <td><?= $periods_calendar->id_period_calendar ?></td>
                                        <td id="td_PCsD<?= $periods_calendar->id_period_calendar ?>" data-id-period-calendar="<?= $periods_calendar->id_period_calendar ?>" class="updateStartDate" contenteditable="true"><?= $periods_calendar->start_date ?></td>
                                        <td id="td_PCeD<?= $periods_calendar->id_period_calendar ?>" data-id-period-calendar="<?= $periods_calendar->id_period_calendar ?>" class="updateEndDate" contenteditable="true"><?= $periods_calendar->end_date ?></td>
                                        <td id="td_PCcD<?= $periods_calendar->id_period_calendar ?>" data-id-period-calendar="<?= $periods_calendar->id_period_calendar ?>" class="updateClosingDate" contenteditable="true"><?= $periods_calendar->grade_closing_date ?></td>
                                        <td>
                                            <?php
                                            $checked_view_student_reports = 'checked';
                                            if ($periods_calendar->view_student_reports == 0) {
                                                $checked_view_student_reports = '';
                                            } ?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input view_student_reports" type="checkbox"  id="<?= $periods_calendar->id_period_calendar ?>" <?= $checked_view_student_reports ?>>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                            </div>
                                        </td>

                                        <td>
                                            <?php
                                            $checked_allow_editing_grades = 'checked';
                                            if ($periods_calendar->allow_editing_grades == 0) {
                                                $checked_allow_editing_grades = '';
                                            } ?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input allow_editing_grades" type="checkbox"  id="<?= $periods_calendar->id_period_calendar ?>" <?= $checked_allow_editing_grades ?>>
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>