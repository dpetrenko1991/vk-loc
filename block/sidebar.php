<?php
 echo '<div class="side_bar">
                <div class="block">
                    <div class="errors">';
                    if (isset($errors) && !empty($errors)) {
                        foreach ($errors as $err) {
                            echo '<div>' . $err . '</div>';
                        }
                    }
                    echo '</div>
                    <form action="" method="post">
                        <h2>Регистрация</h2>
                        <div class="mail">
                            <input type="text" class="text" name="data[mail]">
                                <h3>Эмэйл</h3>
                        </div>
                        <div class="login">
                            <input type="text" class="text_1" name="data[login]">
                                <h3>Логин</h3>
                        </div>
                        <div class="password">
                            <input type="password" class="text" name="data[password]">
                                <h3>Пароль</h3>
                        </div>
                        <div class="date_of_Birth">
                            <span>День: </span><input type="text" name="data[day]">
                            <span> Месяц: </span><select name="data[month]">
                                <option>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                            <span> Год: </span><select name="data[year]">
                                <option>Год</option>';

                                    $start_year = 1930;
                                    $end_year = date('Y');
                                    
                                    while ($start_year <= $end_year) {
                                        echo '<option value="' . $start_year . '">' . $start_year . '</option>';
                                        ++$start_year;
                                    }
                                 
                            echo '</select>
                        </div>
                        <input type="submit" value="Зарегистрироваться">
                    </form>
                </div>
            </div>';