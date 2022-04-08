<?php include_once 'templates/head.php'; ?>
<body>
<section>
    <div class="form">
        <style> .form__group {
                margin: -5px;
                padding: 0;
                box-sizing: border-box;
            }
        </style>
        <h1>Осмотр эндокринолога</h1>
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
        <div class="form__group">
            <label class="form__label">Жалобы</label>
            <?= $_POST['complains']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">Анамнез заболевания </label>
            <?= $_POST['anamnesis']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">Семейный анамнез </label>
            <?= $_POST['family']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">Сопутствующие заболевания</label>
            <?= $_POST['illness']; ?>
        </div>
        <div class="form__group">
            <label class="form__label">Получает препараты</label>
            <?= $_POST['tablets']; ?>
        </div>
        <div class="objective">
            <b>Объективные данные:</b> состояние
            <?= $selectOption = $_POST['taskOption']; ?>
            <style>.objective {
                    margin-bottom: 15px
                }</style>
        </div>
        <div class="skin">
            <span>Кожа и слизистые:</span>
            <?= $selectOption = $_POST['optionSet']; ?><span>,</span>
            <?= $selectOption = $_POST['optionHumidity']; ?><span>,</span>
            <?= $selectOption = $_POST['optionRash']; ?>
        </div>
        <div class="form__group">
            <?= $_POST['field']; ?>
            <style> .skin {
                    margin-bottom: -20px;
                }</style>
        </div>
        <div class="thyroid">
            <span>Щитовидная железа</span>
            <?= $selectOption = $_POST['thyrSet']; ?><span>,</span>
            <?= $selectOption = $_POST['thyrRet']; ?><span>,</span>
            <?= $selectOption = $_POST['thyrPet']; ?><span>,</span>
            <?= $selectOption = $_POST['thyrFet']; ?><span>,</span>
            <?= $selectOption = $_POST['thyrСet']; ?><span>,</span>
            <span>узловые образования</span>
            <div class="text_form">
                <div class="form__group">
                    <?= $_POST['yzel']; ?>
                    <style> .text_form {
                            margin-top: -20px;
                        }</style>
                </div>
            </div>
        </div>
        <div class="lymphatic">
            <span>Лимфатические узлы</span>
            <?= $selectOption = $_POST['lymphaTiс']; ?>
            <?= $selectOption = $_POST['palpPit']; ?>
            <span>,величиной:</span>
        </div>
        <div class="form_lymphatic">
            <div class="form__group">
                <?= $_POST['lymph']; ?>
                <style> .form_lymphatic {
                        margin-top: -20px;
                    }</style>
            </div>
            <?= $selectOption = $_POST['lymphTuk']; ?>
            <span>,</span>
            <?= $selectOption = $_POST['lymphKuk']; ?>
            <span>,</span>
            <?= $selectOption = $_POST['lymphJuk']; ?>
            <span>.</span>
        </div>
        <div class="temp">
            <div class="form__group">
                <label class="form__temp">Глазные симптомы</label>
                <?= $_POST['eyes']; ?>
            </div>
            <div class="mary">
                <div class="form__group">
                    <label class="form__temp">Симптом Мари</label>
                    <?= $_POST['mary']; ?>

                </div>
            </div>
            <div class="breath">
                <span>Дыхание</span>
                <?= $selectOption = $_POST['breath']; ?>
                <span>.</span>
                <?= $selectOption = $_POST['brean']; ?>

                <?= $_POST['wheezing']; ?>

            </div>
            <div class="heart">
                <span>Тоны сердца</span>
                <?= $selectOption = $_POST['heart']; ?>
                <span>,</span>
                <?= $selectOption = $_POST['heartRit']; ?>
            </div>
            <div class="ad">
                <div class="form__group">
                    <label class="form__temp">AD мм рт.ст.</label>
                    <?= $_POST['ad']; ?>
                </div>
            </div>
            <div class="swelling">
                <div class="form__group">
                    <label class="form__temp">Отеки</label>
                    <?= $_POST['swelling']; ?>
                </div>
            </div>
            <div class="chair">
                <div class="form__group">
                    <label class="form__temp">Стул</label>
                    <?= $_POST['chair']; ?>
                </div>
            </div>
            <div class="urination">
                <div class="form__group">
                    <label class="form__temp">Мочеиспускание</label>
                    <?= $_POST['urination']; ?>
                </div>
            </div>
            <div class="form__calculator">
                <div class="form__calculator_content">
                    <div class="form__calculator__body">
                        <div class="form__calculator__result" style="display: block;"><b>Индекс массы тела: </b> <span
                                    class="form__calculator__value"><?= $_POST['wh']; ?></span></div>
                    </div>
                </div>
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


</section>
<script>
    window.print();
</script>
</body>
</html>