<x-layout >
<div class="flex">
  @foreach ($users as $user)
 

        <div class="p-2 m-4 w-[300px] bg-blue-600 hover:bg-red-400 rounded">
          <h2><strong>Name: </strong>{{ $user["name"] }}</h2>
          <p>
            <strong>Username: </strong>{{ $user["username"] }}
          </p>
          <p>
            <strong>Role: </strong>{{ $user["role"] }}
          </p>
          <a class="text-white hover:text-red-600 hover:underline" href="/users/{{ $user['id'] }}">View</a>
        </div>
    
  @endforeach
</div>
</x-layout>