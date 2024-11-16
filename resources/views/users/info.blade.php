<x-layout>

  <div class="flex  flex-col gap-3 w-[300px] h-[300px] p-8 m-4 bg-blue-600 rounded">
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
    
  </div>
  
  
</x-layout>