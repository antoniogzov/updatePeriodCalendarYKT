<?php
include_once('php/models/horarios/horarios_model.php');

$horarios = new Horarios();


$getAllLevelCombinations = $horarios->getAllLevelCombinations();
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Opciones</h5>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="exampleFormControlInput1" class="form-label">Seleccione una combinación de nivel </label>
                        <select class="form-select" id="id_level_combination" aria-label="Default select example">
                            <option selected disabled>Selecione una opción *</option>
                            <?php foreach ($getAllLevelCombinations as $level_combination) : ?>
                                <?php if (isset($_GET['id_level_combination'])) : ?>
                                    <?php if (($_GET['id_level_combination']) == $level_combination->id_level_combination) : ?>
                                        <option selected value="<?= $level_combination->id_level_combination ?>"><?= mb_strtoupper($level_combination->level_combination) ?> | <?= mb_strtoupper($level_combination->seccion) ?></option>
                                    <?php else : ?>
                                        <option value="<?= $level_combination->id_level_combination ?>"><?= mb_strtoupper($level_combination->level_combination) ?> | <?= mb_strtoupper($level_combination->seccion) ?></option>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <option value="<?= $level_combination->id_level_combination ?>"><?= mb_strtoupper($level_combination->level_combination) ?> | <?= mb_strtoupper($level_combination->seccion) ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_GET['id_level_combination'])){
    $getPeriodsCalendarByLevelCombination = $horarios->getPeriodsCalendarByLevelCombination($_GET['id_level_combination']);
    include_once('php/views/view_period_calendar.php');
}


?>

<script src="js\level_combinations.js"></script>

<script>
    var tfConfig = {
        rows_counter: true,
        paging: {
            results_per_page: ['Records: ', [10, 25, 50, 100]]
        },
        btn_reset: {
            text: 'Limpiar'
        },
        status_bar: true,
        col_0: 'input',
        col_1: 'input',
        col_2: 'input',
        col_3: 'select',
        col_4: 'none',
    };
    var tf = new TableFilter((document.querySelector('#tablaHorarios')), tfConfig);
    tf.init();

    $('#tablaHorarios').DataTable({
        paging: false,
        ordering: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    });
</script>