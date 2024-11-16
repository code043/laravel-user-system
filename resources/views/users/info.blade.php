<x-layout>

  <div class="p-2 m-4 bg-blue-600 rounded">
    <h2><strong>Name: </strong>{{ $user["name"] }}</h2>
    <p>
      <strong>Username: </strong>{{ $user["username"] }}
    </p>
    <p>
      <strong>Role: </strong>{{ $user["role"] }}
    </p>
    <p>
      <strong>Email: </strong>{{ $user["email"] }}
    </p>
    <p>
      <strong>Phone: </strong>{{ $user["phone"] }}
    </p>
    <p>
      <strong>Birthday: </strong>{{ $user["birth_date"] }}
    </p>
    <a class="text-white" href="/users/">Back</a>
  </div>
  
  
</x-layout>