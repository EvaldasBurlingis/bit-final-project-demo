<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Customer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                              <h3 class="text-lg font-medium leading-6 text-gray-900">Personal information</h3>
                              <p class="mt-1 text-sm text-gray-600">
                                Use a permanent address where you can receive mail.
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/customer/create" method="POST">
                                @csrf
                              <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                  <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                      <input type="text" name="firstname" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                      
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                      <input type="text" name="lastname" id="last_name"  autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                      
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                      <input type="text" name="email" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                                        <input type="text" name="telephone" id="telephone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                      </div>
                      
                                    <div class="col-span-6 sm:col-span-3">
                                      <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                      <select id="country" name="country_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                
                                  </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
