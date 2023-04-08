<form action="{{ route('users.assignRole', [$user->id, $role->id]) }}" method="POST">
    @csrf
    <button type="submit">Asignar Rol</button>
</form>