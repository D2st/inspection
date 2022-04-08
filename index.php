<?php include_once 'templates/head.php'; ?>
<body>
<section>
    <div class="form">
        <h1>Осмотр эндокринолога
        </h1>
        <form method="post" action="process.php">
            <div class="form__group">
                <label class="form__label">Дата</label>
                <input class="form__control" type="date" name="date" placeholder="Выберите дату" required>

            </div>


            <div class="form__group">
                <label class="form__label">ФИО пациента</label>
                <input class="form__control" type="text" name="fio" placeholder="Введите ФИО" required>
            </div>
            <div class="form__group">
                <label class="form__label">Возраст</label>
                <input class="form__control" type="text" name="age" placeholder="Введите возраст" required>
            </div>
            <div class="form__group">
                <label class="form__label">Жалобы</label>
                <textarea class="form__control text-field" name="complains" placeholder="Введите жалобы"
                          required></textarea>
            </div>
            <div class="form__group">
                <label class="form__label">Анамнез заболевания</label>
                <textarea class="form__control text-field" name="anamnesis" placeholder="Введите анамнез"
                          required></textarea>
            </div>
            <div class="form__group">
                <label class="form__label">Семейный анамнез</label>
                <textarea class="form__control text-field" name="family" placeholder="Семейный анамнез"
                          required></textarea>
            </div>
            <div class="form__group">
                <label class="form__label">Сопутствующие заболевания</label>
                <textarea class="form__control text-field" name="illness" placeholder="Сопутствующие заболевания"
                          required></textarea>
            </div>
            <div class="form__group">
                <label class="form__label">Получает препараты</label>
                <textarea class="form__control text-field" name="tablets" placeholder="Получает препараты"
                          required></textarea>
            </div>
            <div class="objective">
                <b>Объективные данные:</b> состояние <select name="taskOption" id="taskOption" required>
                    <option value="удовлетворительное">удовлетворительное</option>
                    <option value="средней тяжести">средней тяжести</option>
                </select>
            </div>
            <div class="skin">
                <span>Кожа и слизистые:</span>
                <select name="optionSet" id="optionSet">
                    <option value="физиологической окраски">физиологической окраски</option>
                    <option value="бледные">бледные</option>
                    <option value="желтушные">желтушные</option>
                </select>
                <span>,</span>
                <select name="optionHumidity" id="optionHumidity">
                    <option value="нормальной влажности">нормальной влажности</option>
                    <option value="повышенной">повышенной</option>
                    <option value="сухие">сухие</option>
                </select>
                <span>,</span>
                <select name="optionRash" id="optionRash">
                    <option value="чистые">чистые</option>
                    <option value="сыпь">сыпь</option>
                </select>
            </div>
            <div class="form__group">
                <textarea class="form__control text-field" name="field" placeholder="Поле ввода" required></textarea>
            </div>
            <div class="thyroid">
                <span>Щитовидная железа</span>
                <select name="thyrSet" id="thyrSet">
                    <option value="нормального размера">нормального размера</option>
                    <option value="увеличина">увеличина</option>
                </select>
                <span>,</span>
                <select name="thyrRet" id="thyrRet">
                    <option value="мягко-эластичная">мягко-эластичная</option>
                    <option value="плотная">плотная</option>
                </select>
                <span>,</span>
                <select name="thyrPet" id="thyrPet">
                    <option value="безболезненная">безболезненная</option>
                    <option value="болезненная">болезненная</option>
                </select>
                <span>,</span>
                <select name="thyrFet" id="thyrFet">
                    <option value="однородная">однородная</option>
                    <option value="неоднародная">неоднородная</option>
                </select>
                <span>,</span>
                <select name="thyrСet" id="thyrСet">
                    <option value="подвижная">подвижная</option>
                    <option value="спаяная с окружающей тканью">спаяная с окружающей тканью</option>
                </select>
                <span>,</span>
                <span>узловые образования</span>
                <div class="form__group">
                    <textarea class="form__control text-field" name="yzel" placeholder="Поле ввода" required></textarea>
                </div>
            </div>
            <div class="lymphatic">
                <span>Лимфатические узлы</span>
                <select name="lymphaTiс" id="lymphaTiс">
                    <option value="затылочные">затылочные</option>
                    <option value="подчелюстные">подчелюстные</option>
                    <option value="шейные">шейные</option>
                    <option value="надключичные">надключичные</option>
                    <option value="подключичные">подключичные</option>
                    <option value=""></option>

                </select>
                <select name="palpPit" id="palpPit">
                    <option value="не пальпируются">не пальпируются</option>
                    <option value="пальпируются">пальпируются</option>

                </select>
                <span>,величиной:</span>
            </div>
            <div class="form_lymphatic">
                <div class="form__group">
                    <textarea class="form__control text-field" name="lymph" placeholder="Поле ввода"
                              required></textarea>
                </div>
                <select name="lymphTuk" id="lymphTuk">
                    <option value="плотные">плотные</option>
                    <option value="твердые">твердые</option>
                    <option value="мягкие">мягкие</option>
                </select>
                <span>,</span>
                <select name="lymphKuk" id="lymphKuk">
                    <option value="однородные">однородные</option>
                    <option value="неоднородные">неоднородные</option>
                </select>
                <span>,</span>
                <select name="lymphJuk" id="lymphJuk">
                    <option value="безболезненные">безболезненные</option>
                    <option value="болезненные">болезненные</option>
                </select>
                <span>.</span>
            </div>
            <div class="temp">
                <div class="form__group">
                    <label class="form__temp">Глазные симптомы</label>
                    <textarea class="form__control text-field" name="eyes" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="mary">
                <div class="form__group">
                    <label class="form__temp">Симптом Мари</label>
                    <textarea class="form__control text-field" name="mary" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="breath">
                <span>Дыхание</span>
                <select name="breath" id="theBreath">
                    <option value="везикулярное">везикулярное</option>
                    <option value="ослабленное">ослабленное</option>
                    <option value="жесткое">жесткое</option>
                </select>
                <span>.</span>
                <select name="bren" id="theBrean">
                    <option value=" Хрипов нет">Хрипов нет</option>
                    <option value="Хрипы есть">Хрипы есть</option>
                </select>
                <div class="form__group">
                    <textarea class="form__control text-field" name="wheezing" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="heart">
                <span>Тоны сердца</span>
                <select name="heart" id="theHeart">
                    <option value="ясные">ясные</option>
                    <option value="приглушены">приглушены</option>
                </select>
                <span>,</span>
                <select name="heartRit" id="ritHeart">
                    <option value="ритмичные">ритмичные</option>
                    <option value="аритмичные">аритмичные</option>
                </select>
            </div>
            <div class="ad">
                <div class="form__group">
                    <label class="form__temp">AD мм рт.ст.</label>
                    <textarea class="form__control text-field" name="ad" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="swelling">
                <div class="form__group">
                    <label class="form__temp">Отеки</label>
                    <textarea class="form__control text-field" name="swelling" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="chair">
                <div class="form__group">
                    <label class="form__temp">Стул</label>
                    <textarea class="form__control text-field" name="chair" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="urination">
                <div class="form__group">
                    <label class="form__temp">Мочеиспускание</label>
                    <textarea class="form__control text-field" name="urination" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="form__calculator">
                <div class="form__calculator_content">
                    <div class="form__calculator__heading">Калькулятор индекса массы тела</div>
                    <div class="form__calculator__body">
                        <div class="form__calculator__body__wh">
                            <div class="form__calculator__height">
                                <input type="text" name="height" placeholder="Рост" required>
                            </div>
                            <div class="form__calculator__weight">
                                <input type="text" name="weight" placeholder="Вес" required>
                            </div>
                            <input type="hidden" name="wh" value="">
                        </div>
                        <button onclick="calculateWH()" type="button">Расчитать</button>
                        <div class="form__calculator__result"><b>Результат: </b> <span
                                    class="form__calculator__value"></span></div>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <label class="form__label">Диагноз</label>
                <style>.form__control {
                        white-space: pre-line;
                    }</style>
                <textarea class="form__control text-field" name="diagnosis" placeholder="Поле ввода"
                          required></textarea>
            </div>
            <div class="rec">
                <div class="form__group">
                    <label class="form__label">Рекомендации:</label>
                    <style>
                        .rec .form__group {
                            margin-bottom: 30px;
                        }
                    </style>
                    <textarea class="form__control text-field" name="recommendations" placeholder="Поле ввода"
                              required></textarea>
                </div>
            </div>
            <div class="form__action">
                <button type="submit" name="print_for" value="patient">Печать для пациента</button>
                <button type="submit" name="print_for" value="doctor">Печать для доктора</button>
                <div><a href="/" onclick="return confirm('Вы действительно хотите очистить форму?')">Очистить форму</a>
                </div>
            </div>

        </form>

    </div>
</section>
<section class="frame">
    <div class="mace">
        <a href="zaklSd.html" target="_blank" class="first">Закл. эндо СД</a>
        <a href="zaklGsd.html" target="_blank" class="second">Закл. эндо ГСД</a>


    </div>
</section>

</body>
</html>

