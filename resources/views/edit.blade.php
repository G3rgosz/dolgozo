<h2>Dolgozó adatainak módosítása</h2>

<form action="" method="POST">
    @csrf
    @method('PUT')
    <label for="name"> Név: </label>
    <input type="text" placeholder="{{ $employee->name }}" value="{{ $employee->name }}" required name="name"><br>

    <label for="city"> Város: </label>
    <input type="text" placeholder="{{ $employee->city }}" value="{{ $employee->city }}" required name="city"><br>

    <label for="birth"> Születés: </label>
    <input type="text" placeholder="{{ $employee->birth }}" value="{{ $employee->birth }}" required name="birth"><br>

    <label for="salary"> Fizetés: </label>
    <input type="text" placeholder="{{ $employee->salary }}" value="{{ $employee->salary }}" required name="salary"><br>

    <button type="submit">Módosít</button>

</form>