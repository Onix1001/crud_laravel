<x-app-layout>
    <div class="flex flex-col px-52">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <a href="{{ url('/create') }}" class="button button-blue">Tambah</a>
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Nama
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Email
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Option
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm w-1/4 font-medium text-gray-900">
                                        {{ $user->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light w-1/4 px-6 py-4 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td
                                        class="text-sm text-gray-900 font-light space-x-1 px-6 py-4 whitespace-nowrap flex justify-center">
                                        <a href="{{ url('/detail', $user->id) }}" class="button button-green">Detail</a>
                                        <a href="{{ url('/edit', $user->id) }}" class="button button-blue-gray">Edit</a>
                                        <form action="{{ url('/', $user->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="button button-red">Hapus</button>
                                        </form>
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
