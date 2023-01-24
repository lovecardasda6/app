<div>


    <nav class="px-2 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                           class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
                           aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            Human Resource
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                             class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/company"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Company</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Department</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Position</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Employee</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="optionDropDownLink" data-dropdown-toggle="optionNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            Options
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="optionNavbar"
                             class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="p-4 bg-gray-200">

        <div class="mb-3">

            @if(session()->has("success"))
                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                     role="alert">
                    {!! session()->get('success') !!}
                </div>
            @endif

            @if(session()->has("error"))
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {!! session()->get('error') !!}
                </div>
            @endif

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <ul class="flex justify-between text-sm font-medium text-center text-gray-700 border-b border-gray-200 rounded-t-lg bg-gray-50"
                    id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                    <li class="mr-2">
                        @if($isAdd)
                            <label class="inline-block p-4 ">Add Company</label>
                        @else
                            <label class="inline-block p-4 ">Edit Company</label>
                        @endif
                    </li>
                </ul>
                <div id="defaultTabContent">
                    <div class="p-5">

                        @if($isAdd)
                            <form wire:submit.prevent="addCompany" id="formControl">
                                @else
                                    <form wire:submit.prevent="updateCompany" id="formControl">
                                        <input wire:model.lazy="companyId" type="hidden" name="companyId"
                                               id="companyId"
                                               value="{{$companyId}}">
                                        @endif


                                        <div class="mb-6">
                                            <label for="companyName"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                                name</label>
                                            <input wire:model.lazy="companyName" type="text" id="companyName"
                                                   value="{{$companyName}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>


                                        <div class="mb-6">
                                            <label for="address"
                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                            <input wire:model.lazy="address" type="text" id="address"
                                                   value="{{$address}}"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                                            <div class="mb-6">
                                                <label for="contact1"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                                    Info</label>
                                                <input wire:model.lazy="contact1" type="text" id="contact1"
                                                       value="{{$contact1}}"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                            <div class="mb-6">
                                                <label for="contact2"
                                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact
                                                    Info</label>
                                                <input wire:model.lazy="contact2" type="text" id="contact2"
                                                       value="{{$contact2}}"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                        </div>

                                        <div class="flex justify-between">
                                            @if($isAdd)
                                                <button type="submit"
                                                        class="text-white bg-blue-700  focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                                    Save
                                                </button>
                                            @else
                                                <button type="submit"
                                                        class="text-white bg-blue-700  focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                                    Update
                                                </button>
                                            @endif
                                            <button type="button" wire:click="resetInput"
                                                    class="text-white bg-red-700  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Company
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact Info
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($companies as $company)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$company->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$company->address}}
                        </td>
                        <td class="px-6 py-4">
                            {{$company->contact1}},
                            {{$company->contact2}}
                        </td>
                        <td class="px-6 py-4">
                            <button class="font-medium text-green-600 dark:text-blue-500 hover:underline"
                                    wire:click="editCompany({{$company->id}})"
                            />
                            View
                            </button>
                            &nbsp;
                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    wire:click="editCompany({{$company->id}})"
                            />
                            Edit
                            </button>
                            &nbsp;
                            <button class="font-medium text-red-600 dark:text-blue-500 hover:underline"
                                    wire:click="removeCompany({{$company->id}})"
                            />
                            Remove
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

