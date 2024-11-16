<x-layout>
  <h1 class="text-center">User Page</h1>
  
  @foreach ($users as $user)
 

        <div class="p-2 m-4 bg-blue-600 rounded">
          <h2><strong>Name: </strong>{{ $user["name"] }}</h2>
          <p>
            <strong>Username: </strong>{{ $user["username"] }}
          </p>
          <p>
            <strong>Role: </strong>{{ $user["role"] }}
          </p>
          <a class="text-white" href="/users/{{ $user['id'] }}">View</a>
        </div>
    
  @endforeach
</x-layout>