<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="mb-8">
                        <a href="/customer/create" class="px-4 py-2 bg-blue-600 text-white rounded-sm hover:bg-blue-700">New customer</a>
                    </div>

                    <table class="table-auto w-full border border-gray-200 border-collapse">
                        <thead class="border-b border-gray-200 bg-gray-200 text-gray-900 text-sm">
                            <tr class="text-left">
                                <th class="py-2 px-4">Name</th>
                                <th class="py-2 px-4">Email</th>
                                <th class="py-2 px-4">Phone</th>
                                <th class="py-2 px-4">Selected country</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody x-ref="tbody">
                            @foreach ($customers as $c)
                                <tr class="border-b border-gray-100 hover:bg-gray-100">
                                    <td class="p-4">{{ $c->firstname }} {{ $c->lastname }}</td>
                                    <td class="p-4">{{ $c->email }}</td>
                                    <td class="p-4">{{ $c->telephone }}</td>
                                    <td class="p-4">{{ $c->country->name }}</td>
                                    <td class="p-4">
                                        <a href="/customer/{{ $c->id }}" class="cursor-pointer text-blue-600 hover:text-blue-700">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="p-4">                      
                                        <form action="/customer/{{ $c->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete" class="cursor-pointer text-red-600 hover:text-red-700 bg-white">
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
</x-app-layout>
