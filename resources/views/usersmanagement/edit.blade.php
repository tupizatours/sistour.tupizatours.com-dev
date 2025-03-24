<div class="modal fade" id="ModalEdit{{ $user->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary pt-3 py-4 pb-3">
                <h6 class="modal-title text-white">Editar usuario</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body bg-white p-4">
                <div class="row g-3 pt-3 pb-2 col-md-12">
                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">Nombres:</label>
                        <input class="form-control form-control-solid" id="first_name" name="first_name" type="text" required value="{{ $user->first_name }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">Apellidos:</label>
                        <input class="form-control form-control-solid" id="last_name" name="last_name" type="text" required value="{{ $user->last_name }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">Correo electrónico:</label>
                        <input class="form-control form-control-solid" id="email" name="email" type="email" required value="{{ $user->email }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">DNI/Pasaporte:</label>
                        <input class="form-control form-control-solid" id="documento" name="documento" type="number" required value="{{ $user->documento }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">Celular:</label>
                        <input class="form-control form-control-solid" id="celular" name="celular" type="number" required value="{{ $user->celular }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-4">
                        <label class="mb-2">Dirección:</label>
                        <input class="form-control form-control-solid" id="direccion" name="direccion" type="text" required value="{{ $user->direccion }}" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-6">
                        <label class="mb-2">Contraseña:</label>
                        <input class="form-control form-control-solid" id="password" name="password" type="password" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-6">
                        <label class="mb-2">Confirmar contraseña:</label>
                        <input class="form-control form-control-solid" id="password_confirmation" name="password_confirmation" type="password" />
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-6">
                        <label class="mb-2">Estado:</label>
                        <select class="form-control form-control-solid" id="estatus" name="estatus" type="select" required>
                            @if($user->estatus == 1)
                                <option value="1">Activo</option>
                            @lese
                                <option value="2">Inactivo</option>
                            @endif
                            <option value="">Seleccionar</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-6">
                        <label class="mb-2">Rol de usuario:</label>
                        <select class="form-control form-control-solid" id="role" name="role" type="select" required>
                            @php
                                foreach ($user->roles as $userRole) {
                                    $currentRole = $userRole;
                                }
                            @endphp
                            
                            @if ($roles)
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $currentRole->id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer bg-light">
                <div class="row g-3 pt-3 pb-2 col-md-12">
                    <div class="form-group mb-2 mt-2 col-md-6">
                        <button type="button" class="btn btn-dark col-md-12 font-14" data-bs-dismiss="modal">CANCELAR</button>
                    </div>

                    <div class="form-group mb-2 mt-2 col-md-6">
                        <button type="submit" class="btn btn-success col-md-12 font-14">ACTUALIZAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>