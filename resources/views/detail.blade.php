<x-app-layout>
    <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-white">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Nama
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Email
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Telepon
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Alamat
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Jenis Kelamin
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Tempat Lahir
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-2">
                Tanggal Lahir
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->nama }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->email }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->telepon }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->alamat }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->jenis_kelamin }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->tempat_lahir }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                {{ $user->tanggal_lahir }}
              </td>
            </tr class="bg-white border-b">
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</x-app-layout>