<form method="POST" action="{{ route('roles.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre del rol</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>