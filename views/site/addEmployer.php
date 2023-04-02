<div>
    <h1>Добавление сотрудника в базу</h1>
    <form method="post">
        <p>Введите фамилию сотрудника</p>
        <label>
            <input class="field" type="text" name="surname">
        </label>
        <p>Введите имя сотрудника</p>
        <label>
            <input class="field" type="text" name="name">
        </label>
        <p>Введите отчество сотрудника</p>
        <label>
            <input class="field" type="text" name="patronymic	">
        </label>
        <p>Введите адрес прописки сотрудника</p>
        <label>
            <input class="field" type="text" name="address">
        </label>
        <p>Выберите пол сотрудника</p>
        <label>
            <input type="checkbox" name="gender" value="мужской">мужской
            <input type="checkbox" name="gender" value="женский">женский
        </label>
        <p>Выберите дату рождения сотрудника</p>
        <label>
            <input class="field" type="date" name="birthday">
        </label>
        <p>Выберите должность сотрудника</p>
        <label>
            <select class="field" name="job_title">
                <option></option>
            </select>
        </label>
        <p>Выберите подразделение сотрудника</p>
        <label>
            <select class="field" name="subdivision">
                <option></option>
            </select>
        </label>
        <input class="button" type="submit" value="Отмена" name="cancel">
        <input class="button" type="submit" value="Добвить" name="add">
    </form>
</div>
