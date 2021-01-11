<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="flex justify-between">
                        <div class="mb-8">
                            <a href="/city/create" class="px-4 py-2 bg-blue-600 text-white rounded-sm hover:bg-blue-700">Add new city</a>
                        </div>

                        <div>
                            <input type="text" id="city_filter_input"  placeholder="search" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <table class="table-auto w-full border border-gray-200 border-collapse">
                        <thead class="border-b border-gray-200 bg-gray-200 text-gray-900 text-sm">
                            <tr class="text-left">
                                <th class="py-2 px-4">Name</th>
                                <th class="py-2 px-4">Country</th>
                                <th class="py-2 px-4">Description</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody x-ref="tbody">
                            @foreach ($cities as $city)
                                <tr class="border-b border-gray-100 hover:bg-gray-100 city--tr" data-city="{{ Str::lower($city->name) }}">
                                        <td class="p-4">{{ $city->name }}</td>
                                        <td class="p-4">{{ $city->country->name }}</td>
                                        <td class="p-4">{!! Str::limit($city->description, 50) !!}</td>
                                        <td class="p-4">
                                            <a href="/city/{{ $city->id }}" class="cursor-pointer text-blue-600 hover:text-blue-700">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="p-4">                      
                                            <form action="/city/{{ $city->id }}" method="POST">
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
