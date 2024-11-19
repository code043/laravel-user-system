<x-layout>
  <div>
    <h1>Create User</h1>
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>

    <input name="name" value="{{ old('name') }}" placeholder="Your name" type="text">
    <label for="username">Username:</label>

    <input name="username"  value="{{ old('username') }}" placeholder="Your username" type="text">
    <label for="name">Role:</label>

    <input name="role"  value="{{ old('role') }}" placeholder="Your role" type="text">
    <label for="email">Email:</label>

    <input name="email"  value="{{ old('email') }}" placeholder="Your email" type="email">
    <label for="phone">Phone:</label>

    <input name="phone"  value="{{ old('phone') }}" placeholder="Your phone" type="text">
    <label for="birth_date">Birth Date:</label>

    <input name="birth_date"  value="{{ old('birth_date') }}" placeholder="Your birthdate" type="text">
    <select name="groups_id"  required>
      <option value="" disabled selected>
          Select a Group
      </option>
      @foreach ($groups as $group)
        <option value="{{ $group->id }}"  {{ $group->id == old('group_id') ?'selected' : '' }}>
          {{ $group->name }}
        </option>
      @endforeach
    </select>
    <button type="submit">
      Send
    </button>
    @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">
      @foreach ($erros as $error )
        <li class="my-2 text-red-500">
          {{ $error }}
        </li>
      @endforeach
    </ul>
    @endif
  </form>
  </div>  
  <form action="{{ route('users.destroy', $user->id) }}"
    method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="my-4">Delete User</button>
  </form>
</x-layout>