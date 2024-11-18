<x-layout>
  <div>
    <h1>Create User</h1>
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input name="name" value="{{ old('name') }}" placeholder="Your name" type="text">
    <input name="username" placeholder="Your username" type="text">
    <input name="role" placeholder="Your role" type="text">
    <input name="email" placeholder="Your email" type="email">
    <input name="phone" placeholder="Your phone" type="text">
    <input name="birth_date" placeholder="Your birthdate" type="text">
    <select name="groups_id">
      <option value="">
          Select a Group
      </option>
      @foreach ($groups as $group)
        <option value="{{ $group->id }}">
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
</x-layout>