<h1>Dolgozók</h1>

@forelse($employees as $employee)
    <ul>
        <li>
           <p>{{ $employee->name }}</p>
           <p>{{ $employee->city }}</p>
           <p>{{ $employee->birth }}</p>
           <p>{{ $employee->salary }}</p>
        </li>
    </ul>
@empty
    <h4>Nincs dolgozó</h4>
@endforelse