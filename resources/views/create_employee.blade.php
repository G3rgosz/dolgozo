
<h2>Új dolgozó</h2>

<form action="create" method="POST">
    @csrf
    <label for="name"> Név: </label>
    <input type="text" name="name"><br>

    <label for="city"> Város: </label>
    <input type="text" name="city"><br>

    <label for="birth"> Születés: </label>
    <input type="text" name="birth"><br>

    <label for="salary"> Fizetés: </label>
    <input type="text" name="salary"><br>

    <button type="submit">Küldés</button>

</form>