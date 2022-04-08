<?php include_once 'templates/head.php'; ?>
<body>
<section>
    <div class="form">
        <h1>Заключение эндокринолога</h1>
        <div class="form__group">
            <label class="form__label">Дата</label>
            <?= $_POST['date']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">ФИО пациента</label>
            <?= $_POST['fio']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">Возраст</label>
            <?= $_POST['age']; ?>
        </div>
        <div class="diagnosis">
            <div class="form__group">
                <label class="form__label">Диагноз</label>
                <style>.form__group {
                        white-space: pre-line;
                    }</style>
                <?= $_POST['diagnosis']; ?>
            </div>
        </div>
    </div>
    <div class="recommendations">
        <div class="form__group">
            <label class="form__label"><b>Рекомендации</b>:</label>
            <style>.form__group {
                    white-space: pre-line;
                    margin-left: 15px;
                    margin-right: 15px;
                }</style>
            <?= $_POST['recommendations'];?>

        </div>
    </div>
</section>
<script>
    window.print();
</script>
</body>
</html>