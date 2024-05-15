<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Botón para agregar usuario -->
                    <div class="mb-4">
                        <a href="#" onclick="toggleModal(true)" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Agregar Usuario</a>
                    </div>

                    <!-- Tabla de Usuarios -->
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Apellido
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Correo electrónico
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Número de teléfono
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Acciones
                                </th>
                                <!-- <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Contraseña
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $user->lastName }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $user->phoneNumber }}
                                    </td>
                                    <!-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $user->password }}
                                    </td> -->
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="#" onclick='openEditModal(@json($user))' class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modificar</a>
                                        <form action="{{ route('adminPanelDestroy', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" onclick="confirmDelete(this)" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Creación de Usuario -->
    <div id="userModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold">Agregar Usuario</h2>
            <form id="userForm" action="{{ route('adminPanelSave') }}" method="POST">
                @csrf
                <div>
                    <label>Nombre:</label>
                    <input autocomplete="off" type="text" name="name" required class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Apellido:</label>
                    <input autocomplete="off" type="text" name="lastName" required class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required class="border-gray-300 rounded" autocomplete="off">
                </div>
                <div>
                    <label>Número de Teléfono:</label>
                    <input autocomplete="off" type="text" name="phoneNumber" class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Contraseña:</label>
                    <input autocomplete="off" type="password" name="password" required class="border-gray-300 rounded">
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Guardar</button>
                    <button type="button" onclick="toggleModal(false)" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal para Editar Usuario -->
    <div id="editUserModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold" id="editModalTitle">Editar Usuario</h2>
            <form action="" method="POST" id="editUserForm">
                @csrf
                @method('PUT')  <!-- Asegúrate de utilizar el método PUT para actualizaciones -->
                <input type="hidden" name="user_id" id="edit_user_id">
                <div>
                    <label>Nombre:</label>
                    <input type="text" name="name" id="edit_name" required class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Apellido:</label>
                    <input type="text" name="lastName" id="edit_lastName" required class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" id="edit_email" required class="border-gray-300 rounded">
                </div>
                <div>
                    <label>Número de Teléfono:</label>
                    <input type="text" name="phoneNumber" id="edit_phoneNumber" class="border-gray-300 rounded">
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Actualizar</button>
                    <button type="button" onclick="toggleEditModal(false)" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function toggleModal(show) {
        const modal = document.getElementById('userModal');
        const form = document.getElementById('userForm');
        if (show) {
            modal.style.display = 'flex';
            document.getElementById('userModal').reset();
            form.elements['name'].value = '';
            form.elements['lastName'].value = '';
            form.elements['email'].value = '';
            form.elements['phoneNumber'].value = '';
            form.elements['password'].value = '';
        } else {
            modal.style.display = 'none';
        }
    }

    function openEditModal(user) {
        const modal = document.getElementById('editUserModal');
        modal.style.display = 'flex';
        
        document.getElementById('editModalTitle').textContent = 'Editar Usuario';
        document.getElementById('editUserForm').action = `/actualizar-usuario/${user.id}`;
        document.getElementById('edit_user_id').value = user.id;
        document.getElementById('edit_name').value = user.name;
        document.getElementById('edit_lastName').value = user.lastName;
        document.getElementById('edit_email').value = user.email;
        document.getElementById('edit_phoneNumber').value = user.phoneNumber || '';
    }

    function toggleEditModal(show) {
        const modal = document.getElementById('editUserModal');
        modal.style.display = show ? 'flex' : 'none';
    }

    function confirmDelete(el) {
        if (confirm('¿Estás seguro de querer eliminar este usuario?')) {
            el.parentNode.submit();
        }
    }
    </script>
</x-app-layout>